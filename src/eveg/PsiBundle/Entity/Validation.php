<?php

namespace eveg\PsiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/*
 * Why using SerializedName ?
 * See https://stackoverflow.com/questions/22738466/symfony2-jmsserializerbundle-changes-the-attribute-name-from-classname-to-cl
 */

/**
 * Validation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="eveg\PsiBundle\Entity\ValidationRepository")
 */
class Validation
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
     * @ORM\ManyToOne(targetEntity="eveg\PsiBundle\Entity\Node", inversedBy="validations")
     * @ORM\JoinColumn(nullable=true)
     */
    private $node;

    /**
     * @var string
     *
     * @ORM\Column(name="repository", type="string", length=255)
     */
    private $repository;

    /**
     * @var string
     *
     * @ORM\Column(name="repositoryIdTaxo", type="string", length=255)
     * @SerializedName("repositoryIdTaxo")
     */
    private $repositoryIdTaxo;

    /**
     * @var string
     *
     * @ORM\Column(name="repositoryIdNomen", type="string", length=255)
     * @SerializedName("repositoryIdNomen")
     */
    private $repositoryIdNomen;

    /**
     * @var string
     *
     * @ORM\Column(name="inputName", type="string", length=512)
     * @SerializedName("inputName")
     */
    private $inputName;

    /**
     * @var string
     *
     * @ORM\Column(name="validatedName", type="string", length=512)
     * @SerializedName("validatedName")
     */
    private $validatedName;

    /**
     * @var string
     *
     * @ORM\Column(name="validName", type="string", length=512, nullable=true)
     * @SerializedName("validName")
     */
    private $validName;


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
     * Set repository
     *
     * @param string $repository
     *
     * @return Validation
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * Get repository
     *
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Set repositoryIdTaxo
     *
     * @param string $repositoryIdTaxo
     *
     * @return Validation
     */
    public function setRepositoryIdTaxo($repositoryIdTaxo)
    {
        $this->repositoryIdTaxo = $repositoryIdTaxo;

        return $this;
    }

    /**
     * Get repositoryIdTaxo
     *
     * @return string
     */
    public function getRepositoryIdTaxo()
    {
        return $this->repositoryIdTaxo;
    }

    /**
     * Set repositoryIdNomen
     *
     * @param string $repositoryIdNomen
     *
     * @return Validation
     */
    public function setRepositoryIdNomen($repositoryIdNomen)
    {
        $this->repositoryIdNomen = $repositoryIdNomen;

        return $this;
    }

    /**
     * Get repositoryIdNomen
     *
     * @return string
     */
    public function getRepositoryIdNomen()
    {
        return $this->repositoryIdNomen;
    }

    /**
     * Set inputName
     *
     * @param string $inputName
     *
     * @return Validation
     */
    public function setInputName($inputName)
    {
        $this->inputName = $inputName;

        return $this;
    }

    /**
     * Get inputName
     *
     * @return string
     */
    public function getInputName()
    {
        return $this->inputName;
    }

    /**
     * Set validatedName
     *
     * @param string $validatedName
     *
     * @return Validation
     */
    public function setValidatedName($validatedName)
    {
        $this->validatedName = $validatedName;

        return $this;
    }

    /**
     * Get validatedName
     *
     * @return string
     */
    public function getValidatedName()
    {
        return $this->validatedName;
    }

    /**
     * Set validName
     *
     * @param string $validName
     *
     * @return Validation
     */
    public function setValidName($validName)
    {
        $this->validName = $validName;

        return $this;
    }

    /**
     * Get validName
     *
     * @return string
     */
    public function getValidName()
    {
        return $this->validName;
    }

    /**
     * Set node
     *
     * @param Node $node
     *
     * @return Validation
     */
    public function setNode($node)
    {
        $this->node = $node;

        return $this;
    }
}

