<?php

namespace eveg\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BaseBiblio
 * Contains all references from baseveg biblio and user's additions
 *
 * @ORM\Table(name="base_biblio")
 * @ORM\Entity(repositoryClass="eveg\BiblioBundle\Entity\BaseBiblioRepository")
 */
class BaseBiblio
{
    public function __construct()
    {
        $this->files = new ArrayCollection();
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
     * @ORM\Column(name="reference", type="string", length=1024)
     */
    private $reference;
    private $label;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User", inversedBy="BaseBiblio")
     * @ORM\JoinColumn(name="user_id", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="eveg\BiblioBundle\Entity\BiblioFile", mappedBy="baseBiblio", cascade={"persist"})
     */
    protected $files;

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
     * @return BaseBiblio
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
     * Set updatedBy
     *
     * @param \stdClass $updatedBy
     *
     * @return BaseBiblio
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \stdClass
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return BaseBiblio
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * Get files
    *
    */
    public function getFiles()
    {
        return $this->files;
    }

    public function addFile(BiblioFile $file)
    {
        $this->files->add($file);
    }

    public function removeFile(BiblioFile $file)
    {
        $this->files->removeElement($file);
    }
}
