<?php
// src/eveg/AppBundle/Utils/Repository/possibleDiagnosis.php

namespace eveg\AppBundle\Utils\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Get the possible diagnosis (used in file and image upload)
 *
 */
class possibleDiagnosis
{
	private $scRepository;

	public function __construct(EntityRepository $scRepository)
	{
		$this->scRepository = $scRepository;
	}

	public function getPossibleDiagnosis($id)
	{
		$possibleDiagnosis = array();
		$syntaxon = $this->scRepository->findById($id);
		$synonyms = $this->scRepository->findSynonymsByCatminatCode($syntaxon->getCatminatCode());

		if($syntaxon) {
			array_push($possibleDiagnosis, null);
			array_push($possibleDiagnosis, $syntaxon);

			if($synonyms) {
				for ($i = 0; $i < count($synonyms); $i++) { 
					array_push($possibleDiagnosis, $synonyms[$i]);
				}
			}
		}

		return $possibleDiagnosis;

	}
}