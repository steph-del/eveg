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
	public function getDepFrFilterSession($json = false)
	{
		$session = new Session();
	    $depFrFilter = $session->get('depFrFilterArray');
	    $depFrFilterJson = $session->get('depFrFilter');
	    $activeDepFrFilter = false;
	    if(!empty($depFrFilter)) 
	    {
	    	foreach ($depFrFilter as $key => $value) {
	        	if($value != null) $activeDepFrFilter = true;
	    	}
	    	if($activeDepFrFilter == false) $depFrFilter = null;
	    } else {
	    	$depFrFilter = null;
	    }	

	    if($json === true) {
	    	return $depFrFilterJson;
	    } else {
	    	return $depFrFilter;
	    }
	}

	/**
	 *
	 * Returns the $ueFilter, used in different repository (tree and search)
	 * @return array
	 */
	public function getUeFilterSession($json = false)
	{
		$session = new Session();
	    $ueFilter = $session->get('ueFilterArray');
	    $ueFilterJson = $session->get('ueFilterArray');
	    $activeUeFilter = false;
	    if(!empty($ueFilter)) 
	    {
	    	foreach ($ueFilter as $key => $value) {
	        	if($value != null) $activeUeFilter = true;
	    	}
	    	if($activeUeFilter == false) $ueFilter = null;
	    } else {
	    	$ueFilter = null;
	    }	

	    if($json === true) {
	    	return $ueFilterJson;
	    } else {
	    	return $ueFilter;
	    }
	}
}