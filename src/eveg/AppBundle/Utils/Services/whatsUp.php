<?php
// src/eveg/appBundle/Utils/Services/whatsUp.php

namespace eveg\AppBundle\Utils\Services;

use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Utility to say what has happened since the last user login
 *
 */
class whatsUp
{
	private $sFileRepo;
	private $sHttpLinkRepo;
	private $sPhotoRepo;


	public function __construct($sFileRepo, $sHttpLinkRepo, $sPhotoRepo)
	{
		$this->sFileRepo = $sFileRepo;
		$this->sHttpLinkRepo = $sHttpLinkRepo;
		$this->sPhotoRepo = $sPhotoRepo;
	}

	/**
	 *
	 *
	 */
	public function tellMeWhatsNew($limitResults = null, $since = null)
	{

		$limitRepoResults = 5;
		$lastFiles = $this->sFileRepo->getPublicDocumentsOrderByDatetime($limitRepoResults, $since);
		$lastHttpLinks = $this->sHttpLinkRepo->getPublicHttpLinksOrderByDatetime($limitRepoResults, $since);
		$lastPhotos = $this->sPhotoRepo->getPublicPhotosOrderByDatetime($limitRepoResults, $since);
		$lastDocuments = array();
		$i = 0;

		if($lastFiles) {
			foreach ($lastFiles as $key => $file) {
				$docToAdd['user'] = 	$file->getUser()->getUserName();
				$docToAdd['datetime'] = $file->getUploadedAt();
				$docToAdd['type'] = 	$file->getType();
				$docToAdd['title'] = 	$file->getTitle();
				$docToAdd['syntaxon'] = $file->getSyntaxonCore()->getSyntaxonName();
				$docToAdd['syntaxon_id'] = $file->getSyntaxonCore()->getId();

				array_push($lastDocuments, $docToAdd);
				unset($docToAdd);
			}
		}

		if($lastPhotos) {
			foreach ($lastPhotos as $key => $photo) {
				$docToAdd['user'] = 	$photo->getUser()->getUserName();
				$docToAdd['datetime'] = $photo->getUploadedAt();
				$docToAdd['type'] = 	'photo';
				$docToAdd['title'] = 	$photo->getTitle();
				$docToAdd['syntaxon'] = $photo->getSyntaxonCore()->getSyntaxonName();
				$docToAdd['syntaxon_id'] = $photo->getSyntaxonCore()->getId();

				array_push($lastDocuments, $docToAdd);
				unset($docToAdd);
			}
		}

		if($lastHttpLinks) {
			foreach ($lastHttpLinks as $key => $lastHttpLink) {
				$docToAdd['user'] = 	$lastHttpLink->getUser()->getUserName();
				$docToAdd['datetime'] = $lastHttpLink->getUploadedAt();
				$docToAdd['type'] = 	'httplink';
				$docToAdd['title'] = 	$lastHttpLink->getTitle();
				$docToAdd['syntaxon'] = $lastHttpLink->getSyntaxonCore()->getSyntaxonName();
				$docToAdd['syntaxon_id'] = $lastHttpLink->getSyntaxonCore()->getId();

				array_push($lastDocuments, $docToAdd);
				unset($docToAdd);
			}
		}

		// Sort lastDocuments by datetime
		usort($lastDocuments, function($a, $b) {
			$ad = $a['datetime'];
			$bd = $b['datetime'];
			if ($ad == $bd) {
		  		return 0;
			}
			return $ad > $bd ? -1 : 1;
			
		});

		// Keep $limitResults results
 		if($limitResults) {
 			$nbResults = count($lastDocuments);
			if($nbResults > $limitResults) {
				$lastDocuments = array_slice($lastDocuments, 0, $limitResults);
			}
 		}
		

		return $lastDocuments;

	}
}