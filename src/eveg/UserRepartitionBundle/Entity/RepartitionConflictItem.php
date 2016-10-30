<?php

namespace eveg\UserRepartitionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RepartitionConflictItem
 *
 * @ORM\Table(name="eveg_user_repartition_conflict_item")
 * @ORM\Entity(repositoryClass="eveg\UserRepartitionBundle\Entity\RepartitionConflictItemRepository")
 */
class RepartitionConflictItem
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     */
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="baseveg", type="boolean")
     */
    private $baseveg;

    /**
     * @var string
     *
     * @ORM\Column(name="map", type="string", length=255)
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="shape", type="string", length=255)
     */
    private $shape;


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
     * @return RepartitionConflictItem
     */
    public function setUser($user)
    {
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
     * Set baseveg
     *
     * @param boolean $baseveg
     *
     * @return RepartitionConflictItem
     */
    public function setBaseveg($baseveg)
    {
        $this->baseveg = $baseveg;

        return $this;
    }

    /**
     * Get baseveg
     *
     * @return boolean
     */
    public function getBaseveg()
    {
        return $this->baseveg;
    }

    /**
     * Set map
     *
     * @param string $map
     *
     * @return RepartitionConflictItem
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
     * @return RepartitionConflictItem
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
}

