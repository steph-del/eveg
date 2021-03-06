<?php

namespace eveg\AppBundle\Entity;

/**
 * BaseflorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BaseflorRepository extends \Doctrine\ORM\EntityRepository
{
	public function findByCatminatCode($catminatCode)
	{
		$qb = $this->createQueryBuilder('b');

		// specify the fields to fetch (unselected fields will have a null value)
		$qb->select("b.bdnffTaxinId, b.bdnffNomenId, b.catminatCode, b.scientificName")
			->where('b.catminatCode = :catminatCode')
			->andWhere('b.repartition not like :introduced')
			->setParameter('catminatCode', $catminatCode)
			->setParameter('introduced', '%introduit%')
			->orderBy('b.scientificName', 'ASC');
			;

		return $qb->getQuery()->getResult();
	}

	public function findEcologicalAverageByCatminatCode($catminatCode)
	{
		$qb = $this->createQueryBuilder('b');

		$qb->select("AVG(b.pjLight) pjLightAvg, 
					 AVG(b.pjTemperature) pjTemperatureAvg, 
					 AVG(b.pjContinentality) pjContinentalityAvg,
					 AVG(b.pjAtmosphericHumidity) pjAtmosphericHumidityAvg, 
					 AVG(b.pjSoilHumidity) pjSoilHumidityAvg, 
					 AVG(b.pjSoilPh) pjSoilPhAvg,
					 AVG(b.pjTrophicLevel) pjTrophicLevelAvg, 
					 AVG(b.pjSalinity) pjSalinityAvg, 
					 AVG(b.pjTexture) pjTextureAvg, 
					 AVG(b.pjOrganicMaterial) pjOrganicMaterialAvg")
			->where('b.catminatCode = :catminatCode')
			->setParameter('catminatCode', $catminatCode)
			;
		return $qb->getQuery()->getResult();
	}
}
