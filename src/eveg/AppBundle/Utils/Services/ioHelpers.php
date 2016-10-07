<?php
// src/eveg/appBundle/Utils/Services/htmlHelpers.php

namespace eveg\AppBundle\Utils\Services;

use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * io utilities (read csv, output html...)
 *
 */
class ioHelpers
{

	private function getTableFragment($titleValue, $dbValue, $csvValue)
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

	private function getHtmlBase($title, $content, $onlyLog)
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


}