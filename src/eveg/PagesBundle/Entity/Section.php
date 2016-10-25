<?php

namespace eveg\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Section
 *
 * @ORM\Table(name="eveg_pages_sections")
 * @ORM\Entity(repositoryClass="eveg\PagesBundle\Entity\SectionRepository")
 */
class Section
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
     * @var string
     *
     * @ORM\Column(name="titleFr", type="string", length=255)
     */
    private $titleFr;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"titleFr"})
     * @ORM\Column(name="titleSlugFr", type="string", length=255)
     */
    private $titleSlugFr;

    /**
     * @var string
     *
     * @ORM\Column(name="menuTitleFr", type="string", length=255)
     */
    private $menuTitleFr;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"menuTitleFr"})
     * @ORM\Column(name="menuTitleSlugFr", type="string", length=255)
     */
    private $menuTitleSlugFr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastUpdate", type="datetime")
     */
    private $lastUpdate;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="$author", type="object")
     */
    private $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="listOrder", type="integer")
     */
    private $listOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="contentFr", type="text")
     */
    private $contentFr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


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
     * Set titleFr
     *
     * @param string $titleFr
     *
     * @return Section
     */
    public function setTitleFr($titleFr)
    {
        $this->titleFr = $titleFr;

        return $this;
    }

    /**
     * Get titleFr
     *
     * @return string
     */
    public function getTitleFr()
    {
        return $this->titleFr;
    }

    /**
     * Set titleSlugFr
     *
     * @param string $titleSlugFr
     *
     * @return Section
     */
    public function setTitleSlugFr($titleSlugFr)
    {
        $this->titleSlugFr = $titleSlugFr;

        return $this;
    }

    /**
     * Get titleSlugFr
     *
     * @return string
     */
    public function getTitleSlugFr()
    {
        return $this->titleSlugFr;
    }

    /**
     * Set menuTitleFr
     *
     * @param string $menuTitleFr
     *
     * @return Section
     */
    public function setMenuTitleFr($menuTitleFr)
    {
        $this->menuTitleFr = $menuTitleFr;

        return $this;
    }

    /**
     * Get menuTitleFr
     *
     * @return string
     */
    public function getMenuTitleFr()
    {
        return $this->menuTitleFr;
    }

    /**
     * Set menuTitleSlugFr
     *
     * @param string $menuTitleSlugFr
     *
     * @return Section
     */
    public function setMenuTitleSlugFr($menuTitleSlugFr)
    {
        $this->menuTitleSlugFr = $menuTitleSlugFr;

        return $this;
    }

    /**
     * Get menuTitleSlugFr
     *
     * @return string
     */
    public function getMenuTitleSlugFr()
    {
        return $this->menuTitleSlugFr;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return Section
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set $author
     *
     * @param \stdClass $$author
     *
     * @return Section
     */
    public function setAuthor($author)
    {
        $this->$author = $author;

        return $this;
    }

    /**
     * Get $author
     *
     * @return \stdClass
     */
    public function getAuthor()
    {
        return $this->$author;
    }

    /**
     * Set listOrder
     *
     * @param integer $listOrder
     *
     * @return Section
     */
    public function setListOrder($listOrder)
    {
        $this->listOrder = $listOrder;

        return $this;
    }

    /**
     * Get listOrder
     *
     * @return integer
     */
    public function getListOrder()
    {
        return $this->listOrder;
    }

    /**
     * Set contentFr
     *
     * @param string $contentFr
     *
     * @return Section
     */
    public function setContentFr($contentFr)
    {
        $this->contentFr = $contentFr;

        return $this;
    }

    /**
     * Get contentFr
     *
     * @return string
     */
    public function getContentFr()
    {
        return $this->contentFr;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Section
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
}

