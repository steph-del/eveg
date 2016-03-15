<?php
// src/eveg/AppBundle/Utils/Repository/getSyntaxonAccordingUserRights.php

namespace eveg\AppBundle\Utils\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Get the good repository according to user's rights (images, files and httpLinks)
 *
 */
class getSyntaxonAccordingUserRights
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
	 * @param integer $id SyntaxonCore id
 	 * @return RepositoryMethod
 	 */
	public function getSyntaxon($id, $depFrFilter, $ueFilter)
	{
		// Retrieve syntaxon according to user's rights
		// 		User is authenticated anonymously (= not logged in)
		// 		only retrieves the syntaxon with public data

		$currentUser = $this->securityToken->getToken()->getUser();
		$repo = $this->scRepository;

		// User is logged in
		if($this->securityAuthorisation->isGranted('IS_AUTHENTICATED_REMEMBERED'))
		{
			// User belongs to circle group
			if($this->securityAuthorisation->isGranted('ROLE_CIRCLE'))
			{
				$syntaxon = $repo->findByIdPublicPrivateCircleData($id, $currentUser, $depFrFilter, $ueFilter);
			// User do not belongs to circle group but it can own private data
			} else {
				$syntaxon = $repo->findByIdPublicPrivateData($id, $currentUser, $depFrFilter, $ueFilter);
			}
		// User is not logged in
		} else {
			$syntaxon = $repo->findByIdPublicData($id, $depFrFilter, $ueFilter);
		}

		return $syntaxon;
	}
}