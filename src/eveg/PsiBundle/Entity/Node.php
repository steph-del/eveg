<?php

namespace eveg\PsiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use eveg\PsiBundle\Entity\Validation;

/**
 * Node object
 *
 * @author Stéphane Delplanque <stephane@e-veg.net>
 *
 * @ORM\Table(name="psi_node")
 * @ORM\Entity
 * @Gedmo\Tree(type="nested")
 */
class Node
{
	CONST IDIOTAXON_NAME = 'idiotaxon';
	CONST SYNUSY_NAME    = 'synusy';
	CONST MICROC_NAME    = 'microC';
	CONST PHYTOC_NAME    = 'phytoC';

	CONST IDIOTAXON = ['name' => self::IDIOTAXON_NAME,
					   'canContain' => array(null)];
	CONST SYNUSY    = ['name' => self::SYNUSY_NAME,
					 'canContain' => array(self::IDIOTAXON_NAME)];
	CONST MICROC    = ['name' => self::MICROC_NAME,
					 'canContain' => array(self::SYNUSY_NAME)];
	CONST PHYTOC    = ['name' => self::PHYTOC_NAME,
					 'canContain' => array(self::SYNUSY_NAME, self::MICROC_NAME)];

	CONST LEVELS    = [self:: IDIOTAXON, self::SYNUSY, self::MICROC, self::PHYTOC];

	public function __construct($level)
	{
		$this->level 	= $level;
		$this->children = new ArrayCollection();
		$this->validation = new ArrayCollection();
		$this->parents 	= new ArrayCollection();
		$this->tables 	= new ArrayCollection();

		foreach (self::LEVELS as $keyConstLevel => $constLevel) {
			//var_dump($level.' - '.$constLevel['name']);
			if($level === $constLevel['name']) {
				$this->canContain = $constLevel['canContain'];
				break;
			} else {
				//if($keyConstLevel == count(self::LEVELS)) echo('Level invalide');die;
			}
		}
	}

	/**
	 * Id
	 *
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	/**
	 * frontId
	 *
	 * When we send a new node through the API, we don't even know its id because Doctrine generates it. This id is used in 
	 * the front app to know wich node has to be updated after the db persistance.
	 *
	 * @var bigint
	 * @ORM\Column(name="frontId", type="bigint", options={"unsigned"=true}, nullable=true)
	 */
	private $frontId;

	/**
	 * Level : node level
	 *
     * @var string
     * @ORM\Column(name="level", type="string", length=128)
     */
	private $level;

	/**
	 * CanContain : which levels can this node contain ?
	 * Not persisted id Db
	 *
	 * @var array
	 */
	private $canContain;

	/**
	 * Repository : the name of the repository (référentiel)
	 *
	 * @var string
	 * @ORM\Column(name="repository", type="string", length=128)
	 */
	private $repository;

	/**
	 * RepositoryIdNomen : nomenclatural id of the element inside the repository
	 *
	 * @var integer
	 * @ORM\Column(name="repositoryIdNomen", type="integer", nullable=true)
	 */
	private $repositoryIdNomen;

	/**
	 * Name : name of the element
	 * 
     * @var string
     * @ORM\Column(name="name", type="string", length=512, nullable=true)
     */
	private $name;

	/**
	 * Coef : ab/dom value
	 * 
     * @var string
     * @ORM\Column(name="coef", type="string", length=6, nullable=true)
     */
	private $coef;


	private $author;
	private $authorWriter;

	private $date;

	private $localization;
		private $country;			// TODO : include inside localization
		private $departement;		// TODO : include inside localization
		private $city;			// TODO : include inside localization

	private $biblio;
	private $isDiagnosis;
	private $meta;

	/**
     * @var
     *
     * @ORM\ManyToMany(targetEntity="Node", inversedBy="parents", cascade={"persist"})
     * @ORM\JoinTable(name="psi_nodes_relations",
     *         joinColumns={@ORM\JoinColumn(name="node_id", referencedColumnName="id")},
     *         inverseJoinColumns={@ORM\JoinColumn(name="related_node_id", referencedColumnName="id")}
     * )
     */
	private $children;

	/**
	 *
	 * @ORM\OneToMany(targetEntity="eveg\PsiBundle\Entity\Validation", mappedBy="node", cascade={"persist"})
	 * 
	 */
	private $validations;

	/*
	 * @ORM\ManyToMany(targetEntity="Node", mappedBy="children")
	 */
	//private $parents;

	/**
    * @ORM\OneToMany(targetEntity="eveg\PsiBundle\Entity\TableNode", mappedBy="node", cascade={"persist"})
    */
    private $tables;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(type="integer")
     */
    private $lvl;
    
    /**
     * @Gedmo\TreeRight
     * @ORM\Column(type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\ManyToOne(targetEntity="Node")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $root;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Node", inversedBy="childrenTree", cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $parentTree;

    /**
     * @ORM\OneToMany(targetEntity="Node", mappedBy="parentTree")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $childrenTree;

	public function getId() {
		return $this->id;
	}

	public function setFrontId($frontId) {
		$this->frontId = $frontId;
	}

	public function getFrontId() {
		return $this->frontId;
	}

	public function setLevel($level) { $this->level = $level; }
	public function getLevel() { return $this->level; }

	public function setName($name) { $this->name = $name; return $this->name; }
	public function getName() { return $this->name; }

	public function setCanContain($canContain) { $this->canContain = $canContain; return $this->canContain; }
	public function canContain() { return $this->canContain; }

	public function addChild($childNode)
	{
		if($childNode instanceof Node)
		{
			if(in_array($childNode->getLevel(), $this->canContain)) {
				$this->children[] = $childNode;
			} else {
				echo('A(n)'.$this->getLevel().' entity type can\'t contain a(n) '.$childNode->getLevel().' entity type'."\n");die;
			}
		} else {
			echo('Child must be an instance of Node');die;
		}
	}

	public function removeChild($childNode)
	{
		if($childNode instanceof Node)
		{
			if(in_array($childNode, $this->children))
			{
				unset($this->children[$keyToRemove]);
			} else {
				echo('childNode not founded');
			}
		}
	}

	public function getChildren() { return $this->children; }

	public function addValidation($validation)
	{
		if($validation instanceof Validation)
		{
			$validation->setNode($this);
			$this->validations[] = $validation;
		} else {
			throw new Exception("Error Processing Request. $validation is not of type Validation (in Node.php)", 500);
		}
	}
	public function removeValidation($validation)
	{
		if($validation instanceof Validation)
		{
			unset($this->validations[$validation]);
		}
	}
	public function getValidations() { return $this->validations; }

	public function setCoef($coef) { $this->coef = $coef; return $this->coef; }

	public function getRepository() { return $this->repository; }
	public function setRepository($repo) { $this->repository = $repo; return $this->repository; }

	public function getTables() { return $this->tables; }
	public function addTable($table) { $this->tables[] = $table; }
	public function removeTable($table) { $this->tables->removeElement($table); }

	public function getRoot() { return $this->root; }
	public function setParent(Node $parent = null) { $this->parentTree = $parent; }
	public function getParent() { return $this->parentTree;  }

}