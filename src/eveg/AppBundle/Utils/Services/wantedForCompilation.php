<?php
// src/eveg/appBundle/Utils/Services/wantedForCompilation.php

namespace eveg\AppBundle\Utils\Services;

/**
 * Utility to recover pdf files to be compiled
 *
 */
class wantedForCompilation
{
	private $sFileRepo;

	public function __construct($sFileRepo)
	{
		$this->sFileRepo = $sFileRepo;
	}

	/**
	 * Get the list of pdf documents concerning a diagnosis WHILE none excel file exists for the same diagnosis
	 *
	 * @param integer $limitResults limit the number of results
	 */
	public function getList($limitResults = null)
	{
		$spreadsheets = $this->sFileRepo->getPublicSpreadsheets($limitResults);
		$pdfs = $this->sFileRepo->getPublicPdfs($limitResults);

		$pdfsAlone = array();

		foreach ($pdfs as $key => $pdf) {
			$flag = false;

			foreach ($spreadsheets as $key => $spreadsheet) {
				if($pdf->getDiagnosisOf() == $spreadsheet->getDiagnosisOf()) {
					$flag = true;
				}
			}

			if($flag === false) {
				// Only get ASS, SUBASS & GRPT levels (upper levels may not contain descriptions tables)
				if($pdf->getSyntaxonCore()->getLevel() == 'ASS' or
				   $pdf->getSyntaxonCore()->getLevel() == 'SUBASS' or
				   $pdf->getSyntaxonCore()->getLevel() == 'GRPT') {
					
					array_push($pdfsAlone, $pdf);
				}
				
			}
		}

		return $pdfsAlone;
	}

	/**
	 * Get the number of pdf documents concerning a diagnosis WHILE none excel file exists for the same diagnosis
	 *
	 */
	public function howMany()
	{
		$spreadsheets = $this->sFileRepo->getPublicSpreadsheetsWithoutSCoreRelation();
		$pdfs = $this->sFileRepo->getPublicPdfs();

		$counter = 0;

		foreach ($pdfs as $key => $pdf) {
			$flag = false;

			foreach ($spreadsheets as $key => $spreadsheet) {
				if($pdf->getDiagnosisOf() == $spreadsheet->getDiagnosisOf()) {
					$flag = true;
				}
			}

			if($flag === false) {
				// Only get ASS, SUBASS & GRPT levels (upper levels may not contain descriptions tables)
				if($pdf->getSyntaxonCore()->getLevel() == 'ASS' or
				   $pdf->getSyntaxonCore()->getLevel() == 'SUBASS' or
				   $pdf->getSyntaxonCore()->getLevel() == 'GRPT') {
					
					$counter++;
				}
			}
		}

		return $counter;
	}
}