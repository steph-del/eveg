<?php
// src/eveg/AppBundle/Tests/CatCode/CatCodeTest.php

namespace eveg\AppBundle\Tests\Utils\CatCode;

use eveg\AppBundle\Utils\CatCode\evegCatCode;
use eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException;

// To run the test : phpunit -c app/ src/eveg/AppBundle/Tests/Utils

 class evegCatCodeTest extends \PHPUnit_Framework_TestCase 
{
	
	private $catCodeRepo;
	private $repFilters;
	private $catCode;

	public function __construct()
	{
		$this->catCodeRepo = $this->createMock('\eveg\AppBundle\Utils\CatCode\evegCatCodeRepo');
	    $this->repFilters  = null;
	    $this->catCode     = new evegCatCode($this->catCodeRepo, $this->repFilters);
	}

    public function testCheckCodeReturnFalse()
    {

	    $catminat1 = '16/1.2.3.4.5.6.7.8';		// Catminat core code can only have 7 levels
	    $catminat2 = '16/1';					// Catminat core code should be '16/1.'
	    $catminat3 = '16/1.2.3.4.5.6/';			// Catminat code can't have se cond slach without ASS code
	    $catminat4 = '16/1.2.3.4.5.6./07';		// Catminat code can't have isolated dot

		$this->assertFalse($this->catCode->checkCatminatCode($catminat1));
		$this->assertFalse($this->catCode->checkCatminatCode($catminat2));
		$this->assertFalse($this->catCode->checkCatminatCode($catminat3));
		$this->assertFalse($this->catCode->checkCatminatCode($catminat4));

    }

    public function testGetLevelCode()
    {

	    // 1
	    $catminat1 = '01/1.2.3.4.5.6/01ter';
	    $result1 = $this->catCode->getLevelCode($catminat1, 'CLA');
	    $this->assertEquals('01/1.', $result1);
	    
	    // 2
	    $catminat2 = '01/1.2.3.4.5.6/01';
	    $result2 = $this->catCode->getLevelCode($catminat2, 'ALL');
	    $this->assertEquals('01/1.2.3.4.5', $result2);
	    
	    // 3
	    $catminat3 = '01/1.2.3.4.5.6';
	    $result3 = $this->catCode->getLevelCode($catminat3, 'SUBALL');
	    $this->assertEquals('01/1.2.3.4.5.6', $result3);
	    
	    // 4
	    $catminat4 = '01/1.2.3.4.5.6';
	    $result4 = $this->catCode->getLevelCode($catminat4, 'SUBCLA');
	    $this->assertEquals('01/1.2', $result4);
	    
	    // 5
	    $catminat5 = '01/1.0.3.4.5.6/02bis';
	    $result5 = $this->catCode->getLevelCode($catminat5, 'SUBCLA');
	    $this->assertEquals('01/1.0', $result5);
	    
	    // 6
	    $catminat6 = '01/1.2.3.4.5.6/01ter';
	    $result6 = $this->catCode->getLevelCode($catminat6, 'HAB');
	    $this->assertEquals('01/', $result6);
	    
    }
    
    public function getNextLevel()
    {

    	$catminatAss = '01/1.2.3.4.5.6/01';
    	$catminatCla = '01/1.';

    	$this->assertEquals('SUBASS', $this->catCode->getNextLevel($catminatAss, 1));

    	$this->assertEquals('SUBCLA', $this->catCode->getNextLevel($catminatCla, 1));
    	$this->assertEquals('ORD', $this->catCode->getNextLevel($catminatCla, 2));
    	$this->assertEquals('SUBORD', $this->catCode->getNextLevel($catminatCla, 3));

    }

    public function testGetParentCode()
    {
	    
	    // 1
	    $catminat1 = '01/1.2.3.4.5.6/01ter';
	    $result1 = $this->catCode->getParentCode($catminat1);
	    $this->assertEquals('01/1.2.3.4.5.6/01', $result1);
	    
	    // 2
	    $catminat2 = '01/1.2.3.4.5.6/01';
	    $result2 = $this->catCode->getParentCode($catminat2);
	    $this->assertEquals('01/1.2.3.4.5.6', $result2);
	    
	    // 3
	    $catminat3 = '01/1.2.3.4.5.6';
	    $result3 = $this->catCode->getParentCode($catminat3);
	    $this->assertEquals('01/1.2.3.4.5', $result3);
	    
	    // 4
	    $catminat4 = '01/1.2.3.4.5';
	    $result4 = $this->catCode->getParentCode($catminat4);
	    $this->assertEquals('01/1.2.3.4', $result4);
	    
	    // 5
	    $catminat5 = '01/1.2.3.4';
	    $result5 = $this->catCode->getParentCode($catminat5);
	    $this->assertEquals('01/1.2.3', $result5);
	    
	    // 6
	    $catminat6 = '01/1.2.3';
	    $result6 = $this->catCode->getParentCode($catminat6);
	    $this->assertEquals('01/1.2', $result6);
	    
	    // 7
	    $catminat7 = '01/1.2';
	    $result7 = $this->catCode->getParentCode($catminat7);
	    $this->assertEquals('01/1.', $result7);
	    
	    // 8
	    $catminat8 = '01/1.0.3.0.5/01';
	    $result8 = $this->catCode->getParentCode($catminat8);
	    $this->assertEquals('01/1.0.3.0.5', $result8);
	    
	    // 9
	    $catminat9 = '01/1.0.3.0.5';
	    $result9 = $this->catCode->getParentCode($catminat9);
	    $this->assertEquals('01/1.0.3', $result9);
	    
	    // 10
	    $catminat10 = '01/1.0.3';
	    $result10 = $this->catCode->getParentCode($catminat10);
	    $this->assertEquals('01/1.', $result10);
	    
    }
    
    public function testGetAllParents(){

	    // 1
	    $catminat1 = '01/1.0.3/01bis';
	    $result1 = $this->catCode->getAllParents($catminat1, false, true);
	    $expected1 = array('01/', '01/1.', '01/1.0.3', '01/1.0.3/01');
	    $this->assertEmpty(array_diff($expected1, $result1));

	    // 2
	    $catminat2 = '01/';
	    $result2 = $this->catCode->getAllParents($catminat2, false, true);
	    $this->assertEmpty($result2);
	    
	    // 3
	    $catminat3 = '14/6.0.1.0.1/02';
	    $result3 = $this->catCode->getAllParents($catminat3, false, true);
	    $expected3 = array('14/', '14/6.', '14/6.0.1', '14/6.0.1.0.1');
	    $this->assertEmpty(array_diff($expected3, $result3));
	    
	    // 4
	    $catminat4 = '14/6.0.1.0.1/02';
	    $result4 = $this->catCode->getAllParents($catminat4, true, true);
	    $expected4 = array('14/', '14/6.', '14/6.0.1', '14/6.0.1.0.1', '14/6.0.1.0.1/02');
	    $this->assertEmpty(array_diff($expected4, $result4));
	    
		// 5
	    $catminat5 = '01/1.2.3.4.5.6/01ter';
	    $result5 = $this->catCode->getAllParents($catminat5, false, true);
	    $expected5 = array('01/', '01/1.', '01/1.2', '01/1.2.3', '01/1.2.3.4', '01/1.2.3.4.5', '01/1.2.3.4.5.6', '01/1.2.3.4.5.6/01');
	    $this->assertEmpty(array_diff($expected5, $result5));
	    
    }
    
}
