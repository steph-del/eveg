<?php

namespace eveg\AppBundle\Entity;

/**
 * SyntaxonPhotoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SyntaxonPhotoRepository extends \Doctrine\ORM\EntityRepository
{
	public function getPublicPhotosOrderByDatetime($limitResults = null, $since = null)
	{
		$qb = $this->createQueryBuilder('p');

		$qb->select('p')
			->andWhere('p.visibility = :public')
			->orderBy('p.uploadedAt', 'DESC')
			->leftJoin('p.user', 'user')
			->leftJoin('p.syntaxonCore', 'score')
			->setParameter('public', 'public')
			->addSelect('user')
			->addSelect('score')
			;
		if($limitResults) {
			$qb->setMaxResults($limitResults);
		}
		if($since) {
			$qb->andWhere('p.uploadedAt > :since')
			   ->setParameter('since', $since);
		}

		return $qb->getQuery()->getResult();
	}

	public function getNbPublic()
	{
		$qb = $this->createQueryBuilder('p');

		$qb->select('COUNT(p)')
		   ->where('p.visibility = :public')
		   ->setParameter('public', 'public')
		   ;

		return $qb->getQuery()->getSingleScalarResult();
	}

	public function getNb()
	{
		$qb = $this->createQueryBuilder('p');

		$qb->select('COUNT(p)');

		return $qb->getQuery()->getSingleScalarResult();
	}
}
