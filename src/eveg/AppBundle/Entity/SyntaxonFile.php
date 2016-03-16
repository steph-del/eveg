<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SyntaxonFile
 *
 * @ORM\Table(name="eveg_syntaxon_file")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonFileRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class SyntaxonFile
{
    
    public function __construct()
    {
        $this->setHit(0);
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
     * @ORM\ManyToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonCore", inversedBy="syntaxonFiles")
     * @ORM\JoinColumn(name="syntaxonCore_id", referencedColumnName="id")
     */
    protected $syntaxonCore;

    /**
     *
     * @ORM\ManyToOne(targetEntity="eveg\AppBundle\Entity\SyntaxonCore", cascade={"persist"})
     */
    private $diagnosisOf;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="eveg\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @Assert\Choice(
     *     choices = { "public", "private", "group" },
     *     message = "Please select a valid visibility value."
     * )
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="syntaxon_file", fileNameProperty="fileName")
     *
     * @Assert\File(
     *     maxSize = "10M",
     *     mimeTypes = {"application/pdf", "application/vnd.oasis.opendocument.spreadsheet", "application/vnd.ms-excel", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "text/csv"},
     *     mimeTypesMessage = "Please upload a valid .ods, .xls, .xlsx or .pdf file."
     * )
     * 
     * @var File
     */
    private $fileFile;

    /**
     * @var string
     *
     * @ORM\Column(name="fileName", type="string", length=255)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="originalName", type="string", length=255)
     */
    private $originalName;
    
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $uploadedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="license", type="string", length=255)
     */
    private $license;

    /**
     * @var integer
     *
     * @ORM\Column(name="hit", type="integer")
     */
    private $hit;


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
     * Set user
     *
     * @param \stdClass $user
     *
     * @return SyntaxonFile
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
     * Set type
     *
     * @param string $type
     *
     * @return SyntaxonFile
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     *
     * @return SyntaxonFile
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return SyntaxonFile
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
    public function setFileFile(File $file = null)
    {
        $this->fileFile = $file;

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
    public function getFileFile()
    {
        return $this->fileFile;
    }

    /**
     * Set hit
     *
     * @param integer $hit
     *
     * @return SyntaxonFile
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return SyntaxonFile
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
     * Set uploadedAt
     *
     * @param \DateTime $uploadedAt
     *
     * @return SyntaxonFile
     */
    public function setUploadedAt($uploadedAt)
    {
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    /**
     * Get uploadedAt
     *
     * @return \DateTime
     */
    public function getUploadedAt()
    {
        return $this->uploadedAt;
    }

    /**
     * Set license
     *
     * @param string $license
     *
     * @return SyntaxonFile
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * Get license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set syntaxonCore
     *
     * @param \eveg\AppBundle\Entity\SyntaxonCore $syntaxonCore
     *
     * @return SyntaxonFile
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
     * Set diagnosisOf
     *
     */
    public function setDiagnosisOf($diagnosis = null)
    {
        $this->diagnosisOf = $diagnosis;
    }

    /**
     * Get diagnosisOf
     *
     */
    public function getDiagnosisOf()
    {
        return $this->diagnosisOf;
    }

    /**
     * Set originalName
     *
     * @param string $originalName
     *
     * @return SyntaxonFile
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * Get originalName
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }
}
