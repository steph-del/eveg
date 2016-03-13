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
        $this->syntaxonFiles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->syntaxonHttpLinks = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add syntaxonFile
     *
     * @param \eveg\AppBundle\Entity\SyntaxonFile $syntaxonFile
     *
     * @return User
     */
    public function addSyntaxonFile(\eveg\AppBundle\Entity\SyntaxonFile $syntaxonFile)
    {
        $this->syntaxonFiles[] = $syntaxonFile;

        return $this;
    }

    /**
     * Remove syntaxonFile
     *
     * @param \eveg\AppBundle\Entity\SyntaxonFile $syntaxonFile
     */
    public function removeSyntaxonFile(\eveg\AppBundle\Entity\SyntaxonFile $syntaxonFile)
    {
        $this->syntaxonFiles->removeElement($syntaxonFile);
    }

    /**
     * Get syntaxonFiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSyntaxonFiles()
    {
        return $this->syntaxonFiles;
    }

    /**
     * Add syntaxonHttpLink
     *
     * @param \eveg\AppBundle\Entity\SyntaxonHttpLink $syntaxonHttpLink
     *
     * @return User
     */
    public function addSyntaxonHttpLink(\eveg\AppBundle\Entity\SyntaxonHttpLink $syntaxonHttpLink)
    {
        $this->syntaxonHttpLinks[] = $syntaxonHttpLink;

        return $this;
    }

    /**
     * Remove syntaxonHttpLink
     *
     * @param \eveg\AppBundle\Entity\SyntaxonHttpLink $syntaxonHttpLink
     */
    public function removeSyntaxonHttpLink(\eveg\AppBundle\Entity\SyntaxonHttpLink $syntaxonHttpLink)
    {
        $this->syntaxonHttpLinks->removeElement($syntaxonHttpLink);
    }

    /**
     * Get syntaxonHttpLinks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSyntaxonHttpLinks()
    {
        return $this->syntaxonHttpLinks;
    }
}
