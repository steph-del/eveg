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
     * @var string
     *
     * @ORM\Column(name="fullName", type="string")
     */
    protected $fullName;

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

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Add syntaxonPhoto
     *
     * @param \eveg\AppBundle\Entity\SyntaxonPhoto $syntaxonPhoto
     *
     * @return User
     */
    public function addSyntaxonPhoto(\eveg\AppBundle\Entity\SyntaxonPhoto $syntaxonPhoto)
    {
        $this->syntaxonPhotos[] = $syntaxonPhoto;

        return $this;
    }

    /**
     * Remove syntaxonPhoto
     *
     * @param \eveg\AppBundle\Entity\SyntaxonPhoto $syntaxonPhoto
     */
    public function removeSyntaxonPhoto(\eveg\AppBundle\Entity\SyntaxonPhoto $syntaxonPhoto)
    {
        $this->syntaxonPhotos->removeElement($syntaxonPhoto);
    }

    /**
     * Get syntaxonPhotos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSyntaxonPhotos()
    {
        return $this->syntaxonPhotos;
    }
}
