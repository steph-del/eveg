<?php
// src/eveg/AppBundle/CatCode/evegCatCode.php

namespace eveg\AppBundle\Utils\CatCode;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException;
use eveg\AppBundle\Entity\SyntaxonCore;

class evegCatCodeRepo
{

	private $scRepo;

	public function __construct($SyntaxonCoreRepository)
	{
		$this->scRepo = $SyntaxonCoreRepository;
	}


	public function getDirectChild($catminatCode, $returnArray = false, $ueFilter = null, $depFrFilter = null)
	{

		$child = $scRepo->getDirectChild($catminatCode, $returnArray, $ueFilter, $depFrFilter);

		return $child[0];

	}

	public function getChildren($catminatCode, $returnArray = false, $ueFilter = null, $depFrFilter = null)
	{

		$children = $scRepo->getChildren($catminatCode, $returnArray, $ueFilter, $depFrFilter);

		return $children;
		
	}

	public function catminatCodeToObject($catminatCode)
	{
		/*
		*
		* Converts one or more catminatCode(s) to objects
		* Allows $catminatCode to be an array (multiple codes) or a string (single code)
		*
		*/

		if(is_string($catminatCode)){

			$uniqueObject = $scRepo->findValidOneByCatminatCode($catminatCode);

			return $uniqueObject;

		} elseif(is_array($catminatCode)) {

			$multipleObjects = $scRepo->findValidSyntaxonByCatminatCode($catminatCode);

			return $multipleObjects;

		}


	}

}