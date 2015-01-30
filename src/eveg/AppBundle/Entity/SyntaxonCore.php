<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;

/**
 * SyntaxonCore
 *
 * @ORM\Table(name="eveg_baseveg_core")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonCoreRepository")
 *
 * * @ExclusionPolicy("all")
 */
class SyntaxonCore
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
     * @ORM\Column(name="fixedCode", type="integer")
     */
    private $fixedCode;

    /**
     * @var string
     *
     * @ORM\Column(name="catminatCode", type="string", length=255)
     *
     * @Expose
     * @SerializedName("key")
     */
    private $catminatCode;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonName", type="string", length=255)
     *
     * @Expose
     * * @SerializedName("title")
     */
    private $syntaxonName;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonAuthor", type="string", length=255)
     */
    private $syntaxonAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="commonName", type="string", length=255)
     */
    private $commonName;


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
     * Set fixedCode
     *
     * @param integer $fixedCode
     * @return SyntaxonCore
     */
    public function setFixedCode($fixedCode)
    {
        $this->fixedCode = $fixedCode;

        return $this;
    }

    /**
     * Get fixedCode
     *
     * @return integer 
     */
    public function getFixedCode()
    {
        return $this->fixedCode;
    }

    /**
     * Set catminatCode
     *
     * @param string $catminatCode
     * @return SyntaxonCore
     */
    public function setCatminatCode($catminatCode)
    {
        $this->catminatCode = $catminatCode;

        return $this;
    }

    /**
     * Get catminatCode
     *
     * @return string 
     */
    public function getCatminatCode()
    {
        return $this->catminatCode;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return SyntaxonCore
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set syntaxonName
     *
     * @param string $syntaxonName
     * @return SyntaxonCore
     */
    public function setSyntaxonName($syntaxonName)
    {
        $this->syntaxonName = $syntaxonName;

        return $this;
    }

    /**
     * Get syntaxonName
     *
     * @return string 
     */
    public function getSyntaxonName()
    {
        return $this->syntaxonName;
    }

    /**
     * Set syntaxonAuthor
     *
     * @param string $syntaxonAuthor
     * @return SyntaxonCore
     */
    public function setSyntaxonAuthor($syntaxonAuthor)
    {
        $this->syntaxonAuthor = $syntaxonAuthor;

        return $this;
    }

    /**
     * Get syntaxonAuthor
     *
     * @return string 
     */
    public function getSyntaxonAuthor()
    {
        return $this->syntaxonAuthor;
    }

    /**
     * Set commonName
     *
     * @param string $commonName
     * @return SyntaxonCore
     */
    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;

        return $this;
    }

    /**
     * Get commonName
     *
     * @return string 
     */
    public function getCommonName()
    {
        return $this->commonName;
    }
}
