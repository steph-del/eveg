<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;
use eveg\UserRepartitionBundle\Entity\Repartition as UserRepartition;
use Algolia\AlgoliaSearchBundle\Mapping\Annotation as Algolia;

/**
 * SyntaxonCore
 *
 * @ORM\Table(name="eveg_baseveg_core")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonCoreRepository")
 * @ORM\HasLifecycleCallbacks
 * @Gedmo\Loggable(logEntryClass="eveg\AppBundle\Entity\SyntaxonLog")
 *
 * @ExclusionPolicy("all")
 * @Algolia\Index(autoIndex=false, perEnvironment=false, algoliaName="Vegetations")
 */
class SyntaxonCore
{

    public function __construct()
    {
        $this->syntaxonPhotos = new ArrayCollection();
        $this->syntaxonFiles = new ArrayCollection();
        $this->syntaxonBiblios = new ArrayCollection();
        $this->syntaxonHttpLinks = new ArrayCollection();
        $this->userRepartitions = new ArrayCollection();
    }

    public function __tostring()
    {
        return (string) $this->syntaxon;
    }

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
     * @Gedmo\Versioned
     * @Expose
     * @Groups({"searchEngine", "API"})
     * @SerializedName("id")
     * @Algolia\Attribute
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
     * @Gedmo\Versioned
     */
    private $fixedCode;

    /**
     * @var string
     *
     * @ORM\Column(name="catminatCode", type="string", length=255)
     * @Gedmo\Versioned
     *
     * @Expose
     * @Groups({"baseTree", "nodeTree", "searchEngine", "API"})
     * @SerializedName("catminatCode")
     * @Algolia\Attribute
     */
    private $catminatCode;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     * @Gedmo\Versioned
     *
     * @Expose
     * @Groups({"searchEngine", "baseTree", "nodeTree", "API"})
     * @SerializedName("level")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="syntaxonName", type="string", length=255)
     * @Gedmo\Versioned
     *
     * @Expose
     * @Groups({"searchEngine", "API"})
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
     * @Gedmo\Versioned
     *
     * @Expose
     * @Groups({"searchEngine", "API"})
     * @SerializedName("syntaxonAuthor")
     */
    private $syntaxonAuthor;

    /**
     * @var string
     *
     * @Expose
     * @Groups({"searchEngine"})
     * @SerializedName("label")
     * @Algolia\Attribute
     */
    private $syntaxon;

    /**
     * @var string
     *
     * @ORM\Column(name="commonName", type="string", length=512, nullable=true)
     * @Gedmo\Versioned
     *
     * @Expose
     * @Groups({"API"})
     * @SerializedName("ecologicalDefinitionFr")
     * @Algolia\Attribute
     */
    private $commonName;

        /**
         * @var string
         *
         * @Expose
         * @Groups({"baseTree", "nodeTree"})
         * @SerializedName("tooltip")
         */
        private $commonNameTree;

    /**
     * @var string
     *
     * @ORM\Column(name="commonNameEn", type="string", length=512, nullable=true)
     * @Gedmo\Versioned
     *
     * @Expose
     * @Groups({"API"})
     * @SerializedName("ecologicalDefinitionEn")
     * @Algolia\Attribute
     */
    private $commonNameEn;

    /**
    *
    * French departments repartition
    * @ORM\OneToOne(targetEntity="eveg\AppBundle\Entity\syntaxonRepartitionDepFr", cascade={"persist"})
    * @ORM\JoinColumn(name="repartitionDepFr_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
    *
    * @Expose
    * @Groups({"API"})
    * @SerializedName("fr")
    */
    private $repartitionDepFr;

    /**
     *
     * European coutries repartition
     * @ORM\OneToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonRepartitionEurope", cascade={"persist"})
     * @ORM\JoinColumn(name="repartitionEurope_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     *
     * @Expose
     * @Groups({"API"})
     * @SerializedName("eu")
     */
    private $repartitionEurope;

    /**
     *
     * Ecology
     * @ORM\OneToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonEcology", cascade={"persist"})
     * @ORM\JoinColumn(name="ecology_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     *
     * @Expose
     * @Groups({"API"})
     * @SerializedName("ecology")
     */
    private $ecology;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonPhoto", mappedBy="syntaxonCore", cascade={"persist"})
     *
     * @Expose
     * @Groups({"API"})
     * @SerializedName("photos")
     */
    protected $syntaxonPhotos;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonFile", mappedBy="syntaxonCore", cascade={"persist"})
     */
    protected $syntaxonFiles;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonHttpLink", mappedBy="syntaxonCore", cascade={"persist"})
     */
    protected $syntaxonHttpLinks;

    /**
     * @ORM\OneToMany(targetEntity="eveg\AppBundle\Entity\SyntaxonBiblio", mappedBy="syntaxonCore", cascade={"persist"})
     */
    protected $syntaxonBiblios;

    /**
     * @ORM\OneToMany(targetEntity="eveg\UserRepartitionBundle\Entity\Repartition", mappedBy="syntaxonCore", cascade={"persist"})
     */
    private $userRepartitions;

    /**
     * @var integer
     *
     * @ORM\Column(name="hit", type="integer", nullable=true, options={"default" : 0})
     * @Algolia\Attribute
     */
    protected $hit;

    /**
     * @Algolia\Attribute(algoliaName="permalink")
     */
    public function getUrl()
    {
        return 'http://www.e-veg.net/app/'.$this->getId();
    }

    /**
     * @Algolia\Attribute
     * This code should not live there. It's a trick to provide the base habitat for any vegetation
     * with low resources (not db call). Only used in TB algolia advanced search.
     */
    public function getHabitat()
    {
        $catminat = $this->getCatminatCode();
        $habCode = substr($catminat, 0, 2);
        switch($habCode) {
            case('01'):
                return 'Eaux marines';
                break;
            case('02'):
                return 'Littoral maritime';
                break;
            case('03'):
                return 'Végétations aquatiques dulçaquicoles';
                break;
            case('04'):
                return 'Végétations basses amphibies';
                break;
            case('05'):
                return 'Roselières, cariçaies, mégaphorbiaies';
                break;
            case('06'):
                return 'Tourbières';
                break;
            case('07'):
                return 'Parois, murs et aérophytes';
                break;
            case('08'):
                return 'Dalles, sables et éboulis';
                break;
            case('09'):
                return 'Pelouses, steppes et savanes';
                break;
            case('10'):
                return 'Ourlets et sous-bois';
                break;
            case('11'):
                return 'Pelouses arctico-alpines';
                break;
            case('12'):
                return 'Prairies';
                break;
            case('13'):
                return 'Cultures, friches et clairières forestières eutrophiles';
                break;
            case('14'):
                return 'Landes, cistaies et garrigues';
                break;
            case('15'):
                return 'Buissons et haies arbustives';
                break;
            case('16'):
                return 'Arbres pionniers des zonobiomes tempérés';
                break;
            case('17'):
                return 'Arbres climaciques du zonobiome tempéré froid';
                break;
            case('18'):
                return 'Arbres climaciques du zonobiome tempéré modal';
                break;
            case('19'):
                return 'Arbres climaciques des zonobiomes tempérés chauds';
                break;
            case('20'):
                return 'Arbres climaciques des zonobiomes tropicaux';
                break;
            case('21'):
                return 'Epiphytes de la canopée';
                break;
            default:
                return '';
        }
    }


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
     * Set id
     *
     * @param integer $id
     * @return SyntaxonCore
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set syntaxonNameTreeForce
     *
     * @param string $syntaxonNameTreeForce
     * @return SyntaxonCore
     */
    public function setSyntaxonNameTreeForce($syntaxonNameTree)
    {
        $this->syntaxonNameTree = $syntaxonNameTree;

        return $this;
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

    /** Get syntaxonCommonNameTree
    *
    * @return string
    */
    public function getCommonNameTree()
    {
        return $this->commonNameTree;
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
     * Set commonNameEn
     *
     * @param string $commonNameEn
     * @return SyntaxonCore
     */
    public function setCommonNameEn($commonNameEn)
    {
        $this->commonNameEn = $commonNameEn;

        return $this;
    }

    /**
     * Get commonNameEn
     *
     * @return string 
     */
    public function getCommonNameEn()
    {
        return $this->commonNameEn;
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

    /**
    * Set ecology
    *
    */
    public function setEcology(SyntaxonEcology $ecology = null)
    {
        $this->ecology = $ecology;
    }

    /**
    * Get ecology
    *
    */
    public function getEcology()
    {
        return $this->ecology;
    }

    /**
    * Get syntaxonPhotos
    *
    */
    public function getSyntaxonPhotos()
    {
        return $this->syntaxonPhotos;
    }

    public function addSyntaxonPhoto(SyntaxonPhoto $syntaxonPhoto)
    {
        $this->syntaxonPhotos->add($syntaxonPhoto);
    }

    public function removeSyntaxonPhoto(SyntaxonPhoto $syntaxonPhoto)
    {
        $this->syntaxonPhotos->removeElement($syntaxonPhoto);
    }

    /**
    * Get syntaxonFiles
    *
    */
    public function getSyntaxonFiles()
    {
        return $this->syntaxonFiles;
    }

    public function addSyntaxonFile(SyntaxonFile $syntaxonFile)
    {
        $this->syntaxonFiles->add($syntaxonFile);
    }

    public function removeSyntaxonFile(SyntaxonFile $syntaxonFile)
    {
        $this->syntaxonFiles->removeElement($syntaxonFile);
    }

    /**
    * Get syntaxonHttpLinks
    *
    */
    public function getSyntaxonHttpLinks()
    {
        return $this->syntaxonHttpLinks;
    }

    public function addSyntaxonHttpLink(SyntaxonHttpLink $syntaxonHttpLink)
    {
        $this->syntaxonHttpLinks->add($syntaxonHttpLink);
    }

    public function removeSyntaxonHttpLink(SyntaxonHttpLink $syntaxonHttpLink)
    {
        $this->syntaxonHttpLinks->removeElement($syntaxonHttpLink);
    }

    /**
    * Get syntaxonBiblios
    *
    */
    public function getSyntaxonBiblios()
    {
        return $this->syntaxonBiblios;
    }

    public function addSyntaxonBiblio(SyntaxonBiblio $syntaxonBiblio)
    {
        $this->syntaxonBiblios->add($syntaxonBiblio);
    }

    public function removeSyntaxonBiblio(SyntaxonBiblio $syntaxonBiblio)
    {
        $this->syntaxonBiblios->removeElement($syntaxonBiblio);
    }

    /**
    * Get userRepartitions
    *
    */
    public function getUserRepartition()
    {
        return $this->userRepartitions;
    }

    public function addUserRepartition(UserRepartition $repartition)
    {
        $this->userRepartitions->add($repartition);
    }

    public function removeUserRepartition(UserRepartition $repartition)
    {
        $this->userRepartitions->removeElement($repartition);
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

    /**
    * @ORM\PostLoad
    */
    public function setCommonNameTree()
    {
        $this->commonNameTree = $this->commonName;
    }

    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Get hit
     *
     * @return integer 
     */
    public function getHit()
    {
        return $this->hit;
    }

    /**
     * Set hit
     *
     * @param integer $hit
     * @return SyntaxonCore
     */
    public function setHit($hit)
    {
        $this->hit = $hit;
    }

    /**
     * @Algolia\IndexIf
     */
    public function isNotSynonym()
    {
        $level = $this->level;

        if(strpos($level, 'syn') !== false) {
            return false;
        } else {
            return true;
        }
    }

}
