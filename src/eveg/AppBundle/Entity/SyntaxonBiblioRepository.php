<?php

namespace eveg\AppBundle\Entity;

/**
 * SyntaxonBiblioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SyntaxonBiblioRepository extends \Doctrine\ORM\EntityRepository
{
	public function findDistinctReferences()
	{
		$qb = $this->createQueryBuilder('b');

		$qb->select('b.reference')
			->groupBy('b.reference')
			->orderBy('b.reference', 'ASC');

		return $qb->getQuery()->getResult();
	}
}
