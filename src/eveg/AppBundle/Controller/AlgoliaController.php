<?php
// src/eveg/AppBundle/Controller/AlgoliaController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
//use eveg\AppBundle\Form\Dev\CatCodeType;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\JsonResponse;
//use eveg\UserBundle\Form\Type\AdminProfileFormType;
use eveg\AppBundle\Entity\SyntaxonCore;

class AlgoliaController extends Controller
{
	/**
 	 * @Security("has_role('ROLE_SUPER_ADMIN')")
 	 */
	public function indexAdminAction(Request $request)
	{
		$em            = $this->getDoctrine()->getManager();
		$sCore         = new SyntaxonCore;
        $indexer       = $this->get('algolia.indexer');

        $eVegNbItems   = $this->get('eveg_app.nbItems');
        $nbSCoreNotSyn = $eVegNbItems->getNbCards(); 

		$helloEntity     = $indexer->discoverEntity($sCore, $em);
        $indexedSCFields = $indexer->getFieldsForAlgolia($sCore);


        $formBuilder = $this->get('form.factory')->createBuilder('form');
		$formBuilder
	      ->add('command', 'text', array('attr' => array('placeholder' => 'Entrez une commande')))
	      ->add('save',    'submit', array('label' => 'Valider'))
	    ;
	    $formReIndex = $formBuilder->getForm();
	    $formReIndex->handleRequest($request);

	    if($formReIndex->isValid()) {
			// Command
			$command = $formReIndex->getData()['command'];
			$manualIndexer = $indexer->getManualIndexer($em);

			if($command == 'test100') {
				$syntaxons = $em->getRepository('evegAppBundle:SyntaxonCore')->findAlgoliaTest(100);
				foreach ($syntaxons as $key => $syntaxon) {
					$manualIndexer->index($syntaxon);
				}
			} elseif($command == 're-index') {
				// Re-index whole collection
				$manualIndexer->reIndex('evegAppBundle:SyntaxonCore');
			} else {
				// Unknow command
			}
	    }

		return $this->render('evegAppBundle:Admin:tbAlgolia.html.twig', array(
			'indexedFields' => $indexedSCFields,
			'nbSCoreNotSyn' => $nbSCoreNotSyn,
			'formReIndex'   => $formReIndex->createView(),
		));
	}

}