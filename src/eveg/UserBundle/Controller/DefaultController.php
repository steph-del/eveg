<?php

namespace eveg\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\User as BaseUser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('evegUserBundle:Default:index.html.twig', array('name' => $name));
    }


    public function deleteUserAction(BaseUser $user, $id)
    {
    	// FOSUserBundle user manager	
    	$userManager = $this->get('fos_user.user_manager');

		return true;

    }

    /**
     * @Security("has_role('ROLE_USER')") 
     */
    public function listDocumentsAction()
    {
        $currentUserId = $this->get('security.context')->getToken()->getUser()->getId();

        $em = $this->getDoctrine()->getManager();
        $currentUser = $em->getRepository('evegUserBundle:User')->findByIdWithDocs($currentUserId);
        //$usersScores = $em->getRepository('evegUserBundle:User')->findAllUsersWithTotalScore();

        $currentUserFiles = $currentUser->getSyntaxonFiles();
        $types = array();
        foreach ($currentUserFiles as $key => $file) {
            array_push($types, $file->getType());
        }

        $uniqueTypes = array_count_values($types);
        if(!array_key_exists('spreadsheet', $uniqueTypes)) $uniqueTypes['spreadsheet'] = 0;   // avoid empty key
        if(!array_key_exists('pdf', $uniqueTypes)) $uniqueTypes['pdf'] = 0;                   // avoid empty key
        

        $currentUserHttpLinks = $currentUser->getSyntaxonHttpLinks();
        $currentUserPhotos = $currentUser->getSyntaxonPhotos();

        return $this->render('evegUserBundle:Default:docs.html.twig', array(
            'userFiles' => $currentUserFiles,
            'nbSpreadsheets' => ($uniqueTypes['spreadsheet']),
            'nbPdfs' => ($uniqueTypes['pdf']),
            'userHttpLinks' => ($currentUserHttpLinks),
            'userPhotos' => $currentUserPhotos
        ));
    }

    public function topUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $topUsers = $em->getRepository('evegUserBundle:User')->findAllUsersWithTotalScore(10);

        return $this->render('evegUserBundle:Default/Fragments:topUsersThumbnail.html.twig', array(
            'topUsers' => $topUsers
        ));
    }
}
