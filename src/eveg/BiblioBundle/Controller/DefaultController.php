<?php

namespace eveg\BiblioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use eveg\BiblioBundle\Entity\BaseBiblio;
use eveg\BiblioBundle\Form\Type\BaseBiblioType;
use eveg\BiblioBundle\Form\Type\BaseBiblioAddType;
use eveg\BiblioBundle\Entity\BiblioFile;
use eveg\BiblioBundle\Entity\BiblioFileDwLink;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use \Imagick;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DefaultController extends Controller
{
	/*
 	 * @Security("has_role('ROLE_BIBLIO')")
 	 */
    public function searchAction()
    {
    	$em   = $this->getDoctrine()->getManager();
    	$repo = $em->getRepository('evegBiblioBundle:BiblioFile');
    	$lastFiles = $repo->getLastFiles(10);

    	$countFiles = $repo->getNbFiles();

    	return $this->render('evegBiblioBundle:Default:search.html.twig', array(
    		'lastFiles'  => $lastFiles,
    		'countFiles' => $countFiles
    	));
    }

    /**
	* @Security("has_role('ROLE_BIBLIO')")
	*/
    public function showOneReferenceAction($id)
    {
    	$em     = $this->getDoctrine()->getManager();
    	$repo   = $em->getRepository('evegBiblioBundle:BaseBiblio');
    	$biblio = $repo->findWithFilesById($id);

    	return $this->render('evegBiblioBundle:Default:showOne.html.twig', array(
			'biblio' => $biblio,
		));
    }

    /**
	* @ParamConverter("biblio", class="evegBiblioBundle:BaseBiblio")
	* @Security("has_role('ROLE_BIBLIO')")
	*/
    public function addFileAction(BaseBiblio $biblio, $id, Request $request)
    {
    	$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new BaseBiblioType());

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {
			$data        = $form->getData();
			$currentUser = $this->getUser();
			$em          = $this->getDoctrine()->getManager();

			$file = $data->getFiles()[0];
			$thumbId = strval(uniqid());

			$file->setBaseBiblio($biblio);
			$file->setUpdatedBy($currentUser);
			$file->setUpdatedAt(new \Datetime('now'));
			$file->setThumbnail($thumbId.'.jpeg');
			$file->setOriginalFilename($file->getFile()->getClientOriginalName());
			$file->setFilesize(filesize($file->getFile()));

			$biblio->setUpdatedBy($currentUser);
			$biblio->addFile($file);

      		$em->persist($biblio);

			// Thumbnail
			$im = new Imagick('../web/uploads/biblio/'.$file->getFileName());
			$im->setIteratorIndex(0);
			$im->setCompression(Imagick::COMPRESSION_LZW);
			$im->setCompressionQuality(90);
			$im->writeImage('../web/uploads/biblio/thumbnails/'.$thumbId.'.jpeg');

			$file->setNbPages($im->getNumberImages());

			$em->flush();

			$request->getSession()->getFlashBag()->add('success', 'Un nouveau fichier enregistré.');

			// If SaveAndAdd
	  		if ($form->get('saveAndAdd')->isClicked()) {
	  			return $this->redirect($this->generateUrl('eveg_biblio_add', 
	    			array('id' => $biblio->getId())
	    		));
	  		} else {
	  			return $this->redirect($this->generateUrl('eveg_biblio_show_one', 
	    			array('id' => $biblio->getId())
	    		));
	  		}
			
		}

		return $this->render('evegBiblioBundle:Default:addFile.html.twig', array(
			'biblio' => $biblio,
			'form' => $form->createView()
		));
    }

    /**
	* @ParamConverter("file", class="evegBiblioBundle:BiblioFile")
	* @Security("has_role('ROLE_BIBLIO')")
	*/
    public function downloadFileAction($id, BiblioFile $file)
    {
    	// Grabing download helper
		$downloadHandler = $this->get('vich_uploader.download_handler');

		// Hit+1
		$file->setHit($file->getHit()+1);
		$em = $this->getDoctrine()->getManager();
  		$em->persist($file);
  		$em->flush();

		// Return
		$newFileName = $file->getOriginalFileName();
		return $downloadHandler->downloadObject($file, $fileField = 'file', $className = null, $newFileName);
    }

    /**
	* @ParamConverter("file", class="evegBiblioBundle:BiblioFile")
	* @Security("has_role('ROLE_BIBLIO')")
	*/
    public function generateDwLinkAction($id, BiblioFile $file)
    {
    	$dwLink      = new BiblioFileDwLink();
    	$currentUser = $this->getUser();
    	$now         = new \Datetime('now');
    	$until       = new \DateTime('+2days');;

    	$dwLink->setDwKey(uniqid());
    	$dwLink->setFile($file);
    	$dwLink->setGeneratedBy($currentUser);
    	$dwLink->setGeneratedAt($now);
    	$dwLink->setAvailableUntil($until);

    	$em = $this->getDoctrine()->getManager();
    	$em->persist($dwLink);
  		$em->flush();

  		return $this->render('evegBiblioBundle:Default:DwLink.html.twig', array(
			'file' => $file,
			'dwLink' => $dwLink,
			'key' => $dwLink->getDwKey(),
		));
    }

    /**
	* 
	*/
	public function downloadFileWithKeyAction($dwKey)
	{
		$now = new \Datetime('now');

		$em   = $this->getDoctrine()->getManager();
		$repo = $em->getRepository('evegBiblioBundle:BiblioFileDwLink');
		$link = $repo->getLinkWithFile($dwKey);

		// Check dates
		$now   = new \Datetime('now');
		$until = $link->getAvailableUntil();
		if($now >= $until) {
			// Link unavailable
			Throw new HttpException(404, "Lien non valide.");
		}

		// Hit++
		$link->setHit($link->getHit() + 1);
		$file = $link->getFile();
		$file->setHit($file->getHit() + 1);
		$em->flush();

		// Grabing download helper
		$downloadHandler = $this->get('vich_uploader.download_handler');
		// Return
		$newFileName = $file->getOriginalFileName();
		return $downloadHandler->downloadObject($file, $fileField = 'file', $className = null, $newFileName);
		
	}

	/**
	* @Security("has_role('ROLE_BIBLIO')")
	*/
	public function addReferenceAction(Request $request)
	{
		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new BaseBiblioAddType());

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {
			$data        = $form->getData();
			$currentUser = $this->getUser();
			$em          = $this->getDoctrine()->getManager();

			$reference = $data;
dump($reference);
			$reference->setUpdatedAt(new \Datetime('now'));
			$reference->setUpdatedBy($currentUser);

			$em->persist($reference);
			$em->flush();

			$request->getSession()->getFlashBag()->add('success', 'Une nouvelle référence enregistrée.');

			return $this->redirect($this->generateUrl('eveg_biblio_search'));

		}

		return $this->render('evegBiblioBundle:Default:addReference.html.twig', array(
			'form' => $form->createView()
		));

	}
}
