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
     * @ORM\Column(name="fullName", type="string", nullable=true)
     */
    protected $fullName;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonFile", mappedBy="user")
     */
    private $syntaxonFiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbSyntaxonFiles", type="integer")
     */
    private $nbSyntaxonFiles = 0;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonHttpLink", mappedBy="user")
     */
    private $syntaxonHttpLinks;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbSyntaxonHttpLinks", type="integer")
     */
    private $nbSyntaxonHttpLinks = 0;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonPhoto", mappedBy="user")
     */
    private $syntaxonPhotos;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbSyntaxonPhotos", type="integer")
     */
    private $nbSyntaxonPhotos = 0;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\Feedback", mappedBy="user")
     */
    private $feedbacks;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbFeedbacks", type="integer")
     */
    private $nbFeedbacks = 0;

    /**
     * @var integer
     */
    private $score = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter = true;

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

        $this->setNbSyntaxonPhotos($this->getNbSyntaxonPhotos() + 1);

        return $this;
    }

    /**
     * Remove syntaxonPhoto
     *
     * @param \eveg\AppBundle\Entity\SyntaxonPhoto $syntaxonPhoto
     */
    public function removeSyntaxonPhoto(\eveg\AppBundle\Entity\SyntaxonPhoto $syntaxonPhoto)
    {
        $this->setNbSyntaxonPhotos($this->getNbSyntaxonPhotos() - 1);

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

        $this->setNbSyntaxonFiles($this->getNbSyntaxonFiles() + 1);

        return $this;
    }

    /**
     * Remove syntaxonFile
     *
     * @param \eveg\AppBundle\Entity\SyntaxonFile $syntaxonFile
     */
    public function removeSyntaxonFile(\eveg\AppBundle\Entity\SyntaxonFile $syntaxonFile)
    {

        $this->setNbSyntaxonFiles($this->getNbSyntaxonFiles() - 1);

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

        $this->setNbSyntaxonHttpLinks($this->getNbSyntaxonHttpLinks() + 1);

        return $this;
    }

    /**
     * Remove syntaxonHttpLink
     *
     * @param \eveg\AppBundle\Entity\SyntaxonHttpLink $syntaxonHttpLink
     */
    public function removeSyntaxonHttpLink(\eveg\AppBundle\Entity\SyntaxonHttpLink $syntaxonHttpLink)
    {
        $this->setNbSyntaxonHttpLinks($this->getNbSyntaxonHttpLinks() - 1);

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

    /**
     * Set nbSyntaxonFiles
     *
     * @param integer $nbSyntaxonFiles
     *
     * @return User
     */
    public function setNbSyntaxonFiles($nbSyntaxonFiles)
    {
        $this->nbSyntaxonFiles = $nbSyntaxonFiles;

        return $this;
    }

    /**
     * Get nbSyntaxonFiles
     *
     * @return integer
     */
    public function getNbSyntaxonFiles()
    {
        return $this->nbSyntaxonFiles;
    }

    /**
     * Set nbSyntaxonHttpLinks
     *
     * @param integer $nbSyntaxonHttpLinks
     *
     * @return User
     */
    public function setNbSyntaxonHttpLinks($nbSyntaxonHttpLinks)
    {
        $this->nbSyntaxonHttpLinks = $nbSyntaxonHttpLinks;

        return $this;
    }

    /**
     * Get nbSyntaxonHttpLinks
     *
     * @return integer
     */
    public function getNbSyntaxonHttpLinks()
    {
        return $this->nbSyntaxonHttpLinks;
    }

    /**
     * Set nbSyntaxonPhotos
     *
     * @param integer $nbSyntaxonPhotos
     *
     * @return User
     */
    public function setNbSyntaxonPhotos($nbSyntaxonPhotos)
    {
        $this->nbSyntaxonPhotos = $nbSyntaxonPhotos;

        return $this;
    }

    /**
     * Get nbSyntaxonPhotos
     *
     * @return integer
     */
    public function getNbSyntaxonPhotos()
    {
        return $this->nbSyntaxonPhotos;
    }

    /**
     * Add feedback
     *
     * @param \eveg\AppBundle\Entity\Feedback $feedback
     *
     * @return User
     */
    public function addFeedback(\eveg\AppBundle\Entity\Feedback $feedback)
    {
        $this->feedbacks[] = $feedback;

        $this->setNbFeedbacks($this->getNbFeedbacks() + 1);

        return $this;
    }

    /**
     * Remove feedback
     *
     * @param \eveg\AppBundle\Entity\Feedback $feedback
     */
    public function removeFeedback(\eveg\AppBundle\Entity\Feedback $feedback)
    {
        $this->setNbFeedbacks($this->getNbFeedbacks() - 1);

        $this->feedbacks->removeElement($feedback);
    }

    /**
     * Get feedbacks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeedbacks()
    {
        return $this->feedbacks;
    }

    /**
     * Set nbFeedbacks
     *
     * @param integer $nbFeedbacks
     *
     * @return User
     */
    public function setNbFeedbacks($nbFeedbacks)
    {
        $this->nbFeedbacks = $nbFeedbacks;

        return $this;
    }

    /**
     * Get nbFeedbacks
     *
     * @return integer
     */
    public function getNbFeedbacks()
    {
        return $this->nbFeedbacks;
    }

    /**
     * Set score
     *
     * @return User
     */
    public function setScore()
    {
        //
    }

    /**
     * Get score
     *
     * @return integer
     */
    public function getScore()
    {
        $score = $this->getNbSyntaxonFiles() + $this->getNbSyntaxonHttpLinks() + $this->getNbSyntaxonPhotos() + $this->getNbFeedbacks();

        return $score;
    }

    /**
     * Set newsletter
     *
     * @return User
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return integer
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }
}
