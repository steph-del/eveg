<?php
// src/eveg/appBundle/Utils/Services/nbEvegItems.php

namespace eveg\AppBundle\Utils\Services;

/**
 * Utility to recover nb of cards and documents
 *
 */
class nbEvegItems
{
	private $sCoreRepo;
	private $sFileRepo;
	private $sHttpLinkRepo;
	private $sPhotoRepo;

	public function __construct($sCoreRepo, $sFileRepo, $sHttpLinkRepo, $sPhotoRepo)
	{
		$this->sCoreRepo 	 = $sCoreRepo;
		$this->sFileRepo 	 = $sFileRepo;
		$this->sHttpLinkRepo = $sHttpLinkRepo;
		$this->sPhotoRepo 	 = $sPhotoRepo;
	}

	/**
	 * Get the number of cards (means syntaxon != synonym)
	 *
	 */
	public function getNbCards()
	{
		$nbCards = $this->sCoreRepo->getAllNotSynonyms();

		return $nbCards;
	}

	/**
	 * Get the number of public files
	 *
	 */
	public function getNbPublicFiles()
	{
		$nbPublicFiles = $this->sFileRepo->getNbPublic();

		return $nbPublicFiles;
	}

	/**
	 * Get the number of public http links
	 *
	 */
	public function getNbPublicHttpLinks()
	{
		$nbPublicHttpLinks = $this->sHttpLinkRepo->getNbPublic();

		return $nbPublicHttpLinks;
	}

	/**
	 * Get the number of public photos
	 *
	 */
	public function getNbPublicPhotos()
	{
		$nbPublicPhotos = $this->sPhotoRepo->getNbPublic();

		return $nbPublicPhotos;
	}

	/**
	 * Get the number of public documents
	 *
	 */
	public function getNbPublicDocuments()
	{
		$nbPublicFiles = $this->getNbPublicFiles();
		$nbPublicHttpLinks = $this->getNbPublicHttpLinks();
		$nbPublicPhotos = $this->getNbPublicPhotos();

		$nbPublicDocuments = $nbPublicFiles + $nbPublicHttpLinks + $nbPublicPhotos;

		return $nbPublicDocuments;
	}

}