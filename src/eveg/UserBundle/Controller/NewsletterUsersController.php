<?php

namespace eveg\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\User as BaseUser;

class NewsletterUsersController extends Controller
{

    private $userRepo;

    public function __construct($userRepo)
    {
        $this->userRepo     = $userRepo;
    }

    public function getUsersEmailsAction()
    {
        $emails = $this->userRepo->findUsersEmailsForNewsletter();

        return $emails;
    }

}
