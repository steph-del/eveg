<?php
// src/eveg/AppBundle/Controller/RepartitionImageCacheController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RepartitionImageCacheController extends Controller
{
	/**
	 *
	 * see http://stackoverflow.com/questions/11511511/how-to-save-a-png-image-server-side-from-a-base64-data-string
	 */
	public function saveRepartitionMapAction(Request $request, $mapType)
	{

		if($request->isMethod('POST')) {
			$uploadedFile = $request->get('file');
			$name = $request->get('name');
			$id = $request->get('id');
			
			if (!file_exists('./img/cache/maps/fr')) {
				mkdir('./img/cache/maps/fr', 0777, true);
			}
			if (!file_exists('./img/cache/maps/eu')) {
				mkdir('./img/cache/maps/eu', 0777, true);
			}

			list($type, $uploadedFile) = explode(';', $uploadedFile);
			list(, $uploadedFile)      = explode(',', $uploadedFile);
			$uploadedFile = base64_decode($uploadedFile);

			$newFile = fopen("./img/cache/maps/".$mapType."/".$id."-".$mapType.".png", "w");
			fwrite($newFile, $uploadedFile);
			fclose($newFile);

			return new Response($id);
		}

		return new Response('An error occured while generating map image cache.');

	}

	public function imageExistsAction(Request $request)
	{
		$id = $request->get('id');
		$mapType = $request->get('mapType');
		if (file_exists($this->get('kernel')->getRootDir().'/../web'.'/img/cache/maps/'.$mapType.'/'.$id.'-'.$mapType.'.png')) {
			return new Response('true');
		} else {
			Throw new HttpException(404, 'The requested file ('.$id.'-'.$mapType.'.png'.') does not exist.');
		}
	}
}