<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Groups;


/**
 * SyntaxonCore
 *
 * @ORM\Table(name="eveg_baseveg_core")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonCoreRepository")
 * @ORM\HasLifecycleCallbacks
 *
 * @ExclusionPolicy("all")
 */
class SyntaxonCore
{

    /**
     * @var boolean
     *
     * @Expose
     * @Groups({"baseTree", "nodeTree"})
     * @SerializedName("folder")
     */
    private $folder;

    /**
     * @var boolean
     *
     * @Expose
     * @Groups({"baseTree", "nodeTree"})
     * @SerializedName("lazy")
     */
    private $lazy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO") 
     * @Expose
     * @Groups({"searchEngine"})
     * @SerializedName("id")
     */
    private $id;

        /**
         * @var integer
         *
         * In order to have clean serialized names, we use a trick. The $idTree (serializedName:key needed for fancyTree) == $id value (serilizedName:id)
         * @Expose
         * @Groups({"baseTree", "nodeTree"})
         * @SerializedName("key")
         */
        private $idTree;

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
     * @Groups({"baseTree", "nodeTree", "searchEngine"})
     * @SerializedName("catminatCode")
     */
    private $catminatCode;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     *
     * @Expose
     * @Groups({"searchEngine"})
     * @SerializedName("level")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonName", type="string", length=255)
     *
     * @Expose
     * @Groups({"searchEngine"})
     * @SerializedName("syntaxonName")
     */
    private $syntaxonName;

        /**
         * @var string
         *
         * In order to have clean serialized names, we use a trick. The $syntaxonNameTree (serializedName:title needed for fancyTree) == $syntaxonName value (serilizedName:syntaxonName)
         *
         * @Expose
         * @Groups({"baseTree", "nodeTree"})
         * @SerializedName("title")
         */
        private $syntaxonNameTree;

        /**
         * @var string
         *
         * @Expose
         * @Groups({"none_UNUSEFUL"})
         * @SerializedName("label")
         */
        private $syntaxonNameSearch;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonAuthor", type="string", length=255, nullable=true)
     * @Expose
     * @Groups({"searchEngine"})
     * @SerializedName("syntaxonAuthor")
     */
    private $syntaxonAuthor;

    /**
     * @var string
     *
     * @Expose
     * @Groups({"searchEngine"})
     * @SerializedName("label")
     */
    private $syntaxon;

    /**
     * @var string
     *
     * @ORM\Column(name="commonName", type="string", length=255, nullable=true)
     */
    private $commonName;

    /**
    *
    * French departments repartition
    * @ORM\OneToOne(targetEntity="eveg\AppBundle\Entity\syntaxonRepartitionDepFr", cascade={"persist"})
    * @ORM\JoinColumn(name="repartitionDepFr_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
    *
    */
    private $repartitionDepFr;

    /**
     *
     * European coutries repartition
     * @ORM\OneToOne(targetEntity="eveg\AppBundle\Entity\syntaxonRepartitionEurope", cascade={"persist"})
     * @ORM\JoinColumn(name="repartitionEurope_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    private $repartitionEurope;


// -------------------
// Setters & getters
// -------------------


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
     * Get idTree
     *
     * @return integer 
     */
    public function getIdTree()
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
     * Get syntaxon
     *
     * @return string 
     */
    public function getSyntaxon()
    {
        return $this->syntaxon;
    }

    /**
     * Get syntaxonNameTree
     *
     * @return string 
     */
    public function getSyntaxonNameTree()
    {
        return $this->syntaxonNameTree;
    }

    /** Get syntaxonNameSearch
    *
    * @return string
    */
    public function getSyntaxonNameSearch()
    {
        return $this->syntaxonNameSearch;
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

    /**
    * Set folder
    *
    * @return boolean
    */
    public function setFolder($bool)
    {
        $this->folder = $bool;

        return $this;
    }

    /**
    * Get folder
    *
    * @return boolean
    */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
    * Set lazy
    *
    * @return boolean
    */
    public function setLazy($bool)
    {
        $this->lazy = $bool;

        return $this;
    }

    /**
    * Get lazy
    *
    * @return boolean
    */
    public function getLazy()
    {
        return $this->lazy;
    }

    /**
    * Set repartitionDepFr
    *
    */
    public function setRepartitionDepFr(syntaxonRepartitionDepFr $repartition = null)
    {
        $this->repartitionDepFr = $repartition;
    }

    /**
    * Get repartitionDepFr
    *
    */
    public function getRepartitionDepFr()
    {
        return $this->repartitionDepFr;
    }

    /**
    * Set repartitionEurope
    *
    */
    public function setRepartitionEurope(SyntaxonRepartitionEurope $repartition = null)
    {
        $this->repartitionEurope = $repartition;
    }

    /**
    * Get repartitionEurope
    *
    */
    public function getRepartitionEurope()
    {
        return $this->repartitionEurope;
    }


// -------------------
// LifeCylce callbacks
// -------------------
    /**
    * @ORM\PostLoad
    */
    public function initFolder()
    {
        $this->setFolder(false);
    }

    /**
     * @ORM\PostLoad
     */
    public function setIdTree()
    {
        $this->idTree = $this->id;
    }

    /**
     * @ORM\PostLoad
     */
    public function setSyntaxonNameTree()
    {
        $this->syntaxonNameTree = $this->syntaxonName;
    }

    /**
     * @ORM\PostLoad
     */
    public function setSyntaxonFullName()
    {
        $this->syntaxon = $this->syntaxonName . ' ' . $this->syntaxonAuthor;
    }

    /**
    * @ORM\PostLoad
    */
    public function setSyntaxonNameSearch()
    {
        $this->syntaxonNameSearch = $this->syntaxonName;
    }

}
