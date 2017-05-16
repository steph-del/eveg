<?php

namespace eveg\PsiBundle\Entity;

/**
 * NodeRepository
 *
 */
class NodeRepository extends \Doctrine\ORM\EntityRepository
{
	public function findById($id)
	{
		$qb = $this->createQueryBuilder('n');

		$qb->select('n')
			->where('b.id = :id')
			->setParameter('id', $id)
			;

		return $qb->getQuery()->getArrayResult();
	}
}