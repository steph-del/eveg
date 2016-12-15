<?php

namespace eveg\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BiblioFileDwLink
 *
 * @ORM\Table(name="biblio_dw_link")
 * @ORM\Entity(repositoryClass="eveg\BiblioBundle\Entity\BiblioFileDwLinkRepository")
 */
class BiblioFileDwLink
{
    public function __construct()
    {
        $this->setHit(0);
    }
    
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
     * @ORM\Column(name="dwKey", type="string", length=255)
     */
    private $dwKey;
    
    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="eveg\BiblioBundle\Entity\BiblioFile", cascade={"persist"})
     */
    private $file;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     */
    private $generatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="generatedAt", type="datetime")
     */
    private $generatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="availableUntil", type="datetime")
     */
    private $availableUntil;

    /**
     * @var integer
     *
     * @ORM\Column(name="hit", type="integer")
     */
    private $hit;


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
     * Set file
     *
     * @param \stdClass $file
     *
     * @return BiblioFileDwLink
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \stdClass
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set generatedBy
     *
     * @param \stdClass $generatedBy
     *
     * @return BiblioFileDwLink
     */
    public function setGeneratedBy($generatedBy)
    {
        $this->generatedBy = $generatedBy;

        return $this;
    }

    /**
     * Get generatedBy
     *
     * @return \stdClass
     */
    public function getGeneratedBy()
    {
        return $this->generatedBy;
    }

    /**
     * Set generatedAt
     *
     * @param \DateTime $generatedAt
     *
     * @return BiblioFileDwLink
     */
    public function setGeneratedAt($generatedAt)
    {
        $this->generatedAt = $generatedAt;

        return $this;
    }

    /**
     * Get generatedAt
     *
     * @return \DateTime
     */
    public function getGeneratedAt()
    {
        return $this->generatedAt;
    }

    /**
     * Set availableUntil
     *
     * @param \DateTime $availableUntil
     *
     * @return BiblioFileDwLink
     */
    public function setAvailableUntil($availableUntil)
    {
        $this->availableUntil = $availableUntil;

        return $this;
    }

    /**
     * Get availableUntil
     *
     * @return \DateTime
     */
    public function getAvailableUntil()
    {
        return $this->availableUntil;
    }

    /**
     * Set hit
     *
     * @param integer $hit
     *
     * @return BiblioFileDwLink
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

        return $this;
    }

    /**
     * Get hit
     *
     * @return integer
     */
    public function getHit()
    {
        return $this->hit;
    }

    /**
     * Set dwKey
     *
     * @param string $dwKey
     *
     * @return BiblioFileDwLink
     */
    public function setDwKey($dwKey)
    {
        $this->dwKey = $dwKey;

        return $this;
    }

    /**
     * Get keydwKeyy
     *
     * @return string
     */
    public function getDwKey()
    {
        return $this->dwKey;
    }
}
