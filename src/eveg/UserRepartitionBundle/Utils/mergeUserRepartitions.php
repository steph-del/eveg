<?php
// src/eveg/UserRepartitionBundle/Utils/mergeUserRepartitions.php

namespace eveg\UserRepartitionBundle\Utils;

use eveg\AppBundle\Entity\SyntaxonCore;

/**
 *	Utilities to merge users repartitions data before show them on maps
 *
 */
class mergeUserRepartitions
{
	private $SCRepo;
	private $URepRepo;

	public function __construct($SCRepo, $URepRepo)
	{
		$this->SCRepo   = $SCRepo;
		$this->URepRepo = $URepRepo;
	}

	/**
	* @var syntaxon \SyntaxonCore
	*/
	public function mergeObsForSyntaxon(SyntaxonCore $syntaxon)
	{
		$repartitions = $this->URepRepo->findValidRepartitionBySyntaxonCore($syntaxon);

		$depFrShapes = $this->getDepFrShapesTable();

		foreach ($repartitions as $kRep => $vRep) {
			$shape = $vRep->getShape();
			$value = $vRep->getValue();

			// If shape is empty, add the value, else, compare the values
			if(($depFrShapes[$shape] == null)) {
				$depFrShapes[$shape] = $value;
			} else {
				// Same values
				if($depFrShapes[$shape] == $value) {
					// do nothing, value already exists
				} else {
					// returns empty table
					return $this->getDepFrShapesTable();
				}
			}
			
		}
		return $depFrShapes;
	}

	private function getDepFrShapesTable()
	{
		$depFrShapeChoices = array(
            "_01" => null,
            "_02" => null,
            "_03" => null,
            "_04" => null,
            "_05" => null,
            "_06" => null,
            "_07" => null,
            "_08" => null,
            "_09" => null,
            "_10" => null,
            "_11" => null,
            "_12" => null,
            "_13" => null,
            "_14" => null,
            "_15" => null,
            "_16" => null,
            "_17" => null,
            "_18" => null,
            "_19" => null,
            "_2a" => null,
            "_2b" => null,
            "_21" => null,
            "_22" => null,
            "_23" => null,
            "_24" => null,
            "_25" => null,
            "_26" => null,
            "_27" => null,
            "_28" => null,
            "_29" => null,
            "_30" => null,
            "_31" => null,
            "_32" => null,
            "_33" => null,
            "_34" => null,
            "_35" => null,
            "_36" => null,
            "_37" => null,
            "_38" => null,
            "_39" => null,
            "_40" => null,
            "_41" => null,
            "_42" => null,
            "_43" => null,
            "_44" => null,
            "_45" => null,
            "_46" => null,
            "_47" => null,
            "_48" => null,
            "_49" => null,
            "_50" => null,
            "_51" => null,
            "_52" => null,
            "_53" => null,
            "_54" => null,
            "_55" => null,
            "_56" => null,
            "_57" => null,
            "_58" => null,
            "_59" => null,
            "_60" => null,
            "_61" => null,
            "_62" => null,
            "_63" => null,
            "_64" => null,
            "_65" => null,
            "_66" => null,
            "_67" => null,
            "_68" => null,
            "_69" => null,
            "_70" => null,
            "_71" => null,
            "_72" => null,
            "_73" => null,
            "_74" => null,
            "_75" => null,
            "_76" => null,
            "_77" => null,
            "_78" => null,
            "_79" => null,
            "_80" => null,
            "_81" => null,
            "_82" => null,
            "_83" => null,
            "_84" => null,
            "_85" => null,
            "_86" => null,
            "_87" => null,
            "_88" => null,
            "_89" => null,
            "_90" => null,
            "_91" => null,
            "_92" => null,
            "_93" => null,
            "_94" => null,
            "_95" => null,
        );
		
		return $depFrShapeChoices;
	}
}