<?php
// src/eveg/AppBundle/Controller/FeedbackController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use eveg\AppBundle\Entity\Feedback;
use eveg\AppBundle\Form\Type\FeedbackSyntaxonType;
use eveg\AppBundle\Form\Type\FeedbackMapDepFrType;
use eveg\AppBundle\Form\Type\FeedbackMapEuropeType;
use eveg\AppBundle\Form\Type\FeedbackGeneralType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class FeedbackController extends Controller
{

	public function feedbackAction(Request $request, $syntaxonName = null, $about = null)
	{
		// Feedback
        $feedback = new Feedback();

        if($request->isXmlHttpRequest()) $about = $request->get('about');

        $currentUser = $this->get('security.context')->getToken()->getUser();

        if($currentUser !== 'anon.') {
          $feedback->setAbout($about)
             ->setSyntaxon($syntaxonName)
             ->setDate(new \DateTime('now'))
             ->setUser($currentUser)
             ->setEmail($currentUser->getEmail())
             ;
        } else {
          $feedback->setAbout($about)
             ->setSyntaxon($syntaxonName)
             ->setDate(new \DateTime('now'))
             ->setUser(null)
             ->setEmail('')
             ;
        }

		    if($about == 'syntaxon') {
        	$formFeedback = $this->createForm(new FeedbackSyntaxonType(), $feedback);
        } elseif($about == 'mapDepFr') {
        	$formFeedback = $this->createForm(new FeedbackMapDepFrType(), $feedback);
        } elseif($about == 'mapEurope') {
        	$formFeedback = $this->createForm(new FeedbackMapEuropeType(), $feedback);
        } elseif($about == 'general') {
        	$formFeedback = $this->createForm(new FeedbackGeneralType(), $feedback);
        } else {
        	Throw new HttpException(500, 'The requested feedback ('.$about.') could not be set.');
        }

        $formFeedback->handleRequest($request);

		if($request->isXmlHttpRequest()) {

			$about 		= $request->get('about');
			$email 		= $request->get('email');
			$type 		= $request->get('type');
			$syntaxon 	= $request->get('syntaxonName');
			if($request->get('syntaxonName')) $syntaxon = $request->get('syntaxonName');
			$message 	= $request->get('message');

			$feedback->setAbout($about)
					 ->setEmail($email)
					 ->setType($type)
					 ->setMessage($message)
					 ;
			if($request->get('syntaxonName')) $feedback->setSyntaxon($syntaxon);

      if($currentUser !== 'anon.') $currentUser->addFeedback($feedback);

			$em = $this->getDoctrine()->getManager();
      		$em->persist($feedback);
      		$em->flush();

      		// Send mail
      		if($about == 'syntaxon') {
      			$subject = 'eVeg feedback';
      		} elseif($about == 'mapDepFr') {
      			$subject = 'eVeg feedback : chorologie française';
      		} elseif($about = 'mapEurope') {
      			$subject = 'eveg feedback : chorologie européenne';
      		} elseif($about == 'general') {
      			$subject = 'eveg feedback';
      		}
      		
      		if($type == 'data') {
      			$to = $this->container->getParameter('eveg')['feedback']['mail_base_admin']; // PJ
      			$cc = $this->container->getParameter('eveg')['feedback']['mail_website_admin'];
      		} else {
      			$to = $this->container->getParameter('eveg')['feedback']['mail_website_admin'];
      		}
      		$from = 'admin@e-veg.net';

      		$message = \Swift_Message::newInstance()
		        ->setSubject($subject)
		        ->setFrom($feedback->getEmail())
		        ->setTo($to)
		        ->setBody(
		            $this->renderView(
		                'evegAppBundle:Emails:feedback.html.twig',
		                array('feedback' => $feedback)
		            ),
		            'text/html'
		        )
		      ;
          
          $messageToUser = \Swift_Message::newInstance();
          $messageToUser
            ->setSubject('eVeg : votre message a bien été envoyé')
            ->setFrom($from)
            ->setTo($feedback->getEmail())
            ->setBody(
                $this->renderView(
                    'evegAppBundle:Emails:feedbackUser.html.twig',
                    array('feedback' => $feedback)
                ),
                'text/html'
            )
          ;

		    if($type == 'data') $message->setCc($cc);
		    $this->get('mailer')->send($message);
        $this->get('mailer')->send($messageToUser);

      		// return for ajax
      		return new JsonResponse(array('data' => 'Feedback sent'));
		}

		// return the form view
		return $this->render('evegAppBundle:Default:Fragments/FeedbackForms/feedback.html.twig', array(
				'formFeedback' => $formFeedback->createView()
		));
	}
}