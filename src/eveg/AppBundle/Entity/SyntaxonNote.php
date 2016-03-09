<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SyntaxonNote
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonNoteRepository")
 */
class SyntaxonNote
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
     * @ORM\ManyToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonCore", inversedBy="syntaxonNotes")
     * @ORM\JoinColumn(name="syntaxonCore_id", referencedColumnName="id")
     */
    protected $syntaxonCore;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="user", type="object")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text")
     */
    private $note;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;


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
     * @return SyntaxonNote
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
     * Set user
     *
     * @param \stdClass $user
     *
     * @return SyntaxonNote
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return SyntaxonNote
     */
    public function setNote($note)
    {
        $this->note = $note;

        if ($note) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return SyntaxonNote
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

