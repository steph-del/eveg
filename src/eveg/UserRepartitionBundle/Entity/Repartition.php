<?php

namespace eveg\UserRepartitionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use eveg\UserBundle\Entity\User;
use eveg\AppBundle\Entity\SyntaxonCore;
use eveg\BiblioBundle\Entity\BaseBiblio;

/**
 * Repartition
 *
 * @ORM\Table(name="eveg_user_repartition")
 * @ORM\Entity(repositoryClass="eveg\UserRepartitionBundle\Entity\RepartitionRepository")
 */
class Repartition
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
     * @var \SyntaxonCore
     *
     * @ORM\ManyToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonCore", inversedBy="userRepartitions")
     * @ORM\JoinColumn(name="syntaxonCore_id", referencedColumnName="id")
     */
    private $syntaxonCore;

    /**
     * @var string
     *
     * @ORM\Column(name="synonymType", type="string", length=16)
     */
    private $synonymType;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonCited", type="string", length=512)
     */
    private $syntaxonCited;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonBiblioName", type="string", length=512)
     */
    private $syntaxonBiblioName;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonBiblioAuthor", type="string", length=512)
     */
    private $syntaxonBiblioAuthor;

    /**
     * @var \BaseBiblio
     *
     * @ORM\ManyToOne(targetEntity="eveg\BiblioBundle\Entity\BaseBiblio", cascade={"persist"})
     */
    private $biblio;

    /**
     *
     * @var boolean
     *
     * @ORM\Column(name="self_observation", type="boolean")
     */
    private $selfObservation;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="map", type="string", length=128)
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="shape", type="string", length=128)
     */
    private $shape;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=2)
     */
    private $value;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     */
    private $submitedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submitedAt", type="datetime")
     */
    private $submitedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validated", type="boolean")
     */
    private $validated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     */
    private $validator;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validedAt", type="datetime", nullable=true)
     */
    private $validedAt;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;


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
     * Set syntaxonCore
     *
     * @param \SyntaxonCore $syntaxonCore
     *
     * @return Repartition
     */
    public function setSyntaxonCore(SyntaxonCore $syntaxonCore)
    {
        $this->syntaxonCore = $syntaxonCore;

        return $this;
    }

    /**
     * Get syntaxonCore
     *
     * @return \SyntaxonCore
     */
    public function getSyntaxonCore()
    {
        return $this->syntaxonCore;
    }

    /**
     * Set synonymType
     *
     * @param string $synonymType
     *
     * @return Repartition
     */
    public function setSynonymType($synonymType)
    {
        $this->synonymType = $synonymType;

        return $this;
    }

    /**
     * Get synonymType
     *
     * @return string
     */
    public function getSynonymType()
    {
        return $this->synonymType;
    }

    /**
     * Set syntaxonCited
     *
     * @param string $syntaxonCited
     *
     * @return Repartition
     */
    public function setSyntaxonCited($syntaxonCited)
    {
        $this->syntaxonCited = $syntaxonCited;

        return $this;
    }

    /**
     * Get syntaxonCited
     *
     * @return string
     */
    public function getSyntaxonCited()
    {
        return $this->syntaxonCited;
    }

    /**
     * Set syntaxonBiblioName
     *
     * @param string $syntaxonBiblioName
     *
     * @return Repartition
     */
    public function setSyntaxonBiblioName($syntaxonBiblioName)
    {
        $this->syntaxonBiblioName = $syntaxonBiblioName;

        return $this;
    }

    /**
     * Get syntaxonBiblioName
     *
     * @return string
     */
    public function getSyntaxonBiblioName()
    {
        return $this->syntaxonBiblioName;
    }

    /**
     * Set syntaxonBiblioAuthor
     *
     * @param string $syntaxonBiblioAuthor
     *
     * @return Repartition
     */
    public function setSyntaxonBiblioAuthor($syntaxonBiblioAuthor)
    {
        $this->syntaxonBiblioAuthor = $syntaxonBiblioAuthor;

        return $this;
    }

    /**
     * Get syntaxonBiblioAuthor
     *
     * @return string
     */
    public function getSyntaxonBiblioAuthor()
    {
        return $this->syntaxonBiblioAuthor;
    }

    /**
     * Set biblio
     *
     * @param \BaseBiblio $biblio
     *
     * @return Repartition
     */
    public function setBiblio(BaseBiblio $biblio)
    {
        $this->biblio = $biblio;

        return $this;
    }

    /**
     * Get biblio
     *
     * @return \BaseBiblio
     */
    public function getBiblio()
    {
        return $this->biblio;
    }

    /**
     * Set selfObservation
     *
     * @param boolean $selfObs
     *
     * @return Repartition
     */
    public function setSelfObservation($selfObs)
    {
        $this->selfObservation = $selfObs;

        return $this;
    }

    /**
     * Get selfObservation
     *
     * @return boolean
     */
    public function getSelfObservation()
    {
        return $this->selfObservation;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Repartition
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set map
     *
     * @param string $map
     *
     * @return Repartition
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set shape
     *
     * @param string $shape
     *
     * @return Repartition
     */
    public function setShape($shape)
    {
        $this->shape = $shape;

        return $this;
    }

    /**
     * Get shape
     *
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Repartition
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set submitedBy
     *
     * @param \User $submitedBy
     *
     * @return Repartition
     */
    public function setSubmitedBy(User $submitedBy)
    {
        $this->submitedBy = $submitedBy;

        return $this;
    }

    /**
     * Get submitedBy
     *
     * @return \stdClass
     */
    public function getSubmitedBy()
    {
        return $this->submitedBy;
    }

    /**
     * Set submitedAt
     *
     * @param \DateTime $submitedAt
     *
     * @return Repartition
     */
    public function setSubmitedAt($submitedAt)
    {
        $this->submitedAt = $submitedAt;

        return $this;
    }

    /**
     * Get submitedAt
     *
     * @return \DateTime
     */
    public function getSubmitedAt()
    {
        return $this->submitedAt;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return Repartition
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Set validator
     *
     * @param \User $validator
     *
     * @return Repartition
     */
    public function setValidator(User $validator)
    {
        $this->validator = $validator;

        return $this;
    }

    /**
     * Get validator
     *
     * @return \stdClass
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Set validedAt
     *
     * @param \DateTime $validedAt
     *
     * @return Repartition
     */
    public function setValidedAt($validedAt)
    {
        $this->validedAt = $validedAt;

        return $this;
    }

    /**
     * Get validedAt
     *
     * @return \DateTime
     */
    public function getValidedAt()
    {
        return $this->validedAt;
    }

    /**
     * Set updatedBy
     *
     * @param \User $updatedBy
     *
     * @return Repartition
     */
    public function setUpdatedBy(User $updatedBy)
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
     * @return Repartition
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Repartition
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
