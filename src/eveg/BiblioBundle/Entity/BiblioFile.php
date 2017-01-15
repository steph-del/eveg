<?php

namespace eveg\BiblioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BiblioFile
 *
 * @ORM\Table(name="biblio_file")
 * @ORM\Entity(repositoryClass="eveg\BiblioBundle\Entity\BiblioFileRepository")
 * @Vich\Uploadable
 */
class BiblioFile
{
    public function __construct()
    {
        $this->setHit(0);
        $this->setCopyright(true);
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
     *
     * @ORM\ManyToOne(targetEntity="eveg\BiblioBundle\Entity\BaseBiblio", inversedBy="files")
     * @ORM\JoinColumn(name="basebiblio_id", referencedColumnName="id")
     */
    private $baseBiblio;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="biblio_file", fileNamePropedfrty="fileName")
     *
     * @Assert\File(
     *     maxSize = "200M",
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Please upload a valid .pdf file."
     * )
     * 
     * @var File
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="fileName", type="string", length=255)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="originalFileName", type="string", length=255)
     */
    private $originalFileName;

    /**
     * @var string
     * @ORM\Column(name="thumbnail", type="string", length=255, nullable=true)
     */
    private $thumbnail;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User", inversedBy="BiblioFile")
     * @ORM\JoinColumn(name="user_id", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @var integer
     * @ORM\Column(name="hit", type="integer")
     */
    private $hit;

    /**
     * @var string
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     * @ORM\Column(name="copyright", type="boolean", nullable=true)
     */
    private $copyright;

    /**
     * @var integer
     * @ORM\Column(name="filesize", type="integer")
     */
    private $filesize;

    /**
     * @var integer
     * @ORM\Column(name="nbPages", type="integer", nullable=true)
     */
    private $nbPages;


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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return SyntaxonFile
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return Product
     */
    public function setFile(File $file = null)
    {
        $this->file = $file;

        if ($file) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set updatedBy
     *
     * @param \stdClass $updatedBy
     *
     * @return BiblioFile
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \stdClass
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return BiblioFile
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

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     *
     * @return BiblioFile
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set hit
     *
     * @param integer $hit
     *
     * @return BiblioFile
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

        return $this;
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
     * Set originalFileName
     *
     * @param string $originalFileName
     *
     * @return BiblioFile
     */
    public function setOriginalFileName($originalFileName)
    {
        $this->originalFileName = $originalFileName;

        return $this;
    }

    /**
     * Get originalFileName
     *
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->originalFileName;
    }

    /**
     * Set baseBiblio
     *
     * @param \eveg\BiblioBundle\Entity\BaseBiblio $baseBiblio
     *
     * @return BiblioFile
     */
    public function setBaseBiblio(\eveg\BiblioBundle\Entity\BaseBiblio $baseBiblio = null)
    {
        $this->baseBiblio = $baseBiblio;

        return $this;
    }

    /**
     * Get baseBiblio
     *
     * @return \eveg\BiblioBundle\Entity\BaseBiblio
     */
    public function getBaseBiblio()
    {
        return $this->baseBiblio;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return BiblioFile
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set copyright
     *
     * @param boolean $copyright
     *
     * @return BiblioFile
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return boolean
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     *
     * @return BiblioFile
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set nbPages
     *
     * @param integer $nbPages
     *
     * @return BiblioFile
     */
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    /**
     * Get nbPages
     *
     * @return integer
     */
    public function getNbPages()
    {
        return $this->nbPages;
    }
}
