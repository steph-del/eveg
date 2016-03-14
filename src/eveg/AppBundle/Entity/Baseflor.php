<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Baseflor
 *
 * @ORM\Table(name="eveg_baseflor")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\BaseflorRepository")
 */
class Baseflor
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
     * @ORM\Column(name="taxonomicRang", type="string", length=255)
     */
    private $taxonomicRang;

    /**
     * @var string
     *
     * @ORM\Column(name="catminatCode", type="string", length=255)
     */
    private $catminatCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="bdnffTaxinId", type="integer")
     */
    private $bdnffTaxinId;

    /**
     * @var integer
     *
     * @ORM\Column(name="bdnffNomenId", type="integer")
     */
    private $bdnffNomenId;

    /**
     * @var string
     *
     * @ORM\Column(name="scientificName", type="string", length=255)
     */
    private $scientificName;

    /**
     * @var string
     *
     * @ORM\Column(name="repartition", type="string", length=255)
     */
    private $repartition;

    /**
     * @var string
     *
     * @ORM\Column(name="inflorescence", type="string", length=255)
     */
    private $inflorescence;

    /**
     * @var string
     *
     * @ORM\Column(name="sexuality", type="string", length=255)
     */
    private $sexuality;

    /**
     * @var string
     *
     * @ORM\Column(name="pollination", type="string", length=255)
     */
    private $pollination;

    /**
     * @var string
     *
     * @ORM\Column(name="fruit", type="string", length=255)
     */
    private $fruit;

    /**
     * @var string
     *
     * @ORM\Column(name="dissemination", type="string", length=255)
     */
    private $dissemination;

    /**
     * @var string
     *
     * @ORM\Column(name="flowerColor", type="string", length=255)
     */
    private $flowerColor;

    /**
     * @var string
     *
     * @ORM\Column(name="macula", type="string", length=255)
     */
    private $macula;

    /**
     * @var string
     *
     * @ORM\Column(name="flowering", type="string", length=255)
     */
    private $flowering;

    /**
     * @var string
     *
     * @ORM\Column(name="woodType", type="string", length=255)
     */
    private $woodType;

    /**
     * @var string
     *
     * @ORM\Column(name="maxVegetativeHeight", type="string", length=255)
     */
    private $maxVegetativeHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="biologicalType", type="string", length=255)
     */
    private $biologicalType;

    /**
     * @var string
     *
     * @ORM\Column(name="plantFormation", type="string", length=255)
     */
    private $plantFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="ecologicalCharacterization", type="string", length=255)
     */
    private $ecologicalCharacterization;

    /**
     * @var string
     *
     * @ORM\Column(name="phytoCharacteristicIndication", type="string", length=255)
     */
    private $phytoCharacteristicIndication;

    /**
     * @var string
     *
     * @ORM\Column(name="transgressiveCharacteristicIndication", type="string", length=255)
     */
    private $transgressiveCharacteristicIndication;

    /**
     * @var string
     *
     * @ORM\Column(name="differentialIndication1", type="string", length=255)
     */
    private $differentialIndication1;

    /**
     * @var string
     *
     * @ORM\Column(name="differentialIndication2", type="string", length=255)
     */
    private $differentialIndication2;

    /**
     * @var string
     *
     * @ORM\Column(name="differentialIndication3", type="string", length=255)
     */
    private $differentialIndication3;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjLight", type="integer")
     */
    private $pjLight;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjTemperature", type="integer")
     */
    private $pjTemperature;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjContinentality", type="integer")
     */
    private $pjContinentality;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjAtmosphericHumidity", type="integer")
     */
    private $pjAtmosphericHumidity;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjSoilHumidity", type="integer")
     */
    private $pjSoilHumidity;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjSoilPh", type="integer")
     */
    private $pjSoilPh;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjTrophicLevel", type="integer")
     */
    private $pjTrophicLevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjSalinity", type="integer")
     */
    private $pjSalinity;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjTexture", type="integer")
     */
    private $pjTexture;

    /**
     * @var integer
     *
     * @ORM\Column(name="pjOrganicMaterial", type="integer")
     */
    private $pjOrganicMaterial;

    /**
     * @var integer
     *
     * @ORM\Column(name="elLight", type="integer")
     */
    private $elLight;

    /**
     * @var integer
     *
     * @ORM\Column(name="elTemperature", type="integer")
     */
    private $elTemperature;

    /**
     * @var integer
     *
     * @ORM\Column(name="elContinentality", type="integer")
     */
    private $elContinentality;

    /**
     * @var integer
     *
     * @ORM\Column(name="elHumidity", type="integer")
     */
    private $elHumidity;

    /**
     * @var integer
     *
     * @ORM\Column(name="elPh", type="integer")
     */
    private $elPh;

    /**
     * @var integer
     *
     * @ORM\Column(name="elNutrients", type="integer")
     */
    private $elNutrients;

    /**
     * @var integer
     *
     * @ORM\Column(name="elSalinity", type="integer")
     */
    private $elSalinity;

    /**
     * @var string
     *
     * @ORM\Column(name="kindgom", type="string", length=255)
     */
    private $kindgom;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=255)
     */
    private $branch;

    /**
     * @var string
     *
     * @ORM\Column(name="subBranch", type="string", length=255)
     */
    private $subBranch;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="subClass", type="string", length=255)
     */
    private $subClass;

    /**
     * @var string
     *
     * @ORM\Column(name="intermediateClade1", type="string", length=255)
     */
    private $intermediateClade1;

    /**
     * @var string
     *
     * @ORM\Column(name="intermediateClade2", type="string", length=255)
     */
    private $intermediateClade2;

    /**
     * @var string
     *
     * @ORM\Column(name="intermediateClade3", type="string", length=255)
     */
    private $intermediateClade3;

    /**
     * @var string
     *
     * @ORM\Column(name="superOrder", type="string", length=255)
     */
    private $superOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="intermediateClade4", type="string", length=255)
     */
    private $intermediateClade4;

    /**
     * @var string
     *
     * @ORM\Column(name="_order", type="string", length=255)
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="subOrder", type="string", length=255)
     */
    private $subOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="family", type="string", length=255)
     */
    private $family;

    /**
     * @var string
     *
     * @ORM\Column(name="subFamily", type="string", length=255)
     */
    private $subFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="tribe", type="string", length=255)
     */
    private $tribe;

    /**
     * @var string
     *
     * @ORM\Column(name="subTribe", type="string", length=255)
     */
    private $subTribe;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=255)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="subSection", type="string", length=255)
     */
    private $subSection;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=255)
     */
    private $serie;

    /**
     * @var integer
     *
     * @ORM\Column(name="phytobaseId", type="integer")
     */
    private $phytobaseId;

    /**
     * @var string
     *
     * @ORM\Column(name="phytobaseName", type="string", length=512)
     */
    private $phytobaseName;


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
     * Set taxonomicRang
     *
     * @param string $taxonomicRang
     *
     * @return Baseflor
     */
    public function setTaxonomicRang($taxonomicRang)
    {
        $this->taxonomicRang = $taxonomicRang;

        return $this;
    }

    /**
     * Get taxonomicRang
     *
     * @return string
     */
    public function getTaxonomicRang()
    {
        return $this->taxonomicRang;
    }

    /**
     * Set catminatCode
     *
     * @param string $catminatCode
     *
     * @return Baseflor
     */
    public function setCatminatCode($catminatCode)
    {
        $this->catminatCode = $catminatCode;

        return $this;
    }

    /**
     * Get catminatCode
     *
     * @return string
     */
    public function getCatminatCode()
    {
        return $this->catminatCode;
    }

    /**
     * Set bdnffTaxinId
     *
     * @param integer $bdnffTaxinId
     *
     * @return Baseflor
     */
    public function setBdnffTaxinId($bdnffTaxinId)
    {
        $this->bdnffTaxinId = $bdnffTaxinId;

        return $this;
    }

    /**
     * Get bdnffTaxinId
     *
     * @return integer
     */
    public function getBdnffTaxinId()
    {
        return $this->bdnffTaxinId;
    }

    /**
     * Set bdnffNomenId
     *
     * @param integer $bdnffNomenId
     *
     * @return Baseflor
     */
    public function setBdnffNomenId($bdnffNomenId)
    {
        $this->bdnffNomenId = $bdnffNomenId;

        return $this;
    }

    /**
     * Get bdnffNomenId
     *
     * @return integer
     */
    public function getBdnffNomenId()
    {
        return $this->bdnffNomenId;
    }

    /**
     * Set scientificName
     *
     * @param string $scientificName
     *
     * @return Baseflor
     */
    public function setScientificName($scientificName)
    {
        $this->scientificName = $scientificName;

        return $this;
    }

    /**
     * Get scientificName
     *
     * @return string
     */
    public function getScientificName()
    {
        return $this->scientificName;
    }

    /**
     * Set repartition
     *
     * @param string $repartition
     *
     * @return Baseflor
     */
    public function setRepartition($repartition)
    {
        $this->repartition = $repartition;

        return $this;
    }

    /**
     * Get repartition
     *
     * @return string
     */
    public function getRepartition()
    {
        return $this->repartition;
    }

    /**
     * Set inflorescence
     *
     * @param string $inflorescence
     *
     * @return Baseflor
     */
    public function setInflorescence($inflorescence)
    {
        $this->inflorescence = $inflorescence;

        return $this;
    }

    /**
     * Get inflorescence
     *
     * @return string
     */
    public function getInflorescence()
    {
        return $this->inflorescence;
    }

    /**
     * Set sexuality
     *
     * @param string $sexuality
     *
     * @return Baseflor
     */
    public function setSexuality($sexuality)
    {
        $this->sexuality = $sexuality;

        return $this;
    }

    /**
     * Get sexuality
     *
     * @return string
     */
    public function getSexuality()
    {
        return $this->sexuality;
    }

    /**
     * Set pollination
     *
     * @param string $pollination
     *
     * @return Baseflor
     */
    public function setPollination($pollination)
    {
        $this->pollination = $pollination;

        return $this;
    }

    /**
     * Get pollination
     *
     * @return string
     */
    public function getPollination()
    {
        return $this->pollination;
    }

    /**
     * Set fruit
     *
     * @param string $fruit
     *
     * @return Baseflor
     */
    public function setFruit($fruit)
    {
        $this->fruit = $fruit;

        return $this;
    }

    /**
     * Get fruit
     *
     * @return string
     */
    public function getFruit()
    {
        return $this->fruit;
    }

    /**
     * Set dissemination
     *
     * @param string $dissemination
     *
     * @return Baseflor
     */
    public function setDissemination($dissemination)
    {
        $this->dissemination = $dissemination;

        return $this;
    }

    /**
     * Get dissemination
     *
     * @return string
     */
    public function getDissemination()
    {
        return $this->dissemination;
    }

    /**
     * Set flowerColor
     *
     * @param string $flowerColor
     *
     * @return Baseflor
     */
    public function setFlowerColor($flowerColor)
    {
        $this->flowerColor = $flowerColor;

        return $this;
    }

    /**
     * Get flowerColor
     *
     * @return string
     */
    public function getFlowerColor()
    {
        return $this->flowerColor;
    }

    /**
     * Set macula
     *
     * @param string $macula
     *
     * @return Baseflor
     */
    public function setMacula($macula)
    {
        $this->macula = $macula;

        return $this;
    }

    /**
     * Get macula
     *
     * @return string
     */
    public function getMacula()
    {
        return $this->macula;
    }

    /**
     * Set flowering
     *
     * @param string $flowering
     *
     * @return Baseflor
     */
    public function setFlowering($flowering)
    {
        $this->flowering = $flowering;

        return $this;
    }

    /**
     * Get flowering
     *
     * @return string
     */
    public function getFlowering()
    {
        return $this->flowering;
    }

    /**
     * Set woodType
     *
     * @param string $woodType
     *
     * @return Baseflor
     */
    public function setWoodType($woodType)
    {
        $this->woodType = $woodType;

        return $this;
    }

    /**
     * Get woodType
     *
     * @return string
     */
    public function getWoodType()
    {
        return $this->woodType;
    }

    /**
     * Set maxVegetativeHeight
     *
     * @param string $maxVegetativeHeight
     *
     * @return Baseflor
     */
    public function setMaxVegetativeHeight($maxVegetativeHeight)
    {
        $this->maxVegetativeHeight = $maxVegetativeHeight;

        return $this;
    }

    /**
     * Get maxVegetativeHeight
     *
     * @return string
     */
    public function getMaxVegetativeHeight()
    {
        return $this->maxVegetativeHeight;
    }

    /**
     * Set biologicalType
     *
     * @param string $biologicalType
     *
     * @return Baseflor
     */
    public function setBiologicalType($biologicalType)
    {
        $this->biologicalType = $biologicalType;

        return $this;
    }

    /**
     * Get biologicalType
     *
     * @return string
     */
    public function getBiologicalType()
    {
        return $this->biologicalType;
    }

    /**
     * Set plantFormation
     *
     * @param string $plantFormation
     *
     * @return Baseflor
     */
    public function setPlantFormation($plantFormation)
    {
        $this->plantFormation = $plantFormation;

        return $this;
    }

    /**
     * Get plantFormation
     *
     * @return string
     */
    public function getPlantFormation()
    {
        return $this->plantFormation;
    }

    /**
     * Set ecologicalCharacterization
     *
     * @param string $ecologicalCharacterization
     *
     * @return Baseflor
     */
    public function setEcologicalCharacterization($ecologicalCharacterization)
    {
        $this->ecologicalCharacterization = $ecologicalCharacterization;

        return $this;
    }

    /**
     * Get ecologicalCharacterization
     *
     * @return string
     */
    public function getEcologicalCharacterization()
    {
        return $this->ecologicalCharacterization;
    }

    /**
     * Set phytoCharacteristicIndication
     *
     * @param string $phytoCharacteristicIndication
     *
     * @return Baseflor
     */
    public function setPhytoCharacteristicIndication($phytoCharacteristicIndication)
    {
        $this->phytoCharacteristicIndication = $phytoCharacteristicIndication;

        return $this;
    }

    /**
     * Get phytoCharacteristicIndication
     *
     * @return string
     */
    public function getPhytoCharacteristicIndication()
    {
        return $this->phytoCharacteristicIndication;
    }

    /**
     * Set transgressiveCharacteristicIndication
     *
     * @param string $transgressiveCharacteristicIndication
     *
     * @return Baseflor
     */
    public function setTransgressiveCharacteristicIndication($transgressiveCharacteristicIndication)
    {
        $this->transgressiveCharacteristicIndication = $transgressiveCharacteristicIndication;

        return $this;
    }

    /**
     * Get transgressiveCharacteristicIndication
     *
     * @return string
     */
    public function getTransgressiveCharacteristicIndication()
    {
        return $this->transgressiveCharacteristicIndication;
    }

    /**
     * Set differentialIndication1
     *
     * @param string $differentialIndication1
     *
     * @return Baseflor
     */
    public function setDifferentialIndication1($differentialIndication1)
    {
        $this->differentialIndication1 = $differentialIndication1;

        return $this;
    }

    /**
     * Get differentialIndication1
     *
     * @return string
     */
    public function getDifferentialIndication1()
    {
        return $this->differentialIndication1;
    }

    /**
     * Set differentialIndication2
     *
     * @param string $differentialIndication2
     *
     * @return Baseflor
     */
    public function setDifferentialIndication2($differentialIndication2)
    {
        $this->differentialIndication2 = $differentialIndication2;

        return $this;
    }

    /**
     * Get differentialIndication2
     *
     * @return string
     */
    public function getDifferentialIndication2()
    {
        return $this->differentialIndication2;
    }

    /**
     * Set differentialIndication3
     *
     * @param string $differentialIndication3
     *
     * @return Baseflor
     */
    public function setDifferentialIndication3($differentialIndication3)
    {
        $this->differentialIndication3 = $differentialIndication3;

        return $this;
    }

    /**
     * Get differentialIndication3
     *
     * @return string
     */
    public function getDifferentialIndication3()
    {
        return $this->differentialIndication3;
    }

    /**
     * Set pjLight
     *
     * @param integer $pjLight
     *
     * @return Baseflor
     */
    public function setPjLight($pjLight)
    {
        $this->pjLight = $pjLight;

        return $this;
    }

    /**
     * Get pjLight
     *
     * @return integer
     */
    public function getPjLight()
    {
        return $this->pjLight;
    }

    /**
     * Set pjTemperature
     *
     * @param integer $pjTemperature
     *
     * @return Baseflor
     */
    public function setPjTemperature($pjTemperature)
    {
        $this->pjTemperature = $pjTemperature;

        return $this;
    }

    /**
     * Get pjTemperature
     *
     * @return integer
     */
    public function getPjTemperature()
    {
        return $this->pjTemperature;
    }

    /**
     * Set pjContinentality
     *
     * @param integer $pjContinentality
     *
     * @return Baseflor
     */
    public function setPjContinentality($pjContinentality)
    {
        $this->pjContinentality = $pjContinentality;

        return $this;
    }

    /**
     * Get pjContinentality
     *
     * @return integer
     */
    public function getPjContinentality()
    {
        return $this->pjContinentality;
    }

    /**
     * Set pjAtmosphericHumidity
     *
     * @param integer $pjAtmosphericHumidity
     *
     * @return Baseflor
     */
    public function setPjAtmosphericHumidity($pjAtmosphericHumidity)
    {
        $this->pjAtmosphericHumidity = $pjAtmosphericHumidity;

        return $this;
    }

    /**
     * Get pjAtmosphericHumidity
     *
     * @return integer
     */
    public function getPjAtmosphericHumidity()
    {
        return $this->pjAtmosphericHumidity;
    }

    /**
     * Set pjSoilHumidity
     *
     * @param integer $pjSoilHumidity
     *
     * @return Baseflor
     */
    public function setPjSoilHumidity($pjSoilHumidity)
    {
        $this->pjSoilHumidity = $pjSoilHumidity;

        return $this;
    }

    /**
     * Get pjSoilHumidity
     *
     * @return integer
     */
    public function getPjSoilHumidity()
    {
        return $this->pjSoilHumidity;
    }

    /**
     * Set pjSoilPh
     *
     * @param integer $pjSoilPh
     *
     * @return Baseflor
     */
    public function setPjSoilPh($pjSoilPh)
    {
        $this->pjSoilPh = $pjSoilPh;

        return $this;
    }

    /**
     * Get pjSoilPh
     *
     * @return integer
     */
    public function getPjSoilPh()
    {
        return $this->pjSoilPh;
    }

    /**
     * Set pjTrophicLevel
     *
     * @param integer $pjTrophicLevel
     *
     * @return Baseflor
     */
    public function setPjTrophicLevel($pjTrophicLevel)
    {
        $this->pjTrophicLevel = $pjTrophicLevel;

        return $this;
    }

    /**
     * Get pjTrophicLevel
     *
     * @return integer
     */
    public function getPjTrophicLevel()
    {
        return $this->pjTrophicLevel;
    }

    /**
     * Set pjSalinity
     *
     * @param integer $pjSalinity
     *
     * @return Baseflor
     */
    public function setPjSalinity($pjSalinity)
    {
        $this->pjSalinity = $pjSalinity;

        return $this;
    }

    /**
     * Get pjSalinity
     *
     * @return integer
     */
    public function getPjSalinity()
    {
        return $this->pjSalinity;
    }

    /**
     * Set pjTexture
     *
     * @param integer $pjTexture
     *
     * @return Baseflor
     */
    public function setPjTexture($pjTexture)
    {
        $this->pjTexture = $pjTexture;

        return $this;
    }

    /**
     * Get pjTexture
     *
     * @return integer
     */
    public function getPjTexture()
    {
        return $this->pjTexture;
    }

    /**
     * Set pjOrganicMaterial
     *
     * @param integer $pjOrganicMaterial
     *
     * @return Baseflor
     */
    public function setPjOrganicMaterial($pjOrganicMaterial)
    {
        $this->pjOrganicMaterial = $pjOrganicMaterial;

        return $this;
    }

    /**
     * Get pjOrganicMaterial
     *
     * @return integer
     */
    public function getPjOrganicMaterial()
    {
        return $this->pjOrganicMaterial;
    }

    /**
     * Set elLight
     *
     * @param integer $elLight
     *
     * @return Baseflor
     */
    public function setElLight($elLight)
    {
        $this->elLight = $elLight;

        return $this;
    }

    /**
     * Get elLight
     *
     * @return integer
     */
    public function getElLight()
    {
        return $this->elLight;
    }

    /**
     * Set elTemperature
     *
     * @param integer $elTemperature
     *
     * @return Baseflor
     */
    public function setElTemperature($elTemperature)
    {
        $this->elTemperature = $elTemperature;

        return $this;
    }

    /**
     * Get elTemperature
     *
     * @return integer
     */
    public function getElTemperature()
    {
        return $this->elTemperature;
    }

    /**
     * Set elContinentality
     *
     * @param integer $elContinentality
     *
     * @return Baseflor
     */
    public function setElContinentality($elContinentality)
    {
        $this->elContinentality = $elContinentality;

        return $this;
    }

    /**
     * Get elContinentality
     *
     * @return integer
     */
    public function getElContinentality()
    {
        return $this->elContinentality;
    }

    /**
     * Set elHumidity
     *
     * @param integer $elHumidity
     *
     * @return Baseflor
     */
    public function setElHumidity($elHumidity)
    {
        $this->elHumidity = $elHumidity;

        return $this;
    }

    /**
     * Get elHumidity
     *
     * @return integer
     */
    public function getElHumidity()
    {
        return $this->elHumidity;
    }

    /**
     * Set elPh
     *
     * @param integer $elPh
     *
     * @return Baseflor
     */
    public function setElPh($elPh)
    {
        $this->elPh = $elPh;

        return $this;
    }

    /**
     * Get elPh
     *
     * @return integer
     */
    public function getElPh()
    {
        return $this->elPh;
    }

    /**
     * Set elNutrients
     *
     * @param integer $elNutrients
     *
     * @return Baseflor
     */
    public function setElNutrients($elNutrients)
    {
        $this->elNutrients = $elNutrients;

        return $this;
    }

    /**
     * Get elNutrients
     *
     * @return integer
     */
    public function getElNutrients()
    {
        return $this->elNutrients;
    }

    /**
     * Set elSalinity
     *
     * @param integer $elSalinity
     *
     * @return Baseflor
     */
    public function setElSalinity($elSalinity)
    {
        $this->elSalinity = $elSalinity;

        return $this;
    }

    /**
     * Get elSalinity
     *
     * @return integer
     */
    public function getElSalinity()
    {
        return $this->elSalinity;
    }

    /**
     * Set kindgom
     *
     * @param string $kindgom
     *
     * @return Baseflor
     */
    public function setKindgom($kindgom)
    {
        $this->kindgom = $kindgom;

        return $this;
    }

    /**
     * Get kindgom
     *
     * @return string
     */
    public function getKindgom()
    {
        return $this->kindgom;
    }

    /**
     * Set branch
     *
     * @param string $branch
     *
     * @return Baseflor
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set subBranch
     *
     * @param string $subBranch
     *
     * @return Baseflor
     */
    public function setSubBranch($subBranch)
    {
        $this->subBranch = $subBranch;

        return $this;
    }

    /**
     * Get subBranch
     *
     * @return string
     */
    public function getSubBranch()
    {
        return $this->subBranch;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Baseflor
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set subClass
     *
     * @param string $subClass
     *
     * @return Baseflor
     */
    public function setSubClass($subClass)
    {
        $this->subClass = $subClass;

        return $this;
    }

    /**
     * Get subClass
     *
     * @return string
     */
    public function getSubClass()
    {
        return $this->subClass;
    }

    /**
     * Set intermediateClade1
     *
     * @param string $intermediateClade1
     *
     * @return Baseflor
     */
    public function setIntermediateClade1($intermediateClade1)
    {
        $this->intermediateClade1 = $intermediateClade1;

        return $this;
    }

    /**
     * Get intermediateClade1
     *
     * @return string
     */
    public function getIntermediateClade1()
    {
        return $this->intermediateClade1;
    }

    /**
     * Set intermediateClade2
     *
     * @param string $intermediateClade2
     *
     * @return Baseflor
     */
    public function setIntermediateClade2($intermediateClade2)
    {
        $this->intermediateClade2 = $intermediateClade2;

        return $this;
    }

    /**
     * Get intermediateClade2
     *
     * @return string
     */
    public function getIntermediateClade2()
    {
        return $this->intermediateClade2;
    }

    /**
     * Set intermediateClade3
     *
     * @param string $intermediateClade3
     *
     * @return Baseflor
     */
    public function setIntermediateClade3($intermediateClade3)
    {
        $this->intermediateClade3 = $intermediateClade3;

        return $this;
    }

    /**
     * Get intermediateClade3
     *
     * @return string
     */
    public function getIntermediateClade3()
    {
        return $this->intermediateClade3;
    }

    /**
     * Set superOrder
     *
     * @param string $superOrder
     *
     * @return Baseflor
     */
    public function setSuperOrder($superOrder)
    {
        $this->superOrder = $superOrder;

        return $this;
    }

    /**
     * Get superOrder
     *
     * @return string
     */
    public function getSuperOrder()
    {
        return $this->superOrder;
    }

    /**
     * Set intermediateClade4
     *
     * @param string $intermediateClade4
     *
     * @return Baseflor
     */
    public function setIntermediateClade4($intermediateClade4)
    {
        $this->intermediateClade4 = $intermediateClade4;

        return $this;
    }

    /**
     * Get intermediateClade4
     *
     * @return string
     */
    public function getIntermediateClade4()
    {
        return $this->intermediateClade4;
    }

    /**
     * Set order
     *
     * @param string $order
     *
     * @return Baseflor
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set subOrder
     *
     * @param string $subOrder
     *
     * @return Baseflor
     */
    public function setSubOrder($subOrder)
    {
        $this->subOrder = $subOrder;

        return $this;
    }

    /**
     * Get subOrder
     *
     * @return string
     */
    public function getSubOrder()
    {
        return $this->subOrder;
    }

    /**
     * Set family
     *
     * @param string $family
     *
     * @return Baseflor
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set subFamily
     *
     * @param string $subFamily
     *
     * @return Baseflor
     */
    public function setSubFamily($subFamily)
    {
        $this->subFamily = $subFamily;

        return $this;
    }

    /**
     * Get subFamily
     *
     * @return string
     */
    public function getSubFamily()
    {
        return $this->subFamily;
    }

    /**
     * Set tribe
     *
     * @param string $tribe
     *
     * @return Baseflor
     */
    public function setTribe($tribe)
    {
        $this->tribe = $tribe;

        return $this;
    }

    /**
     * Get tribe
     *
     * @return string
     */
    public function getTribe()
    {
        return $this->tribe;
    }

    /**
     * Set subTribe
     *
     * @param string $subTribe
     *
     * @return Baseflor
     */
    public function setSubTribe($subTribe)
    {
        $this->subTribe = $subTribe;

        return $this;
    }

    /**
     * Get subTribe
     *
     * @return string
     */
    public function getSubTribe()
    {
        return $this->subTribe;
    }

    /**
     * Set section
     *
     * @param string $section
     *
     * @return Baseflor
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set subSection
     *
     * @param string $subSection
     *
     * @return Baseflor
     */
    public function setSubSection($subSection)
    {
        $this->subSection = $subSection;

        return $this;
    }

    /**
     * Get subSection
     *
     * @return string
     */
    public function getSubSection()
    {
        return $this->subSection;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return Baseflor
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set phytobaseId
     *
     * @param integer $phytobaseId
     *
     * @return Baseflor
     */
    public function setPhytobaseId($phytobaseId)
    {
        $this->phytobaseId = $phytobaseId;

        return $this;
    }

    /**
     * Get phytobaseId
     *
     * @return integer
     */
    public function getPhytobaseId()
    {
        return $this->phytobaseId;
    }

    /**
     * Set phytobaseName
     *
     * @param string $phytobaseName
     *
     * @return Baseflor
     */
    public function setPhytobaseName($phytobaseName)
    {
        $this->phytobaseName = $phytobaseName;

        return $this;
    }

    /**
     * Get phytobaseName
     *
     * @return string
     */
    public function getPhytobaseName()
    {
        return $this->phytobaseName;
    }
}

