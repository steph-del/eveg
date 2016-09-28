<?php
// src/eveg/AppBundle/Command/whatsUpEmail.php

namespace eveg\AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\HttpKernel\Exception\HttpException;
use eveg\UserBundle;

class whatsUpEmailCommand extends ContainerAwareCommand
{
	protected function configure()
	{
		$this
			->setName('eveg:newsletter:last-uploads')
			->setDescription('Send email with all files added for a period.')
			->setHelp("This command allows you to send email with all files added for a period. Arguments : since [day, week, month], for : [users, admin]")
			->addArgument('since', InputArgument::REQUIRED, 'day, week, month')
			->addArgument('for', InputArgument::REQUIRED, 'users, admin')
			->addOption('force', InputArgument::REQUIRED)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{

		$since = $input->getArgument('since');
		$dateTimeRequested = null;

		$io = new SymfonyStyle($input, $output);
		$io->title('Envoi un mail avec les derniers fichiers à '.$input->getArgument('for'));

		if($since == 'day') {
			$dateTimeRequested = (new \Datetime())->modify('-1 day');
		} elseif($since == 'week') {
			$dateTimeRequested = (new \Datetime())->modify('-1 week');
		} elseif($since == 'month') {
			$dateTimeRequested = (new \Datetime())->modify('-1 month');
		} else {
			throw new HttpException(500, "Excpected variable 'since' with values 'day', 'week', 'month'");
		}

		switch($since) {
			case 'day':
				$sinceFr = 'un jour';
				break;
			case 'week':
				$sinceFr = 'une semaine';
				break;

			case 'month':
				$sinceFr = "un mois";
				break;
		}

		$mailer = $this->getContainer()->get('mailer');
		$templating = $this->getContainer()->get('templating');
		$users = $this->getContainer()->get('eveg.user.newsletter');
		$emails = $users->getUsersEmailsAction();
		$emailsList = array();
		foreach ($emails as $key => $email) {
			foreach ($email as $key => $value) {
				array_push($emailsList, $value);
			}
		}

		$wu = $this->getContainer()->get('eveg_app.whatsup');

		$news = $wu->tellMeWhatsNew($limitItems = null, $since = $dateTimeRequested);

		$io->writeln(count($news).' nouveaux documents ajoutés à eVeg depuis '.$sinceFr.'.');
		$io->writeln(count($emailsList).' mails à envoyer.');

		$message = \Swift_Message::newInstance()
			->setSubject('eVeg | Derniers ajouts')
			->setFrom($this->getContainer()->getParameter('eveg')['feedback']['mail_website_admin'])
			->setBody(
				$templating->render(
					'evegAppBundle:Emails:newsletterLastUploads.html.twig',
					array('news' => $news,
						  'since' => $input->getArgument('since')
					)
				),
				'text/html'
			)
		;

		if($input->getArgument('for') == 'users') {
			$message->setTo($emailsList);
		} elseif($input->getArgument('for') == 'admin') {
			$message->setTo($this->getContainer()->getParameter('eveg')['feedback']['mail_website_admin']);
		} else {
			throw new HttpException(500, "Excpected variable 'for' with values 'admin', 'users'");
		}

		if(count($news) > 1) {
			if($input->getOption('force') || $io->confirm("Valider l'envoi à ".$input->getArgument('for')."?", false)) {
				$mailer->send($message);
				$io->success('La newsletter a été envoyée.');
			}
		} else {
			$output->writeln('Aucun mail envoyé');
		}
		
		
	}
}