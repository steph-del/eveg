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

	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore",
	* 	options= { "repository_method" = "findByIdWithAllEntities" })
	* 
	*/
	public function showOneAction(SyntaxonCore $syntaxon, $id)
	{
		
		$em = $this->getDoctrine()->getManager();

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

			return $this->render('evegAppBundle:Default:showOne.html.twig', array(
			'syntaxon' => $syntaxon,
			'synonyms' => $synonyms,
			'allParents' => $allParents,
			'repDepFrJson' => $repDepFrJson
		));
		}

		
	}

	public function setLanguageAction(Request $request, $lang) {

		// Get the previous route name
		//$request = $this->container->get('request');
		//$routeName = $request->get('_route');

		//$routeName = $request->headers->get('referer');

		$routeName = 'eveg_app_homepage';

		return $this->redirect($this->generateUrl($routeName, array('locale' => $lang)));
		
	}

	public function depFrFilterAction(Request $request) {
		print_r($request);
	}
	
}
