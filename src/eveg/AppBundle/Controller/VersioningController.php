<?php
// src/eveg/AppBundle/Controller/VersioningController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VersioningController extends Controller
{
	public function listAction()
	{

		$em = $this->getDoctrine()->getManager();

		$dbRepo  = $em->getRepository('evegAppBundle:SyntaxonCore');
		$logRepo = $em->getRepository('evegAppBundle:SyntaxonLog');

		$logs 	 = $logRepo->getUniqueLogEntriesByClassName('eveg\AppBundle\Entity\SyntaxonCore');
		$countLogs = $logRepo->countUniqueLogEntriesByClassName('eveg\AppBundle\Entity\SyntaxonCore');

		$ids = array();
		foreach ($logs as $key => $log) {
			array_push($ids, (int)$log->getObjectId());
		}

		$syntaxonNames = $dbRepo->findNamesById($ids);

		$finalLogs = array();
		$temp = array();
		foreach ($logs as $key => $log) {
			$id = $log->getObjectId();
			$temp[0] = $id;

			foreach ($syntaxonNames as $keySName => $sName) {
				if($sName['id'] == $id) {
					$temp[1] = $sName['syntaxonName'].' '.$sName['syntaxonAuthor'];
					continue;
				}
			}

			foreach ($countLogs as $keyCounter => $counter) {
				if($counter['objectId'] == $id) {
					$temp[2] = $counter[1];
					continue;
				}
			}

			array_push($finalLogs, $temp);
		}

		return $this->render('evegAppBundle:Admin:versioning_list.html.twig', array(
			'logs' 		=> $finalLogs
		));
	}

	public function showOneAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$dbRepo  = $em->getRepository('evegAppBundle:SyntaxonCore');
		$logRepo = $em->getRepository('evegAppBundle:SyntaxonLog');

		$dbEntity  = $dbRepo->findOneById($id);
		$logEntities = $logRepo->findById($id, $objectClassName = 'eveg\AppBundle\Entity\SyntaxonCore');

		return $this->render('evegAppBundle:Admin:versioning_show_one.html.twig', array(
			'dbEntity' => $dbEntity,
			'logEntities' => $logEntities
		));
	}
}