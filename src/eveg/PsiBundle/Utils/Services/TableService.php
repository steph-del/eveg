<?php
// src/eveg/PsiBundle/Utils/Services/TableService.php

namespace eveg\PsiBundle\Utils\Services;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Response;
use eveg\PsiBundle\Entity\Node;
use eveg\PsiBundle\Entity\Table;
use eveg\PsiBundle\Entity\TableNode;

/**
 * Table utilities
 *
 */
class TableService
{
	private $em;

	public function __construct($entityManager)
	{
		$this->em = $entityManager;
	}

	public function addNodes(Table $table, $nodes, $position = null, $groupSocio = null)
	{
		foreach ($nodes as $tableNode => $node) {
			if(!$node instanceof Node) throw new HttpException(500, $node->getName().' must be an instance of a Node object.');
			$tableNode = new TableNode();
			$this->em->persist($tableNode);

			$tableNode->setNode($node);
	    	$tableNode->setTable($table);
	    	$tableNode->setPosition($position);
	    	// TODO : vérifier les doublons de position. Si un doublon de position est détecté, il est placé à la fin du tableau.
	    	$tableNode->setGroupSocio($groupSocio);
	    	//$table->addNode($node);
//dump($tableNode);
		}

    	$this->em->flush();
	}
}