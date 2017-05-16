<?php
// src/eveg/PsiBundle/Controller/PsiRestController.php

namespace eveg\PsiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
//use JMS\Serializer\SerializationContext;

class PsiRestController extends FOSRestController
{
	/**
	 * GET Route annotation.
	 * @Get("/node/{id}")
	 */
	public function getNodeIdAction($id)
	{
		// New view
		$view = $this->view();
		//$view->setSerializationContext(SerializationContext::create()->setGroups(array('API')));
		
		$serializer = $this->container->get('jms_serializer');

		// Grabbing Entity manager & repository
		$em		  = $this->getDoctrine()->getManager('psi_db');
		$nodeRepo = $em->getRepository('evegPsiBundle:Node');

		// Find node by id
		$node 	  = $nodeRepo->findById($id);
		//$output = $serializer->serialize($node, 'json');
//dump($node);
		//return new JsonResponse($output);
		// Return
		$view->setData($node);
		return $view;

	}
}