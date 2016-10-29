<?php

namespace eveg\UserRepartitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use eveg\AppBundle\Entity\SyntaxonCore;
use eveg\UserRepartitionBundle\Form\Type\RepartitionType;

class DefaultController extends Controller
{
	/**
	* @ParamConverter("syntaxon_id", class="evegAppBundle:syntaxonCore")
	* @Security("has_role('ROLE_USER')") 
	*/
    public function addRepartitionAction(SyntaxonCore $syntaxon, $id, Request $request)
    {

    	$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new RepartitionType());
        // ... and then hydrates it
        $form->handleRequest($request);

        if($form->isValid())
        {
            $repartition = $form->getData();
            $currentUser = $this->getUser();

            $repartition->setSyntaxonCited($syntaxon->getSyntaxon());
            $repartition->setSyntaxonCore($syntaxon);
            $repartition->setMap('depFr');
            $repartition->setSubmitedBy($currentUser);
            $repartition->setSubmitedAt(new \DateTime('now'));
            $repartition->setValidate(false);
            

            $em = $this->getDoctrine()->getManager();
            $em->persist($repartition);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Une nouvelle données enregistrée.');

            return $this->redirect($this->generateUrl('eveg_show_one', 
                    array('id' => $syntaxon->getId())
                ));
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
