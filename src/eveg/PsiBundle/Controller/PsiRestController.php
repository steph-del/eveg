<?php
// src/eveg/PsiBundle/Controller/PsiRestController.php

namespace eveg\PsiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use eveg\PsiBundle\Entity\Node;
use eveg\PsiBundle\Entity\Validation;

class PsiRestController extends FOSRestController
{

	/**
	 * GET Route annotation
	 * Get all nodes
	 * @Get("/nodes")
	 */
	public function getNodesAction()
	{
		// New view
		$view = $this->view();

		// Grabbing Entity manager & repository
		$em		  = $this->getDoctrine()->getManager('psi_db');
		$nodeRepo = $em->getRepository('evegPsiBundle:Node');

		$nodes    = $nodeRepo->getAllNotIdiotaxons();

		// Return
		$view->setData($nodes);
		return $view;
	}

	/**
	 * GET Route annotation.
	 * @Get("/nodes/{id}")
	 */
	public function getNodeIdAction($id)
	{
		// New view
		$view = $this->view();
		
		$serializer = $this->container->get('jms_serializer');

		// Grabbing Entity manager & repository
		$em		  = $this->getDoctrine()->getManager('psi_db');
		$nodeRepo = $em->getRepository('evegPsiBundle:Node');

		// Find node by id
		$node 	  = $nodeRepo->findById($id);

		// Return
		$view->setData($node);
		return $view;

	}

	/**
	 * PUT Route annotation.
	 * @Put("/nodes")
	 */
	public function putNodeAction(Request $request)
	{
		/*
		 * About the requested data :
		 * $request contains serialized data from front app :
		 * eg : {"frontId":1498505893522,"nodes":[{"frontId":1498505893522,"name":"lolium perenne","coef":"1"},{"frontId":1498505900103,"name":"agrostis stolonifera","coef":"1"}]}
		 * this example is a simple node (only described by its frontId) with 2 child nodes
		 * Data from the front app should always have this pattern : {rootNode,"nodes":[...]}
		 */

		$em		  = $this->getDoctrine()->getManager('psi_db');
		$nodeRepo = $em->getRepository('evegPsiBundle:Node');

		$jsonData = $request->get('name');
		$data = json_decode($request->getContent(), true);

		// Create the root node and hydrate it
		$rootNode = new Node('synusy');
		$em->persist($rootNode);
		$rootNode->setRepository('baseveg');
		$rootNode->setName('A synusy from my Angular app!');
		$rootNode->setFrontId($data['frontId']);
		$rootNode->setGeoJson($data['geoJson']);

		// Iterate through nodes ; create children nodes and hydrate them
		foreach ($data['nodes'] as $key => $node) {
			${'node'.$key} = new Node('idiotaxon');
			${'validation'.$key} = new Validation;
			
			$em->persist(${'node'.$key});
			$em->persist(${'validation'.$key});
			$rootNode->addChild(${'node'.$key});

			${'node'.$key}->setFrontId($node['frontId']);
			${'node'.$key}->setName($node['name']);
			${'node'.$key}->setCoef($node['coef']);
			${'node'.$key}->setRepository('baseflor');
			${'node'.$key}->setGeoJson($data['geoJson']);

			${'validation'.$key}->setRepository('baseflor');
			${'validation'.$key}->setRepositoryIdTaxo($node['repositoryIdTaxo']);
			${'validation'.$key}->setRepositoryIdNomen($node['repositoryIdNomen']);
			${'validation'.$key}->setInputName($node['inputName']);
			${'validation'.$key}->setValidatedName($node['validatedName']);

			${'node'.$key}->addValidation(${'validation'.$key});

			//$view = $this->view();
			//$view->setData(${'validation'.$key});

			//return $view;

		}

		// Flush & clear the EM
		$em->flush();
		$em->clear();

		// Return array (frontId) => (id)
		//$response = array();
		//$response[$rootNode->getFrontId()] = $rootNode->getId();
		//foreach ($rootNode->getChildren() as $key => $node) {
		//	$reponse[$node->getFrontId()] = $node->getId();
		//}

		// New view
		$view = $this->view();
		$view->setData($rootNode);

		return $view;
	}
}