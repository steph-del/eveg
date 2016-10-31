<?php

namespace eveg\UserRepartitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use eveg\AppBundle\Entity\SyntaxonCore;
use eveg\UserRepartitionBundle\Form\Type\RepartitionType;
use eveg\BiblioBundle\Entity\BaseBiblio;

class DefaultController extends Controller
{
	/**
    * @ParamConverter("syntaxon_id", class="evegAppBundle:syntaxonCore")
	* @Security("has_role('ROLE_USER')") 
	*/
    public function addRepartitionAction(SyntaxonCore $syntaxon, $id, Request $request)
    {

        // Get request and entity manager
    	$request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

		// Creates the form...
    	$form = $this->createForm(new RepartitionType($this->get('user_repartition.tables_helper')));
        // ... and then hydrates it
        $form->handleRequest($request);

        // Form traitment
        if($form->isValid())
        {
            // Get form data
            $repartition    = $form->getData();
            $currentUser    = $this->getUser();
            $biblioToAdd    = $form->get('biblioToAdd')->getData();  // not maped
            $submitedBiblio = $form->get('biblio')->getData();

            // Check if reference to ass isn't already in the db
            $dbReference    = $em->getRepository('evegBiblioBundle:BaseBiblio')->findByReference($biblioToAdd);

            // Bind Repartition
            $repartition->setSyntaxonCited($syntaxon->getSyntaxon());
            $repartition->setSyntaxonCore($syntaxon);
            $repartition->setMap('depFr');
            $repartition->setSubmitedBy($currentUser);
            $repartition->setSubmitedAt(new \DateTime('now'));
            $repartition->setValidated(false);
            $repartition->setEnabled(true);

            // If a Biblio object is submited
            if(!empty($submitedBiblio)) {
                $repartition->setBiblio($submitedBiblio);
            }
            // Else, create a new one
            if(empty($dbReference) && (!empty($biblioToAdd))) {
                $bib = new BaseBiblio();
                $bib->setReference($biblioToAdd)
                    ->setUpdatedBy($currentUser)
                    ->setUpdatedAt(new \DateTime('now'));

                $repartition->setBiblio($bib);
                $em->persist($bib);
            }

            // Persist and flush
            $em->persist($repartition);
            $em->flush();

            // Check conflicts
            $conflictsHelper = $this->get('user_repartition.conflicts');
            if($conflictsHelper->checkBasevegRepartition($syntaxon, $repartition)) {
                $request->getSession()->getFlashBag()->add('warning', 'Il y a un conflit chorologique avec baseveg.');
            }
            if($conflictsHelper->checkUsersRepartition($syntaxon, $repartition)) {
                $request->getSession()->getFlashBag()->add('warning', 'Il y a un conflit chorologique avec une autre donnée.');
            }

            // FlashBag message
            $request->getSession()->getFlashBag()->add('success', 'Une nouvelle données enregistrée.');

            // Redirect
            if ($form->get('saveAndAdd')->isClicked()) {
                return $this->redirect($this->generateUrl('eveg_user_repartition_add', 
                    array('id' => $id)
                ));
            } else {
                return $this->redirect($this->generateUrl('eveg_show_one', 
                    array('id' => $id)
                ));
            }
        }
    	
        // baseveg repartition maps to Json
		$serializer = $this->container->get('jms_serializer');
		$repDepFrJson = $serializer->serialize($syntaxon->getRepartitionDepFr(), 'json');
		$repUeJson = $serializer->serialize($syntaxon->getRepartitionEurope(), 'json');

        return $this->render('evegUserRepartitionBundle:Default:addRepartition.html.twig',
        	array('syntaxon'     => $syntaxon,
        		  'form'         =>$form->createView(),
        		  'repDepFrJson' => $repDepFrJson,
        		  'repUeJson'    => $repUeJson,
        	));
    }
}
