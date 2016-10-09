<?php
// src/eveg/AppBundle/Controller/ImportController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use eveg\AppBundle\Entity\SyntaxonCore;
use eveg\AppBundle\Entity\syntaxonRepartitionDepFr;
use eveg\AppBundle\Entity\SyntaxonRepartitionEurope;
use eveg\AppBundle\Entity\SyntaxonBiblio;
use eveg\AppBundle\Entity\SyntaxonEcology;
use eveg\AppBundle\Entity\Baseflor;
use eveg\AppBundle\Entity\ImportLog;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ImportController extends Controller
{
	/**
	 *
	 * Test and check the SyntaxonCore entity and the imported file before importing the data
	 * 
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
	public function checkBeofreImportCoreAction($importedData)
	{
		// Retrieves all syntaxonCore entities
		$em = $this->getDoctrine()->getManager();
		$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findAll();

		// Push entities into array
		$dbKeys = array();
		foreach($entities as $key => $entity) {
			array_push($dbKeys, $entity->getFixedCode());
		}

		// Test if all fixedCode are unique whitin the SyntaxonCoreEntity
		$countElements = array_count_values($dbKeys);
		$nonUniqueFixedCode = '';
		foreach ($countElements as $key => $value) {
			if($value > 1) $nonUniqueFixedCode .= $key.', ';
		}
		if(!empty($nonUniqueFixedCode)) {
			Throw new HttpException(500, 'There is some doubles in the fixedCode within the SyntaxonCore entity. See : '.$nonUniqueFixedCode);
		}

		// Test if all fixedCode are unique whitin the imported file
		$importedFixedCode = array_column($importedData, 'fixedCode');
		$countElements = array_count_values($importedFixedCode);
		$nonUniqueFixedCode = '';
		foreach ($countElements as $key => $value) {
			if($value > 1) $nonUniqueFixedCode .= $key.', ';
		}
		if(!empty($nonUniqueFixedCode)) {
			Throw new HttpException(500, 'There is some doubles in the fixedCode within the imported file. See : '.$nonUniqueFixedCode);
		}

		return true;

	}

	/**
	 *
	 * Import the baseveg core data (csv file from baseveg)
	 *
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
	public function importCoreAction(Request $request)
	{

		// retrieves ioHelpers service
		$ioHelpers = $this->get('eveg_app.io_helpers');

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->add('onlyLog', 'checkbox', array(
            	'data' => true,
            	'label' => "Ne pas importer les données, simuler l'importation et afficher le log",
            	'required' => false,
            ))
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Only log ?
        $onlyLog = $form->get('onlyLog')->getData();

        // Logs
        $logIsUpToDate 	 = (string)"";	  // log for data already up to date
		$logToUpdate   	 = (string)"";	  // data to update
		$logToCreate   	 = (string)"";	  // data to create in db
		$logToRemove   	 = (string)"";	  // data to remove in db
		$countIsUpToDate = 0;	  		  // counter for data already up to date
		$countToUpdate 	 = 0;	  		  // -- data to update
		$countToCreate 	 = 0;	  		  // -- data to create in db
		$countToRemove 	 = 0;	  		  // -- data to remove in db

        // Job routine
		if($form->isValid()) {

			$batchSize 	   	 = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         	   	 = 0;     // just an incremental
			$cycle     	   	 = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();
			$clientOriginaFilelNameWhitoutExtension = basename($file->getClientOriginalName(), '.csv');
			$clientOriginalFileExtension = $file->getClientOriginalExtension();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contains '.csv').");
			}

			// Variables
			$dateTime = new \DateTime('now');
			$day = $dateTime->format('Y-m-d');
			$hour = $dateTime->format('H-i-s');

			// Moves the uploaded file
			$importFileName = $clientOriginaFilelNameWhitoutExtension.'_'.$day.'_'.$hour.'.'.$clientOriginalFileExtension;
			$dir = __DIR__.'/../../../../web/uploads/import/core';
			$file->move($dir, $importFileName);

			// Variables
			$import = $ioHelpers->csv_to_array($dir.'/'.$importFileName, ';');		// push the csv data into an array
			$importKeys = array_column($import, 'fixedCode');					// get the id values
			$importKeys = array_map('intval', $importKeys);						// make sure that $importKeys contains integer data
			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Retrieves all syntaxonCore entities
			$em = $this->getDoctrine()->getManager();
			$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findAll();

			// Detach useless entities :
			// 		By default, Doctrine persist linked entities even if they're empty.
			// 		We only keep SyntaxonCore entities in the Doctrine's unit of work 
			foreach($em->getUnitOfWork()->getIdentityMap() as $key_unit => $persistedUnit) {
				foreach ($persistedUnit as $key_element => $persistedElement) {
					$elementClass = get_class($persistedElement);
					if($elementClass !== "eveg\AppBundle\Entity\SyntaxonCore") {
						$em->detach($persistedElement);
					}
				}
				$em->flush();
			}

			// Push SCore fixed codes (==id) into array
			$dbKeys = array();
			foreach($entities as $key => $entity) {
				array_push($dbKeys, $entity->getFixedCode());
			}

			// Parse import data and detach SyntaxonCore entities already up to date
			foreach($import as $key => $importedEntity) {
				$idToRetrieve = array_search($importedEntity['fixedCode'], $dbKeys);
				// Syntaxon already exists in db
				if($idToRetrieve !== FALSE) {
					// Find differences
					$diffFixedCode 		= false;
					$diffCatminatCode 	= false;
					$diffLevel 			= false;
					$diffSyntaxonName 	= false;
					$diffSyntaxonAuthor = false;
					$diffCommonName 	= false;
					$diffCommonNameEn 	= false;
					if($entities[$idToRetrieve]->getFixedCode() 		!= $importedEntity['fixedCode']) 		$diffFixedCode = true;
					if($entities[$idToRetrieve]->getCatminatCode() 	!= $importedEntity['catminatCode']) 	$diffCatminatCode = true;
					if($entities[$idToRetrieve]->getLevel() 			!= $importedEntity['level']) 			$diffLevel = true;
					if($entities[$idToRetrieve]->getSyntaxonName() 	!= $importedEntity['syntaxonName']) 	$diffSyntaxonName = true;
					if($entities[$idToRetrieve]->getSyntaxonAuthor() != $importedEntity['syntaxonAuthor']) 	$diffSyntaxonAuthor = true;
					if($entities[$idToRetrieve]->getCommonName() 	!= $importedEntity['commonNameFr']) 	$diffCommonName = true;
					if($entities[$idToRetrieve]->getCommonNameEn() 	!= $importedEntity['commonNameEn']) 	$diffCommonNameEn = true;

					// If there is no difference between csv file and db
					// then we detach the entity
					if(!$diffFixedCode
						&& !$diffCatminatCode
						&& !$diffLevel
						&& !$diffSyntaxonName
						&& !$diffSyntaxonAuthor
						&& !$diffCommonName
						&& !$diffCommonNameEn) {

						$countIsUpToDate++;

						// Log : no difference for this entity, nothing to deal with doctrine
						$logIsUpToDate .= "<table class='table element'>
											<tr class='header'>
												<td class='title'>Syntaxon</td>
												<td>
													<table class='table'>
														<tr><td><b>db  :</b> (".$entities[$idToRetrieve]->getFixedCode().")(".$entities[$idToRetrieve]->getCatminatCode().") ".$entities[$idToRetrieve]->getSyntaxonName()." ".$entities[$idToRetrieve]->getSyntaxonAuthor()."</td></tr>
														<tr><td><b>csv  :</b> (".$importedEntity['fixedCode'].") (".$importedEntity['catminatCode'].") ".$importedEntity['syntaxonName']." ".$importedEntity['syntaxonAuthor']."</td></tr>
													</table>
												</td>
											</tr>
										   </table>";

						// Delete item from csv file and from entity manager
						unset($import[$key]);
						$em->detach($entities[$idToRetrieve]);

					}

				}
			}
			$em->flush();

			// Push entities into array
			$dbKeys = array();
			foreach($entities as $key => $entity) {
				array_push($dbKeys, $entity->getFixedCode());
			}

			// Check data before import
			//$this->checkBeofreImportCoreAction($import);

			foreach($import as $key => $importedEntity) {
				// Does the entity already exists (compare both id) ?
				$idToRetrieve = array_search($importedEntity['fixedCode'], $dbKeys);

				// Yes, it already exists
				if($idToRetrieve !== FALSE) {
					// Find differences
					$diffFixedCode 		= false;
					$diffCatminatCode 	= false;
					$diffLevel 			= false;
					$diffSyntaxonName 	= false;
					$diffSyntaxonAuthor = false;
					$diffCommonName 	= false;
					$diffCommonNameEn 	= false;
					if($entities[$idToRetrieve]->getFixedCode() 		!= $import[$key]['fixedCode']) 		$diffFixedCode = true;
					if($entities[$idToRetrieve]->getCatminatCode() 	!= $import[$key]['catminatCode']) 	$diffCatminatCode = true;
					if($entities[$idToRetrieve]->getLevel() 			!= $import[$key]['level']) 			$diffLevel = true;
					if($entities[$idToRetrieve]->getSyntaxonName() 	!= $import[$key]['syntaxonName']) 	$diffSyntaxonName = true;
					if($entities[$idToRetrieve]->getSyntaxonAuthor() != $import[$key]['syntaxonAuthor']) $diffSyntaxonAuthor = true;
					if($entities[$idToRetrieve]->getCommonName() 	!= $import[$key]['commonNameFr']) 	$diffCommonName = true;
					if($entities[$idToRetrieve]->getCommonNameEn() 	!= $import[$key]['commonNameEn']) 	$diffCommonNameEn = true;

					// There is no difference (redundant)
					if(!$diffFixedCode
						&& !$diffCatminatCode
						&& !$diffLevel
						&& !$diffSyntaxonName
						&& !$diffSyntaxonAuthor
						&& !$diffCommonName
						&& !$diffCommonNameEn) {

						// Log : no difference for this entity, nothing to deal with doctrine

					// There is, at less, one difference
					} else {
						$countToUpdate++;
						$logToUpdate .= "<table class='table element'>
											<tr class='header'>
												<td class='title'>Syntaxon</td>
												<td>
													<table class='table'>
														<tr><td><b>db  :</b> (".$entities[$idToRetrieve]->getFixedCode().")(".$entities[$idToRetrieve]->getCatminatCode().") ".$entities[$idToRetrieve]->getSyntaxonName()." ".$entities[$idToRetrieve]->getSyntaxonAuthor()."</td></tr>
														<tr><td><b>csv  :</b> (".$importedEntity['fixedCode'].") (".$importedEntity['catminatCode'].") ".$importedEntity['syntaxonName']." ".$importedEntity['syntaxonAuthor']."</td></tr>
													</table>
												</td>
											</tr>";
						// update entity
						if($diffCatminatCode) {
							$logToUpdate .= $ioHelpers->getTableFragment(
													'catminat code',
													$entities[$idToRetrieve]->getCatminatCode(),
													$importedEntity['catminatCode']);
							$entities[$idToRetrieve]->setCatminatCode($importedEntity['catminatCode']);
						}
						if($diffLevel) {
							$logToUpdate .= $ioHelpers->getTableFragment(
													'level',
													$entities[$idToRetrieve]->getLevel(),
													$importedEntity['level']);
							$entities[$idToRetrieve]->setLevel($importedEntity['level']);
						}
						if($diffSyntaxonName) {
							$logToUpdate .= $ioHelpers->getTableFragment(
													'syntaxon name',
													$entities[$idToRetrieve]->getSyntaxonName(),
													$importedEntity['syntaxonName']);
							$entities[$idToRetrieve]->setSyntaxonName($importedEntity['syntaxonName']);
						}
						if($diffSyntaxonAuthor) {
							$logToUpdate .= $ioHelpers->getTableFragment(
													'syntaxon author',
													$entities[$idToRetrieve]->getSyntaxonAuthor(),
													$importedEntity['syntaxonAuthor']);
							$entities[$idToRetrieve]->setSyntaxonAuthor($importedEntity['syntaxonAuthor']);
						}
						if($diffCommonName) {
							$logToUpdate .= $ioHelpers->getTableFragment(
													'common name (fr)',
													$entities[$idToRetrieve]->getCommonName(),
													$importedEntity['commonNameFr']);
							$entities[$idToRetrieve]->setCommonName($import[$key]['commonNameFr']);
						}
						if($diffCommonNameEn) {
							$logToUpdate .= $ioHelpers->getTableFragment(
													'common name (en)',
													$entities[$idToRetrieve]->getCommonNameEn(),
													$importedEntity['commonNameEn']);
							$entities[$idToRetrieve]->setCommonNameEn($importedEntity['commonNameEn']);
						}

						$logToUpdate .= '</table>';
					}
				// No (have to create a new entity)
				} else {
					// create new entity
					$countToCreate++;
					$newSyntaxonCore = new SyntaxonCore;
					$newSyntaxonCore
						->setFixedCode($importedEntity['fixedCode'])
						->setCatminatCode($importedEntity['catminatCode'])
						->setLevel($importedEntity['level'])
						->setSyntaxonName($importedEntity['syntaxonName'])
						->setSyntaxonAuthor($importedEntity['syntaxonAuthor'])
						->setCommonName($importedEntity['commonNameFr'])
						->setCommonNameEn($importedEntity['commonNameEn'])
						->setId($importedEntity['fixedCode'])
						;
					$em->persist($newSyntaxonCore);

					// Log entity to create
					$logToCreate .= "<table class='table element'>
										<tr class='header'>
											<td class='title'>Syntaxon</td>
											<td>
												<table class='table'>
													<tr><td><b>db  :</b> null</td></tr>
													<tr><td><b>csv  :</b> (".$importedEntity['fixedCode'].") (".$importedEntity['catminatCode'].") ".$importedEntity['syntaxonName']." ".$importedEntity['syntaxonAuthor']."</td></tr>
												</table>
											</td>
										</tr>";

					$logToCreate .= $ioHelpers->getTableFragment(
													'id',
													'null',
													$importedEntity['id']);
					$logToCreate .= $ioHelpers->getTableFragment(
													'catminat code',
													'null',
													$importedEntity['catminatCode']);
					$logToCreate .= $ioHelpers->getTableFragment(
													'level',
													'null',
													$importedEntity['level']);
					$logToCreate .= $ioHelpers->getTableFragment(
													'syntaxon name',
													'null',
													$importedEntity['syntaxonName']);
					$logToCreate .= $ioHelpers->getTableFragment(
													'syntaxon author',
													'null',
													$importedEntity['syntaxonAuthor']);
					$logToCreate .= $ioHelpers->getTableFragment(
													'common name (fr)',
													'null',
													$importedEntity['commonNameFr']);
					$logToCreate .= $ioHelpers->getTableFragment(
													'common name (en)',
													'null',
													$importedEntity['commonNameEn']);

					$logToCreate .= "</table>";
				}
				
				// Flush and detach entities each $batchSize time
				if (($i % $batchSize) === 0) {

					// Force setId : http://www.ens.ro/2012/07/03/symfony2-doctrine-force-entity-id-on-persist/
					if(isset($newSyntaxonCore)) {
						$metadata = $em->getClassMetaData(get_class($newSyntaxonCore));
						$metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
					}

					// Flush & detach entities already flushed
			        if(!$onlyLog) $em->flush();
			        // Before detaching $batchsize entities, check if we've got enought
			        if((count($entities) - $i) > $batchSize) {
				        for($j=0;$j<=$batchSize;$j++) {
				        	$em->detach($entities[($cycle*$batchSize)+$j]);
				        }
			        }
			        $cycle++;
			    }
				$i++;

			} // for each imported entity loop

			// Entity to be removed
			foreach ($dbKeys as $dbKey => $dbId) {
				$idToRetrieve = array_search($dbId, $importKeys);
				if($idToRetrieve != FALSE) {
					// There is an occurence
					continue;
				} else {
					// No occurence : syntaxon id to remove
					$countToRemove++;

					$logToRemove .= "<table class='table element'>
							<tr class='header'>
								<td class='title'>Syntaxon</td>
								<td>
									<table class='table'>
										<tr><td><b>db  :</b> (".$entities[$dbKey]->getFixedCode().") (".$entities[$dbKey]->getCatminatCode().") ".$entities[$dbKey]->getSyntaxonName()." ".$entities[$dbKey]->getSyntaxonAuthor()."</td></tr>
										<tr><td><b>csv  :</b> null</td></tr>
									</table>
								</td>
							</tr>";
					$logToRemove .= $ioHelpers->getTableFragment(
									'id',
									$entities[$dbKey]->getFixedCode(),
									'null');
					$logToRemove .= $ioHelpers->getTableFragment(
									'catminat code',
									$entities[$dbKey]->getCatminatCode(),
									'null');
					$logToRemove .= $ioHelpers->getTableFragment(
									'level',
									$entities[$dbKey]->getLevel(),
									'null');
					$logToRemove .= $ioHelpers->getTableFragment(
									'syntaxon name',
									$entities[$dbKey]->getSyntaxonName(),
									'null');
					$logToRemove .= $ioHelpers->getTableFragment(
									'syntaxon author',
									$entities[$dbKey]->getSyntaxonAuthor(),
									'null');
					$logToRemove .= $ioHelpers->getTableFragment(
									'common name (fr)',
									$entities[$dbKey]->getCommonName(),
									'null');
					$logToRemove .= $ioHelpers->getTableFragment(
									'common name (en)',
									$entities[$dbKey]->getCommonNameEn(),
									'null');
				}
			}
			$logToRemove .= "</table>";

			// Flush the last entities (the last batch cycle may not be full)
			// Force setId : http://www.ens.ro/2012/07/03/symfony2-doctrine-force-entity-id-on-persist/
			if(isset($newSyntaxonCore)) {
				$metadata = $em->getClassMetaData(get_class($newSyntaxonCore));
				$metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
			}

			// Update last update param
		    if(!$onlyLog) {
		    	$lastUp = $em->getRepository('evegAppBundle:Infos')->findAll()[0];
		    	$lastUp->setLastUpdate(new \Datetime('now'));
		    }

			// Flush & clear EM
			if(!$onlyLog) $em->flush();
		    $em->clear();

			// Flash messages
			if(!$onlyLog) {
				$this->get('session')->getFlashBag()->add(
		            'success',
		            $countToUpdate.' données ont été mises à jour et '.$countToCreate.' ont été créées.'
		        );
			} else {
				$this->get('session')->getFlashBag()->add(
		            'success',
		            "Simulation d'import pour ".count($importKeys)." données."
		        );
			}
	        
	        // Save logs files
			$path = __DIR__.'/../../../../web/uploads/import/logs/';
			
			$countToUpdate > 0   ? $fileNameLogToUpdate   = 'bvCore_toUpdate_'.$day.'_'.$hour.'.html'    : $fileNameLogToUpdate   = null;
			$countIsUpToDate > 0 ? $fileNameLogIsUpToDate = 'bvCore_isUpToDate_'.$day.'_'.$hour.'.html'  : $fileNameLogIsUpToDate = null;
			$countToCreate > 0   ? $fileNameLogToCreate   = 'bvCore_toCreate_'.$day.'_'.$hour.'.html'    : $fileNameLogToCreate   = null;
			$countToRemove > 0   ? $fileNameLogToRemove  = 'bvCore_toRemove_'.$day.'_'.$hour.'.html'    : $fileNameLogToRemove   = null;

			if (!file_exists($path)) {
			    mkdir($path, 0777, true);
			}

			if($countToUpdate > 0) {
				$outputLogToUpdate = $ioHelpers->getHtmlBase('Import Core (to update) '.$day.' '.$hour, $logToUpdate, $onlyLog);
				file_put_contents($path.$fileNameLogToUpdate, $outputLogToUpdate);
			}
			
			if($countIsUpToDate > 0) {
				$outputLogIsUpToDate = $ioHelpers->getHtmlBase('Import Core (is up to date) '.$day.' '.$hour, $logIsUpToDate, $onlyLog);
				file_put_contents($path.$fileNameLogIsUpToDate, $outputLogIsUpToDate);
			}

			if($countToCreate > 0) {
				$outputLogToCreate = $ioHelpers->getHtmlBase('Import Core (to create) '.$day.' '.$hour, $logToCreate, $onlyLog);
				file_put_contents($path.$fileNameLogToCreate, $outputLogToCreate);
			}

			if($countToRemove > 0) {
				$outputLogToRemove = $ioHelpers->getHtmlBase('Import Core (to remove) '.$day.' '.$hour, $logToRemove, $onlyLog);
				file_put_contents($path.$fileNameLogToRemove, $outputLogToRemove);
			}

			// Logs into database
			$currentUser    = $this->getUser();
			$log_isUpToDate = new ImportLog;
			$log_toUpdate   = new ImportLog;
			$log_toCreate   = new ImportLog;
			$log_toRemove   = new ImportLog;

			$em->persist($log_isUpToDate);
			$em->persist($log_toUpdate);
			$em->persist($log_toCreate);
			$em->persist($log_toRemove);

			$log_isUpToDate->setReference('core')
						   ->setState('up to date')
						   ->setDate($dateTime)
						   ->setUser($currentUser->getUserName())
						   ->setCount($countIsUpToDate)
						   ->setSimulation($onlyLog)
						   ->setLogFilename($fileNameLogIsUpToDate)
						   ->setImportFilename($importFileName)
						   ->setImportClientOriginalFilename($clientOriginaFilelName);
			$log_toUpdate->setReference('core')
						 ->setState('to update')
						 ->setDate($dateTime)
						 ->setUser($currentUser->getUserName())
						 ->setCount($countToUpdate)
						 ->setSimulation($onlyLog)
						 ->setLogFilename($fileNameLogToUpdate)
						 ->setImportFilename($importFileName)
						 ->setImportClientOriginalFilename($clientOriginaFilelName);
			$log_toCreate->setReference('core')
						 ->setState('to create')
						 ->setDate($dateTime)
						 ->setUser($currentUser->getUserName())
						 ->setCount($countToCreate)
						 ->setSimulation($onlyLog)
						 ->setLogFilename($fileNameLogToCreate)
						 ->setImportFilename($importFileName)
						 ->setImportClientOriginalFilename($clientOriginaFilelName);
			$log_toRemove->setReference('core')
						 ->setState('to remove')
						 ->setDate($dateTime)
						 ->setUser($currentUser->getUserName())
						 ->setCount($countToRemove)
						 ->setSimulation($onlyLog)
						 ->setLogFilename($fileNameLogToRemove)
						 ->setImportFilename($importFileName)
						 ->setImportClientOriginalFilename($clientOriginaFilelName);

			$em->flush();
		    $em->clear();

		} // end form is valid

		return $this->render('evegAppBundle:Admin:importCore.html.twig', array(
				'form' 				=> $form->createView(),
				'countIsUpToDate' 	=> $countIsUpToDate,
				'countToUpdate' 	=> $countToUpdate,
				'countToCreate' 	=> $countToCreate,
				'countToRemove' 	=> $countToRemove,
				'onlyLog'			=> $onlyLog,
				'fileLogToUpdate'   => isset($fileNameLogToUpdate) ? $fileNameLogToUpdate : null,
				'fileLogIsUpToDate' => isset($fileNameLogIsUpToDate) ? $fileNameLogIsUpToDate : null,
				'fileLogToCreate'   => isset($fileNameLogToCreate) ? $fileNameLogToCreate : null,
				'fileLogToRemove'   => isset($fileNameLogToRemove) ? $fileNameLogToRemove : null
			));

	}

	/**
	 * Import the repartition data (csv file from baseveg).
	 * 
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
	public function importRepartitionDepFrAction(Request $request)
	{

		// retrieves ioHelpers service
		$ioHelpers = $this->get('eveg_app.io_helpers');

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contain '.csv').");
			}

			// Moves the uploaded file
			$name = $file->getClientOriginalName();
			$dir = __DIR__.'/../../../../web/uploads/import/repartition/depfr';
			$file->move($dir, $name);

			// Variables
			$import = $ioHelpers->csv_to_array($dir.'/'.$name, ';');		// pushes the csv data into an array
			$importKeys = array_column($import, 'id');				// gets the id values
			$importKeys = array_map('intval', $importKeys);			// makes sure that $importKeys contains integer data

			// Retrieves all syntaxonCore entities
			$em = $this->getDoctrine()->getManager();
			$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findMultipleById($importKeys);

			// For each entity, create a new syntaxonRepartitionDepFr object and attaches it
			// If the entity already have a syntaxonRepartitionDepFr then we just update it
			foreach ($entities as $key => $entity) {

				if($entity->getRepartitionDepFr()) {
					$newRepartition = $entity->getRepartitionDepFr();
				} else {
					$newRepartition = new syntaxonRepartitionDepFr;
				}

				$importKey = array_search($entity->getId(), $importKeys);
				if($importKey !== null) {
					$newRepartition
						->set01($import[$importKey]['01'])
						->set02($import[$importKey]['02'])
						->set03($import[$importKey]['03'])
						->set04($import[$importKey]['04'])
						->set05($import[$importKey]['05'])
						->set06($import[$importKey]['06'])
						->set07($import[$importKey]['07'])
						->set08($import[$importKey]['08'])
						->set09($import[$importKey]['09'])
						->set10($import[$importKey]['10'])
						->set11($import[$importKey]['11'])
						->set12($import[$importKey]['12'])
						->set13($import[$importKey]['13'])
						->set14($import[$importKey]['14'])
						->set15($import[$importKey]['15'])
						->set16($import[$importKey]['16'])
						->set17($import[$importKey]['17'])
						->set18($import[$importKey]['18'])
						->set19($import[$importKey]['19'])
						->set20($import[$importKey]['20'])
						->set21($import[$importKey]['21'])
						->set22($import[$importKey]['22'])
						->set23($import[$importKey]['23'])
						->set24($import[$importKey]['24'])
						->set25($import[$importKey]['25'])
						->set26($import[$importKey]['26'])
						->set27($import[$importKey]['27'])
						->set28($import[$importKey]['28'])
						->set29($import[$importKey]['29'])
						->set30($import[$importKey]['30'])
						->set31($import[$importKey]['31'])
						->set32($import[$importKey]['32'])
						->set33($import[$importKey]['33'])
						->set34($import[$importKey]['34'])
						->set35($import[$importKey]['35'])
						->set36($import[$importKey]['36'])
						->set37($import[$importKey]['37'])
						->set38($import[$importKey]['38'])
						->set39($import[$importKey]['39'])
						->set40($import[$importKey]['40'])
						->set41($import[$importKey]['41'])
						->set42($import[$importKey]['42'])
						->set43($import[$importKey]['43'])
						->set44($import[$importKey]['44'])
						->set45($import[$importKey]['45'])
						->set46($import[$importKey]['46'])
						->set47($import[$importKey]['47'])
						->set48($import[$importKey]['48'])
						->set49($import[$importKey]['49'])
						->set50($import[$importKey]['50'])
						->set51($import[$importKey]['51'])
						->set52($import[$importKey]['52'])
						->set53($import[$importKey]['53'])
						->set54($import[$importKey]['54'])
						->set55($import[$importKey]['55'])
						->set56($import[$importKey]['56'])
						->set57($import[$importKey]['57'])
						->set58($import[$importKey]['58'])
						->set59($import[$importKey]['59'])
						->set60($import[$importKey]['60'])
						->set61($import[$importKey]['61'])
						->set62($import[$importKey]['62'])
						->set63($import[$importKey]['63'])
						->set64($import[$importKey]['64'])
						->set65($import[$importKey]['65'])
						->set66($import[$importKey]['66'])
						->set67($import[$importKey]['67'])
						->set68($import[$importKey]['68'])
						->set69($import[$importKey]['69'])
						->set70($import[$importKey]['70'])
						->set71($import[$importKey]['71'])
						->set72($import[$importKey]['72'])
						->set73($import[$importKey]['73'])
						->set74($import[$importKey]['74'])
						->set75($import[$importKey]['75'])
						->set76($import[$importKey]['76'])
						->set77($import[$importKey]['77'])
						->set78($import[$importKey]['78'])
						->set79($import[$importKey]['79'])
						->set80($import[$importKey]['80'])
						->set81($import[$importKey]['81'])
						->set82($import[$importKey]['82'])
						->set83($import[$importKey]['83'])
						->set84($import[$importKey]['84'])
						->set85($import[$importKey]['85'])
						->set86($import[$importKey]['86'])
						->set87($import[$importKey]['87'])
						->set88($import[$importKey]['88'])
						->set89($import[$importKey]['89'])
						->set90($import[$importKey]['90'])
						->set91($import[$importKey]['91'])
						->set92($import[$importKey]['92'])
						->set93($import[$importKey]['93'])
						->set94($import[$importKey]['94'])
						->set95($import[$importKey]['95'])
					;
					
					$entity->setRepartitionDepFr($newRepartition);

					// Flush and detach entities each $batchSize time
					if (($i % $batchSize) === 0) {
				        $em->flush();
				        for ($i=($cycle*$batchSize)+$i; $i < $i=($cycle*$batchSize)+$i+$batchSize; $i++) { 
				        	$em->detach($entities[($cycle*$batchSize)+$i]);
				        }
				        $cycle = $cycle+1;
				    }
					$i = $i+1;

				}
				
	        }
	        // Flush the last entities (the last batch cycle may not be full)
	        $em->flush();
		    $em->clear();

		    // Flash and return
	        $this->get('session')->getFlashBag()->add(
	            'success',
	            count($import).' données ont été importées.'
	        );

	        return $this->render('evegAppBundle:Admin:importDepFr.html.twig', array(
				'form' => $form->createView()
			));
	    }

		return $this->render('evegAppBundle:Admin:importDepFr.html.twig', array(
			'form' => $form->createView()
		));
	}

	/**
	 * Import the European repartition data (csv file from baseveg).
	 *
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
	public function importRepartitionEuropeAction(Request $request)
	{

		// retrieves ioHelpers service
		$ioHelpers = $this->get('eveg_app.io_helpers');

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contain '.csv').");
			}

			// Moves the uploaded file
			$name = $file->getClientOriginalName();
			$dir = __DIR__.'/../../../../web/uploads/import/repartition/europe';
			$file->move($dir, $name);

			// Variables
			$import = $ioHelpers->csv_to_array($dir.'/'.$name, ';');		// pushes the csv data into an array
			$importKeys = array_column($import, 'id');				// gets the id values
			$importKeys = array_map('intval', $importKeys);			// makes sure that $importKeys contains integer data

			// Retrieves all syntaxonCore entities
			$em = $this->getDoctrine()->getManager();
			$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findMultipleById($importKeys);

			// For each entity, create a new syntaxonRepartitionEurope object and attaches it
			// If the entity already have a syntaxonRepartitionEurope then we just update it
			foreach ($entities as $key => $entity) {

				if($entity->getRepartitionEurope()) {
					$newRepartition = $entity->getRepartitionEurope();
				} else {
					$newRepartition = new SyntaxonRepartitionEurope;
				}

				$importKey = array_search($entity->getId(), $importKeys);
				if($importKey !== null) {
					$newRepartition
						->setMacaronesia($import[$importKey]['macaronesia'])
						->setPortugal($import[$importKey]['portugal'])
						->setEspana($import[$importKey]['espana'])
						->setIceland($import[$importKey]['island'])
						->setNorway($import[$importKey]['norway'])
						->setDenmark($import[$importKey]['denmark'])
						->setIreland($import[$importKey]['ireland'])
						->setUk($import[$importKey]['uk'])
						->setNetherlands($import[$importKey]['netherlands'])
						->setBelgium($import[$importKey]['belgium'])
						->setLuxembourg($import[$importKey]['luxembourg'])
						->setFrance($import[$importKey]['france'])
						->setGermany($import[$importKey]['germany'])
						->setPoland($import[$importKey]['poland'])
						->setCzechRepublic($import[$importKey]['czech_republic'])
						->setSlovakia($import[$importKey]['slovakia'])
						->setSwitzerland($import[$importKey]['switzerland'])
						->setAustria($import[$importKey]['austria'])
						->setItaly($import[$importKey]['italy'])
						->setSloveniaCroatia($import[$importKey]['slovenia_croatia'])
						->setBosniaMontenegro($import[$importKey]['bosnia_montenegro'])
						->setAlbania($import[$importKey]['albania'])
						->setSerbiaMacedonia($import[$importKey]['serbia_macedonia'])
						->setHungary($import[$importKey]['hungary'])
						->setRomaniaMoldova($import[$importKey]['romania_moldova'])
						->setBulgaria($import[$importKey]['bulgaria'])
						->setGreece($import[$importKey]['greece'])
						->setSweden($import[$importKey]['sweden'])
						->setFinland($import[$importKey]['finland'])
						->setEstoniaLatviaLithuania($import[$importKey]['estonia_latvia_lithuania'])
						->setBelarus($import[$importKey]['belarus'])
						->setUkraine($import[$importKey]['ukraine'])
						->setRussia($import[$importKey]['russia'])
					;

					$entity->setRepartitionEurope($newRepartition);

					// Flush and detach entities each $batchSize time
					if (($i % $batchSize) === 0) {
				        $em->flush();
				        for ($i=($cycle*$batchSize)+$i; $i < $i=($cycle*$batchSize)+$i+$batchSize; $i++) { 
				        	$em->detach($entities[($cycle*$batchSize)+$i]);
				        }
				        $cycle = $cycle+1;
				    }
					$i = $i+1;

				}
				
	        }
	        // Flush the last entities (the last batch cycle may not be full)
	        $em->flush();
		    $em->clear();

		    // Flash and return
	        $this->get('session')->getFlashBag()->add(
	            'success',
	            count($import).' données ont été importées (Europe).'
	        );

	        return $this->render('evegAppBundle:Admin:importEurope.html.twig', array(
				'form' => $form->createView()
			));
	    }

		return $this->render('evegAppBundle:Admin:importEurope.html.twig', array(
			'form' => $form->createView()
		));

	}

	/**
	 * Import bibliography (csv file from baseveg).
	 *
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
	public function importBiblioAction(Request $request)
	{

		// retrieves ioHelpers service
		$ioHelpers = $this->get('eveg_app.io_helpers');

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contain '.csv').");
			}

			// Moves the uploaded file
			$name = $file->getClientOriginalName();
			$dir = __DIR__.'/../../../../web/uploads/import/biblio';
			$file->move($dir, $name);

			// Variables
			$import = $ioHelpers->csv_to_array($dir.'/'.$name, ';');		// pushes the csv data into an array
			$importKeys = array_column($import, 'id');				// gets the id values
			$importKeys = array_map('intval', $importKeys);			// makes sure that $importKeys contains integer data
			$countImports = 0;

			// Truncate the table
			$em = $this->getDoctrine()->getManager();
			$connection = $em->getConnection();
			$platform   = $connection->getDatabasePlatform();
			$connection->executeUpdate($platform->getTruncateTableSQL('eveg_syntaxon_biblio', true /* whether to cascade */));
			$em->clear();

			// Retrieves all syntaxonCore entities
			$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findMultipleById($importKeys);

			// For each entity, create a new syntaxonRepartitionEurope object and attaches it
			// If the entity already have a syntaxonRepartitionEurope then we just update it
			foreach ($entities as $key => $entity) {

				$importKey = array_search($entity->getId(), $importKeys);
				if($importKey !== null) {
					$bib1 = new SyntaxonBiblio;
					$bib2 = new SyntaxonBiblio;
					$bib3 = new SyntaxonBiblio;
					$bib4 = new SyntaxonBiblio;

					if($import[$importKey]['bib1'] != null) {
						$bib1->setReference($import[$importKey]['bib1']);
						$bib1->setSyntaxonCore($entity);
						$entity->addSyntaxonBiblio($bib1);
						$countImports++;
					}
					if($import[$importKey]['bib2'] != null) {
						$bib2->setReference($import[$importKey]['bib2']);
						$bib2->setSyntaxonCore($entity);
						$entity->addSyntaxonBiblio($bib2);
						$countImports++;
					}
					if($import[$importKey]['bib3'] != null) {
						$bib3->setReference($import[$importKey]['bib3']);
						$bib3->setSyntaxonCore($entity);
						$entity->addSyntaxonBiblio($bib3);
						$countImports++;
					}
					if($import[$importKey]['bib4'] != null) {
						$bib4->setReference($import[$importKey]['bib4']);
						$bib4->setSyntaxonCore($entity);
						$entity->addSyntaxonBiblio($bib4);
						$countImports++;
					}

					// Flush and detach entities each $batchSize time
					if (($i % $batchSize) === 0) {
				        $em->flush();
				        for ($i=($cycle*$batchSize)+$i; $i < $i=($cycle*$batchSize)+$i+$batchSize; $i++) { 
				        	$em->detach($entities[($cycle*$batchSize)+$i]);
				        }
				        $cycle = $cycle+1;
				    }
					$i = $i+1;

				}

			}

			// Flush the last entities (the last batch cycle may not be full)
	        $em->flush();
		    $em->clear();

			// Flash and return
	        $this->get('session')->getFlashBag()->add(
	            'success',
	            $countImports.' données ont été importées (Biblio).'
	        );

	        return $this->render('evegAppBundle:Admin:importBiblio.html.twig', array(
				'form' => $form->createView()
			));

		}

		return $this->render('evegAppBundle:Admin:importBiblio.html.twig', array(
			'form' => $form->createView()
		));
	}

	/**
	 * Import ecological data (csv file from baseveg).
	 *
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
	public function importEcologyAction(Request $request)
	{

		// retrieves ioHelpers service
		$ioHelpers = $this->get('eveg_app.io_helpers');

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contain '.csv').");
			}

			// Moves the uploaded file
			$name = $file->getClientOriginalName();
			$dir = __DIR__.'/../../../../web/uploads/import/ecology';
			$file->move($dir, $name);

			// Variables
			$import = $ioHelpers->csv_to_array($dir.'/'.$name, ';');		// pushes the csv data into an array
			$importKeys = array_column($import, 'id');				// gets the id values
			$importKeys = array_map('intval', $importKeys);			// makes sure that $importKeys contains integer data

			// Retrieves all syntaxonCore entities
			$em = $this->getDoctrine()->getManager();
			$entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findMultipleById($importKeys);

			// For each entity, create a new syntaxonRepartitionEurope object and attaches it
			// If the entity already have a syntaxonRepartitionEurope then we just update it
			foreach ($entities as $key => $entity) {

				if($entity->getEcology()) {
					$newEcology = $entity->getEcology();
				} else {
					$newEcology = new SyntaxonEcology;
				}

				$importKey = array_search($entity->getId(), $importKeys);
				if($importKey and $importKey !== null) {
					$newEcology
						->setWorldRepartition($import[$importKey]['world_repartition'])
						->setFranceRepartition($import[$importKey]['france_repartition'])
						->setPhysionomy($import[$importKey]['physionomy'])
						->setAltitude($import[$importKey]['altitude'])
						->setLatitude($import[$importKey]['latitude'])
						->setOceanity($import[$importKey]['oceanity'])
						->setTemperature($import[$importKey]['temperature'])
						->setLight($import[$importKey]['light'])
						->setExposureSlope($import[$importKey]['exposure_slope'])
						->setOptimumDevelopment($import[$importKey]['optimum_development'])
						->setAtmosphericHumidity($import[$importKey]['atmospheric_humidity'])
						->setSoilType($import[$importKey]['soil_type'])
						->setSoilHumidity($import[$importKey]['soil_humidity'])
						->setSoilTexture($import[$importKey]['soil_texture'])
						->setTrophicLevel($import[$importKey]['trophic_level'])
						->setSoilPh($import[$importKey]['soil_ph'])
						->setSalinity($import[$importKey]['salinity'])
						->setDynamic($import[$importKey]['dynamic'])
						->setManInfluence($import[$importKey]['man_influence'])
					;

					$entity->setEcology($newEcology);

					// Flush and detach entities each $batchSize time
					if (($i % $batchSize) === 0) {
				        $em->flush();
				        for ($i=($cycle*$batchSize)+$i; $i < $i=($cycle*$batchSize)+$i+$batchSize; $i++) { 
				        	$em->detach($entities[($cycle*$batchSize)+$i]);
				        }
				        $cycle = $cycle+1;
				    }
					$i = $i+1;

				}
				
	        }
	        // Flush the last entities (the last batch cycle may not be full)
	        $em->flush();
		    $em->clear();

		    // Flash and return
	        $this->get('session')->getFlashBag()->add(
	            'success',
	            count($import).' données ont été importées (Europe).'
	        );

	        return $this->render('evegAppBundle:Admin:importEcology.html.twig', array(
				'form' => $form->createView()
			));
	    }

		return $this->render('evegAppBundle:Admin:importEcology.html.twig', array(
			'form' => $form->createView()
		));

	}

	/**
	 * Import baseflor data (csv baseflor).
	 * Only available in dev mode.
	 *
	 * @Security("has_role('ROLE_SUPER_ADMIN')")
	 */
	public function importBaseflorAction(Request $request)
	{

		// retrieves ioHelpers service
		$ioHelpers = $this->get('eveg_app.io_helpers');

		// Creates the form...
    	$form = $this->createFormBuilder()
            ->add('importFile', 'file')
            ->getForm();
        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$batchSize = 100;   // $entity will be flushed and detached each $batchSize time (prevent memory overload)
			$i         = 0;     // just an incremental
			$cycle     = 0;     // counts the number of batch cycles

			// Recovers the uploaded file
			$file = $form->get('importFile')->getData();
			$mimeType = $file->getMimeType();
			$clientOriginaFilelName = $file->getClientOriginalName();

			// File type verification
			if(($mimeType !== 'text/csv') && (FALSE == preg_match('/\.csv/i', $clientOriginaFilelName))) {
				Throw new HttpException(400, "The file must be a csv (the file MIME type should be 'text/csv' or the file name should contain '.csv').");
			}

			// Moves the uploaded file
			$name = $file->getClientOriginalName();
			$dir = __DIR__.'/../../../../web/uploads/import/biblio';
			$file->move($dir, $name);

			// Variables
			$import = $ioHelpers->csv_to_array($dir.'/'.$name, ';');		// pushes the csv data into an array
			$countImports = 0;

			// Truncate the table
			$em = $this->getDoctrine()->getManager();
			$connection = $em->getConnection();
			$platform   = $connection->getDatabasePlatform();
			$connection->executeUpdate($platform->getTruncateTableSQL('eveg_baseflor', true /* whether to cascade */));
			$em->clear();

			// Adding
			foreach ($import as $key => $importedRow) {
				$sp = new Baseflor;
				$sp
					->setTaxonomicRang($importedRow['taxonomic_rang'])
					->setCatminatCode($importedRow['catminat_code'])
					->setBdnffTaxinId($importedRow['bdnff_taxin_id'])
					->setBdnffNomenId($importedRow['bdnff_nomen_id'])
					->setScientificName($importedRow['scientific_name'])
					->setRepartition($importedRow['repartition'])
					->setInflorescence($importedRow['inflorescence'])
					->setSexuality($importedRow['sexuality'])
					->setPollination($importedRow['pollination'])
					->setFruit($importedRow['fruit'])
					->setDissemination($importedRow['dissemination'])
					->setFlowerColor($importedRow['flower_color'])
					->setMacula($importedRow['macula'])
					->setFlowering($importedRow['flowering'])
					->setWoodType($importedRow['wood_type'])
					->setMaxVegetativeHeight($importedRow['max_vegetative_height'])
					->setBiologicalType($importedRow['biological_type'])
					->setPlantFormation($importedRow['plant_formation'])
					->setEcologicalCharacterization($importedRow['ecological_characterization'])
					->setPhytoCharacteristicIndication($importedRow['phytosociological_characteristic_indication'])
					->setTransgressiveCharacteristicIndication($importedRow['transgressive_characteristic_indication'])
					->setDifferentialIndication1($importedRow['differential_indication_1'])
					->setDifferentialIndication2($importedRow['differential_indication_2'])
					->setDifferentialIndication3($importedRow['differential_indication_3'])
					->setPjLight($importedRow['pj_light'])
					->setPjTemperature($importedRow['pj_temperature'])
					->setPjContinentality($importedRow['pj_continentality'])
					->setPjAtmosphericHumidity($importedRow['pj_atmospheric_humidity'])
					->setPjSoilHumidity($importedRow['pj_soil_humidity'])
					->setPjSoilPh($importedRow['pj_soil_ph'])
					->setPjTrophicLevel($importedRow['pj_trophic_level'])
					->setPjSalinity($importedRow['pj_salinity'])
					->setPjTexture($importedRow['pj_texture'])
					->setPjOrganicMaterial($importedRow['pj_organic_material'])
					->setElLight($importedRow['el_light'])
					->setElTemperature($importedRow['el_temperature'])
					->setElContinentality($importedRow['el_continentality'])
					->setElHumidity($importedRow['el_humidity'])
					->setElPh($importedRow['el_ph'])
					->setElNutrients($importedRow['el_nutrients'])
					->setElSalinity($importedRow['el_salinity'])
					->setKindgom($importedRow['kingdom'])
					->setBranch($importedRow['branch'])
					->setSubBranch($importedRow['sub_branch'])
					->setClass($importedRow['class'])
					->setSubClass($importedRow['sub_class'])
					->setIntermediateClade1($importedRow['intermediate_clade_1'])
					->setIntermediateClade2($importedRow['intermediate_clade_2'])
					->setIntermediateClade3($importedRow['intermediate_clade_3'])
					->setSuperOrder($importedRow['super_order'])
					->setIntermediateClade4($importedRow['intermediate_clade_4'])
					->setOrder($importedRow['order'])
					->setSubOrder($importedRow['sub_order'])
					->setFamily($importedRow['family'])
					->setSubFamily($importedRow['sub_family'])
					->setTribe($importedRow['tribe'])
					->setSubTribe($importedRow['sub_tribe'])
					->setSection($importedRow['section'])
					->setSubSection($importedRow['sub_section'])
					->setSerie($importedRow['serie'])
					->setPhytobaseId($importedRow['phytobase_id'])
					->setPhytobaseName($importedRow['phytobase_name'])
				;
				$em->persist($sp);
				$countImports++;

				// Flush and detach entities each $batchSize time
				if (($i % $batchSize) === 0) {
			        $em->flush();
			        for ($i=($cycle*$batchSize)+$i; $i < $i=($cycle*$batchSize)+$i+$batchSize; $i++) { 
			        	$em->detach($entities[($cycle*$batchSize)+$i]);
			        }
			        $cycle = $cycle+1;
			    }
				$i = $i+1;

			}

			// Flush the last entities (the last batch cycle may not be full)
	        $em->flush();
		    $em->clear();

			// Flash and return
	        $this->get('session')->getFlashBag()->add(
	            'success',
	            $countImports.' données ont été importées (baseflor).'
	        );

	        return $this->render('evegAppBundle:Admin:importBaseflor.html.twig', array(
				'form' => $form->createView()
			));

		}

		return $this->render('evegAppBundle:Admin:importBaseflor.html.twig', array(
			'form' => $form->createView()
		));
	}

	public function logsAction()
	{

		$em = $this->getDoctrine()->getManager();

		$logsGroupedByDate = $em->getRepository('evegAppBundle:ImportLog')->findGroupedByDate();
		$logs              = $em->getRepository('evegAppBundle:ImportLog')->findAll();

		return $this->render('evegAppBundle:Admin:importLogs.html.twig', array(
			'logs' 		 => $logs,
			'logsByDate' => $logsGroupedByDate
		));		
	}
}