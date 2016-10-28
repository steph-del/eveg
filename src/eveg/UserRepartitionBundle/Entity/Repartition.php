<?php

namespace eveg\UserRepartitionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repartition
 *
 * @ORM\Table()
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
     * @var \stdClass
     *
     * @ORM\Column(name="syntaxon", type="object")
     */
    private $syntaxon;

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
     * @var \stdClass
     *
     * @ORM\Column(name="biblio", type="object")
     */
    private $biblio;

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
     * @var \stdClass
     *
     * @ORM\Column(name="submitedBy", type="object")
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
     * @ORM\Column(name="validate", type="boolean")
     */
    private $validate;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="validator", type="object")
     */
    private $validator;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validedAt", type="datetime")
     */
    private $validedAt;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="updatedBy", type="object")
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
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
     * Set syntaxon
     *
     * @param \stdClass $syntaxon
     *
     * @return Repartition
     */
    public function setSyntaxon($syntaxon)
    {
        $this->syntaxon = $syntaxon;

        return $this;
    }

    /**
     * Get syntaxon
     *
     * @return \stdClass
     */
    public function getSyntaxon()
    {
        return $this->syntaxon;
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
     * @param \stdClass $biblio
     *
     * @return Repartition
     */
    public function setBiblio($biblio)
    {
        $this->biblio = $biblio;

        return $this;
    }

    /**
     * Get biblio
     *
     * @return \stdClass
     */
    public function getBiblio()
    {
        return $this->biblio;
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
     * @param \stdClass $submitedBy
     *
     * @return Repartition
     */
    public function setSubmitedBy($submitedBy)
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
     * Set validate
     *
     * @param boolean $validate
     *
     * @return Repartition
     */
    public function setValidate($validate)
    {
        $this->validate = $validate;

        return $this;
    }

    /**
     * Get validate
     *
     * @return boolean
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Set validator
     *
     * @param \stdClass $validator
     *
     * @return Repartition
     */
    public function setValidator($validator)
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
     * @param \stdClass $updatedBy
     *
     * @return Repartition
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
}

