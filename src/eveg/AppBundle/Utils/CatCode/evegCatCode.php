<?php
// src/eveg/AppBundle/CatCode/evegCatCode.php

namespace eveg\AppBundle\Utils\CatCode;

//use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException;
use eveg\AppBundle\Entity\SyntaxonCore;
//use eveg\AppBundle\Entity\SyntaxonCoreRepository;

class evegCatCode
{
	/**
	* evegCatCode : shaking the catminat code to get its juice !
	* 	- input $text must be a string variable : a catminat code
	*	- different functions are provided to verify the consistency of the code, to clean the code, to return the parent code...
	* 
	* in the following, we name the different parts of a catminat code as :
	* 	(exemple : 01/1.2.3/04)
	* 	01    is the habCode
	* 	1.2.3 is the coreCode (named $aferOneSlash or $betweenSlashes)
	* 	04    is the assCode
	* 
	*/

	private $catCodeRepo;

	public function __construct($CatCodeUseRepository)
	{
		$this->catCodeRepo = $CatCodeUseRepository;
	}

	public function testCatminat($text){

		$firstSlash = $this->findFirstSlash($text);
		$lastSlash = null;
		$assCode = $this->getAssCode($text);
		$nbSlashes = $this->getNbSlashes($text);
		$coreCode = $this->getCoreCode($text);
		$habCode = $this->getHabCode($text);
		$exploded = $this->explodeCatminat($coreCode);
		$level = $this->getLevel($text);
		$cleaned = $this->cleanCode($text);
		$directChild = $this->getDirectChild($text);
			
		return array('nbSlashes' => $nbSlashes,
					 'firstSlash' => $firstSlash,
					 'lastSlash' => $lastSlash,
					 'habCode' => $habCode,
					 'coreCode' => $coreCode,
					 'assCode' => $assCode,
					 'exploded' => $exploded,
					 'level' => $level,
					 'cleaned' => $cleaned,
					 'directChild' => $directChild,
					 );
		
	}
	
	private function getNbSlashes($text){
		
		$nbSlashes = $this->countSlashes($text);
		
		if ($nbSlashes > 2){
			throw new evegCatCodeException('There is an error in the CATMINAT code "'.$text.'" : it contains more than two slashes.');
		} elseif ($nbSlashes == 0) {
			throw new evegCatCodeException('There is an error in the CATMINAT code "'.$text.'" : no one slash detected.');
		}
		
		return $nbSlashes;
		
	}
		
	private function countSlashes($text){
		
		return substr_count($text,"/");
		
	}
	
	private function findFirstSlash($text){
		$firstSlashOffset = 0;
		$firstSlashOffset = strpos($text,'/');
		
		return $firstSlashOffset;
		
	}
	
	private function findLastSlash($text){
		$lastSlahOffset = 0;
		$lastSlahOffset = strrpos($text,'/');
		
		return $lastSlahOffset;
		
	}
	
	private function getHabCode($text){
		
		$beforeSlash = substr($text, 0, ($this->findFirstSlash($text)));
		
		return $beforeSlash;
		
	}
	
	private function getBetweenSlashes($text){
		
		$betweenSlashes = substr($text,
								 $this->findFirstSlash($text)+1,
								 $this->findLastSlash($text)-$this->findFirstSlash($text)-1);
		
		return $betweenSlashes;
		
	}
	
	private function getAfterOneSlash($text){
		
		$afterOneSlash = substr($text, $this->findFirstSlash($text)+1);
		
		return $afterOneSlash;
		
	}
	
	private function getCoreCode($text){
		
		$nbSlashes = $this->getNbSlashes($text);
		
		if($nbSlashes == 1){
		
			return $this->getAfterOneSlash($text);
			
		} elseif($nbSlashes == 2){
			
			return $this->getBetweenSlashes($text);
		
		}
	}
	
	private function getAssCode($text){
		
		$afterSlash = substr($text, $this->findLastSlash($text)+1);
		
		return $afterSlash;
		
	}
	
	private function explodeCatminat($text){
		
		$exploded = explode('.', $text);
		
		return $exploded;
		
	}
	
	private function getLevel($text){
		
		$text = $this->cleanCode($text);
		
		$nbSlashes = $this->getNbSlashes($text);
		
		if($nbSlashes == 1){
			$betweenSlashes = substr($text,
								 $this->findFirstSlash($text)+1);
		} elseif($nbSlashes == 2){
			$betweenSlashes = substr($text,
								 $this->findFirstSlash($text)+1,
								 $this->findLastSlash($text)-$this->findFirstSlash($text)-1);
		} elseif($nbSlashes == 0){
			throw new evegCatCodeException('A catminat code must contain at less one slash !');
		}
		
		$exploded = explode('.', $betweenSlashes);
	
		$long = count($exploded);
		
		// if habitat
		if($nbSlashes == 1 and $betweenSlashes == ''){
			return 'HAB';
		}
		
		// if association (2 slashes)
		if($nbSlashes == 2){
			$assCode = $this->getAssCode($text);
			
			if(preg_match("/^[0-9]{1,2}$/", $assCode)){
				return 'ASS';
			} elseif(preg_match("/^[0-9]{1,2}(bis|ter|quater|quinquies|sexies|septies|octies|nonies|decies)$/", $assCode)){
				return 'SUBASS';
			}

		}
		
		switch($long){
			case 0:
				throw new \Exception('The getLevel function (evegCatCode class) returned an error. The catminat code seems to be wrong !');
				break;
			case 1:
				return 'CLA';
				break;
			case 2:
				return 'SUBCLA';
				break;
			case 3:
				return 'ORD';
				break;
			case 4:
				return 'SUBORD';
				break;
			case 5:
				return 'ALL';
				break;
			case 6:
				return 'SUBALL';
				break;
		}
		
		if($long>6){
			throw new \Exception('The getLevel function (evegCatCode class) returned an error. The catminat code seems to be wrong !');

		}
		
	}

	public function getNextLevel($catminatCode, $jump = 1)
	{
		if($jump == 1) {
			switch($catminatCode){
				case 'HAB':
					return 'CLA';
					break;
				case 'CLA':
					return 'SUBCLA';
					break;
				case 'SUBCLA':
					return 'ORD';
					break;
				case 'ORD':
					return 'SUBORD';
					break;
				case 'SUBORD':
					return 'ALL';
					break;
				case 'ALL':
					return 'SUBALL';
					break;
				case 'SUBALL':
					return 'ASS';
					break;
				case 'GRASS':
				    return 'ASS';
				    break;
				case 'ASS':
					return 'SUBASS';
					break;
			}
		} elseif($jump == 2) {
			switch($catminatCode){
				case 'HAB':
					return 'SUBCLA';
					break;
				case 'CLA':
					return 'ORD';
					break;
				case 'SUBCLA':
					return 'SUBORD';
					break;
				case 'ORD':
					return 'ALL';
					break;
				case 'SUBORD':
					return 'SUBALL';
					break;
				case 'ALL':
					return 'ASS';
					break;
				case 'SUBALL':
					return 'SUBASS';
					break;
				case 'ASS':
					throw new evegCatCodeException("Error in catCode:getNextLevel. Can't provide nextLevel*2 for an ASS.");
					break;
			}
		}
		
		throw new evegCatCodeException("Error in catCode:getNextLevel.");
		
	}
	
	private function cleanCode($text){
		
		$nbChar = strlen($text);
		$truncated = substr($text, $nbChar-1);
		
		if($truncated == '.'){
			return substr($text, 0, $nbChar-1);
		} else {
			return $text;
		}
		
	}
	
	public function getLevelCode($catminatCode, $levelAsked){
		
		/**
		*
		* Gives the asked level code ('ASS', 'ALL', 'SUBORD') of the $catminatCode
		*
		*/
		
		// initializing variables
		$catminatLevel = $this->getLevel($catminatCode);
		$habCode = $this->getHabCode($catminatCode);
		//if($catminatLevel == 'CLA' or 'SUBCLA' or 'ORD' or 'SUBORD' or 'ALL' or 'SUBALL' or 'ASS' or 'SUBASS'){
			$coreCode = $this->getCoreCode($catminatCode);
		//}
		//if($catminatLevel == 'ASS' or 'SUBASS'){
			$assCode = $this->getAssCode($catminatCode);
		//}
		
		switch($levelAsked){
			case 'HAB':
				if($catminatLevel == 'CLA' or 'SUBCLA' or 'ORD' or 'SUBORD' or 'ALL' or 'SUBALL' or 'ASS' or 'SUBASS'){
					
					$output = $habCode . '/';
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
				break;
			
			case 'CLA':
				
				if($catminatLevel == 'SUBCLA' or 'ORD' or 'SUBORD' or 'ALL' or 'SUBALL' or 'ASS' or 'SUBASS'){
					
					$output = $habCode . '/' . substr($coreCode, 0, 2);
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
			
			case 'SUBCLA':

				if($catminatLevel == 'ORD' or 'SUBORD' or 'ALL' or 'SUBALL' or 'ASS' or 'SUBASS'){
					
					$output = $habCode . '/' . substr($coreCode, 0, 3);
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
			
			case 'ORD':

				if($catminatLevel == 'SUBORD' or 'ALL' or 'SUBALL' or 'ASS' or 'SUBASS'){
					
					$output = $habCode . '/' . substr($coreCode, 0, 5);
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
			
			case 'SUBORD':

				if($catminatLevel == 'ALL' or 'SUBALL' or 'ASS' or 'SUBASS'){
					
					$output = $habCode . '/' . substr($coreCode, 0, 7);
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
			
			case 'ALL':

				if($catminatLevel == 'SUBALL' or 'ASS' or 'SUBASS'){
					
					$output = $habCode . '/' . substr($coreCode, 0, 9);
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
			
			case 'SUBALL':

				if($catminatLevel == 'ASS' or 'SUBASS'){
					
					$output = $habCode . '/' . substr($coreCode, 0, 11);
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
			
			case 'ASS':

				if($catminatLevel == 'SUBASS'){
					
					$output = $habCode . '/' . $coreCode . '/' . substr($assCode, 0, 2);
					return $output;
					
					break;
					
				} else {
					
					throw new evegCatCodeException('Can\'t retrieve the ' . $levelAsked . ' level from the ' . $catminatCode . ' code that is a ' . $catminatLevel . ' level');
					
				}
			
		}
		
	}
	
	private function checkIfLastZero($text){
	
		// initializing variables
		$coreCode = $this->getCoreCode($text);
		
		if(substr($coreCode, strlen($coreCode) - 1, 1) == '0'){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function getParentCode($text){
		
		// initializing variables
		$level = $this->getLevel($text);
		
		switch($level){
			
			case 'HAB':
			
				return '0';
				break;
			
			case 'CLA':
			
				return $this->getLevelCode($text, 'HAB');
				break;
			
			case 'SUBCLA':
				
				return $this->getLevelCode($text, 'CLA');
				break;
			
			case 'ORD':
				
				$parentCode = $this->getLevelCode($text, 'SUBCLA');
				
				if($this->checkIfLastZero($parentCode)){
					return $this->getLevelCode($text, 'CLA');
				} else {
					return $parentCode;
				}
				
				break;
			
			case 'SUBORD':

				return $this->getLevelCode($text, 'ORD');
				break;
			
			case 'ALL':

				$parentCode = $this->getLevelCode($text, 'SUBORD');
				
				if($this->checkIfLastZero($parentCode)){
					return $this->getLevelCode($text, 'ORD');
				} else {
					return $parentCode;
				}
				
				break;
			
			case 'SUBALL':

				return $this->getLevelCode($text, 'ALL');
				break;
			
			case 'ASS':

				$parentCode = $this->getLevelCode($text, 'SUBALL');
				
				if($this->checkIfLastZero($parentCode)){
					return $this->getLevelCode($text, 'ALL');
				} else {
					return $parentCode;
				}
				
				break;
			
			case 'SUBASS':

				return $this->getLevelCode($text, 'ASS');
				break;
		}	
	}

	public function getDirectParent($catminatCode)
	{

		return $this->catminatCodeToObject($this->getParentCode($catminatCode));

	}
	
	public function getAllParents($text, $includeInitialCatminatCode = false, $returnArray = false){
		
		/**
		*
		* Returns a table with all the parents codes of a single catminat code
		* options :
		* 	- $includeInitialCatminatCode (boolean) : true -> include the initial code in the table
		*   - $retunrArray (boolean)
		*/
		
		// Initializing variables
		$level = $this->getLevel($text);
		$output = array();
		$currentCatminatCode = $text;
		$parentCatminatCode = '';

		// Running
		if($includeInitialCatminatCode == true){
			array_push($output, $text);
		}
		
		while($parentCatminatCode != '0'){
			
			$parentCatminatCode = $this->getParentCode($currentCatminatCode);
			$currentCatminatCode = $parentCatminatCode;
			
			if($parentCatminatCode != '0'){
				array_push($output, $parentCatminatCode);
			}
			
		}
		
		$output = array_reverse($output);
		
		if ($returnArray == false) {
			return $this->catminatCodeToObject($output);
		} else {
			return $output;
		}
		
		
	}

	public function checkCatminatCode($text){
	// Checks the syntax of a catminat code
		
		if(preg_match("/^[0-9]{2}\/([0-9]\.)?$/", $text)){
		
			return true;
			
		} elseif(preg_match("/^[0-9]{2}\/[0-9]\.([0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?$/", $text)) {
		
			return true;
			
		} elseif(preg_match("/^[0-9]{2}\/[0-9]\.([0-9])(\.[0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?\/[0-9]{2}(bis|ter|quater|quinquies|sexies|septies|octies|nonies|decies)?$/", $text)) {
		
			return true;
			
		} else {
		
			return false;
			//throw new evegCatCodeException('There is an error in the catminat code syntax ('.$text.').');
			
		}
		
	}

	public function getDirectChild($catminatCode, $returnArray = false)
	{
		// Getting the SyntaxonCore repository
		//$scRepo = $this->em->getRepository('evegAppBundle:SyntaxonCore');

		$child = $this->catCodeRepo->getDirectChild($catminatCode, $returnArray);

		if(!$child){
			return null;
		} else {
			return $child[0];
		}
	}

	public function getChildren($catminatCode, $returnArray = false)
	{
		// Getting the SyntaxonCore repository
		//$scRepo = $this->em->getRepository('evegAppBundle:SyntaxonCore');

		$children = $this->catCodeRepo->getChildren($catminatCode, $returnArray);

		if($children == null){
			return null;
		} else {
			return $children;
		}
		
	}

	public function catminatCodeToObject($catminatCode)
	{
		/*
		*
		* Converts one or more catminatCode(s) to objects
		* Allows $catminatCode to be an array (multiple codes) or a string (single code)
		*
		*/

		// Getting the SyntaxonCore repository
		//$scRepo = $this->em->getRepository('evegAppBundle:SyntaxonCore');

		if(is_string($catminatCode)){

			$uniqueObject = $this->catCodeRepo->findValidOneByCatminatCode($catminatCode);

			return $uniqueObject;

		} elseif(is_array($catminatCode)) {

			$multipleObjects = $this->catCodeRepo->findValidSyntaxonByCatminatCode($catminatCode);

			return $multipleObjects;

		}


	}
	
	// todo public function checkParentCode($text){}
	
	// todo public function checkAllParentsCodes($text){}
}