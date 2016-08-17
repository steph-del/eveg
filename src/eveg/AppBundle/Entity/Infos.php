<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Infos
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
     * @ORM\Column(name="evegVersion", type="string", length=255)
     */
    private $evegVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="basevegVersion", type="string", length=255)
     */
    private $basevegVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="baseflorVersion", type="string", length=255)
     */
    private $baseflorVersion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastUpdate", type="datetime")
     */
    private $lastUpdate;


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
     * Set evegVersion
     *
     * @param string $evegVersion
     *
     * @return Infos
     */
    public function setEvegVersion($evegVersion)
    {
        $this->evegVersion = $evegVersion;

        return $this;
    }

    /**
     * Get evegVersion
     *
     * @return string
     */
    public function getEvegVersion()
    {
        return $this->evegVersion;
    }

    /**
     * Set basevegVersion
     *
     * @param string $basevegVersion
     *
     * @return Infos
     */
    public function setBasevegVersion($basevegVersion)
    {
        $this->basevegVersion = $basevegVersion;

        return $this;
    }

    /**
     * Get basevegVersion
     *
     * @return string
     */
    public function getBasevegVersion()
    {
        return $this->basevegVersion;
    }

    /**
     * Set baseflorVersion
     *
     * @param string $baseflorVersion
     *
     * @return Infos
     */
    public function setBaseflorVersion($baseflorVersion)
    {
        $this->baseflorVersion = $baseflorVersion;

        return $this;
    }

    /**
     * Get baseflorVersion
     *
     * @return string
     */
    public function getBaseflorVersion()
    {
        return $this->baseflorVersion;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return Infos
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
}

