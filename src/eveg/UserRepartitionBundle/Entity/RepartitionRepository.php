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
}
