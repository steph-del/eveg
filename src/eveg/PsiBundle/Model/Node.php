<?php


namespace eveg\PsiBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use eveg\PsiBundle\Model\Node as NodeModel;

/**
 * Node object
 *
 * @author Stéphane Delplanque <stephane@e-veg.net>
 */
abstract class Node
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
	protected $id;

	/**
	 * Level : node level
	 *
     * @var string
     * @ORM\Column(name="level", type="string", length=128)
     */
	protected $level;

	/**
	 * CanContain : which levels can this node contain ?
	 * Not persisted id Db
	 *
	 * @var array
	 */
	protected $canContain;

	/**
	 * Repository : the name of the repository (référentiel)
	 *
	 * @var string
	 * @ORM\Column(name="repository", type="string", length=128)
	 */
	protected $repository;

	/**
	 * RepositoryIdNomen : nomenclatural id of the element inside the repository
	 *
	 * @var integer
	 * @ORM\Column(name="repositoryIdNomen", type="integer", nullable=true)
	 */
	protected $repositoryIdNomen;

	/**
	 * Name : name of the element
	 * 
     * @var string
     * @ORM\Column(name="name", type="string", length=512, nullable=true)
     */
	protected $name;

	/**
	 * Coef : ab/dom value
	 * 
     * @var string
     * @ORM\Column(name="coef", type="string", length=6, nullable=true)
     */
	protected $coef;


	protected $author;
	protected $authorWriter;

	protected $date;

	protected $localization;
		protected $country;			// TODO : include inside localization
		protected $departement;		// TODO : include inside localization
		protected $city;			// TODO : include inside localization

	protected $biblio;
	protected $isDiagnosis;
	protected $meta;

	/**
     * @var
     *
     * @ORM\ManyToMany(targetEntity="Node", inversedBy="parents", cascade={"persist"})
     * @ORM\JoinTable(name="psi_nodes_relations",
     *         joinColumns={@ORM\JoinColumn(name="node_id", referencedColumnName="id")},
     *         inverseJoinColumns={@ORM\JoinColumn(name="related_node_id", referencedColumnName="id")}
     * )
     */
	protected $children;

	/**
	 * @ORM\ManyToMany(targetEntity="Node", mappedBy="children")
	 */
	protected $parents;

	/**
    * @ORM\OneToMany(targetEntity="eveg\PsiBundle\Entity\TableNode", mappedBy="node", cascade={"persist"})
    */
    protected $tables;

	public function getId() {
		return $this->id;
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
			echo('Child must be an instance of NodeModel');die;
		}
	}

	public function removeChild($childNode)
	{
		if($childNode instanceof NodeModel)
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
	public function setCoef($coef) { $this->coef = $coef; return $this->coef; }

	public function getRepository() { return $this->repository; }
	public function setRepository($repo) { $this->repository = $repo; return $this->repository; }

	public function getTables() { return $this->tables; }
	public function addTable($table) { $this->tables[] = $table; }
	public function removeTable($table) { $this->tables->removeElement($table); }

}