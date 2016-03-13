<?php
// src/eveg/AppBundle/Controller/DefaultController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use eveg\AppBundle\Entity\SyntaxonCore;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('evegAppBundle:Default:homepage.html.twig');
	}

	public function howtoAction()
	{
		return $this->render('evegAppBundle:Default:howto.html.twig');
	}

	public function contactAction()
	{
		
		return $this->render('evegAppBundle:Default:contact.html.twig');
	}


	public function showOneAction($id)
	{
		
		$securityContext = $this->container->get('security.authorization_checker');
		$currentUser = $this->get('security.context')->getToken()->getUser();
		$em = $this->getDoctrine()->getManager();
		$repo = $this->getDoctrine()->getManager()->getRepository('evegAppBundle:SyntaxonCore');
		
		// Retrieve syntaxon according to user's rights
		// 		User is authenticated anonymously (= not logged in)
		// 		only retrieves the syntaxon with public data

		// User is logged in
		if($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED'))
		{
			// User belongs to circle group
			if($securityContext->isGranted('ROLE_CIRCLE'))
			{
				$syntaxon = $repo->findByIdPublicPrivateCircleData($id, $currentUser);
			// User do not belongs to circle group but it can own private data
			} else {
				$syntaxon = $repo->findByIdPublicPrivateData($id, $currentUser);
			}
		// User is not logged in
		} else {
			$syntaxon = $repo->findByIdPublicData($id);
		}

		// is a valid syntaxon ?
		if(ereg("syn", $syntaxon->getLevel())) {
			// Checks pro parte syntaxon
        	$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findBySyntaxon($syntaxon->getSyntaxonName(), $syntaxon->getSyntaxonAuthor());

        	// is a pro parte syntaxon ?
        	//print_r($syntaxon->getSyntaxon().'<br />');
        	//print_r(count($entities).'<br />');
        	//print_r($entities);
        	if(count($entities) > 1) {
        		print('syn >1');
        		$catCodes = array();
        		foreach ($entities as $key => $entity) {
        			array_push($catCodes, $entity->getCatminatCode());
        		}
        		$multipleSyntaxon = $em->getRepository('evegAppBundle:SyntaxonCore')->findValidSyntaxonByCatminatCode($catCodes);
        		return $this->render('evegAppBundle:Default:showOne.html.twig', array(
					'multipleSyntaxon' => $multipleSyntaxon,
					'redirectionMultipleSyntaxon' => $syntaxon
				));
        	} else {
        		// REDIRECTION
        		$successfullSyntaxon = $em->getRepository('evegAppBundle:SyntaxonCore')->findValidSyntaxonByCatminatCode($entities[0]->getCatminatCode());
        		// flashbag
        		$this->get('session')->getFlashBag()->add(
		            'info',
		            'Vous avez été redirigé vers le syntaxon retenu pour votre recherche concernant "'.$syntaxon->getSyntaxon().'"'
		        );

        		return $this->redirect($this->generateUrl('eveg_show_one', 
        			array(
        				'id' => $successfullSyntaxon[0]->getId()
        				)
        		));
        		

        		/*$redirectionSyntaxon = $entities[0];
        		return $this->render('evegAppBundle:Default:showOne.html.twig', array(
					'syntaxon' => $successfullSyntaxon[0],
					'redirectionSyntaxon' => $redirectionSyntaxon
				));*/
        	}

		} else {

			// Getting catCode service
			$catCode = $this->get('eveg_app.catCode');

			$allParents = $catCode->getAllParents($syntaxon->getCatminatCode());

			$synonyms = $em->getRepository('evegAppBundle:SyntaxonCore')->getSynonyms($syntaxon->getCatminatCode());

			// repartitionDepFr to Json
			$serializer = $this->container->get('jms_serializer');
			$repDepFrJson = $serializer->serialize($syntaxon->getRepartitionDepFr(), 'json');
			$repUeJson = $serializer->serialize($syntaxon->getRepartitionEurope(), 'json');

			return $this->render('evegAppBundle:Default:showOne.html.twig', array(
			'syntaxon' => $syntaxon,
			'synonyms' => $synonyms,
			'allParents' => $allParents,
			'repDepFrJson' => $repDepFrJson,
			'repUeJson' => $repUeJson
		));
		}

		
	}

	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore",
	* 	options= { "repository_method" = "findByIdWithAllEntities" })
	* 
	*/
	public function showPhotosAction(SyntaxonCore $syntaxon, $id)
	{
		return $this->render('evegAppBundle:Default:showPhotos.html.twig', array(
			'syntaxon' => $syntaxon
		));
	}

	public function setLanguageAction(Request $request, $lang) {

		// Get the previous route name
		//$request = $this->container->get('request');
		//$routeName = $request->get('_route');

		//$routeName = $request->headers->get('referer');

		$routeName = 'eveg_app_homepage';

		return $this->redirect($this->generateUrl($routeName, array('locale' => $lang)));
		
	}

	public function panelOptionsAction($floatLeft = false, $showFilters = true, $showFeedback = true, $showCompare = false, $showPdfExport = false)
	{
		// Repartition filters
        $repFilters = $this->get('eveg_app.repFilters');
        $depFrFilterJson = $repFilters->getDepFrFilterSession($json = true);
        $ueFilterJson = $repFilters->getUeFilterSession($json = true);

        return $this->render('evegAppBundle:Default:Fragments/panelOptions.html.twig', array(
        	'floatLeft' => $floatLeft,
        	'repDepFrJson' => $depFrFilterJson,
			'repUeJson' => $ueFilterJson,
			'showFilters' => $showFilters,
			'showFeedback' => $showFeedback,
			'showCompare' => $showCompare,
			'showPdfExport' => $showPdfExport
		));

		//return $fragment;
	}
	
}
