<?php
// src/eveg/AppBundle/Utils/Repository/getSyntaxonAccordingUserRights.php

namespace eveg\AppBundle\Utils\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Get the good repository according to user's rights (images, files and httpLinks)
 *
 */
class getSynonymsAccordingUserRights
{

	private $scRepository;
	private $securityAuthorisation;
	private $securityToken;

	public function __construct(EntityRepository $scRepository, $securityAuthorisation, $securityToken)
	{
		$this->scRepository = $scRepository;
		$this->securityAuthorisation = $securityAuthorisation;
		$this->securityToken = $securityToken;
	}

	/**
	 * @param integer $catminatCode SyntaxonCore catminat code
 	 * @return RepositoryMethod
 	 */
	public function getSynonyms($catminatCode)
	{
		// Retrieve synonyms according to user's rights
		// 		if user is authenticated anonymously (= not logged in)
		// 		retrieves the synonyms and joins public data

		$currentUser = $this->securityToken->getToken()->getUser();
		$repo = $this->scRepository;

		// User is logged in
		if($this->securityAuthorisation->isGranted('IS_AUTHENTICATED_REMEMBERED'))
		{
			// User belongs to circle group
			if($this->securityAuthorisation->isGranted('ROLE_CIRCLE'))
			{
				$synonyms = $repo->findSynonymsByCatminatCodePublicPrivateCircleData($catminatCode, $currentUser);
			// User do not belongs to circle group but it can own private data
			} else {
				$synonyms = $repo->findSynonymsByCatminatCodePublicPrivateData($id, $currentUser);
			}
		// User is not logged in
		} else {
			$synonyms = $repo->findSynonymsByCatminatCodePublicData($id);
		}

		return $synonyms;
	}
}