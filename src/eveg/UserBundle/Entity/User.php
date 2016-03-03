<?php

namespace eveg\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="eveg_user")
 * @ORM\Entity(repositoryClass="eveg\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{

    public function __construct()
    {
        $this->syntaxonPhotos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonPhoto", mappedBy="user", cascade={"remove"})
     */
    protected $syntaxonPhotos;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
