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

	public function getAllNotIdiotaxons()
	{
		$qb = $this->createQueryBuilder('n');

		$qb->select('n')
		   ->leftJoin('n.children', 'children')
		   ->leftJoin('children.validations', 'childrenValidations')
		   ->leftJoin('n.validations', 'validations')
		   ->addSelect('children')
		   ->addSelect('childrenValidations')
		   ->addSelect('validations')
		   ->where('n.level != :idiot')
		   ->setParameter('idiot', 'idiotaxon')
		   ;

		return $qb->getQuery()->getArrayResult();
	}
}