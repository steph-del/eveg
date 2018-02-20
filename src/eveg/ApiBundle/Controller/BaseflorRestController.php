<?php
// src/eveg/ApiBundle/Controller/BaseflorRestController.php

namespace eveg\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;

class BaseflorRestController extends FOSRestController
{

	/**
	 * GET Route annotation
	 * Search a specie
	 * @Get("/baseflor/species/term/{term}")
	 */
	public function getSpeciesAction($term)
	{
		// New view
		$view = $this->view();

		// Get baseflor repository
		$bfRepo = $this->getDoctrine()->getManager()->getRepository('evegAppBundle:Baseflor');

		// Search for term
		$term = str_replace(' ', '%', $term);
		$result = $bfRepo->findSpecie($term);

		// Return
		$view->setData($result);
		return $view;
	}

	/**
	 * GET Route annotation
	 * Search a specie
	 * @Get("/baseflor/species/id/{id}")
	 */
	public function getSpeciesByIdAction($id)
	{
		// New view
		$view = $this->view();

		// Get baseflor repository
		$bfRepo = $this->getDoctrine()->getManager()->getRepository('evegAppBundle:Baseflor');

		// Search for term
		$result = $bfRepo->findById($id);

		// Return
		$view->setData($result);
		return $view;
	}

	/**
	 * GET Route annotation
	 * Search a specie
	 * @Get("/baseflor/species/taxin/{id}")
	 */
	public function getSpeciesByIdTaxinAction($id)
	{
		// New view
		$view = $this->view();

		// Get baseflor repository
		$bfRepo = $this->getDoctrine()->getManager()->getRepository('evegAppBundle:Baseflor');

		// Search for term
		$result = $bfRepo->findByIdTaxin($id);

		// Return
		$view->setData($result);
		return $view;
	}

	/**
	 * GET Route annotation
	 * Search a specie
	 * @Get("/baseflor/species/nomen/{id}")
	 */
	public function getSpeciesByIdNomenAction($id)
	{
		// New view
		$view = $this->view();

		// Get baseflor repository
		$bfRepo = $this->getDoctrine()->getManager()->getRepository('evegAppBundle:Baseflor');

		// Search for term
		$result = $bfRepo->findByIdNomen($id);

		// Return
		$view->setData($result);
		return $view;
	}

	/**
	 * GET Route annotation
	 * Search a specie
	 * @Get("/baseflor/species/nomens/{ids}")
	 */
	public function getSpeciesByIdNomensAction($ids)
	{
		// New view
		$view = $this->view();

		// Get baseflor repository
		$bfRepo = $this->getDoctrine()->getManager()->getRepository('evegAppBundle:Baseflor');

		// Search for term
		$result = $bfRepo->findByIdNomens($ids);

		// Return
		$view->setData($result);
		return $view;
	}

}
