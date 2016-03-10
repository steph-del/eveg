<?php

namespace eveg\AppBundle\Entity;

/**
 * SyntaxonNoteRepository
 *
 */
class SyntaxonNoteRepository extends \Doctrine\ORM\EntityRepository
{
	public function getUserNote($user, $syntaxon)
	{
		$qb = $this->createQueryBuilder('n');

		$qb->select('n')
			->where('n.user = :user')
			->setParameter('user', $user)
			->andWhere('n.syntaxonCore = :syntaxon')
			->setParameter('syntaxon', $syntaxon);

		 return $qb->getQuery()->getResult();
	}
}
