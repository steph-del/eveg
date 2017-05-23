<?php

namespace eveg\PsiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Table
 *
 * @ORM\Table(name="psi_table")
 * @ORM\Entity
 */
class Table
{
    public function __construct()
    {
        $this->nodes = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="author", type="object")
     */
    private $author;

    /**
    * @var \stdClass
    *
    * @ORM\OneToMany(targetEntity="eveg\PsiBundle\Entity\TableNode", mappedBy="table", cascade={"persist"})
    */
    private $nodes;


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
     * Set name
     *
     * @param string $name
     *
     * @return Table
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set author
     *
     * @param \stdClass $author
     *
     * @return Table
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \stdClass
     */
    public function getAuthor()
    {
        return $this->author;
    }

    public function addNode($node)
    {
        $this->nodes[] = $node;

        //$node->addTable($this);

        return $this;
    }

    public function removeNode($node)
    {
        $this->nodes->removeElement($node);
    }

    /**
     * Get nodes
     *
     * @return array
     */
    public function getNodes()
    {
        return $this->nodes;
    }
}

