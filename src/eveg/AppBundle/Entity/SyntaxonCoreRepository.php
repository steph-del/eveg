<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * SyntaxonCoreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SyntaxonCoreRepository extends EntityRepository
{

	// Returns the tree trunk (Ajax call from FancyTree)
	public function getBaseTree($depFrFilter = null, $exclusive = false)
	{
		$qb = $this->createQueryBuilder('s');

		// specify the fields to fetch (unselected fields will have a null value)
		$qb->select('s')
			->where('s.level = :level')
			->setParameter('level', 'HAB');

		// Department filter
		if($depFrFilter != null) {
			$this->departmentFrFilter($qb, $depFrFilter, $exclusive);
		}

		$tree = $qb->getQuery()->getResult();

		return $tree;
	}

	// Returns children nodes of the $id node (Ajax call from FancyTree)
	public function getNextTreeNode($id, $nextLevel, $depFrFilter = null, $exclusive = false)
	{
		
		// Grabbing syntaxon from $id
			$qb = $this->createQueryBuilder('s');

			$qb->select('s')
				->where('s.id = :id')
				->setParameter('id', $id);

			$syntaxon = $qb->getQuery()->getSingleResult();

			$catminatCode = $syntaxon->getCatminatCode();

		// Grabbing children
			$qb = $this->createQueryBuilder('s');

			$qb->select('s')
				->where('s.catminatCode LIKE :catminatCode')
				->andWhere('s.catminatCode != :catminatCodeSimple')
				->andWHere('s.level = :nextLevel')
				->setParameter('catminatCode', $catminatCode.'%')
				->setParameter('catminatCodeSimple', $catminatCode)
				->setParameter('nextLevel', $nextLevel)
				->orderBy('s.catminatCode', 'ASC');

		// Department filter
			if($depFrFilter != null) {
				$this->departmentFrFilter($qb, $depFrFilter, $exclusive);
			}
			
		return $qb->getQuery()->getResult();

	}

	// Returns the children of one catminat code
	public function getChildren($catminatCode, $returnArray = false)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
			->where('s.catminatCode LIKE :catminatCode')
			->andWhere('s.catminatCode != :catminatCodeSimple')
			->setParameter('catminatCode', $catminatCode.'%')
			->setParameter('catminatCodeSimple', $catminatCode)
			->orderBy('s.catminatCode', 'ASC');

		if($returnArray == true) {
			return $qb->getQuery()->getArrayResult();
		} else {
			return $qb->getQuery()->getResult();
		}
	}

	// Returns the first child of one catminat code
	public function getDirectChild($catminatCode, $returnArray = false)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
			->where('s.catminatCode LIKE :catminatCode')
			->andWhere('s.catminatCode != :catminatCodeSimple')
			->setParameter('catminatCode', $catminatCode.'%')
			->setParameter('catminatCodeSimple', $catminatCode)
			->orderBy('s.catminatCode', 'ASC')
			->setMaxResults(1);

		if($returnArray == true) {
			return $qb->getQuery()->getArrayResult();
		} else {
			return $qb->getQuery()->getResult();
		}
		
	}

	// Returns direct children of one catminat code
	public function getDirectChildren($catminatCode, $nextLevel)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
			->where('s.catminatCode LIKE :catminatCode')
			->andWhere('s.catminatCode != :catminatCodeSimple')
			->andWHere('s.level = :nextLevel')
			->setParameter('catminatCode', $catminatCode.'%')
			->setParameter('catminatCodeSimple', $catminatCode)
			->setParameter('nextLevel', $nextLevel)
			->orderBy('s.catminatCode', 'ASC');

		return $qb->getQuery()->getResult();

	}

	// Returns all objects from their catminatCodes (listed in $array)
	public function findAllByCatminatCodes($array)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
			->where('s.catminatCode = :catminatCode')
			->setParameter('catminatCode', $array);

		return $qb->getQuery()->getResult();

	}

	// Returns data for the search engine
	public function findForSearchEngine($searchedTerm, $useSynonyms = true, $depFrFilter = null, $exclusive = false)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
		   ->where(
		   	$qb->expr()->like(
		   			$qb->expr()->concat('s.syntaxonName', 's.syntaxonAuthor'),
		   			':searchedTerm')
		   	)
		   ->groupBy('s.syntaxonName')
		   ->addGroupBy('s.syntaxonAuthor')
		   ->setParameter('searchedTerm', $searchedTerm);
//print($qb->getQuery()->getSql());

		// Synonym filter
		if ($useSynonyms == false || $useSynonyms == "false") {
			$qb->andWhere('s.level NOT LIKE :syn')
			   ->setParameter('syn', '%syn%');
		}

		// Department filter
		if($depFrFilter != null) {
			$this->departmentFrFilter($qb, $depFrFilter, $exclusive);
		}
		//return print($depFrFilter);
		//print($qb->getQuery()->getSql());
		return $qb->getQuery()->getResult();

	}

	/**
	 * departmentFrFilter function
	 * adds a filter in order to select only french departments within selected vegetations are presents (!= zero)
	 *
	 * @param QueryBuilder $qb
	 * @param string $depFrFilter JSON data (ex: '{_59: "_59", _62: "_62")}' will add a filter for 2 departments)
	 * @param bool $exclusive TRUE : to be selected one vegetation have to be present in every departments (limit the number of results) ; FALSE : it only has to be present in one department of the filter (default)
	 */
	public function departmentFrFilter(QueryBuilder $qb, $depFrFilter, $exclusive)
	{
		$orModule = $qb->expr()->orx();
		$andModule = $qb->expr()->andx();
		$module = ($exclusive ? $andModule : $orModule);
		$qb->leftJoin('s.repartitionDepFr', 'repDepFr')
	   	   ->addSelect('repDepFr');

		foreach ($depFrFilter as $key => $value) {
			if($value != null) {
				//$key = "_59";
				$module->add($qb->expr()->neq('repDepFr.'.$key, ':zero'));
			}
		}
		$qb->andWhere($module)->setParameter('zero', 0);
	}

	public function findBySyntaxon($syntaxonName, $syntaxonAuthor)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
			->where('s.syntaxonName = :syntaxonName')
			->andWhere('s.syntaxonAuthor = :syntaxonAuthor')
			->setParameter('syntaxonName', $syntaxonName)
			->setParameter('syntaxonAuthor', $syntaxonAuthor);

		return $qb->getQuery()->getResult();
	}

	public function findValidSyntaxonByCatminatCode($catminatCode)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->add('where', $qb->expr()->in('s.catminatCode', ':array'))
			->setParameter('array', $catminatCode);
		$qb->andWhere($qb->expr()->notLike('s.level', $qb->expr()->literal('syn%')));
		$qb->orderBy('s.catminatCode', 'ASC');

		return $qb->getQuery()->getResult();
	}
	
	public function findValidOneByCatminatCode($catminatCode)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
			->where('s.catminatCode = :catminatCode')
			->setParameter('catminatCode', $catminatCode);
		$qb->andWhere($qb->expr()->notLike('s.level', $qb->expr()->literal('syn%')));
		$qb->orderBy('s.catminatCode', 'ASC');

		return $qb->getQuery()->getResult();
	}

	public function getSynonyms($catminatCode)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
		   ->where('s.catminatCode = :catminatCode')
		   ->setParameter('catminatCode', $catminatCode)
		   ->andWhere("s.level LIKE 'syn%'");

		  return $qb->getQuery()->getResult();
	}

	public function findByIdWithAllEntities($id)
	{
		$qb = $this->createQueryBuilder('s');

		$qb->select('s')
		   ->where('s.id = :id')
		   ->setParameter('id', $id)
		   ->leftJoin('s.repartitionDepFr', 'repDepFr')
		   ->addSelect('repDepFr');

		  return $qb->getQuery()->getOneOrNullResult();
	}

}
