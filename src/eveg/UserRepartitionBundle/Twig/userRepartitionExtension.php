<?php
// eveg/src/UserRepartitionBundle/Twig/userRepartitionExtension.php

namespace eveg\UserRepartitionBundle\Twig;


class userRepartitionExtension extends \Twig_Extension
{
	private $conflictsHelper;
	private $repartitionTablesHelper;

	public function __construct($conflictsHelper, $repartitionTablesHelper)
	{
		$this->conflictsHelper = $conflictsHelper;
		$this->repartitionTablesHelper = $repartitionTablesHelper;
	}

	public function getFunctions()
	{
		return array(
			new \Twig_SimpleFunction('depFrShapeValue', array($this, 'depFrShapeValue')),
			new \Twig_SimpleFunction('getRepFrFullNameFromShape', array($this, 'getRepFrFullNameFromShape')),
			new \Twig_SimpleFunction('getRepartitionDescriptionFromValue', array($this, 'getRepartitionDescriptionFromValue')),
		);
	}

	/**
	 * Returns the value of a syntaxon->repartitionDepFr->getXX form (string) $shape
	 * eg: $shape = "_46" return $syntaxon->getRepartitionDepFr->get46();
	 * 
	 * @var string        $shape
	 * @var \SyntaxonCore $syntaxon
	 */
	public function depFrShapeValue($shape, $syntaxon)
	{
		return $this->conflictsHelper->getSDepFrShape($shape, $syntaxon);
	}

	/**
	 * Returns the full name of a shape from its code
	 * eg: $shape = "_46" return "[46] Lot";
	 * 
	 * @var string        $shape
	 */
	public function getRepFrFullNameFromShape($shape)
	{
		$depFrTable = $this->repartitionTablesHelper->getDepFrFullNamesTable();

		foreach ($depFrTable as $key => $value) {
			if($key == $shape) {
				$result = $value;
				break;
			}
		}

		return ($result ? $result : null);
	}

	public function getRepartitionDescriptionFromValue($value)
	{
		$repartitionsTable = $this->repartitionTablesHelper->getRepartitionValuesTable();

		foreach ($repartitionsTable as $key => $v) {
			if($key == $value) {
				$result = $v;
				break;
			}
		}

		return ($result ? $result : null);
	}

	public function getName()
	{
		return 'user_repartition_extension';
	}
}