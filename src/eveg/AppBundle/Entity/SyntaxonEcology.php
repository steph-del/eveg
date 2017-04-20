<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * SyntaxonEcology
 *
 * @ORM\Table(name="eveg_baseveg_ecology")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonEcologyRepository")
 *
 * @ExclusionPolicy("all")
 */
class SyntaxonEcology
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
     * @ORM\Column(name="worldRepartition", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $worldRepartition;

    /**
     * @var string
     *
     * @ORM\Column(name="franceRepartition", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $franceRepartition;

    /**
     * @var string
     *
     * @ORM\Column(name="physionomy", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $physionomy;

    /**
     * @var string
     *
     * @ORM\Column(name="altitude", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $altitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="oceanity", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $oceanity;

    /**
     * @var string
     *
     * @ORM\Column(name="temperature", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="light", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $light;

    /**
     * @var string
     *
     * @ORM\Column(name="exposureSlope", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $exposureSlope;

    /**
     * @var string
     *
     * @ORM\Column(name="optimumDevelopment", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $optimumDevelopment;

    /**
     * @var string
     *
     * @ORM\Column(name="atmosphericHumidity", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $atmosphericHumidity;

    /**
     * @var string
     *
     * @ORM\Column(name="soilType", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $soilType;

    /**
     * @var string
     *
     * @ORM\Column(name="soilHumidity", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $soilHumidity;

    /**
     * @var string
     *
     * @ORM\Column(name="soilTexture", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $soilTexture;

    /**
     * @var string
     *
     * @ORM\Column(name="trophicLevel", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $trophicLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="soilPh", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $soilPh;

    /**
     * @var string
     *
     * @ORM\Column(name="salinity", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $salinity;

    /**
     * @var string
     *
     * @ORM\Column(name="dynamic", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $dynamic;

    /**
     * @var string
     *
     * @ORM\Column(name="manInfluence", type="string", length=255)
     *
     * @Expose
     * @Groups({"API"})
     */
    private $manInfluence;


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
     * Set worldRepartition
     *
     * @param string $worldRepartition
     *
     * @return SyntaxonEcology
     */
    public function setWorldRepartition($worldRepartition)
    {
        $this->worldRepartition = $worldRepartition;

        return $this;
    }

    /**
     * Get worldRepartition
     *
     * @return string
     */
    public function getWorldRepartition()
    {
        return $this->worldRepartition;
    }

    /**
     * Set franceRepartition
     *
     * @param string $franceRepartition
     *
     * @return SyntaxonEcology
     */
    public function setFranceRepartition($franceRepartition)
    {
        $this->franceRepartition = $franceRepartition;

        return $this;
    }

    /**
     * Get franceRepartition
     *
     * @return string
     */
    public function getFranceRepartition()
    {
        return $this->franceRepartition;
    }

    /**
     * Set physionomy
     *
     * @param string $physionomy
     *
     * @return SyntaxonEcology
     */
    public function setPhysionomy($physionomy)
    {
        $this->physionomy = $physionomy;

        return $this;
    }

    /**
     * Get physionomy
     *
     * @return string
     */
    public function getPhysionomy()
    {
        return $this->physionomy;
    }

    /**
     * Set altitude
     *
     * @param string $altitude
     *
     * @return SyntaxonEcology
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return string
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return SyntaxonEcology
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set oceanity
     *
     * @param string $oceanity
     *
     * @return SyntaxonEcology
     */
    public function setOceanity($oceanity)
    {
        $this->oceanity = $oceanity;

        return $this;
    }

    /**
     * Get oceanity
     *
     * @return string
     */
    public function getOceanity()
    {
        return $this->oceanity;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     *
     * @return SyntaxonEcology
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set light
     *
     * @param string $light
     *
     * @return SyntaxonEcology
     */
    public function setLight($light)
    {
        $this->light = $light;

        return $this;
    }

    /**
     * Get light
     *
     * @return string
     */
    public function getLight()
    {
        return $this->light;
    }

    /**
     * Set exposureSlope
     *
     * @param string $exposureSlope
     *
     * @return SyntaxonEcology
     */
    public function setExposureSlope($exposureSlope)
    {
        $this->exposureSlope = $exposureSlope;

        return $this;
    }

    /**
     * Get exposureSlope
     *
     * @return string
     */
    public function getExposureSlope()
    {
        return $this->exposureSlope;
    }

    /**
     * Set optimumDevelopment
     *
     * @param string $optimumDevelopment
     *
     * @return SyntaxonEcology
     */
    public function setOptimumDevelopment($optimumDevelopment)
    {
        $this->optimumDevelopment = $optimumDevelopment;

        return $this;
    }

    /**
     * Get optimumDevelopment
     *
     * @return string
     */
    public function getOptimumDevelopment()
    {
        return $this->optimumDevelopment;
    }

    /**
     * Set atmosphericHumidity
     *
     * @param string $atmosphericHumidity
     *
     * @return SyntaxonEcology
     */
    public function setAtmosphericHumidity($atmosphericHumidity)
    {
        $this->atmosphericHumidity = $atmosphericHumidity;

        return $this;
    }

    /**
     * Get atmosphericHumidity
     *
     * @return string
     */
    public function getAtmosphericHumidity()
    {
        return $this->atmosphericHumidity;
    }

    /**
     * Set soilType
     *
     * @param string $soilType
     *
     * @return SyntaxonEcology
     */
    public function setSoilType($soilType)
    {
        $this->soilType = $soilType;

        return $this;
    }

    /**
     * Get soilType
     *
     * @return string
     */
    public function getSoilType()
    {
        return $this->soilType;
    }

    /**
     * Set soilHumidity
     *
     * @param string $soilHumidity
     *
     * @return SyntaxonEcology
     */
    public function setSoilHumidity($soilHumidity)
    {
        $this->soilHumidity = $soilHumidity;

        return $this;
    }

    /**
     * Get soilHumidity
     *
     * @return string
     */
    public function getSoilHumidity()
    {
        return $this->soilHumidity;
    }

    /**
     * Set soilTexture
     *
     * @param string $soilTexture
     *
     * @return SyntaxonEcology
     */
    public function setSoilTexture($soilTexture)
    {
        $this->soilTexture = $soilTexture;

        return $this;
    }

    /**
     * Get soilTexture
     *
     * @return string
     */
    public function getSoilTexture()
    {
        return $this->soilTexture;
    }

    /**
     * Set trophicLevel
     *
     * @param string $trophicLevel
     *
     * @return SyntaxonEcology
     */
    public function setTrophicLevel($trophicLevel)
    {
        $this->trophicLevel = $trophicLevel;

        return $this;
    }

    /**
     * Get trophicLevel
     *
     * @return string
     */
    public function getTrophicLevel()
    {
        return $this->trophicLevel;
    }

    /**
     * Set soilPh
     *
     * @param string $soilPh
     *
     * @return SyntaxonEcology
     */
    public function setSoilPh($soilPh)
    {
        $this->soilPh = $soilPh;

        return $this;
    }

    /**
     * Get soilPh
     *
     * @return string
     */
    public function getSoilPh()
    {
        return $this->soilPh;
    }

    /**
     * Set salinity
     *
     * @param string $salinity
     *
     * @return SyntaxonEcology
     */
    public function setSalinity($salinity)
    {
        $this->salinity = $salinity;

        return $this;
    }

    /**
     * Get salinity
     *
     * @return string
     */
    public function getSalinity()
    {
        return $this->salinity;
    }

    /**
     * Set dynamic
     *
     * @param string $dynamic
     *
     * @return SyntaxonEcology
     */
    public function setDynamic($dynamic)
    {
        $this->dynamic = $dynamic;

        return $this;
    }

    /**
     * Get dynamic
     *
     * @return string
     */
    public function getDynamic()
    {
        return $this->dynamic;
    }

    /**
     * Set manInfluence
     *
     * @param string $manInfluence
     *
     * @return SyntaxonEcology
     */
    public function setManInfluence($manInfluence)
    {
        $this->manInfluence = $manInfluence;

        return $this;
    }

    /**
     * Get manInfluence
     *
     * @return string
     */
    public function getManInfluence()
    {
        return $this->manInfluence;
    }

    public function isEmpty()
    {
        if(($this->getWorldRepartition() == null)
            &&($this->getFranceRepartition() == null)
            &&($this->getPhysionomy() == null)
            &&($this->getAltitude() == null)
            &&($this->getLatitude() == null)
            &&($this->getOceanity() == null)
            &&($this->getTemperature() == null)
            &&($this->getLight() == null)
            &&($this->getExposureSlope() == null)
            &&($this->getOptimumDevelopment() == null)
            &&($this->getAtmosphericHumidity() == null)
            &&($this->getSoilType() == null)
            &&($this->getSoilHumidity() == null)
            &&($this->getSoilTexture() == null)
            &&($this->getTrophicLevel() == null)
            &&($this->getSoilPh() == null)
            &&($this->getSalinity() == null)
            &&($this->getDynamic() == null)
            &&($this->getManInfluence() == null)
        )

        {
            return true;
        } else {
            return false;
        }
    }
}

