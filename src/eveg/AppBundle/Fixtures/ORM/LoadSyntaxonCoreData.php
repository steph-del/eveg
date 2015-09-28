<?php
// src/eveg/AppBundle/DataFixtures/ORM/LoadSyntaxonCoreData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use eveg\AppBundle\Entity\SyntaxonCore;

class LoadSyntaxonCoreData implements FixtureInterface
{
	/**
     * {@inheritDoc}
     */
	public function load(ObjectManager $manager)
	{
		$SC1 = new SyntaxonCore();
			$SC1->setId(1);
			// ...

		
		$manager->persist($SC1);
        $manager->flush();
	}
}