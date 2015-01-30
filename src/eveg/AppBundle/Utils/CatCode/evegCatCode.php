<?php
// src/eveg/AppBundle/CatCode/evegCatCode.php

namespace eveg\AppBundle\Utils\CatCode;

use eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException;

class evegCatCode{
	/**
	* evegCatCode : shaking the catminat code to get its juice !
	* 	- input $text must be a string variable : a catminat code
	*	- different functions are provided to verify the consistency of the code, to clean the code, to return the parent code...
	* 
	* in the following, we name the different parts of a catminat code as :
	* 	exemple : 01/1.2.3/04
	* 	01    is the habCode
	* 	1.2.3 is the coreCode (named $aferOneSlash or $betweenSlashes)
	* 	04    is the assCode
	* 
	*/

	
	public function testCatminat($text){
		
		$firstSlash = $this->findFirstSlash($text);
		$lastSlash = null;
		$assCode = null;
		$nbSlashes = $this->getNbSlashes($text);
		$coreCode = $this->getCoreCode($text);
		$habCode = $this->getHabCode($text);
		$parentCode = $this->getParentCode($text);
		
		
		if($nbSlashes == 2){
			
			$lastSlash = $this->findLastSlash($text);
			$assCode = $this->getAssCode($text);
			
		}
		
		$explodedCatminat = $this->explodeCatminat($coreCode);
		$level = $this->getLevel($text);
		$cleaned = $this->cleanCode($text);
		
		$test = $this->checkCatminat($text);
		
		$allParentsCodes = $this->getAllParentsCodes($text, true);
			
		return array('nbSlashes' => $nbSlashes,
					 'firstSlash' => $firstSlash,
					 'lastSlash' => $lastSlash,
					 'habCode' => $habCode,
					 'coreCode' => $coreCode,
					 'assCode' => $assCode,
					 'exploded' => $explodedCatminat,
					 'level' => $level,
					 'cleaned' => $cleaned,
					 'test' => $test,
					 'parentCode' => $parentCode,
					 'parentsCodes' => $allParentsCodes);
		
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
	
	public function getAllParentsCodes($text, $includeInitialCatminatCode = false){
		
		/**
		*
		* Returns a table with all the parents codes of a single catminat code
		* options :
		* 	- $includeInitialCatminatCode (boolean) : true -> include the initial code in the table
		*
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
		
		return $output;
		
	}
	
	public function checkCatminat($text){
		
		// Checks the syntax of a catminat code
		if(preg_match("/^[0-9]{2}\/([0-9]\.)?$/", $text)){
		
			return;
			
		} elseif(preg_match("/^[0-9]{2}\/[0-9]\.([0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?$/", $text)) {
		
			return;
			
		} elseif(preg_match("/^[0-9]{2}\/[0-9]\.([0-9])(\.[0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?(\.[0-9])?\/[0-9]{2}(bis|ter|quater|quinquies|sexies|septies|octies|nonies|decies)?$/", $text)) {
		
			return;
			
		} else {
		
			throw new evegCatCodeException('There is an error in the catminat code syntax ('.$text.') - error from the checkCatminat function');
			
		}
		
	}
	
	// todo public function checkParentCode($text){}
	
	// todopublic function checkAllParentsCodes($text){}
}