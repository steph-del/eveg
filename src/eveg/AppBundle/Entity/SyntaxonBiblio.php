<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * SyntaxonBiblio
 *
 * @ORM\Table(name="eveg_syntaxon_biblio")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonBiblioRepository")
 * @ExclusionPolicy("all")
 */
class SyntaxonBiblio
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
     *
     * @ORM\ManyToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonCore", inversedBy="syntaxonBiblios")
     * @ORM\JoinColumn(name="syntaxonCore_id", referencedColumnName="id")
     */
    protected $syntaxonCore;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=512)
     * @Expose
     * @Groups({"API"})
     */
    private $reference;


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
     * Set syntaxonCore
     *
     * @param \eveg\AppBundle\Entity\SyntaxonCore $syntaxonCore
     *
     * @return SyntaxonBiblio
     */
    public function setSyntaxonCore(\eveg\AppBundle\Entity\SyntaxonCore $syntaxonCore = null)
    {
        $this->syntaxonCore = $syntaxonCore;

        return $this;
    }

    /**
     * Get syntaxonCore
     *
     * @return \eveg\AppBundle\Entity\SyntaxonCore
     */
    public function getSyntaxonCore()
    {
        return $this->syntaxonCore;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return SyntaxonBiblio
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
}

