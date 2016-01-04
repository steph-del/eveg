<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SyntaxonRepartitionEurope
 *
 * @ORM\Table(name="eveg_baseveg_repartitionEurope")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\SyntaxonRepartitionEuropeRepository")
 */
class SyntaxonRepartitionEurope
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="macronesia", type="string", length=2, nullable=true)
     */
    private $macronesia;

    /**
     * @var integer
     *
     * @ORM\Column(name="iberian_peninsula", type="string", length=2, nullable=true)
     */
    private $iberianPeninsula;

    /**
     * @var integer
     *
     * @ORM\Column(name="island", type="string", length=2, nullable=true)
     */
    private $island;

    /**
     * @var integer
     *
     * @ORM\Column(name="uk", type="string", length=2, nullable=true)
     */
    private $uk;

    /**
     * @var integer
     *
     * @ORM\Column(name="netherlands", type="string", length=2, nullable=true)
     */
    private $netherlands;

    /**
     * @var integer
     *
     * @ORM\Column(name="belgium", type="string", length=2, nullable=true)
     */
    private $belgium;

    /**
     * @var integer
     *
     * @ORM\Column(name="luxembourg", type="string", length=2, nullable=true)
     */
    private $luxembourg;

    /**
     * @var integer
     *
     * @ORM\Column(name="france", type="string", length=2, nullable=true)
     */
    private $france;

    /**
     * @var integer
     *
     * @ORM\Column(name="germany", type="string", length=2, nullable=true)
     */
    private $germany;

    /**
     * @var integer
     *
     * @ORM\Column(name="poland", type="string", length=2, nullable=true)
     */
    private $poland;

    /**
     * @var integer
     *
     * @ORM\Column(name="czech_republic", type="string", length=2, nullable=true)
     */
    private $czechRepublic;

    /**
     * @var integer
     *
     * @ORM\Column(name="slovakia", type="string", length=2, nullable=true)
     */
    private $slovakia;

    /**
     * @var integer
     *
     * @ORM\Column(name="switzerland", type="string", length=2, nullable=true)
     */
    private $switzerland;

    /**
     * @var integer
     *
     * @ORM\Column(name="austria", type="string", length=2, nullable=true)
     */
    private $austria;

    /**
     * @var integer
     *
     * @ORM\Column(name="italy", type="string", length=2, nullable=true)
     */
    private $italy;

    /**
     * @var integer
     *
     * @ORM\Column(name="slovenia_croatia", type="string", length=2, nullable=true)
     */
    private $sloveniaCroatia;

    /**
     * @var integer
     *
     * @ORM\Column(name="bosnia_montenegro_albania", type="string", length=2, nullable=true)
     */
    private $bosniaMontenegroAlbania;

    /**
     * @var integer
     *
     * @ORM\Column(name="serbia_macedonia", type="string", length=2, nullable=true)
     */
    private $serbiaMacedonia;

    /**
     * @var integer
     *
     * @ORM\Column(name="hungary", type="string", length=2, nullable=true)
     */
    private $hungary;

    /**
     * @var integer
     *
     * @ORM\Column(name="romania_moldova", type="string", length=2, nullable=true)
     */
    private $romaniaMoldova;

    /**
     * @var integer
     *
     * @ORM\Column(name="bulgaria", type="string", length=2, nullable=true)
     */
    private $bulgaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="greece", type="string", length=2, nullable=true)
     */
    private $greece;

    /**
     * @var integer
     *
     * @ORM\Column(name="finland", type="string", length=2, nullable=true)
     */
    private $finland;

    /**
     * @var integer
     *
     * @ORM\Column(name="estonia_latvia_lithuania", type="string", length=2, nullable=true)
     */
    private $estoniaLatviaLithuania;

    /**
     * @var integer
     *
     * @ORM\Column(name="belarus", type="string", length=2, nullable=true)
     */
    private $belarus;

    /**
     * @var integer
     *
     * @ORM\Column(name="ukraine", type="string", length=2, nullable=true)
     */
    private $ukraine;

    /**
     * @var integer
     *
     * @ORM\Column(name="russia", type="string", length=2, nullable=true)
     */
    private $russia;


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
     * Set macronesia
     *
     * @param string $macronesia
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setMacronesia($macronesia)
    {
        $this->macronesia = $macronesia;

        return $this;
    }

    /**
     * Get macronesia
     *
     * @return string
     */
    public function getMacronesia()
    {
        return $this->macronesia;
    }

    /**
     * Set iberianPeninsula
     *
     * @param string $iberianPeninsula
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setIberianPeninsula($iberianPeninsula)
    {
        $this->iberianPeninsula = $iberianPeninsula;

        return $this;
    }

    /**
     * Get iberianPeninsula
     *
     * @return string
     */
    public function getIberianPeninsula()
    {
        return $this->iberianPeninsula;
    }

    /**
     * Set island
     *
     * @param string $island
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setIsland($island)
    {
        $this->island = $island;

        return $this;
    }

    /**
     * Get island
     *
     * @return string
     */
    public function getIsland()
    {
        return $this->island;
    }

    /**
     * Set uk
     *
     * @param string $uk
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setUk($uk)
    {
        $this->uk = $uk;

        return $this;
    }

    /**
     * Get uk
     *
     * @return string
     */
    public function getUk()
    {
        return $this->uk;
    }

    /**
     * Set netherlands
     *
     * @param string $netherlands
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setNetherlands($netherlands)
    {
        $this->netherlands = $netherlands;

        return $this;
    }

    /**
     * Get netherlands
     *
     * @return string
     */
    public function getNetherlands()
    {
        return $this->netherlands;
    }

    /**
     * Set belgium
     *
     * @param string $belgium
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setBelgium($belgium)
    {
        $this->belgium = $belgium;

        return $this;
    }

    /**
     * Get belgium
     *
     * @return string
     */
    public function getBelgium()
    {
        return $this->belgium;
    }

    /**
     * Set luxembourg
     *
     * @param string $luxembourg
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setLuxembourg($luxembourg)
    {
        $this->luxembourg = $luxembourg;

        return $this;
    }

    /**
     * Get luxembourg
     *
     * @return string
     */
    public function getLuxembourg()
    {
        return $this->luxembourg;
    }

    /**
     * Set france
     *
     * @param string $france
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setFrance($france)
    {
        $this->france = $france;

        return $this;
    }

    /**
     * Get france
     *
     * @return string
     */
    public function getFrance()
    {
        return $this->france;
    }

    /**
     * Set germany
     *
     * @param string $germany
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setGermany($germany)
    {
        $this->germany = $germany;

        return $this;
    }

    /**
     * Get germany
     *
     * @return string
     */
    public function getGermany()
    {
        return $this->germany;
    }

    /**
     * Set poland
     *
     * @param string $poland
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setPoland($poland)
    {
        $this->poland = $poland;

        return $this;
    }

    /**
     * Get poland
     *
     * @return string
     */
    public function getPoland()
    {
        return $this->poland;
    }

    /**
     * Set czechRepublic
     *
     * @param string $czechRepublic
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setCzechRepublic($czechRepublic)
    {
        $this->czechRepublic = $czechRepublic;

        return $this;
    }

    /**
     * Get czechRepublic
     *
     * @return string
     */
    public function getCzechRepublic()
    {
        return $this->czechRepublic;
    }

    /**
     * Set slovakia
     *
     * @param string $slovakia
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setSlovakia($slovakia)
    {
        $this->slovakia = $slovakia;

        return $this;
    }

    /**
     * Get slovakia
     *
     * @return string
     */
    public function getSlovakia()
    {
        return $this->slovakia;
    }

    /**
     * Set switzerland
     *
     * @param string $switzerland
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setSwitzerland($switzerland)
    {
        $this->switzerland = $switzerland;

        return $this;
    }

    /**
     * Get switzerland
     *
     * @return string
     */
    public function getSwitzerland()
    {
        return $this->switzerland;
    }

    /**
     * Set austria
     *
     * @param string $austria
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setAustria($austria)
    {
        $this->austria = $austria;

        return $this;
    }

    /**
     * Get austria
     *
     * @return string
     */
    public function getAustria()
    {
        return $this->austria;
    }

    /**
     * Set italy
     *
     * @param string $italy
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setItaly($italy)
    {
        $this->italy = $italy;

        return $this;
    }

    /**
     * Get italy
     *
     * @return string
     */
    public function getItaly()
    {
        return $this->italy;
    }

    /**
     * Set sloveniaCroatia
     *
     * @param string $sloveniaCroatia
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setSloveniaCroatia($sloveniaCroatia)
    {
        $this->sloveniaCroatia = $sloveniaCroatia;

        return $this;
    }

    /**
     * Get sloveniaCroatia
     *
     * @return string
     */
    public function getSloveniaCroatia()
    {
        return $this->sloveniaCroatia;
    }

    /**
     * Set bosniaMontenegroAlbania
     *
     * @param string $bosniaMontenegroAlbania
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setBosniaMontenegroAlbania($bosniaMontenegroAlbania)
    {
        $this->bosniaMontenegroAlbania = $bosniaMontenegroAlbania;

        return $this;
    }

    /**
     * Get bosniaMontenegroAlbania
     *
     * @return string
     */
    public function getBosniaMontenegroAlbania()
    {
        return $this->bosniaMontenegroAlbania;
    }

    /**
     * Set serbiaMacedonia
     *
     * @param string $serbiaMacedonia
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setSerbiaMacedonia($serbiaMacedonia)
    {
        $this->serbiaMacedonia = $serbiaMacedonia;

        return $this;
    }

    /**
     * Get serbiaMacedonia
     *
     * @return string
     */
    public function getSerbiaMacedonia()
    {
        return $this->serbiaMacedonia;
    }

    /**
     * Set hungary
     *
     * @param string $hungary
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setHungary($hungary)
    {
        $this->hungary = $hungary;

        return $this;
    }

    /**
     * Get hungary
     *
     * @return string
     */
    public function getHungary()
    {
        return $this->hungary;
    }

    /**
     * Set romaniaMoldova
     *
     * @param string $romaniaMoldova
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setRomaniaMoldova($romaniaMoldova)
    {
        $this->romaniaMoldova = $romaniaMoldova;

        return $this;
    }

    /**
     * Get romaniaMoldova
     *
     * @return string
     */
    public function getRomaniaMoldova()
    {
        return $this->romaniaMoldova;
    }

    /**
     * Set bulgaria
     *
     * @param string $bulgaria
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setBulgaria($bulgaria)
    {
        $this->bulgaria = $bulgaria;

        return $this;
    }

    /**
     * Get bulgaria
     *
     * @return string
     */
    public function getBulgaria()
    {
        return $this->bulgaria;
    }

    /**
     * Set greece
     *
     * @param string $greece
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setGreece($greece)
    {
        $this->greece = $greece;

        return $this;
    }

    /**
     * Get greece
     *
     * @return string
     */
    public function getGreece()
    {
        return $this->greece;
    }

    /**
     * Set finland
     *
     * @param string $finland
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setFinland($finland)
    {
        $this->finland = $finland;

        return $this;
    }

    /**
     * Get finland
     *
     * @return string
     */
    public function getFinland()
    {
        return $this->finland;
    }

    /**
     * Set estoniaLatviaLithuania
     *
     * @param string $estoniaLatviaLithuania
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setEstoniaLatviaLithuania($estoniaLatviaLithuania)
    {
        $this->estoniaLatviaLithuania = $estoniaLatviaLithuania;

        return $this;
    }

    /**
     * Get estoniaLatviaLithuania
     *
     * @return string
     */
    public function getEstoniaLatviaLithuania()
    {
        return $this->estoniaLatviaLithuania;
    }

    /**
     * Set belarus
     *
     * @param string $belarus
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setBelarus($belarus)
    {
        $this->belarus = $belarus;

        return $this;
    }

    /**
     * Get belarus
     *
     * @return string
     */
    public function getBelarus()
    {
        return $this->belarus;
    }

    /**
     * Set ukraine
     *
     * @param string $ukraine
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setUkraine($ukraine)
    {
        $this->ukraine = $ukraine;

        return $this;
    }

    /**
     * Get ukraine
     *
     * @return string
     */
    public function getUkraine()
    {
        return $this->ukraine;
    }

    /**
     * Set russia
     *
     * @param string $russia
     *
     * @return SyntaxonRepartitionEurope
     */
    public function setRussia($russia)
    {
        $this->russia = $russia;

        return $this;
    }

    /**
     * Get russia
     *
     * @return string
     */
    public function getRussia()
    {
        return $this->russia;
    }
}

