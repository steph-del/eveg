<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use eveg\UserBundle\Entity\User;

/**
 * SyntaxonHttpLink
 *
 * @ORM\Table(name="eveg_syntaxon_http_link")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonHttpLinkRepository")
 */
class SyntaxonHttpLink
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
     *
     * @ORM\ManyToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonCore", inversedBy="syntaxonHttpLinks")
     * @ORM\JoinColumn(name="syntaxonCore_id", referencedColumnName="id")
     */
    protected $syntaxonCore;

    /**
     *
     * @ORM\ManyToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonCore", cascade={"persist"})
     */
    private $diagnosisOf;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User", inversedBy="syntaxonHttpLinks")
     * @ORM\JoinColumn(name="user_id", nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=512)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=512)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $uploadedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="originalSyntaxonName", type="string", length=512)
     *
     */
    private $originalSyntaxonName;

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
     * Set user
     *
     * @param \stdClass $user
     *
     * @return SyntaxonHttpLink
     */
    public function setUser(User $user)
    {
        $user->addSyntaxonHttpLink($this);
        
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     *
     * @return SyntaxonHttpLink
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return SyntaxonHttpLink
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return SyntaxonHttpLink
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return SyntaxonHttpLink
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
     * Set uploadedAt
     *
     * @param \DateTime $uploadedAt
     *
     * @return SyntaxonFile
     */
    public function setUploadedAt($uploadedAt)
    {
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    /**
     * Get uploadedAt
     *
     * @return \DateTime
     */
    public function getUploadedAt()
    {
        return $this->uploadedAt;
    }

    /**
     * Set originalSyntaxonName
     *
     * @param \String $originalSyntaxonName
     *
     * @return SyntaxonFile
     */
    public function setOriginalSyntaxonName($originalSyntaxonName)
    {
        $this->originalSyntaxonName = $originalSyntaxonName;

        return $this;
    }

    /**
     * Get originalSyntaxonName
     *
     * @return \String
     */
    public function getOriginalSyntaxonName()
    {
        return $this->originalSyntaxonName;
    }

    /**
     * Set hit
     *
     * @param integer $hit
     *
     * @return SyntaxonHttpLink
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
     * Set syntaxonCore
     *
     * @param \eveg\AppBundle\Entity\SyntaxonCore $syntaxonCore
     *
     * @return SyntaxonFile
     */
    public function setSyntaxonCore(\eveg\AppBundle\Entity\SyntaxonCore $syntaxonCore = null)
    {
        $this->syntaxonCore = $syntaxonCore;

        return $this;
    }

    /**
     * Get syntaxonCore
     *
     * @return \eveg\AppBundle\Entity\SyntaxonCore
     */
    public function getSyntaxonCore()
    {
        return $this->syntaxonCore;
    }

    /**
     * Set diagnosisOf
     *
     */
    public function setDiagnosisOf($diagnosis = null)
    {
        $this->diagnosisOf = $diagnosis;
    }

    /**
     * Get diagnosisOf
     *
     */
    public function getDiagnosisOf()
    {
        return $this->diagnosisOf;
    }
}

