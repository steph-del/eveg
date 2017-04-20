<?php
// src/eveg/appBundle/Utils/Services/htmlHelpers.php

namespace eveg\AppBundle\Utils\Services;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Response;

/**
 * io utilities (read csv, output html...)
 *
 */
class ioHelpers
{

	public function getTableFragment($titleValue, $dbValue, $csvValue)
	{
		$output = new Response(
		"<tr class='row'>
			<td class='title'>".$titleValue."</td>
			<td>
				<table class='table'>
					<tr><td><b>db : </b>".$dbValue."</td></tr>
					<tr><td><b>csv :</b> ".$csvValue."</td></tr>
				</table>
			</td>
		</tr>");

		return $output->getContent();
	}

	public function getHtmlBase($title, $content, $onlyLog)
	{
		$sim = '';
		if($onlyLog) $sim = "<h3>(simulation d'import)</h3>";
		$output = new Response(
		'<html lang="fr"><head><meta charset="UTF-8"><title>'.$title.'</title>
		<style>
			.element{background-color: #F5F5F5;border: 2px solid #B5B5B5;margin-bottom: 15px;width: 100%}
			.header{background-color: #E3E3E3;}
			.title{width: 200px;font-weight: bold;}
			tr.row{border-bottom: 1px solid #B5B5B5;}
		</style>
		</head><body>
			<h1>'.$title.'</h1>'.$sim.'
			'.$content.'
		</body></html>
		');

		return $output->getContent();
	}

	/**
	 * Convert a comma separated file into an associated array.
	 * The first row should contain the array keys.
	 * 
	 * Example:
	 * 
	 * @param string $filename Path to the CSV file
	 * @param string $delimiter The separator used in the file
	 * @return array
	 * @link http://gist.github.com/385876
	 * @author Jay Williams <http://myd3.com/>
	 * @copyright Copyright (c) 2010, Jay Williams
	 * @license http://www.opensource.org/licenses/mit-license.php MIT License
	 */
	public function csv_to_array($filename='', $delimiter=',')
	{
		/*if($this->container->get('kernel')->getEnvironment() != 'dev') {
			Throw new AccessDeniedException("This function ('csv_to_array') is only available in dev mode.");
		}*/

		if(!file_exists($filename) || !is_readable($filename))
		{
			throw new HttpException(404, $filename.' not found');
		}

		//ini_set('memory_limit', '1024M');
		//$count = 0;
		$header = NULL;
		$data = array();
		if (($handle = fopen($filename, 'r')) !== FALSE)
		{
			while (($row = fgetcsv($handle, 10000, $delimiter)) !== FALSE)
			{
				if(!$header) {
					$header = $row;
				}
				else {
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);
		}
		return $data;
		
	}
	/**
	 * Check if the departement repartition (fr) is empty
	 * 
	 * @param object $syntaxonDepFr evegAppBundle\Entity\SyntaxonRepartitionDepFr
	 * @return boolean
	 */
	public function syntaxonDepFrIsEmpty($syntaxonDepFr)
	{
		if(($syntaxonDepFr->get01() != null) || $syntaxonDepFr->get01() != '') return false;
		if(($syntaxonDepFr->get02() != null) || $syntaxonDepFr->get02() != '') return false;
		if(($syntaxonDepFr->get03() != null) || $syntaxonDepFr->get03() != '') return false;
		if(($syntaxonDepFr->get04() != null) || $syntaxonDepFr->get04() != '') return false;
		if(($syntaxonDepFr->get05() != null) || $syntaxonDepFr->get05() != '') return false;
		if(($syntaxonDepFr->get06() != null) || $syntaxonDepFr->get06() != '') return false;
		if(($syntaxonDepFr->get07() != null) || $syntaxonDepFr->get07() != '') return false;
		if(($syntaxonDepFr->get08() != null) || $syntaxonDepFr->get08() != '') return false;
		if(($syntaxonDepFr->get09() != null) || $syntaxonDepFr->get09() != '') return false;
		if(($syntaxonDepFr->get10() != null) || $syntaxonDepFr->get10() != '') return false;
		if(($syntaxonDepFr->get11() != null) || $syntaxonDepFr->get11() != '') return false;
		if(($syntaxonDepFr->get12() != null) || $syntaxonDepFr->get12() != '') return false;
		if(($syntaxonDepFr->get13() != null) || $syntaxonDepFr->get13() != '') return false;
		if(($syntaxonDepFr->get14() != null) || $syntaxonDepFr->get14() != '') return false;
		if(($syntaxonDepFr->get15() != null) || $syntaxonDepFr->get15() != '') return false;
		if(($syntaxonDepFr->get16() != null) || $syntaxonDepFr->get16() != '') return false;
		if(($syntaxonDepFr->get17() != null) || $syntaxonDepFr->get17() != '') return false;
		if(($syntaxonDepFr->get18() != null) || $syntaxonDepFr->get18() != '') return false;
		if(($syntaxonDepFr->get19() != null) || $syntaxonDepFr->get19() != '') return false;
		if(($syntaxonDepFr->get20() != null) || $syntaxonDepFr->get20() != '') return false;
		if(($syntaxonDepFr->get21() != null) || $syntaxonDepFr->get21() != '') return false;
		if(($syntaxonDepFr->get22() != null) || $syntaxonDepFr->get22() != '') return false;
		if(($syntaxonDepFr->get23() != null) || $syntaxonDepFr->get23() != '') return false;
		if(($syntaxonDepFr->get24() != null) || $syntaxonDepFr->get24() != '') return false;
		if(($syntaxonDepFr->get25() != null) || $syntaxonDepFr->get25() != '') return false;
		if(($syntaxonDepFr->get26() != null) || $syntaxonDepFr->get26() != '') return false;
		if(($syntaxonDepFr->get27() != null) || $syntaxonDepFr->get27() != '') return false;
		if(($syntaxonDepFr->get28() != null) || $syntaxonDepFr->get28() != '') return false;
		if(($syntaxonDepFr->get29() != null) || $syntaxonDepFr->get29() != '') return false;
		if(($syntaxonDepFr->get30() != null) || $syntaxonDepFr->get30() != '') return false;
		if(($syntaxonDepFr->get31() != null) || $syntaxonDepFr->get31() != '') return false;
		if(($syntaxonDepFr->get32() != null) || $syntaxonDepFr->get32() != '') return false;
		if(($syntaxonDepFr->get33() != null) || $syntaxonDepFr->get33() != '') return false;
		if(($syntaxonDepFr->get34() != null) || $syntaxonDepFr->get34() != '') return false;
		if(($syntaxonDepFr->get35() != null) || $syntaxonDepFr->get35() != '') return false;
		if(($syntaxonDepFr->get36() != null) || $syntaxonDepFr->get36() != '') return false;
		if(($syntaxonDepFr->get37() != null) || $syntaxonDepFr->get37() != '') return false;
		if(($syntaxonDepFr->get38() != null) || $syntaxonDepFr->get38() != '') return false;
		if(($syntaxonDepFr->get39() != null) || $syntaxonDepFr->get39() != '') return false;
		if(($syntaxonDepFr->get40() != null) || $syntaxonDepFr->get40() != '') return false;
		if(($syntaxonDepFr->get41() != null) || $syntaxonDepFr->get41() != '') return false;
		if(($syntaxonDepFr->get42() != null) || $syntaxonDepFr->get42() != '') return false;
		if(($syntaxonDepFr->get43() != null) || $syntaxonDepFr->get43() != '') return false;
		if(($syntaxonDepFr->get44() != null) || $syntaxonDepFr->get44() != '') return false;
		if(($syntaxonDepFr->get45() != null) || $syntaxonDepFr->get45() != '') return false;
		if(($syntaxonDepFr->get46() != null) || $syntaxonDepFr->get46() != '') return false;
		if(($syntaxonDepFr->get47() != null) || $syntaxonDepFr->get47() != '') return false;
		if(($syntaxonDepFr->get48() != null) || $syntaxonDepFr->get48() != '') return false;
		if(($syntaxonDepFr->get49() != null) || $syntaxonDepFr->get49() != '') return false;
		if(($syntaxonDepFr->get50() != null) || $syntaxonDepFr->get50() != '') return false;
		if(($syntaxonDepFr->get51() != null) || $syntaxonDepFr->get51() != '') return false;
		if(($syntaxonDepFr->get52() != null) || $syntaxonDepFr->get52() != '') return false;
		if(($syntaxonDepFr->get53() != null) || $syntaxonDepFr->get53() != '') return false;
		if(($syntaxonDepFr->get54() != null) || $syntaxonDepFr->get54() != '') return false;
		if(($syntaxonDepFr->get55() != null) || $syntaxonDepFr->get55() != '') return false;
		if(($syntaxonDepFr->get56() != null) || $syntaxonDepFr->get56() != '') return false;
		if(($syntaxonDepFr->get57() != null) || $syntaxonDepFr->get57() != '') return false;
		if(($syntaxonDepFr->get58() != null) || $syntaxonDepFr->get58() != '') return false;
		if(($syntaxonDepFr->get59() != null) || $syntaxonDepFr->get59() != '') return false;
		if(($syntaxonDepFr->get60() != null) || $syntaxonDepFr->get60() != '') return false;
		if(($syntaxonDepFr->get61() != null) || $syntaxonDepFr->get61() != '') return false;
		if(($syntaxonDepFr->get62() != null) || $syntaxonDepFr->get62() != '') return false;
		if(($syntaxonDepFr->get63() != null) || $syntaxonDepFr->get63() != '') return false;
		if(($syntaxonDepFr->get64() != null) || $syntaxonDepFr->get64() != '') return false;
		if(($syntaxonDepFr->get65() != null) || $syntaxonDepFr->get65() != '') return false;
		if(($syntaxonDepFr->get66() != null) || $syntaxonDepFr->get66() != '') return false;
		if(($syntaxonDepFr->get67() != null) || $syntaxonDepFr->get67() != '') return false;
		if(($syntaxonDepFr->get68() != null) || $syntaxonDepFr->get68() != '') return false;
		if(($syntaxonDepFr->get69() != null) || $syntaxonDepFr->get69() != '') return false;
		if(($syntaxonDepFr->get70() != null) || $syntaxonDepFr->get70() != '') return false;
		if(($syntaxonDepFr->get71() != null) || $syntaxonDepFr->get71() != '') return false;
		if(($syntaxonDepFr->get72() != null) || $syntaxonDepFr->get72() != '') return false;
		if(($syntaxonDepFr->get73() != null) || $syntaxonDepFr->get73() != '') return false;
		if(($syntaxonDepFr->get74() != null) || $syntaxonDepFr->get74() != '') return false;
		if(($syntaxonDepFr->get75() != null) || $syntaxonDepFr->get75() != '') return false;
		if(($syntaxonDepFr->get76() != null) || $syntaxonDepFr->get76() != '') return false;
		if(($syntaxonDepFr->get77() != null) || $syntaxonDepFr->get77() != '') return false;
		if(($syntaxonDepFr->get78() != null) || $syntaxonDepFr->get78() != '') return false;
		if(($syntaxonDepFr->get79() != null) || $syntaxonDepFr->get79() != '') return false;
		if(($syntaxonDepFr->get80() != null) || $syntaxonDepFr->get80() != '') return false;
		if(($syntaxonDepFr->get81() != null) || $syntaxonDepFr->get81() != '') return false;
		if(($syntaxonDepFr->get82() != null) || $syntaxonDepFr->get82() != '') return false;
		if(($syntaxonDepFr->get83() != null) || $syntaxonDepFr->get83() != '') return false;
		if(($syntaxonDepFr->get84() != null) || $syntaxonDepFr->get84() != '') return false;
		if(($syntaxonDepFr->get85() != null) || $syntaxonDepFr->get85() != '') return false;
		if(($syntaxonDepFr->get86() != null) || $syntaxonDepFr->get86() != '') return false;
		if(($syntaxonDepFr->get87() != null) || $syntaxonDepFr->get87() != '') return false;
		if(($syntaxonDepFr->get88() != null) || $syntaxonDepFr->get88() != '') return false;
		if(($syntaxonDepFr->get89() != null) || $syntaxonDepFr->get89() != '') return false;
		if(($syntaxonDepFr->get90() != null) || $syntaxonDepFr->get90() != '') return false;
		if(($syntaxonDepFr->get91() != null) || $syntaxonDepFr->get91() != '') return false;
		if(($syntaxonDepFr->get92() != null) || $syntaxonDepFr->get92() != '') return false;
		if(($syntaxonDepFr->get93() != null) || $syntaxonDepFr->get93() != '') return false;
		if(($syntaxonDepFr->get94() != null) || $syntaxonDepFr->get94() != '') return false;
		if(($syntaxonDepFr->get95() != null) || $syntaxonDepFr->get95() != '') return false;
		return true;
	}

	/**
	 * Merge $syntaxonDepFrSub into $syntaxonDepFr (only 1 and 1? values)
	 *
	 * @param  object $syntaxonDepFr    evegAppBundle\Entity\syntaxonRepartitionDepFr
	 * @param  oblect $syntaxonDepFrSub evegAppBundle\Entity\syntaxonRepartitionDepFr
	 * @return object evegAppBundle\Entity\syntaxonRepartitionDepFr
	 */
	public function merge2SynatxonDepFr($syntaxonDepFr, $syntaxonDepFrSub)
	{
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get01() == '1?') && ($syntaxonDepFr->get01() != '1')) $syntaxonDepFr->set01('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get01() == '1')  && ($syntaxonDepFr->get01() != '1')) $syntaxonDepFr->set01('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get02() == '1?') && ($syntaxonDepFr->get02() != '1')) $syntaxonDepFr->set02('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get02() == '1')  && ($syntaxonDepFr->get02() != '1')) $syntaxonDepFr->set02('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get03() == '1?') && ($syntaxonDepFr->get03() != '1')) $syntaxonDepFr->set03('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get03() == '1')  && ($syntaxonDepFr->get03() != '1')) $syntaxonDepFr->set03('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get04() == '1?') && ($syntaxonDepFr->get04() != '1')) $syntaxonDepFr->set04('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get04() == '1')  && ($syntaxonDepFr->get04() != '1')) $syntaxonDepFr->set04('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get05() == '1?') && ($syntaxonDepFr->get05() != '1')) $syntaxonDepFr->set05('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get05() == '1')  && ($syntaxonDepFr->get05() != '1')) $syntaxonDepFr->set05('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get06() == '1?') && ($syntaxonDepFr->get06() != '1')) $syntaxonDepFr->set06('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get06() == '1')  && ($syntaxonDepFr->get06() != '1')) $syntaxonDepFr->set06('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get07() == '1?') && ($syntaxonDepFr->get07() != '1')) $syntaxonDepFr->set07('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get07() == '1')  && ($syntaxonDepFr->get07() != '1')) $syntaxonDepFr->set07('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get08() == '1?') && ($syntaxonDepFr->get08() != '1')) $syntaxonDepFr->set08('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get08() == '1')  && ($syntaxonDepFr->get08() != '1')) $syntaxonDepFr->set08('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get09() == '1?') && ($syntaxonDepFr->get09() != '1')) $syntaxonDepFr->set09('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get09() == '1')  && ($syntaxonDepFr->get09() != '1')) $syntaxonDepFr->set09('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get10() == '1?') && ($syntaxonDepFr->get10() != '1')) $syntaxonDepFr->set10('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get10() == '1')  && ($syntaxonDepFr->get10() != '1')) $syntaxonDepFr->set10('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get11() == '1?') && ($syntaxonDepFr->get11() != '1')) $syntaxonDepFr->set11('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get11() == '1')  && ($syntaxonDepFr->get11() != '1')) $syntaxonDepFr->set11('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get12() == '1?') && ($syntaxonDepFr->get12() != '1')) $syntaxonDepFr->set12('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get12() == '1')  && ($syntaxonDepFr->get12() != '1')) $syntaxonDepFr->set12('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get13() == '1?') && ($syntaxonDepFr->get13() != '1')) $syntaxonDepFr->set13('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get13() == '1')  && ($syntaxonDepFr->get13() != '1')) $syntaxonDepFr->set13('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get14() == '1?') && ($syntaxonDepFr->get14() != '1')) $syntaxonDepFr->set14('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get14() == '1')  && ($syntaxonDepFr->get14() != '1')) $syntaxonDepFr->set14('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get15() == '1?') && ($syntaxonDepFr->get15() != '1')) $syntaxonDepFr->set15('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get15() == '1')  && ($syntaxonDepFr->get15() != '1')) $syntaxonDepFr->set15('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get16() == '1?') && ($syntaxonDepFr->get16() != '1')) $syntaxonDepFr->set16('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get16() == '1')  && ($syntaxonDepFr->get16() != '1')) $syntaxonDepFr->set16('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get17() == '1?') && ($syntaxonDepFr->get17() != '1')) $syntaxonDepFr->set17('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get17() == '1')  && ($syntaxonDepFr->get17() != '1')) $syntaxonDepFr->set17('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get18() == '1?') && ($syntaxonDepFr->get18() != '1')) $syntaxonDepFr->set18('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get18() == '1')  && ($syntaxonDepFr->get18() != '1')) $syntaxonDepFr->set18('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get19() == '1?') && ($syntaxonDepFr->get19() != '1')) $syntaxonDepFr->set19('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get19() == '1')  && ($syntaxonDepFr->get19() != '1')) $syntaxonDepFr->set19('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get20() == '1?') && ($syntaxonDepFr->get20() != '1')) $syntaxonDepFr->set20('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get20() == '1')  && ($syntaxonDepFr->get20() != '1')) $syntaxonDepFr->set20('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get21() == '1?') && ($syntaxonDepFr->get21() != '1')) $syntaxonDepFr->set21('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get21() == '1')  && ($syntaxonDepFr->get21() != '1')) $syntaxonDepFr->set21('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get22() == '1?') && ($syntaxonDepFr->get22() != '1')) $syntaxonDepFr->set22('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get22() == '1')  && ($syntaxonDepFr->get22() != '1')) $syntaxonDepFr->set22('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get23() == '1?') && ($syntaxonDepFr->get23() != '1')) $syntaxonDepFr->set23('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get23() == '1')  && ($syntaxonDepFr->get23() != '1')) $syntaxonDepFr->set23('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get24() == '1?') && ($syntaxonDepFr->get24() != '1')) $syntaxonDepFr->set24('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get24() == '1')  && ($syntaxonDepFr->get24() != '1')) $syntaxonDepFr->set24('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get25() == '1?') && ($syntaxonDepFr->get25() != '1')) $syntaxonDepFr->set25('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get25() == '1')  && ($syntaxonDepFr->get25() != '1')) $syntaxonDepFr->set25('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get26() == '1?') && ($syntaxonDepFr->get26() != '1')) $syntaxonDepFr->set26('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get26() == '1')  && ($syntaxonDepFr->get26() != '1')) $syntaxonDepFr->set26('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get27() == '1?') && ($syntaxonDepFr->get27() != '1')) $syntaxonDepFr->set27('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get27() == '1')  && ($syntaxonDepFr->get27() != '1')) $syntaxonDepFr->set27('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get28() == '1?') && ($syntaxonDepFr->get28() != '1')) $syntaxonDepFr->set28('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get28() == '1')  && ($syntaxonDepFr->get28() != '1')) $syntaxonDepFr->set28('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get29() == '1?') && ($syntaxonDepFr->get29() != '1')) $syntaxonDepFr->set29('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get29() == '1')  && ($syntaxonDepFr->get29() != '1')) $syntaxonDepFr->set29('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get30() == '1?') && ($syntaxonDepFr->get30() != '1')) $syntaxonDepFr->set30('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get30() == '1')  && ($syntaxonDepFr->get30() != '1')) $syntaxonDepFr->set30('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get31() == '1?') && ($syntaxonDepFr->get31() != '1')) $syntaxonDepFr->set31('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get31() == '1')  && ($syntaxonDepFr->get31() != '1')) $syntaxonDepFr->set31('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get32() == '1?') && ($syntaxonDepFr->get32() != '1')) $syntaxonDepFr->set32('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get32() == '1')  && ($syntaxonDepFr->get32() != '1')) $syntaxonDepFr->set32('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get33() == '1?') && ($syntaxonDepFr->get33() != '1')) $syntaxonDepFr->set33('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get33() == '1')  && ($syntaxonDepFr->get33() != '1')) $syntaxonDepFr->set33('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get34() == '1?') && ($syntaxonDepFr->get34() != '1')) $syntaxonDepFr->set34('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get34() == '1')  && ($syntaxonDepFr->get34() != '1')) $syntaxonDepFr->set34('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get35() == '1?') && ($syntaxonDepFr->get35() != '1')) $syntaxonDepFr->set35('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get35() == '1')  && ($syntaxonDepFr->get35() != '1')) $syntaxonDepFr->set35('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get36() == '1?') && ($syntaxonDepFr->get36() != '1')) $syntaxonDepFr->set36('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get36() == '1')  && ($syntaxonDepFr->get36() != '1')) $syntaxonDepFr->set36('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get37() == '1?') && ($syntaxonDepFr->get37() != '1')) $syntaxonDepFr->set37('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get37() == '1')  && ($syntaxonDepFr->get37() != '1')) $syntaxonDepFr->set37('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get38() == '1?') && ($syntaxonDepFr->get38() != '1')) $syntaxonDepFr->set38('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get38() == '1')  && ($syntaxonDepFr->get38() != '1')) $syntaxonDepFr->set38('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get39() == '1?') && ($syntaxonDepFr->get39() != '1')) $syntaxonDepFr->set39('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get39() == '1')  && ($syntaxonDepFr->get39() != '1')) $syntaxonDepFr->set39('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get40() == '1?') && ($syntaxonDepFr->get40() != '1')) $syntaxonDepFr->set40('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get40() == '1')  && ($syntaxonDepFr->get40() != '1')) $syntaxonDepFr->set40('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get41() == '1?') && ($syntaxonDepFr->get41() != '1')) $syntaxonDepFr->set41('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get41() == '1')  && ($syntaxonDepFr->get41() != '1')) $syntaxonDepFr->set41('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get42() == '1?') && ($syntaxonDepFr->get42() != '1')) $syntaxonDepFr->set42('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get42() == '1')  && ($syntaxonDepFr->get42() != '1')) $syntaxonDepFr->set42('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get43() == '1?') && ($syntaxonDepFr->get43() != '1')) $syntaxonDepFr->set43('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get43() == '1')  && ($syntaxonDepFr->get43() != '1')) $syntaxonDepFr->set43('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get44() == '1?') && ($syntaxonDepFr->get44() != '1')) $syntaxonDepFr->set44('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get44() == '1')  && ($syntaxonDepFr->get44() != '1')) $syntaxonDepFr->set44('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get45() == '1?') && ($syntaxonDepFr->get45() != '1')) $syntaxonDepFr->set45('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get45() == '1')  && ($syntaxonDepFr->get45() != '1')) $syntaxonDepFr->set45('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get46() == '1?') && ($syntaxonDepFr->get46() != '1')) $syntaxonDepFr->set46('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get46() == '1')  && ($syntaxonDepFr->get46() != '1')) $syntaxonDepFr->set46('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get47() == '1?') && ($syntaxonDepFr->get47() != '1')) $syntaxonDepFr->set47('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get47() == '1')  && ($syntaxonDepFr->get47() != '1')) $syntaxonDepFr->set47('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get48() == '1?') && ($syntaxonDepFr->get48() != '1')) $syntaxonDepFr->set48('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get48() == '1')  && ($syntaxonDepFr->get48() != '1')) $syntaxonDepFr->set48('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get49() == '1?') && ($syntaxonDepFr->get49() != '1')) $syntaxonDepFr->set49('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get49() == '1')  && ($syntaxonDepFr->get49() != '1')) $syntaxonDepFr->set49('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get50() == '1?') && ($syntaxonDepFr->get50() != '1')) $syntaxonDepFr->set50('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get50() == '1')  && ($syntaxonDepFr->get50() != '1')) $syntaxonDepFr->set50('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get51() == '1?') && ($syntaxonDepFr->get51() != '1')) $syntaxonDepFr->set51('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get51() == '1')  && ($syntaxonDepFr->get51() != '1')) $syntaxonDepFr->set51('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get52() == '1?') && ($syntaxonDepFr->get52() != '1')) $syntaxonDepFr->set52('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get52() == '1')  && ($syntaxonDepFr->get52() != '1')) $syntaxonDepFr->set52('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get53() == '1?') && ($syntaxonDepFr->get53() != '1')) $syntaxonDepFr->set53('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get53() == '1')  && ($syntaxonDepFr->get53() != '1')) $syntaxonDepFr->set53('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get54() == '1?') && ($syntaxonDepFr->get54() != '1')) $syntaxonDepFr->set54('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get54() == '1')  && ($syntaxonDepFr->get54() != '1')) $syntaxonDepFr->set54('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get55() == '1?') && ($syntaxonDepFr->get55() != '1')) $syntaxonDepFr->set55('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get55() == '1')  && ($syntaxonDepFr->get55() != '1')) $syntaxonDepFr->set55('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get56() == '1?') && ($syntaxonDepFr->get56() != '1')) $syntaxonDepFr->set56('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get56() == '1')  && ($syntaxonDepFr->get56() != '1')) $syntaxonDepFr->set56('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get57() == '1?') && ($syntaxonDepFr->get57() != '1')) $syntaxonDepFr->set57('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get57() == '1')  && ($syntaxonDepFr->get57() != '1')) $syntaxonDepFr->set57('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get58() == '1?') && ($syntaxonDepFr->get58() != '1')) $syntaxonDepFr->set58('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get58() == '1')  && ($syntaxonDepFr->get58() != '1')) $syntaxonDepFr->set58('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get59() == '1?') && ($syntaxonDepFr->get59() != '1')) $syntaxonDepFr->set59('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get59() == '1')  && ($syntaxonDepFr->get59() != '1')) $syntaxonDepFr->set59('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get60() == '1?') && ($syntaxonDepFr->get60() != '1')) $syntaxonDepFr->set60('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get60() == '1')  && ($syntaxonDepFr->get60() != '1')) $syntaxonDepFr->set60('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get61() == '1?') && ($syntaxonDepFr->get61() != '1')) $syntaxonDepFr->set61('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get61() == '1')  && ($syntaxonDepFr->get61() != '1')) $syntaxonDepFr->set61('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get62() == '1?') && ($syntaxonDepFr->get62() != '1')) $syntaxonDepFr->set62('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get62() == '1')  && ($syntaxonDepFr->get62() != '1')) $syntaxonDepFr->set62('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get63() == '1?') && ($syntaxonDepFr->get63() != '1')) $syntaxonDepFr->set63('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get63() == '1')  && ($syntaxonDepFr->get63() != '1')) $syntaxonDepFr->set63('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get64() == '1?') && ($syntaxonDepFr->get64() != '1')) $syntaxonDepFr->set64('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get64() == '1')  && ($syntaxonDepFr->get64() != '1')) $syntaxonDepFr->set64('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get65() == '1?') && ($syntaxonDepFr->get65() != '1')) $syntaxonDepFr->set65('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get65() == '1')  && ($syntaxonDepFr->get65() != '1')) $syntaxonDepFr->set65('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get66() == '1?') && ($syntaxonDepFr->get66() != '1')) $syntaxonDepFr->set66('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get66() == '1')  && ($syntaxonDepFr->get66() != '1')) $syntaxonDepFr->set66('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get67() == '1?') && ($syntaxonDepFr->get67() != '1')) $syntaxonDepFr->set67('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get67() == '1')  && ($syntaxonDepFr->get67() != '1')) $syntaxonDepFr->set67('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get68() == '1?') && ($syntaxonDepFr->get68() != '1')) $syntaxonDepFr->set68('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get68() == '1')  && ($syntaxonDepFr->get68() != '1')) $syntaxonDepFr->set68('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get69() == '1?') && ($syntaxonDepFr->get69() != '1')) $syntaxonDepFr->set69('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get69() == '1')  && ($syntaxonDepFr->get69() != '1')) $syntaxonDepFr->set69('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get70() == '1?') && ($syntaxonDepFr->get70() != '1')) $syntaxonDepFr->set70('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get70() == '1')  && ($syntaxonDepFr->get70() != '1')) $syntaxonDepFr->set70('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get71() == '1?') && ($syntaxonDepFr->get71() != '1')) $syntaxonDepFr->set71('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get71() == '1')  && ($syntaxonDepFr->get71() != '1')) $syntaxonDepFr->set71('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get72() == '1?') && ($syntaxonDepFr->get72() != '1')) $syntaxonDepFr->set72('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get72() == '1')  && ($syntaxonDepFr->get72() != '1')) $syntaxonDepFr->set72('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get73() == '1?') && ($syntaxonDepFr->get73() != '1')) $syntaxonDepFr->set73('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get73() == '1')  && ($syntaxonDepFr->get73() != '1')) $syntaxonDepFr->set73('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get74() == '1?') && ($syntaxonDepFr->get74() != '1')) $syntaxonDepFr->set74('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get74() == '1')  && ($syntaxonDepFr->get74() != '1')) $syntaxonDepFr->set74('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get75() == '1?') && ($syntaxonDepFr->get75() != '1')) $syntaxonDepFr->set75('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get75() == '1')  && ($syntaxonDepFr->get75() != '1')) $syntaxonDepFr->set75('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get76() == '1?') && ($syntaxonDepFr->get76() != '1')) $syntaxonDepFr->set76('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get76() == '1')  && ($syntaxonDepFr->get76() != '1')) $syntaxonDepFr->set76('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get77() == '1?') && ($syntaxonDepFr->get77() != '1')) $syntaxonDepFr->set77('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get77() == '1')  && ($syntaxonDepFr->get77() != '1')) $syntaxonDepFr->set77('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get78() == '1?') && ($syntaxonDepFr->get78() != '1')) $syntaxonDepFr->set78('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get78() == '1')  && ($syntaxonDepFr->get78() != '1')) $syntaxonDepFr->set78('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get79() == '1?') && ($syntaxonDepFr->get79() != '1')) $syntaxonDepFr->set79('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get79() == '1')  && ($syntaxonDepFr->get79() != '1')) $syntaxonDepFr->set79('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get80() == '1?') && ($syntaxonDepFr->get80() != '1')) $syntaxonDepFr->set80('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get80() == '1')  && ($syntaxonDepFr->get80() != '1')) $syntaxonDepFr->set80('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get81() == '1?') && ($syntaxonDepFr->get81() != '1')) $syntaxonDepFr->set81('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get81() == '1')  && ($syntaxonDepFr->get81() != '1')) $syntaxonDepFr->set81('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get82() == '1?') && ($syntaxonDepFr->get82() != '1')) $syntaxonDepFr->set82('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get82() == '1')  && ($syntaxonDepFr->get82() != '1')) $syntaxonDepFr->set82('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get83() == '1?') && ($syntaxonDepFr->get83() != '1')) $syntaxonDepFr->set83('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get83() == '1')  && ($syntaxonDepFr->get83() != '1')) $syntaxonDepFr->set83('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get84() == '1?') && ($syntaxonDepFr->get84() != '1')) $syntaxonDepFr->set84('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get84() == '1')  && ($syntaxonDepFr->get84() != '1')) $syntaxonDepFr->set84('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get85() == '1?') && ($syntaxonDepFr->get85() != '1')) $syntaxonDepFr->set85('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get85() == '1')  && ($syntaxonDepFr->get85() != '1')) $syntaxonDepFr->set85('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get86() == '1?') && ($syntaxonDepFr->get86() != '1')) $syntaxonDepFr->set86('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get86() == '1')  && ($syntaxonDepFr->get86() != '1')) $syntaxonDepFr->set86('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get87() == '1?') && ($syntaxonDepFr->get87() != '1')) $syntaxonDepFr->set87('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get87() == '1')  && ($syntaxonDepFr->get87() != '1')) $syntaxonDepFr->set87('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get88() == '1?') && ($syntaxonDepFr->get88() != '1')) $syntaxonDepFr->set88('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get88() == '1')  && ($syntaxonDepFr->get88() != '1')) $syntaxonDepFr->set88('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get89() == '1?') && ($syntaxonDepFr->get89() != '1')) $syntaxonDepFr->set89('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get89() == '1')  && ($syntaxonDepFr->get89() != '1')) $syntaxonDepFr->set89('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get90() == '1?') && ($syntaxonDepFr->get90() != '1')) $syntaxonDepFr->set90('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get90() == '1')  && ($syntaxonDepFr->get90() != '1')) $syntaxonDepFr->set90('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get91() == '1?') && ($syntaxonDepFr->get91() != '1')) $syntaxonDepFr->set91('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get91() == '1')  && ($syntaxonDepFr->get91() != '1')) $syntaxonDepFr->set91('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get92() == '1?') && ($syntaxonDepFr->get92() != '1')) $syntaxonDepFr->set92('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get92() == '1')  && ($syntaxonDepFr->get92() != '1')) $syntaxonDepFr->set92('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get93() == '1?') && ($syntaxonDepFr->get93() != '1')) $syntaxonDepFr->set93('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get93() == '1')  && ($syntaxonDepFr->get93() != '1')) $syntaxonDepFr->set93('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get94() == '1?') && ($syntaxonDepFr->get94() != '1')) $syntaxonDepFr->set94('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get94() == '1')  && ($syntaxonDepFr->get94() != '1')) $syntaxonDepFr->set94('1');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get95() == '1?') && ($syntaxonDepFr->get95() != '1')) $syntaxonDepFr->set95('1?');
		if((isset($syntaxonDepFrSub)) && (isset($syntaxonDepFr)) && ($syntaxonDepFrSub->get95() == '1')  && ($syntaxonDepFr->get95() != '1')) $syntaxonDepFr->set95('1');

		return $syntaxonDepFr;
	}

	/**
	 * Check if a $syntaxonDepFr has, at less, on present data
	 *
	 * @param  object $syntaxonDepFr    evegAppBundle\Entity\syntaxonRepartitionDepFr
	 * @return boolean
	 */
	public function isThereAtLessOnePresentData($syntaxonDepFr) {
		if($syntaxonDepFr->get01() == "1") return true;
		if($syntaxonDepFr->get02() == "1") return true;
		if($syntaxonDepFr->get03() == "1") return true;
		if($syntaxonDepFr->get04() == "1") return true;
		if($syntaxonDepFr->get05() == "1") return true;
		if($syntaxonDepFr->get06() == "1") return true;
		if($syntaxonDepFr->get07() == "1") return true;
		if($syntaxonDepFr->get08() == "1") return true;
		if($syntaxonDepFr->get09() == "1") return true;
		if($syntaxonDepFr->get10() == "1") return true;
		if($syntaxonDepFr->get11() == "1") return true;
		if($syntaxonDepFr->get12() == "1") return true;
		if($syntaxonDepFr->get13() == "1") return true;
		if($syntaxonDepFr->get14() == "1") return true;
		if($syntaxonDepFr->get15() == "1") return true;
		if($syntaxonDepFr->get16() == "1") return true;
		if($syntaxonDepFr->get17() == "1") return true;
		if($syntaxonDepFr->get18() == "1") return true;
		if($syntaxonDepFr->get19() == "1") return true;
		if($syntaxonDepFr->get20() == "1") return true;
		if($syntaxonDepFr->get21() == "1") return true;
		if($syntaxonDepFr->get22() == "1") return true;
		if($syntaxonDepFr->get23() == "1") return true;
		if($syntaxonDepFr->get24() == "1") return true;
		if($syntaxonDepFr->get25() == "1") return true;
		if($syntaxonDepFr->get26() == "1") return true;
		if($syntaxonDepFr->get27() == "1") return true;
		if($syntaxonDepFr->get28() == "1") return true;
		if($syntaxonDepFr->get29() == "1") return true;
		if($syntaxonDepFr->get30() == "1") return true;
		if($syntaxonDepFr->get31() == "1") return true;
		if($syntaxonDepFr->get32() == "1") return true;
		if($syntaxonDepFr->get33() == "1") return true;
		if($syntaxonDepFr->get34() == "1") return true;
		if($syntaxonDepFr->get35() == "1") return true;
		if($syntaxonDepFr->get36() == "1") return true;
		if($syntaxonDepFr->get37() == "1") return true;
		if($syntaxonDepFr->get38() == "1") return true;
		if($syntaxonDepFr->get39() == "1") return true;
		if($syntaxonDepFr->get40() == "1") return true;
		if($syntaxonDepFr->get41() == "1") return true;
		if($syntaxonDepFr->get42() == "1") return true;
		if($syntaxonDepFr->get43() == "1") return true;
		if($syntaxonDepFr->get44() == "1") return true;
		if($syntaxonDepFr->get45() == "1") return true;
		if($syntaxonDepFr->get46() == "1") return true;
		if($syntaxonDepFr->get47() == "1") return true;
		if($syntaxonDepFr->get48() == "1") return true;
		if($syntaxonDepFr->get49() == "1") return true;
		if($syntaxonDepFr->get50() == "1") return true;
		if($syntaxonDepFr->get51() == "1") return true;
		if($syntaxonDepFr->get52() == "1") return true;
		if($syntaxonDepFr->get53() == "1") return true;
		if($syntaxonDepFr->get54() == "1") return true;
		if($syntaxonDepFr->get55() == "1") return true;
		if($syntaxonDepFr->get56() == "1") return true;
		if($syntaxonDepFr->get57() == "1") return true;
		if($syntaxonDepFr->get58() == "1") return true;
		if($syntaxonDepFr->get59() == "1") return true;
		if($syntaxonDepFr->get60() == "1") return true;
		if($syntaxonDepFr->get61() == "1") return true;
		if($syntaxonDepFr->get62() == "1") return true;
		if($syntaxonDepFr->get63() == "1") return true;
		if($syntaxonDepFr->get64() == "1") return true;
		if($syntaxonDepFr->get65() == "1") return true;
		if($syntaxonDepFr->get66() == "1") return true;
		if($syntaxonDepFr->get67() == "1") return true;
		if($syntaxonDepFr->get68() == "1") return true;
		if($syntaxonDepFr->get69() == "1") return true;
		if($syntaxonDepFr->get70() == "1") return true;
		if($syntaxonDepFr->get71() == "1") return true;
		if($syntaxonDepFr->get72() == "1") return true;
		if($syntaxonDepFr->get73() == "1") return true;
		if($syntaxonDepFr->get74() == "1") return true;
		if($syntaxonDepFr->get75() == "1") return true;
		if($syntaxonDepFr->get76() == "1") return true;
		if($syntaxonDepFr->get77() == "1") return true;
		if($syntaxonDepFr->get78() == "1") return true;
		if($syntaxonDepFr->get79() == "1") return true;
		if($syntaxonDepFr->get80() == "1") return true;
		if($syntaxonDepFr->get81() == "1") return true;
		if($syntaxonDepFr->get82() == "1") return true;
		if($syntaxonDepFr->get83() == "1") return true;
		if($syntaxonDepFr->get84() == "1") return true;
		if($syntaxonDepFr->get85() == "1") return true;
		if($syntaxonDepFr->get86() == "1") return true;
		if($syntaxonDepFr->get87() == "1") return true;
		if($syntaxonDepFr->get88() == "1") return true;
		if($syntaxonDepFr->get89() == "1") return true;
		if($syntaxonDepFr->get90() == "1") return true;
		if($syntaxonDepFr->get91() == "1") return true;
		if($syntaxonDepFr->get92() == "1") return true;
		if($syntaxonDepFr->get93() == "1") return true;
		if($syntaxonDepFr->get94() == "1") return true;
		if($syntaxonDepFr->get95() == "1") return true;

		return false;
	}

}