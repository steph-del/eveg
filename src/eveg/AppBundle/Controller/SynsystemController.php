<?php
// src/eveg/AppBundle/Controller/DefaultController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SynsystemController extends Controller
{
	public function showAction()
	{
		// Get Entity manager
		$em = $this->getDoctrine()->getManager();

		// Get repartition filters
		$repFilters = $this->get('eveg_app.repFilters');
    	$depFrFilter = $repFilters->getDepFrFilterSession($json = false);
    	$ueFilter = $repFilters->getUeFilterSession($json = false);

    	// SC repo
    	$scRepo = $em->getRepository('evegAppBundle:SyntaxonCore');

    	$synsystem = $scRepo->getSynsystem($depFrFilter, $ueFilter);

    	return $this->render('evegAppBundle:Default:synsystem.html.twig', array(
			'synsystem' => $synsystem
		));

	}
}