<?php

namespace eveg\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Page
 *
 * @ORM\Table(name="eveg_pages")
 * @ORM\Entity(repositoryClass="eveg\PagesBundle\Entity\PageRepository")
 */
class Page
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
     * @ORM\Column(name="titleEn", type="string", length=255, nullable=true)
     */
    private $titleEn;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"titleEn"})
     * @ORM\Column(name="titleSlugEn", type="string", length=255, nullable=true)
     */
    private $titleSlugEn;

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
     * @var string
     *
     * @ORM\Column(name="menuTitleEn", type="string", length=255, nullable=true)
     */
    private $menuTitleEn;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"menuTitleEn"})
     * @ORM\Column(name="menuTitleSlugEn", type="string", length=255, nullable=true)
     */
    private $menuTitleSlugEn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastUpdate", type="datetime")
     */
    private $lastUpdate;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="author", type="object")
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
     * @var string
     *
     * @ORM\Column(name="contentEn", type="text", nullable=true)
     */
    private $contentEn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;


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
     * @return Page
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
     * @return Page
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
     * Set titleEn
     *
     * @param string $titleEn
     *
     * @return Page
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Set titleSlugEn
     *
     * @param string $titleSlugEn
     *
     * @return Page
     */
    public function setTitleSlugEn($titleSlugEn)
    {
        $this->titleSlugEn = $titleSlugEn;

        return $this;
    }

    /**
     * Get titleSlugEn
     *
     * @return string
     */
    public function getTitleSlugEn()
    {
        return $this->titleSlugEn;
    }

    /**
     * Set menuTitleFr
     *
     * @param string $menuTitleFr
     *
     * @return Page
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
     * @return Page
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
     * Set menuTitleEn
     *
     * @param string $menuTitleEn
     *
     * @return Page
     */
    public function setMenuTitleEn($menuTitleEn)
    {
        $this->menuTitleEn = $menuTitleEn;

        return $this;
    }

    /**
     * Get menuTitleEn
     *
     * @return string
     */
    public function getMenuTitleEn()
    {
        return $this->menuTitleEn;
    }

    /**
     * Set menuTitleSlugEn
     *
     * @param string $menuTitleSlugEn
     *
     * @return Page
     */
    public function setMenuTitleSlugEn($menuTitleSlugEn)
    {
        $this->menuTitleSlugEn = $menuTitleSlugEn;

        return $this;
    }

    /**
     * Get menuTitleSlugEn
     *
     * @return string
     */
    public function getMenuTitleSlugEn()
    {
        return $this->menuTitleSlugEn;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return Page
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
     * Set author
     *
     * @param \stdClass $author
     *
     * @return Page
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

    /**
     * Set listOrder
     *
     * @param integer $listOrder
     *
     * @return Page
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
     * @return Page
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
     * Set contentEn
     *
     * @param string $contentEn
     *
     * @return Page
     */
    public function setContentEn($contentEn)
    {
        $this->contentEn = $contentEn;

        return $this;
    }

    /**
     * Get contentEn
     *
     * @return string
     */
    public function getContentEn()
    {
        return $this->contentEn;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Page
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
}

