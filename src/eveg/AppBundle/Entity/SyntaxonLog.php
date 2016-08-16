<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Loggable\Entity\MappedSuperclass\AbstractLogEntry;
use Gedmo\Loggable\Entity\Repository\LogEntryRepository;

/**
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonLogRepository", readOnly=true)
 * @ORM\Table(
 *      name="eveg_log",
 * )
 */
class SyntaxonLog extends AbstractLogEntry
{

}