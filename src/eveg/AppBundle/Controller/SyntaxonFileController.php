<?php
// src/eveg/AppBundle/Controller/SyntaxonFileController.php

namespace eveg\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eveg\AppBundle\Entity\SyntaxonCore;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use eveg\AppBundle\Form\Type\SyntaxonCoreFileType;
use eveg\AppBundle\Entity\SyntaxonFile;
use eveg\AppBundle\Form\Type\SyntaxonFileType;
use eveg\AppBundle\Form\Type\SyntaxonCoreFileLinkType;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * SyntaxonFile controller.
 *
 */
class SyntaxonFileController extends Controller
{
	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore")
	* 
	*/
	public function addFileAction(SyntaxonCore $syntaxon, $id, Request $request)
	{
		
		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new SyntaxonCoreFileType());

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {

			$data = $form->getData();

			$files = $data->getSyntaxonFiles();
			$nbFiles = count($files);

			$currentUser = $this->getUser();

			foreach ($files as $key => $file) {
				$file->setSyntaxonCore($syntaxon);
				$file->setUser($currentUser);
				$file->setOriginalName($file->getFileFile()->getClientOriginalName());
				switch (strtolower($file->getFileFile()->getClientOriginalExtension())) {
					case 'csv':
					case 'ods':
					case 'xls':
					case 'xlsx':
						$file->setType('spreadsheet');
						break;
					case 'pdf':
						$file->setType('pdf');
						break;
				}
				$file->setUploadedAt(new \DateTime('now'));
				$file->setOriginalSyntaxonName('(id:'.$syntaxon->getId().') '.$syntaxon->getSyntaxon());

				$syntaxon->addSyntaxonFile($file);
			}

			$em = $this->getDoctrine()->getManager();
      		$em->persist($syntaxon);
      		$em->flush();

      		if ($nbFiles == 1) {
      			$request->getSession()->getFlashBag()->add('success', 'Un nouveau fichier enregistré.');
      		} elseif ($nbFiles > 1) {
      			$request->getSession()->getFlashBag()->add('success', $nbFiles.' nouveaux fichiers enregistrés.');
      		} else {
      			$request->getSession()->getFlashBag()->add('warning', 'Aucun nouveau fichier enregistré.');
      		}

      		// If SaveAndAdd
      		if ($form->get('saveAndAdd')->isClicked()) {
      			return $this->redirect($this->generateUrl('eveg_add_file', 
        			array('id' => $id)
        		));
      		} else {
      			return $this->redirect($this->generateUrl('eveg_show_one', 
        			array('id' => $id)
        		));
      		}
		}

		return $this->render('evegAppBundle:Default:addFile.html.twig', array(
			'syntaxon' => $syntaxon,
			'form' => $form->createView()
		));
	}

	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore")
	* @ParamConverter("file", class="evegAppBundle:SyntaxonFile", options={"id" = "idFile"})
	*
	* @Security("has_role('ROLE_USER')") 
	*/
	public function editFileAction(SyntaxonCore $syntaxon, $id, SyntaxonFile $file)
	{
		
		// author of the file == current user ? OR role = ROLE_SUPER_ADMIN
		if( ($file->getUser() !== $this->getUser()) && (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) ) {
			Throw new HttpException(401, 'You are not allowed to edit this file.');
		}

		$request = $this->getRequest();

		// Creates the form...
    	$form = $this->createForm(new SyntaxonFileType($this->get('security.authorization_checker'), $this->get('eveg_app.possible_diagnosis'), $this->get('request_stack')), $file);

        // ... and then hydrates it
        $form->handleRequest($request);

        // Job routine
		if($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
      		$em->persist($file);
      		$em->flush();

      		$request->getSession()->getFlashBag()->add('success', 'Les informations relative à votre fichier ont été modifiées.');

      		return $this->redirect($this->generateUrl('eveg_show_one', 
        			array('id' => $id)
        		));
		}

		return $this->render('evegAppBundle:Default:editFile.html.twig', array(
			'syntaxon' => $syntaxon,
			'form' => $form->createView()
		));
	}

	/**
	* @ParamConverter("file", class="evegAppBundle:SyntaxonFile", options={"id" = "idFile"})
	* 
	*/
	public function downloadFileAction($id, SyntaxonFile $file)
	{
		// Grabing download helper
		$downloadHandler = $this->get('vich_uploader.download_handler');

		// Hit+1
		$file->setHit($file->getHit()+1);
		$em = $this->getDoctrine()->getManager();
  		$em->persist($file);
  		$em->flush();

		// Return
		$newFileName = $file->getOriginalName();
		return $downloadHandler->downloadObject($file, $fileField = 'fileFile', $className = null, $newFileName);
	}

	/**
	* @ParamConverter("file", class="evegAppBundle:SyntaxonFile", options={"id" = "idFile"})
	* 
	* @Security("has_role('ROLE_USER')") 
	*/
	public function deleteFileAction(SyntaxonFile $file)
	{
		// author of the file == current user ? OR role = ROLE_SUPER_ADMIN
		if( ($file->getUser() !== $this->getUser()) && (!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) ) {
			Throw new HttpException(401, 'You are not allowed to delete this file.');
		}

		// Get entity manager
		$em = $this->getDoctrine()->getManager();

		// Get file title
		$fileTitle = $file->getTitle();

		// Remove file
		$em->remove($file);
		$em->flush();

		// Flash
        $this->get('session')->getFlashBag()->add(
            'success',
            'Le fichier "'.$fileTitle.'" a été supprimé'
        );

        // Redirect to referer
        $referer = $this->getRequest()->headers->get('referer');
        return $this->redirect($referer);

	}

	/**
	* @ParamConverter("syntaxon", class="evegAppBundle:syntaxonCore")
	* 
	*/
	public function addFileLinkAction(SyntaxonCore $syntaxon, $id, Request $request)
	{
		$request = $this->getRequest();

		// Get all files
		$em = $this->getDoctrine()->getManager();
		$filesRepo = $em->getRepository('evegAppBundle:SyntaxonFile');
		$files = $filesRepo->findAll();

		// Creates the form...
    	$form = $this->createForm(new SyntaxonCoreFileLinkType());
		
		// ... and then hydrates it
        $form->handleRequest($request);

		// Get the file id to retrieve
		$fileIdToRetrieve = (int)$request->request->get('syntaxonCoreFileLink')['syntaxonFiles'][0]['fileLink'];
		$newTitle = (string)$request->request->get('syntaxonCoreFileLink')['syntaxonFiles'][0]['title'];
		$newVisibility = (string)$request->request->get('syntaxonCoreFileLink')['syntaxonFiles'][0]['visibility'];
		$newDiagnosisOf = $request->request->get('syntaxonCoreFileLink')['syntaxonFiles'][0]['diagnosisOf'];
//dump($newDiagnosisOf);

        // Job routine
		if($form->isValid()) {

			$data = $form->getData();

			$files = $data->getSyntaxonFiles();
			$nbFiles = count($files);

			$currentUser = $this->getUser();

			// get the file
			$fileToLink = $filesRepo->findById($fileIdToRetrieve)[0];

			// new file object
			$file = new SyntaxonFile($fileToLink);
			// link both files
			//$file = $fileToLink;

			$file->setLinked(true);
			$file->setSyntaxonCore($syntaxon);
			$file->setUser($currentUser);
			$file->setTitle($newTitle);
			$file->setType($fileToLink->getType());
			$file->setFileName($fileToLink->getFileName());
			$file->setOriginalName($fileToLink->getOriginalName());
			$file->setVisibility($newVisibility);
			$file->setDiagnosisOf($form->getData()->getSyntaxonFiles()[0]->getDiagnosisOf());
			$file->setLicense($fileToLink->getLicense());
			$file->setUploadedAt(new \DateTime('now'));
			$file->setUpdatedAt(new \DateTime('now'));
			$file->setOriginalSyntaxonName('(id:'.$syntaxon->getId().') '.$syntaxon->getSyntaxon());

			$syntaxon->addSyntaxonFile($file);

      		$em->persist($syntaxon);
      		$em->flush();

      		if ($nbFiles == 1) {
      			$request->getSession()->getFlashBag()->add('success', 'Un nouveau fichier lié.');
      		} elseif ($nbFiles > 1) {
      			$request->getSession()->getFlashBag()->add('success', $nbFiles.' nouveaux fichiers liés.');
      		} else {
      			$request->getSession()->getFlashBag()->add('warning', 'Aucun nouveau fichier lié.');
      		}

      		// If SaveAndAdd
      		if ($form->get('saveAndAdd')->isClicked()) {
      			return $this->redirect($this->generateUrl('eveg_add_file_link', 
        			array('id' => $id)
        		));
      		} else {
      			return $this->redirect($this->generateUrl('eveg_show_one', 
        			array('id' => $id)
        		));
      		}
		}

		return $this->render('evegAppBundle:Default:addFileLink.html.twig', array(
			'syntaxon' => $syntaxon,
			'files'    => $files,
			'form'     => $form->createView()
		));
	}

}