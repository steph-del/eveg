<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportLog
 *
 * @ORM\Table(name="import_log")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\ImportLogRepository")
 */
class ImportLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

    /**
     * @var boolean
     *
     * @ORM\Column(name="simulation", type="boolean")
     */
    private $simulation;

    /**
     * @var string
     *
     * @ORM\Column(name="logFilename", type="string", length=255, nullable=true)
     */
    private $logFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="importFilename", type="string", length=255, nullable=true)
     */
    private $importFilename;

    /**
     * @var string
     *
     * @ORM\Column(name="importClientOriginalFilemane", type="string", length=255, nullable=true)
     */
    private $importClientOriginalFilename;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return ImportLog
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return ImportLog
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ImportLog
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return ImportLog
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return ImportLog
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set simulation
     *
     * @param boolean $simulation
     *
     * @return ImportLog
     */
    public function setSimulation($simulation)
    {
        $this->simulation = $simulation;

        return $this;
    }

    /**
     * Get simulation
     *
     * @return boolean
     */
    public function getSimulation()
    {
        return $this->simulation;
    }

    /**
     * Set logFilename
     *
     * @param string $logFilename
     *
     * @return ImportLog
     */
    public function setLogFilename($logFilename)
    {
        $this->logFilename = $logFilename;

        return $this;
    }

    /**
     * Get logFilename
     *
     * @return string
     */
    public function getLogFilename()
    {
        return $this->logFilename;
    }

    /**
     * Set importFilename
     *
     * @param string $importFilename
     *
     * @return ImportLog
     */
    public function setImportFilename($importFilename)
    {
        $this->importFilename = $importFilename;

        return $this;
    }

    /**
     * Get importFilename
     *
     * @return string
     */
    public function getImportFilename()
    {
        return $this->importFilename;
    }

    /**
     * Set importClientOriginalFilename
     *
     * @param string $importClientOriginalFilename
     *
     * @return ImportLog
     */
    public function setImportClientOriginalFilename($importClientOriginalFilename)
    {
        $this->importClientOriginalFilename = $importClientOriginalFilename;

        return $this;
    }

    /**
     * Get importClientOriginalFilename
     *
     * @return string
     */
    public function getImportClientOriginalFilename()
    {
        return $this->importClientOriginalFilename;
    }
}

