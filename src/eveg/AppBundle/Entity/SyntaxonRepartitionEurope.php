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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="macronesia", type="integer")
     */
    private $macronesia;

    /**
     * @var integer
     *
     * @ORM\Column(name="iberian_peninsula", type="integer")
     */
    private $iberianPeninsula;

    /**
     * @var integer
     *
     * @ORM\Column(name="island", type="integer")
     */
    private $island;

    /**
     * @var integer
     *
     * @ORM\Column(name="uk", type="integer")
     */
    private $uk;

    /**
     * @var integer
     *
     * @ORM\Column(name="netherlands", type="integer")
     */
    private $netherlands;

    /**
     * @var integer
     *
     * @ORM\Column(name="belgium", type="integer")
     */
    private $belgium;

    /**
     * @var integer
     *
     * @ORM\Column(name="luxembourg", type="integer")
     */
    private $luxembourg;

    /**
     * @var integer
     *
     * @ORM\Column(name="france", type="integer")
     */
    private $france;

    /**
     * @var integer
     *
     * @ORM\Column(name="germany", type="integer")
     */
    private $germany;

    /**
     * @var integer
     *
     * @ORM\Column(name="poland", type="integer")
     */
    private $poland;

    /**
     * @var integer
     *
     * @ORM\Column(name="czech_republic", type="integer")
     */
    private $czechRepublic;

    /**
     * @var integer
     *
     * @ORM\Column(name="slovakia", type="integer")
     */
    private $slovakia;

    /**
     * @var integer
     *
     * @ORM\Column(name="switzerland", type="integer")
     */
    private $switzerland;

    /**
     * @var integer
     *
     * @ORM\Column(name="austria", type="integer")
     */
    private $austria;

    /**
     * @var integer
     *
     * @ORM\Column(name="italy", type="integer")
     */
    private $italy;

    /**
     * @var integer
     *
     * @ORM\Column(name="slovenia_croatia", type="integer")
     */
    private $sloveniaCroatia;

    /**
     * @var integer
     *
     * @ORM\Column(name="bosnia_montenegro_albania", type="integer")
     */
    private $bosniaMontenegroAlbania;

    /**
     * @var integer
     *
     * @ORM\Column(name="serbia_macedonia", type="integer")
     */
    private $serbiaMacedonia;

    /**
     * @var integer
     *
     * @ORM\Column(name="hungary", type="integer")
     */
    private $hungary;

    /**
     * @var integer
     *
     * @ORM\Column(name="romania_moldova", type="integer")
     */
    private $romaniaMoldova;

    /**
     * @var integer
     *
     * @ORM\Column(name="bulgaria", type="integer")
     */
    private $bulgaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="greece", type="integer")
     */
    private $greece;

    /**
     * @var integer
     *
     * @ORM\Column(name="finland", type="integer")
     */
    private $finland;

    /**
     * @var integer
     *
     * @ORM\Column(name="estonia_latvia_lithuania", type="integer")
     */
    private $estoniaLatviaLithuania;

    /**
     * @var integer
     *
     * @ORM\Column(name="belarus", type="integer")
     */
    private $belarus;

    /**
     * @var integer
     *
     * @ORM\Column(name="ukraine", type="integer")
     */
    private $ukraine;

    /**
     * @var integer
     *
     * @ORM\Column(name="russia", type="integer")
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
     * @param integer $macronesia
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
     * @return integer
     */
    public function getMacronesia()
    {
        return $this->macronesia;
    }

    /**
     * Set iberianPeninsula
     *
     * @param integer $iberianPeninsula
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
     * @return integer
     */
    public function getIberianPeninsula()
    {
        return $this->iberianPeninsula;
    }

    /**
     * Set island
     *
     * @param integer $island
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
     * @return integer
     */
    public function getIsland()
    {
        return $this->island;
    }

    /**
     * Set uk
     *
     * @param integer $uk
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
     * @return integer
     */
    public function getUk()
    {
        return $this->uk;
    }

    /**
     * Set netherlands
     *
     * @param integer $netherlands
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
     * @return integer
     */
    public function getNetherlands()
    {
        return $this->netherlands;
    }

    /**
     * Set belgium
     *
     * @param integer $belgium
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
     * @return integer
     */
    public function getBelgium()
    {
        return $this->belgium;
    }

    /**
     * Set luxembourg
     *
     * @param integer $luxembourg
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
     * @return integer
     */
    public function getLuxembourg()
    {
        return $this->luxembourg;
    }

    /**
     * Set france
     *
     * @param integer $france
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
     * @return integer
     */
    public function getFrance()
    {
        return $this->france;
    }

    /**
     * Set germany
     *
     * @param integer $germany
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
     * @return integer
     */
    public function getGermany()
    {
        return $this->germany;
    }

    /**
     * Set poland
     *
     * @param integer $poland
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
     * @return integer
     */
    public function getPoland()
    {
        return $this->poland;
    }

    /**
     * Set czechRepublic
     *
     * @param integer $czechRepublic
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
     * @return integer
     */
    public function getCzechRepublic()
    {
        return $this->czechRepublic;
    }

    /**
     * Set slovakia
     *
     * @param integer $slovakia
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
     * @return integer
     */
    public function getSlovakia()
    {
        return $this->slovakia;
    }

    /**
     * Set switzerland
     *
     * @param integer $switzerland
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
     * @return integer
     */
    public function getSwitzerland()
    {
        return $this->switzerland;
    }

    /**
     * Set austria
     *
     * @param integer $austria
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
     * @return integer
     */
    public function getAustria()
    {
        return $this->austria;
    }

    /**
     * Set italy
     *
     * @param integer $italy
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
     * @return integer
     */
    public function getItaly()
    {
        return $this->italy;
    }

    /**
     * Set sloveniaCroatia
     *
     * @param integer $sloveniaCroatia
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
     * @return integer
     */
    public function getSloveniaCroatia()
    {
        return $this->sloveniaCroatia;
    }

    /**
     * Set bosniaMontenegroAlbania
     *
     * @param integer $bosniaMontenegroAlbania
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
     * @return integer
     */
    public function getBosniaMontenegroAlbania()
    {
        return $this->bosniaMontenegroAlbania;
    }

    /**
     * Set serbiaMacedonia
     *
     * @param integer $serbiaMacedonia
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
     * @return integer
     */
    public function getSerbiaMacedonia()
    {
        return $this->serbiaMacedonia;
    }

    /**
     * Set hungary
     *
     * @param integer $hungary
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
     * @return integer
     */
    public function getHungary()
    {
        return $this->hungary;
    }

    /**
     * Set romaniaMoldova
     *
     * @param integer $romaniaMoldova
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
     * @return integer
     */
    public function getRomaniaMoldova()
    {
        return $this->romaniaMoldova;
    }

    /**
     * Set bulgaria
     *
     * @param integer $bulgaria
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
     * @return integer
     */
    public function getBulgaria()
    {
        return $this->bulgaria;
    }

    /**
     * Set greece
     *
     * @param integer $greece
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
     * @return integer
     */
    public function getGreece()
    {
        return $this->greece;
    }

    /**
     * Set finland
     *
     * @param integer $finland
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
     * @return integer
     */
    public function getFinland()
    {
        return $this->finland;
    }

    /**
     * Set estoniaLatviaLithuania
     *
     * @param integer $estoniaLatviaLithuania
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
     * @return integer
     */
    public function getEstoniaLatviaLithuania()
    {
        return $this->estoniaLatviaLithuania;
    }

    /**
     * Set belarus
     *
     * @param integer $belarus
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
     * @return integer
     */
    public function getBelarus()
    {
        return $this->belarus;
    }

    /**
     * Set ukraine
     *
     * @param integer $ukraine
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
     * @return integer
     */
    public function getUkraine()
    {
        return $this->ukraine;
    }

    /**
     * Set russia
     *
     * @param integer $russia
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
     * @return integer
     */
    public function getRussia()
    {
        return $this->russia;
    }
}

