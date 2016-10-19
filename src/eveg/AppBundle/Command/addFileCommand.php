<?php
// src/eveg/AppBundle/Command/addFile.php

namespace eveg\AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\HttpKernel\Exception\HttpException;
use eveg\AppBundle\Entity\SyntaxonFile;

class addFileCommand extends ContainerAwareCommand
{
	protected function configure()
	{
		$this
			->setName('eveg:add:file')
			->setDescription('Add a file.')
			->setHelp("This command allows you to add a file.")
			->addArgument('SCid', InputArgument::REQUIRED, 'syntaxonCore id')
			->addArgument('diagnosisOf', InputArgument::REQUIRED, 'syntaxonCore id')
			->addArgument('userName', InputArgument::REQUIRED, 'user name')
			->addArgument('type', InputArgument::REQUIRED, 'pdf, spreadsheet')
			->addArgument('visibility', InputArgument::REQUIRED, 'public, private, circle')
			->addArgument('title', InputArgument::REQUIRED, 'title')
			->addArgument('fileName', InputArgument::REQUIRED, 'file name')
			->addArgument('originalName', InputArgument::REQUIRED, 'original file name')
			->addArgument('originalSyntaxonName', InputArgument::REQUIRED, 'original syntaxon name')
			->addArgument('license', InputArgument::REQUIRED, 'license')
			->addArgument('hit', InputArgument::REQUIRED)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$io = new SymfonyStyle($input, $output);
		$io->title('Ajouter un fichier');

		$em = $this->getcontainer()->get('doctrine.orm.default_entity_manager');
		$SCrepo = $em->getRepository('evegAppBundle:SyntaxonCore');
		$UserRepo = $em->getRepository('evegUserBundle:User');

		$s      = $SCrepo->findById($input->getArgument('SCid'));
		$SCdiag = $SCrepo->findById($input->getArgument('diagnosisOf'));
		$user   = $UserRepo->findByUsername($input->getArgument('userName'))[0];

		$io->writeln('Updating (id: '.$input->getArgument('SCid').') '.$s->getSyntaxon());
		$io->writeln('    adding file '.$input->getArgument('fileName'));

		$sFile = new SyntaxonFile();
		$sFile->setHit($input->getArgument('hit'))
			  ->setDiagnosisOf($SCdiag);
		$sFile->setSyntaxonCore($s);
		$sFile->setUser($user)
			  ->setType($input->getArgument('type'))
			  ->setVisibility($input->getArgument('visibility'))
			  ->setTitle($input->getArgument('title'))
			  ->setFileName($input->getArgument('fileName'))
			  ->setOriginalName($input->getArgument('originalName'))
			  ->setOriginalSyntaxonName($input->getArgument('originalSyntaxonName'))
			  ->setLicense('CC-BY-SA')
			  ->setUpdatedAt(new \DateTime('now'))
			  ->setUploadedAt(new \DateTime('now'))
		;

		$s->addSyntaxonFile($sFile);
		$em->flush();

		$io->success('file added');

	}
}