<?php
// src/eveg/AppBundle/Utils/RepartitionFilters/evegRepFilters.php

namespace eveg\AppBundle\Utils\RepartitionFilters;

//use Symfony\Component\DependencyInjection\ContainerInterface as Container;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use eveg\AppBundle\Entity\SyntaxonCore;
//use eveg\AppBundle\Entity\SyntaxonCoreRepository;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Tools about repartition filters (french departments and UE countries)
 * 
 */
class evegRepFilters
{
	/**
	 *
	 * Returns the $depFrFilter, used in different repository (tree and search)
	 * @return array
	 */
	public function getDepFrFilterSession()
	{
		$session = new Session();
	    $depFrFilter = $session->get('depFrFilterArray');
	    $activeDepFrFilter = false;
	    foreach ($depFrFilter as $key => $value) {
	        if($value != null) $activeDepFrFilter = true;
	    }
	    if($activeDepFrFilter == false) $depFrFilter = null;

	    return $depFrFilter;
	}
}