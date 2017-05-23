<?php
// src/eveg/PsiBundle/Controller/PsiRestController.php

namespace eveg\PsiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use eveg\PsiBundle\Entity\Node;

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

		$nodes    = $nodeRepo->findAll();

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
}