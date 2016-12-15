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

	/**
	 * Get the number of spreadsheets (public, private or group)
	 *
	 */
	public function getNbSpreadsheets()
	{
		return $this->sFileRepo->getNbSpreadsheets();
	}

	/**
	 * Get the number of Pdfs (public, private or group)
	 *
	 */
	public function getNbPdfs()
	{
		return $this->sFileRepo->getNbPdfs();
	}

	/**
	 * Get the number of http links (public, private or group)
	 *
	 */
	public function getNbHttpLinks()
	{
		return $this->sHttpLinkRepo->getNb();
	}

	/**
	 * Get the number of photos (public, private or group)
	 *
	 */
	public function getNbPhotos()
	{
		return $this->sPhotoRepo->getNb();
	}

	/**
	 * Get the most downloaded files (public, private or group)
	 *
	 */
	public function getMostDownloadedFiles()
	{
		return $this->sFileRepo->getMostDownloaded($limit = 10);
	}

	/**
	 * Count of total downloaded spreadsheets
	 *
	 */
	public function getSumDownloadedSpreadsheets()
	{
		return $this->sFileRepo->getSumDownloadedSpreadsheets();
	}

	/**
	 * Count of total downloaded Pdfs
	 *
	 */
	public function getSumDownloadedPdfs()
	{
		return $this->sFileRepo->getSumDownloadedPdfs();
	}

	/**
	 * Count of total downloaded http links
	 *
	 */
	public function getSumDownloadedHttpLinks()
	{
		return $this->sHttpLinkRepo->getSumDownloaded();
	}

	/**
	 * Count the number of each Level item
	 *
	 */
	public function getNbSyntaxonByLevel()
	{
		return $this->sCoreRepo->getNbSyntaxonByLevel();
	}

}