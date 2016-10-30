<?php

namespace eveg\UserRepartitionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RepartitionConflict
 *
 * @ORM\Table(name="eveg_user_repartition_conflict")
 * @ORM\Entity(repositoryClass="eveg\UserRepartitionBundle\Entity\RepartitionConflictRepository")
 */
class RepartitionConflict
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
     * @var integer
     *
     * @ORM\Column(name="syntaxon_id_concerned", type="integer")
     */
    private $syntaxonIdConcerned;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxon_name_concerned", type="string", length=512)
     */
    private $syntaxonNameConcerned;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="openedAt", type="datetime")
     */
    private $openedAt;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     */
    private $openedBy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="resolved", type="boolean", nullable=true)
     */
    private $resolved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resolvedAt", type="datetime", nullable=true)
     */
    private $resolvedAt;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $resolvedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var \stdClass
     *
     * @ORM\OneToOne(targetEntity="eveg\UserRepartitionBundle\Entity\RepartitionConflictItem")
     */
    private $item1;

    /**
     * @var \stdClass
     *
     * @ORM\OneToOne(targetEntity="eveg\UserRepartitionBundle\Entity\RepartitionConflictItem")
     */
    private $item2;


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
     * Set openedAt
     *
     * @param \DateTime $openedAt
     *
     * @return RepartitionConflict
     */
    public function setOpenedAt($openedAt)
    {
        $this->openedAt = $openedAt;

        return $this;
    }

    /**
     * Get openedAt
     *
     * @return \DateTime
     */
    public function getOpenedAt()
    {
        return $this->openedAt;
    }

    /**
     * Set openedBy
     *
     * @param \stdClass $openedBy
     *
     * @return RepartitionConflict
     */
    public function setOpenedBy($openedBy)
    {
        $this->openedBy = $openedBy;

        return $this;
    }

    /**
     * Get openedBy
     *
     * @return \stdClass
     */
    public function getOpenedBy()
    {
        return $this->openedBy;
    }

    /**
     * Set resolved
     *
     * @param boolean $resolved
     *
     * @return RepartitionConflict
     */
    public function setResolved($resolved)
    {
        $this->resolved = $resolved;

        return $this;
    }

    /**
     * Get resolved
     *
     * @return boolean
     */
    public function getResolved()
    {
        return $this->resolved;
    }

    /**
     * Set resolvedAt
     *
     * @param \DateTime $resolvedAt
     *
     * @return RepartitionConflict
     */
    public function setResolvedAt($resolvedAt)
    {
        $this->resolvedAt = $resolvedAt;

        return $this;
    }

    /**
     * Get resolvedAt
     *
     * @return \DateTime
     */
    public function getResolvedAt()
    {
        return $this->resolvedAt;
    }

    /**
     * Set resolvedBy
     *
     * @param \stdClass $resolvedBy
     *
     * @return RepartitionConflict
     */
    public function setResolvedBy($resolvedBy)
    {
        $this->resolvedBy = $resolvedBy;

        return $this;
    }

    /**
     * Get resolvedBy
     *
     * @return \stdClass
     */
    public function getResolvedBy()
    {
        return $this->resolvedBy;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return RepartitionConflict
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
     * Set item1
     *
     * @param \stdClass $item1
     *
     * @return RepartitionConflict
     */
    public function setItem1($item1)
    {
        $this->item1 = $item1;

        return $this;
    }

    /**
     * Get item1
     *
     * @return \stdClass
     */
    public function getItem1()
    {
        return $this->item1;
    }

    /**
     * Set item2
     *
     * @param \stdClass $item2
     *
     * @return RepartitionConflict
     */
    public function setItem2($item2)
    {
        $this->item2 = $item2;

        return $this;
    }

    /**
     * Get item2
     *
     * @return \stdClass
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * Set syntaxonIdConcerned
     *
     * @param string $syntaxonIdConcerned
     *
     * @return RepartitionConflict
     */
    public function setSyntaxonIdConcerned($syntaxonIdConcerned)
    {
        $this->syntaxonIdConcerned = $syntaxonIdConcerned;

        return $this;
    }

    /**
     * Get syntaxonIdConcerned
     *
     * @return string
     */
    public function getSyntaxonIdConcerned()
    {
        return $this->syntaxonIdConcerned;
    }

    /**
     * Set syntaxonNameConcerned
     *
     * @param string $syntaxonNameConcerned
     *
     * @return RepartitionConflict
     */
    public function setSyntaxonNameConcerned($syntaxonNameConcerned)
    {
        $this->syntaxonNameConcerned = $syntaxonNameConcerned;

        return $this;
    }

    /**
     * Get syntaxonNameConcerned
     *
     * @return string
     */
    public function getSyntaxonNameConcerned()
    {
        return $this->syntaxonNameConcerned;
    }
}
