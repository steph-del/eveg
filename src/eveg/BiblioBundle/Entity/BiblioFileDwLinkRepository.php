<?php

namespace eveg\BiblioBundle\Entity;

/**
 * BiblioFilDwLinkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BiblioFileDwLinkRepository extends \Doctrine\ORM\EntityRepository
{
	public function getLinkWithFile($dwKey)
	{
		$qb = $this->createQueryBuilder('l');

		$qb->select('l')
		   ->where('l.dwKey = :dwKey')
		   ->leftJoin('l.file', 'files')
		   ->setParameter('dwKey', $dwKey)
		   ->addSelect('files')
		   ;
		return $qb->getQuery()->getSingleResult();
	}
}
