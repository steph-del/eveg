<?php

namespace eveg\UserRepartitionBundle\Entity;

use eveg\AppBundle\Entity\SyntaxonCore;

/**
 * RepartitionBundleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RepartitionRepository extends \Doctrine\ORM\EntityRepository
{
	/**
	* @var syntaxon \SyntaxonCore
	*/
	public function findValidRepartitionBySyntaxonCore(SyntaxonCore $syntaxon)
	{
		$qb = $this->createQueryBuilder('r');

		$qb->select('r')
		   ->where('r.syntaxonCore = :syntaxon')
		   ->andWhere('r.validated = :true')
		   ->andWhere('r.enabled = :true')
		   ->setParameter('syntaxon', $syntaxon)
		   ->setParameter('true', true)
		;

		return $qb->getQuery()->getResult();
	}

	public function findUnresolvedRepartitions()
	{
		$qb = $this->createQueryBuilder('r');

		$qb->select('r')
		   ->where('r.validated = :false')
		   ->leftJoin('r.conflicts', 'conflicts')
		   ->addSelect('conflicts')
		   ->setParameter('false', false)
		;

		return $qb->getQuery()->getResult();
	}

	/**
	* @var syntaxon \SyntaxonCore
	*/
	public function findEnabledRepartitionBySyntaxonCore(SyntaxonCore $syntaxon)
	{
		$qb = $this->createQueryBuilder('r');

		$qb->select('r')
		   ->where('r.syntaxonCore = :syntaxon')
		   ->andWhere('r.enabled = :true')
		   ->setParameter('syntaxon', $syntaxon)
		   ->setParameter('true', true)
		;

		return $qb->getQuery()->getResult();
	}

	/**
	* @var syntaxon \SyntaxonCore
	* @var string   $depFr
	*/
	public function findEnabledRepartitionBySyntaxonCoreForDepFr(SyntaxonCore $syntaxon, $depFr)
	{
		$qb = $this->createQueryBuilder('r');

		$qb->select('r')
		   ->where('r.syntaxonCore = :syntaxon')
		   ->andWhere('r.enabled = :true')
		   ->andWhere('r.shape = :depFr')
		   ->setParameter('syntaxon', $syntaxon)
		   ->setParameter('true', true)
		   ->setParameter('depFr', $depFr)
		;

		return $qb->getQuery()->getResult();
	}
}
