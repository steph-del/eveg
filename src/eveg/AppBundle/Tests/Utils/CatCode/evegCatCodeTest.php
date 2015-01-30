<?php
// src/eveg/AppBundle/Tests/CatCode/CatCodeTest.php

namespace eveg\AppBundle\Tests\Utils\CatCode;

use eveg\AppBundle\Utils\CatCode\evegCatCode;
use eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException;

class evegCatCodeTest extends \PHPUnit_Framework_TestCase
{
	
    public function testCheckCodeException1()
    {

	    $this->setExpectedException('\eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException');
	    	    
	    $catCode = new evegCatCode();
	    
	    $catminat = '16/1.2.3.4.5.6.7';
		$result = $catCode->checkCatminat($catminat);

    } 
    
    public function testCheckCodeException2()
    {

	    $this->setExpectedException('\eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException');
	    	    
	    $catCode = new evegCatCode();
	    
	    $catminat = '16/1';
		$result = $catCode->checkCatminat($catminat);

    }
    
    public function testCheckCodeException3()
    {

	    $this->setExpectedException('\eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException');
	    	    
	    $catCode = new evegCatCode();
	    
	    $catminat = '16/1.2.3.4.5.6/';
		$result = $catCode->checkCatminat($catminat);

    } 
    
    public function testCheckCodeException4()
    {

	    $this->setExpectedException('\eveg\AppBundle\Utils\CatCode\Exception\evegCatCodeException');
	    	    
	    $catCode = new evegCatCode();
	    
	    $catminat = '16/1.2.3.4.5.6./07';
		$result = $catCode->checkCatminat($catminat);

    } 
    
    public function testGetLevelCode()
    {
	    
	    $catCode = new evegCatCode();
	    
	    // 1
	    $catminat1 = '01/1.2.3.4.5.6/01ter';
	    $result1 = $catCode->getLevelCode($catminat1, 'CLA');
	    $this->assertEquals('01/1.', $result1);
	    
	    // 2
	    $catminat2 = '01/1.2.3.4.5.6/01';
	    $result2 = $catCode->getLevelCode($catminat2, 'ALL');
	    $this->assertEquals('01/1.2.3.4.5', $result2);
	    
	    // 3
	    $catminat3 = '01/1.2.3.4.5.6';
	    $result3 = $catCode->getLevelCode($catminat3, 'SUBALL');
	    $this->assertEquals('01/1.2.3.4.5.6', $result3);
	    
	    // 4
	    $catminat4 = '01/1.2.3.4.5.6';
	    $result4 = $catCode->getLevelCode($catminat4, 'SUBCLA');
	    $this->assertEquals('01/1.2', $result4);
	    
	    // 5
	    $catminat5 = '01/1.0.3.4.5.6/02bis';
	    $result5 = $catCode->getLevelCode($catminat5, 'SUBCLA');
	    $this->assertEquals('01/1.0', $result5);
	    
	    // 6
	    $catminat6 = '01/1.2.3.4.5.6/01ter';
	    $result6 = $catCode->getLevelCode($catminat6, 'HAB');
	    $this->assertEquals('01/', $result6);
	    
    }
    
    public function testGetParentCode()
    {
	    
	    $catCode = new evegCatCode();
	    
	    // 1
	    $catminat1 = '01/1.2.3.4.5.6/01ter';
	    $result1 = $catCode->getParentCode($catminat1);
	    $this->assertEquals('01/1.2.3.4.5.6/01', $result1);
	    
	    // 2
	    $catminat2 = '01/1.2.3.4.5.6/01';
	    $result2 = $catCode->getParentCode($catminat2);
	    $this->assertEquals('01/1.2.3.4.5.6', $result2);
	    
	    // 3
	    $catminat3 = '01/1.2.3.4.5.6';
	    $result3 = $catCode->getParentCode($catminat3);
	    $this->assertEquals('01/1.2.3.4.5', $result3);
	    
	    // 4
	    $catminat4 = '01/1.2.3.4.5';
	    $result4 = $catCode->getParentCode($catminat4);
	    $this->assertEquals('01/1.2.3.4', $result4);
	    
	    // 5
	    $catminat5 = '01/1.2.3.4';
	    $result5 = $catCode->getParentCode($catminat5);
	    $this->assertEquals('01/1.2.3', $result5);
	    
	    // 6
	    $catminat6 = '01/1.2.3';
	    $result6 = $catCode->getParentCode($catminat6);
	    $this->assertEquals('01/1.2', $result6);
	    
	    // 7
	    $catminat7 = '01/1.2';
	    $result7 = $catCode->getParentCode($catminat7);
	    $this->assertEquals('01/1.', $result7);
	    
	    // 8
	    $catminat8 = '01/1.0.3.0.5/01';
	    $result8 = $catCode->getParentCode($catminat8);
	    $this->assertEquals('01/1.0.3.0.5', $result8);
	    
	    // 9
	    $catminat9 = '01/1.0.3.0.5';
	    $result9 = $catCode->getParentCode($catminat9);
	    $this->assertEquals('01/1.0.3', $result9);
	    
	    // 10
	    $catminat10 = '01/1.0.3';
	    $result10 = $catCode->getParentCode($catminat10);
	    $this->assertEquals('01/1.', $result10);
	    
    }
    
    public function testGetAllParentsCodes(){
	    
	    $catCode = new evegCatCode();
	    
	    // 1
	    $catminat1 = '01/1.0.3/01bis';
	    $result1 = $catCode->getAllParentsCodes($catminat1);
	    $expected1 = array('01/', '01/1.', '01/1.0.3', '01/1.0.3/01');
	    $this->assertEmpty(array_diff($expected1, $result1));

	    // 2
	    $catminat2 = '01/';
	    $result2 = $catCode->getAllParentsCodes($catminat2);
	    $this->assertEmpty( $result2);
	    
	    // 3
	    $catminat3 = '14/6.0.1.0.1/02';
	    $result3 = $catCode->getAllParentsCodes($catminat3);
	    $expected3 = array('14/', '14/6.', '14/6.0.1', '14/6.0.1.0.1');
	    $this->assertEmpty(array_diff($expected3, $result3));
	    
	    // 4
	    $catminat4 = '14/6.0.1.0.1/02';
	    $result4 = $catCode->getAllParentsCodes($catminat4, true);
	    $expected4 = array('14/', '14/6.', '14/6.0.1', '14/6.0.1.0.1', '14/6.0.1.0.1/02');
	    $this->assertEmpty(array_diff($expected4, $result4));
	    
		// 5
	    $catminat5 = '01/1.2.3.4.5.6/01ter';
	    $result5 = $catCode->getAllParentsCodes($catminat5);
	    $expected5 = array('01/', '01/1.', '01/1.2', '01/1.2.3', '01/1.2.3.4', '01/1.2.3.4.5', '01/1.2.3.4.5.6', '01/1.2.3.4.5.6/01');
	    $this->assertEmpty(array_diff($expected5, $result5));
	    
    }
    
    /*
    public function testGetLevel()
    {
    
		$this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    	
    }
    
	public function testCleanCode()
	{
		
		$this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
		
	}
	

    
    public function testGetParentCode()
    {

		$this->markTestIncomplete(
          'This test has not been implemented yet.'
        );

    }
    */



    
}
