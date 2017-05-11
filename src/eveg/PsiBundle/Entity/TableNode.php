<?php

namespace eveg\PsiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TableNode
 *
 * @ORM\Table(name="psi_table_nodes_relation")
 * @ORM\Entity
 */
class TableNode
{

    public function __construct($node = null, $position = null)
    {
        if($node) $this->node = $node;
        if($position) $this->position = $position;
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
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="groupSocio", type="string", nullable=true)
     */
    private $groupSocio;

    /**
    * @ORM\ManyToOne(targetEntity="eveg\PsiBundle\Entity\Table", inversedBy="nodes", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $table;

    /**
    * @ORM\ManyToOne(targetEntity="eveg\PsiBundle\Entity\Node", inversedBy="tables", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $node;

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
     * Set position
     *
     * @param integer $position
     *
     * @return TableNode
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set table
     *
     * @param \eveg\PsiBundle\Entity\Table $table
     *
     * @return TableNode
     */
    public function setTable(\eveg\PsiBundle\Entity\Table $table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get table
     *
     * @return \eveg\PsiBundle\Entity\Table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set node
     *
     * @param \eveg\PsiBundle\Entity\Node $node
     *
     * @return TableNode
     */
    public function setNode(\eveg\PsiBundle\Entity\Node $node)
    {
        $this->node = $node;

        return $this;
    }

    /**
     * Get node
     *
     * @return \eveg\PsiBundle\Entity\Node
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Set groupSocio
     *
     * @param string $groupSocio
     *
     * @return TableNode
     */
    public function setGroupSocio($groupSocio)
    {
        $this->groupSocio = $groupSocio;

        return $this;
    }

    /**
     * Get groupSocio
     *
     * @return string
     */
    public function getGroupSocio()
    {
        return $this->groupSocio;
    }
}
