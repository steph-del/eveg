<?php

namespace eveg\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\User as BaseUser;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('evegUserBundle:Default:index.html.twig', array('name' => $name));
    }


    public function deleteUserAction(BaseUser $user, $id)
    {
    	//print($user);

    	// FOSUserBundle user manager
    	
    	$userManager = $this->get('fos_user.user_manager');
		/*try{
			$userManager->deleteUser($user);
			print('Utilisateur supprimé');
		} catch(Exception $e) {
			print('Exception reçue : ' .  $e->getMessage() . "\n");
		}
		*/

		return true;

    }
}
