<?php
// src/eveg/AppBundle/Controller/CompareController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CompareController extends Controller
{

	public function getNbItemsAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$nbItems = count($session->get('eveg_compare'));

		return new JsonResponse($nbItems);
	}

	public function getItemsAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		return new JsonResponse($session->get('eveg_compare'));
	}

	public function addItemAction($id, $value)
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$compareArray = $session->get('eveg_compare');

		$nbItems = count($compareArray);

		if($nbItems >= 2) {
			return new JsonResponse("Error, you already have ".$nbItems." items for comparison, that is enough !");
		} else {
			$compareArray[$id] = $value;

			$session->set('eveg_compare', $compareArray);

			return new JsonResponse($session->get('eveg_compare'));
		}
	}

	public function removeItemAction($id)
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$compareArray = $session->get('eveg_compare');

		$nbItems = count($compareArray);

		if($nbItems > 0 and $nbItems <= 2) {
			unset($compareArray[$id]);

			$session->set('eveg_compare', $compareArray);

			return new JsonResponse($session->get('eveg_compare'));
		} else {

			return new JsonResponse("Error, you have ".$nbItems." items for comparison, can't remove one !");
		}
	}

	public function emptyAction()
	{
		// Session already started ?
		if(!$this->container->get('session')->isStarted()) {
			$session = new Session();
			$session->start();
		} else {
			$session = $this->container->get('session');
		}

		$session->set('eveg_compare', '');

		return new JsonResponse($session->get('eveg_compare'));
	}
}
