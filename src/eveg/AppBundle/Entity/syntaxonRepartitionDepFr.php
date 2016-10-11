<?php

namespace eveg\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * syntaxonRepartitionDepFr
 *
 * @ORM\Table(name="eveg_baseveg_repartitionDepFr")
 * @ORM\Entity(repositoryClass="eveg\AppBundle\Entity\syntaxonRepartitionDepFrRepository")
 *
 * @ExclusionPolicy("all")
 */
class syntaxonRepartitionDepFr
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
     * @ORM\Column(name="_01", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_01;

    /**
     * @var string
     *
     * @ORM\Column(name="_02", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_02;

    /**
     * @var string
     *
     * @ORM\Column(name="_03", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_03;

    /**
     * @var string
     *
     * @ORM\Column(name="_04", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_04;

    /**
     * @var string
     *
     * @ORM\Column(name="_05", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_05;

    /**
     * @var string
     *
     * @ORM\Column(name="_06", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_06;

    /**
     * @var string
     *
     * @ORM\Column(name="_07", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_07;

    /**
     * @var string
     *
     * @ORM\Column(name="_08", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_08;

    /**
     * @var string
     *
     * @ORM\Column(name="_09", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_09;

    /**
     * @var string
     *
     * @ORM\Column(name="_10", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_10;

    /**
     * @var string
     *
     * @ORM\Column(name="_11", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_11;

    /**
     * @var string
     *
     * @ORM\Column(name="_12", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_12;

    /**
     * @var string
     *
     * @ORM\Column(name="_13", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_13;

    /**
     * @var string
     *
     * @ORM\Column(name="_14", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_14;

    /**
     * @var string
     *
     * @ORM\Column(name="_15", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_15;

    /**
     * @var string
     *
     * @ORM\Column(name="_16", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_16;

    /**
     * @var string
     *
     * @ORM\Column(name="_17", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_17;

    /**
     * @var string
     *
     * @ORM\Column(name="_18", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_18;

    /**
     * @var string
     *
     * @ORM\Column(name="_19", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_19;

    /**
     * @var string
     *
     * @ORM\Column(name="_20", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_20;

    /**
     * @var string
     *
     * @ORM\Column(name="_21", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_21;

    /**
     * @var string
     *
     * @ORM\Column(name="_22", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_22;

    /**
     * @var string
     *
     * @ORM\Column(name="_23", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_23;

    /**
     * @var string
     *
     * @ORM\Column(name="_24", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_24;

    /**
     * @var string
     *
     * @ORM\Column(name="_25", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_25;

    /**
     * @var string
     *
     * @ORM\Column(name="_26", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_26;

    /**
     * @var string
     *
     * @ORM\Column(name="_27", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_27;

    /**
     * @var string
     *
     * @ORM\Column(name="_28", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_28;

    /**
     * @var string
     *
     * @ORM\Column(name="_29", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_29;

    /**
     * @var string
     *
     * @ORM\Column(name="_30", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_30;

    /**
     * @var string
     *
     * @ORM\Column(name="_31", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_31;

    /**
     * @var string
     *
     * @ORM\Column(name="_32", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_32;

    /**
     * @var string
     *
     * @ORM\Column(name="_33", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_33;

    /**
     * @var string
     *
     * @ORM\Column(name="_34", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_34;

    /**
     * @var string
     *
     * @ORM\Column(name="_35", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_35;

    /**
     * @var string
     *
     * @ORM\Column(name="_36", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_36;

    /**
     * @var string
     *
     * @ORM\Column(name="_37", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_37;

    /**
     * @var string
     *
     * @ORM\Column(name="_38", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_38;

    /**
     * @var string
     *
     * @ORM\Column(name="_39", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_39;

    /**
     * @var string
     *
     * @ORM\Column(name="_40", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_40;

    /**
     * @var string
     *
     * @ORM\Column(name="_41", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_41;

    /**
     * @var string
     *
     * @ORM\Column(name="_42", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_42;

    /**
     * @var string
     *
     * @ORM\Column(name="_43", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_43;

    /**
     * @var string
     *
     * @ORM\Column(name="_44", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_44;

    /**
     * @var string
     *
     * @ORM\Column(name="_45", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_45;

    /**
     * @var string
     *
     * @ORM\Column(name="_46", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_46;

    /**
     * @var string
     *
     * @ORM\Column(name="_47", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_47;

    /**
     * @var string
     *
     * @ORM\Column(name="_48", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_48;

    /**
     * @var string
     *
     * @ORM\Column(name="_49", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_49;

    /**
     * @var string
     *
     * @ORM\Column(name="_50", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_50;

    /**
     * @var string
     *
     * @ORM\Column(name="_51", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_51;

    /**
     * @var string
     *
     * @ORM\Column(name="_52", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_52;

    /**
     * @var string
     *
     * @ORM\Column(name="_53", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_53;

    /**
     * @var string
     *
     * @ORM\Column(name="_54", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_54;

    /**
     * @var string
     *
     * @ORM\Column(name="_55", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_55;

    /**
     * @var string
     *
     * @ORM\Column(name="_56", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_56;

    /**
     * @var string
     *
     * @ORM\Column(name="_57", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_57;

    /**
     * @var string
     *
     * @ORM\Column(name="_58", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_58;

    /**
     * @var string
     *
     * @ORM\Column(name="_59", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_59;

    /**
     * @var string
     *
     * @ORM\Column(name="_60", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_60;

    /**
     * @var string
     *
     * @ORM\Column(name="_61", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_61;

    /**
     * @var string
     *
     * @ORM\Column(name="_62", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_62;

    /**
     * @var string
     *
     * @ORM\Column(name="_63", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_63;

    /**
     * @var string
     *
     * @ORM\Column(name="_64", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_64;

    /**
     * @var string
     *
     * @ORM\Column(name="_65", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_65;

    /**
     * @var string
     *
     * @ORM\Column(name="_66", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_66;

    /**
     * @var string
     *
     * @ORM\Column(name="_67", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_67;

    /**
     * @var string
     *
     * @ORM\Column(name="_68", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_68;

    /**
     * @var string
     *
     * @ORM\Column(name="_69", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_69;

    /**
     * @var string
     *
     * @ORM\Column(name="_70", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_70;

    /**
     * @var string
     *
     * @ORM\Column(name="_71", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_71;

    /**
     * @var string
     *
     * @ORM\Column(name="_72", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_72;

    /**
     * @var string
     *
     * @ORM\Column(name="_73", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_73;

    /**
     * @var string
     *
     * @ORM\Column(name="_74", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_74;

    /**
     * @var string
     *
     * @ORM\Column(name="_75", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_75;

    /**
     * @var string
     *
     * @ORM\Column(name="_76", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_76;

    /**
     * @var string
     *
     * @ORM\Column(name="_77", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_77;

    /**
     * @var string
     *
     * @ORM\Column(name="_78", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_78;

    /**
     * @var string
     *
     * @ORM\Column(name="_79", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_79;

    /**
     * @var string
     *
     * @ORM\Column(name="_80", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_80;

    /**
     * @var string
     *
     * @ORM\Column(name="_81", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_81;

    /**
     * @var string
     *
     * @ORM\Column(name="_82", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_82;

    /**
     * @var string
     *
     * @ORM\Column(name="_83", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_83;

    /**
     * @var string
     *
     * @ORM\Column(name="_84", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_84;

    /**
     * @var string
     *
     * @ORM\Column(name="_85", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_85;

    /**
     * @var string
     *
     * @ORM\Column(name="_86", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_86;

    /**
     * @var string
     *
     * @ORM\Column(name="_87", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_87;

    /**
     * @var string
     *
     * @ORM\Column(name="_88", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_88;

    /**
     * @var string
     *
     * @ORM\Column(name="_89", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_89;

    /**
     * @var string
     *
     * @ORM\Column(name="_90", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_90;

    /**
     * @var string
     *
     * @ORM\Column(name="_91", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_91;

    /**
     * @var string
     *
     * @ORM\Column(name="_92", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_92;

    /**
     * @var string
     *
     * @ORM\Column(name="_93", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_93;

    /**
     * @var string
     *
     * @ORM\Column(name="_94", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_94;

    /**
     * @var string
     *
     * @ORM\Column(name="_95", type="string", length=2, nullable=true, options={"default" : 0})
     * @Expose
     * @Groups({"API"})
     */
    private $_95;


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
     * Set 01
     *
     * @param string $_01
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set01($_01)
    {
        $this->_01 = $_01;

        return $this;
    }

    /**
     * Get 01
     *
     * @return string
     */
    public function get01()
    {
        return $this->_01;
    }

    /**
     * Set 02
     *
     * @param string $_02
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set02($_02)
    {
        $this->_02 = $_02;

        return $this;
    }

    /**
     * Get 02
     *
     * @return string
     */
    public function get02()
    {
        return $this->_02;
    }

    /**
     * Set 03
     *
     * @param string $_03
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set03($_03)
    {
        $this->_03 = $_03;

        return $this;
    }

    /**
     * Get 03
     *
     * @return string
     */
    public function get03()
    {
        return $this->_03;
    }

    /**
     * Set 04
     *
     * @param string $_04
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set04($_04)
    {
        $this->_04 = $_04;

        return $this;
    }

    /**
     * Get 04
     *
     * @return string
     */
    public function get04()
    {
        return $this->_04;
    }

    /**
     * Set 05
     *
     * @param string $_05
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set05($_05)
    {
        $this->_05 = $_05;

        return $this;
    }

    /**
     * Get 05
     *
     * @return string
     */
    public function get05()
    {
        return $this->_05;
    }

    /**
     * Set 06
     *
     * @param string $_06
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set06($_06)
    {
        $this->_06 = $_06;

        return $this;
    }

    /**
     * Get 06
     *
     * @return string
     */
    public function get06()
    {
        return $this->_06;
    }

    /**
     * Set 07
     *
     * @param string $_07
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set07($_07)
    {
        $this->_07 = $_07;

        return $this;
    }

    /**
     * Get 07
     *
     * @return string
     */
    public function get07()
    {
        return $this->_07;
    }

    /**
     * Set 08
     *
     * @param string $_08
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set08($_08)
    {
        $this->_08 = $_08;

        return $this;
    }

    /**
     * Get 08
     *
     * @return string
     */
    public function get08()
    {
        return $this->_08;
    }

    /**
     * Set 09
     *
     * @param string $_09
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set09($_09)
    {
        $this->_09 = $_09;

        return $this;
    }

    /**
     * Get 09
     *
     * @return string
     */
    public function get09()
    {
        return $this->_09;
    }

    /**
     * Set 10
     *
     * @param string $_10
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set10($_10)
    {
        $this->_10 = $_10;

        return $this;
    }

    /**
     * Get 10
     *
     * @return string
     */
    public function get10()
    {
        return $this->_10;
    }

    /**
     * Set 11
     *
     * @param string $_11
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set11($_11)
    {
        $this->_11 = $_11;

        return $this;
    }

    /**
     * Get 11
     *
     * @return string
     */
    public function get11()
    {
        return $this->_11;
    }

    /**
     * Set 12
     *
     * @param string $_12
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set12($_12)
    {
        $this->_12 = $_12;

        return $this;
    }

    /**
     * Get 12
     *
     * @return string
     */
    public function get12()
    {
        return $this->_12;
    }

    /**
     * Set 13
     *
     * @param string $_13
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set13($_13)
    {
        $this->_13 = $_13;

        return $this;
    }

    /**
     * Get 13
     *
     * @return string
     */
    public function get13()
    {
        return $this->_13;
    }

    /**
     * Set 14
     *
     * @param string $_14
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set14($_14)
    {
        $this->_14 = $_14;

        return $this;
    }

    /**
     * Get 14
     *
     * @return string
     */
    public function get14()
    {
        return $this->_14;
    }

    /**
     * Set 15
     *
     * @param string $_15
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set15($_15)
    {
        $this->_15 = $_15;

        return $this;
    }

    /**
     * Get 15
     *
     * @return string
     */
    public function get15()
    {
        return $this->_15;
    }

    /**
     * Set 16
     *
     * @param string $_16
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set16($_16)
    {
        $this->_16 = $_16;

        return $this;
    }

    /**
     * Get 16
     *
     * @return string
     */
    public function get16()
    {
        return $this->_16;
    }

    /**
     * Set 17
     *
     * @param string $_17
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set17($_17)
    {
        $this->_17 = $_17;

        return $this;
    }

    /**
     * Get 17
     *
     * @return string
     */
    public function get17()
    {
        return $this->_17;
    }

    /**
     * Set 18
     *
     * @param string $_18
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set18($_18)
    {
        $this->_18 = $_18;

        return $this;
    }

    /**
     * Get 18
     *
     * @return string
     */
    public function get18()
    {
        return $this->_18;
    }

    /**
     * Set 19
     *
     * @param string $_19
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set19($_19)
    {
        $this->_19 = $_19;

        return $this;
    }

    /**
     * Get 19
     *
     * @return string
     */
    public function get19()
    {
        return $this->_19;
    }

    /**
     * Set 20
     *
     * @param string $_20
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set20($_20)
    {
        $this->_20 = $_20;

        return $this;
    }

    /**
     * Get 20
     *
     * @return string
     */
    public function get20()
    {
        return $this->_20;
    }

    /**
     * Set 21
     *
     * @param string $_21
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set21($_21)
    {
        $this->_21 = $_21;

        return $this;
    }

    /**
     * Get 21
     *
     * @return string
     */
    public function get21()
    {
        return $this->_21;
    }

    /**
     * Set 22
     *
     * @param string $_22
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set22($_22)
    {
        $this->_22 = $_22;

        return $this;
    }

    /**
     * Get 22
     *
     * @return string
     */
    public function get22()
    {
        return $this->_22;
    }

    /**
     * Set 23
     *
     * @param string $_23
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set23($_23)
    {
        $this->_23 = $_23;

        return $this;
    }

    /**
     * Get 23
     *
     * @return string
     */
    public function get23()
    {
        return $this->_23;
    }

    /**
     * Set 24
     *
     * @param string $_24
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set24($_24)
    {
        $this->_24 = $_24;

        return $this;
    }

    /**
     * Get 24
     *
     * @return string
     */
    public function get24()
    {
        return $this->_24;
    }

    /**
     * Set 25
     *
     * @param string $_25
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set25($_25)
    {
        $this->_25 = $_25;

        return $this;
    }

    /**
     * Get 25
     *
     * @return string
     */
    public function get25()
    {
        return $this->_25;
    }

    /**
     * Set 26
     *
     * @param string $_26
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set26($_26)
    {
        $this->_26 = $_26;

        return $this;
    }

    /**
     * Get 26
     *
     * @return string
     */
    public function get26()
    {
        return $this->_26;
    }

    /**
     * Set 27
     *
     * @param string $_27
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set27($_27)
    {
        $this->_27 = $_27;

        return $this;
    }

    /**
     * Get 27
     *
     * @return string
     */
    public function get27()
    {
        return $this->_27;
    }

    /**
     * Set 28
     *
     * @param string $_28
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set28($_28)
    {
        $this->_28 = $_28;

        return $this;
    }

    /**
     * Get 28
     *
     * @return string
     */
    public function get28()
    {
        return $this->_28;
    }

    /**
     * Set 29
     *
     * @param string $_29
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set29($_29)
    {
        $this->_29 = $_29;

        return $this;
    }

    /**
     * Get 29
     *
     * @return string
     */
    public function get29()
    {
        return $this->_29;
    }

    /**
     * Set 30
     *
     * @param string $_30
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set30($_30)
    {
        $this->_30 = $_30;

        return $this;
    }

    /**
     * Get 30
     *
     * @return string
     */
    public function get30()
    {
        return $this->_30;
    }

    /**
     * Set 31
     *
     * @param string $_31
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set31($_31)
    {
        $this->_31 = $_31;

        return $this;
    }

    /**
     * Get 31
     *
     * @return string
     */
    public function get31()
    {
        return $this->_31;
    }

    /**
     * Set 32
     *
     * @param string $_32
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set32($_32)
    {
        $this->_32 = $_32;

        return $this;
    }

    /**
     * Get 32
     *
     * @return string
     */
    public function get32()
    {
        return $this->_32;
    }

    /**
     * Set 33
     *
     * @param string $_33
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set33($_33)
    {
        $this->_33 = $_33;

        return $this;
    }

    /**
     * Get 33
     *
     * @return string
     */
    public function get33()
    {
        return $this->_33;
    }

    /**
     * Set 34
     *
     * @param string $_34
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set34($_34)
    {
        $this->_34 = $_34;

        return $this;
    }

    /**
     * Get 34
     *
     * @return string
     */
    public function get34()
    {
        return $this->_34;
    }

    /**
     * Set 35
     *
     * @param string $_35
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set35($_35)
    {
        $this->_35 = $_35;

        return $this;
    }

    /**
     * Get 35
     *
     * @return string
     */
    public function get35()
    {
        return $this->_35;
    }

    /**
     * Set 36
     *
     * @param string $_36
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set36($_36)
    {
        $this->_36 = $_36;

        return $this;
    }

    /**
     * Get 36
     *
     * @return string
     */
    public function get36()
    {
        return $this->_36;
    }

    /**
     * Set 37
     *
     * @param string $_37
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set37($_37)
    {
        $this->_37 = $_37;

        return $this;
    }

    /**
     * Get 37
     *
     * @return string
     */
    public function get37()
    {
        return $this->_37;
    }

    /**
     * Set 38
     *
     * @param string $_38
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set38($_38)
    {
        $this->_38 = $_38;

        return $this;
    }

    /**
     * Get 38
     *
     * @return string
     */
    public function get38()
    {
        return $this->_38;
    }

    /**
     * Set 39
     *
     * @param string $_39
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set39($_39)
    {
        $this->_39 = $_39;

        return $this;
    }

    /**
     * Get 39
     *
     * @return string
     */
    public function get39()
    {
        return $this->_39;
    }

    /**
     * Set 40
     *
     * @param string $_40
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set40($_40)
    {
        $this->_40 = $_40;

        return $this;
    }

    /**
     * Get 40
     *
     * @return string
     */
    public function get40()
    {
        return $this->_40;
    }

    /**
     * Set 41
     *
     * @param string $_41
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set41($_41)
    {
        $this->_41 = $_41;

        return $this;
    }

    /**
     * Get 41
     *
     * @return string
     */
    public function get41()
    {
        return $this->_41;
    }

    /**
     * Set 42
     *
     * @param string $_42
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set42($_42)
    {
        $this->_42 = $_42;

        return $this;
    }

    /**
     * Get 42
     *
     * @return string
     */
    public function get42()
    {
        return $this->_42;
    }

    /**
     * Set 43
     *
     * @param string $_43
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set43($_43)
    {
        $this->_43 = $_43;

        return $this;
    }

    /**
     * Get 43
     *
     * @return string
     */
    public function get43()
    {
        return $this->_43;
    }

    /**
     * Set 44
     *
     * @param string $_44
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set44($_44)
    {
        $this->_44 = $_44;

        return $this;
    }

    /**
     * Get 44
     *
     * @return string
     */
    public function get44()
    {
        return $this->_44;
    }

    /**
     * Set 45
     *
     * @param string $_45
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set45($_45)
    {
        $this->_45 = $_45;

        return $this;
    }

    /**
     * Get 45
     *
     * @return string
     */
    public function get45()
    {
        return $this->_45;
    }

    /**
     * Set 46
     *
     * @param string $_46
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set46($_46)
    {
        $this->_46 = $_46;

        return $this;
    }

    /**
     * Get 46
     *
     * @return string
     */
    public function get46()
    {
        return $this->_46;
    }

    /**
     * Set 47
     *
     * @param string $_47
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set47($_47)
    {
        $this->_47 = $_47;

        return $this;
    }

    /**
     * Get 47
     *
     * @return string
     */
    public function get47()
    {
        return $this->_47;
    }

    /**
     * Set 48
     *
     * @param string $_48
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set48($_48)
    {
        $this->_48 = $_48;

        return $this;
    }

    /**
     * Get 48
     *
     * @return string
     */
    public function get48()
    {
        return $this->_48;
    }

    /**
     * Set 49
     *
     * @param string $_49
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set49($_49)
    {
        $this->_49 = $_49;

        return $this;
    }

    /**
     * Get 49
     *
     * @return string
     */
    public function get49()
    {
        return $this->_49;
    }

    /**
     * Set 50
     *
     * @param string $_50
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set50($_50)
    {
        $this->_50 = $_50;

        return $this;
    }

    /**
     * Get 50
     *
     * @return string
     */
    public function get50()
    {
        return $this->_50;
    }

    /**
     * Set 51
     *
     * @param string $_51
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set51($_51)
    {
        $this->_51 = $_51;

        return $this;
    }

    /**
     * Get 51
     *
     * @return string
     */
    public function get51()
    {
        return $this->_51;
    }

    /**
     * Set 52
     *
     * @param string $_52
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set52($_52)
    {
        $this->_52 = $_52;

        return $this;
    }

    /**
     * Get 52
     *
     * @return string
     */
    public function get52()
    {
        return $this->_52;
    }

    /**
     * Set 53
     *
     * @param string $_53
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set53($_53)
    {
        $this->_53 = $_53;

        return $this;
    }

    /**
     * Get 53
     *
     * @return string
     */
    public function get53()
    {
        return $this->_53;
    }

    /**
     * Set 54
     *
     * @param string $_54
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set54($_54)
    {
        $this->_54 = $_54;

        return $this;
    }

    /**
     * Get 54
     *
     * @return string
     */
    public function get54()
    {
        return $this->_54;
    }

    /**
     * Set 55
     *
     * @param string $_55
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set55($_55)
    {
        $this->_55 = $_55;

        return $this;
    }

    /**
     * Get 55
     *
     * @return string
     */
    public function get55()
    {
        return $this->_55;
    }

    /**
     * Set 56
     *
     * @param string $_56
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set56($_56)
    {
        $this->_56 = $_56;

        return $this;
    }

    /**
     * Get 56
     *
     * @return string
     */
    public function get56()
    {
        return $this->_56;
    }

    /**
     * Set 57
     *
     * @param string $_57
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set57($_57)
    {
        $this->_57 = $_57;

        return $this;
    }

    /**
     * Get 57
     *
     * @return string
     */
    public function get57()
    {
        return $this->_57;
    }

    /**
     * Set 58
     *
     * @param string $_58
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set58($_58)
    {
        $this->_58 = $_58;

        return $this;
    }

    /**
     * Get 58
     *
     * @return string
     */
    public function get58()
    {
        return $this->_58;
    }

    /**
     * Set 59
     *
     * @param string $_59
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set59($_59)
    {
        $this->_59 = $_59;

        return $this;
    }

    /**
     * Get 59
     *
     * @return string
     */
    public function get59()
    {
        return $this->_59;
    }

    /**
     * Set 60
     *
     * @param string $_60
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set60($_60)
    {
        $this->_60 = $_60;

        return $this;
    }

    /**
     * Get 60
     *
     * @return string
     */
    public function get60()
    {
        return $this->_60;
    }

    /**
     * Set 61
     *
     * @param string $_61
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set61($_61)
    {
        $this->_61 = $_61;

        return $this;
    }

    /**
     * Get 61
     *
     * @return string
     */
    public function get61()
    {
        return $this->_61;
    }

    /**
     * Set 62
     *
     * @param string $_62
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set62($_62)
    {
        $this->_62 = $_62;

        return $this;
    }

    /**
     * Get 62
     *
     * @return string
     */
    public function get62()
    {
        return $this->_62;
    }

    /**
     * Set 63
     *
     * @param string $_63
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set63($_63)
    {
        $this->_63 = $_63;

        return $this;
    }

    /**
     * Get 63
     *
     * @return string
     */
    public function get63()
    {
        return $this->_63;
    }

    /**
     * Set 64
     *
     * @param string $_64
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set64($_64)
    {
        $this->_64 = $_64;

        return $this;
    }

    /**
     * Get 64
     *
     * @return string
     */
    public function get64()
    {
        return $this->_64;
    }

    /**
     * Set 65
     *
     * @param string $_65
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set65($_65)
    {
        $this->_65 = $_65;

        return $this;
    }

    /**
     * Get 65
     *
     * @return string
     */
    public function get65()
    {
        return $this->_65;
    }

    /**
     * Set 66
     *
     * @param string $_66
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set66($_66)
    {
        $this->_66 = $_66;

        return $this;
    }

    /**
     * Get 66
     *
     * @return string
     */
    public function get66()
    {
        return $this->_66;
    }

    /**
     * Set 67
     *
     * @param string $_67
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set67($_67)
    {
        $this->_67 = $_67;

        return $this;
    }

    /**
     * Get 67
     *
     * @return string
     */
    public function get67()
    {
        return $this->_67;
    }

    /**
     * Set 68
     *
     * @param string $_68
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set68($_68)
    {
        $this->_68 = $_68;

        return $this;
    }

    /**
     * Get 68
     *
     * @return string
     */
    public function get68()
    {
        return $this->_68;
    }

    /**
     * Set 69
     *
     * @param string $_69
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set69($_69)
    {
        $this->_69 = $_69;

        return $this;
    }

    /**
     * Get 69
     *
     * @return string
     */
    public function get69()
    {
        return $this->_69;
    }

    /**
     * Set 70
     *
     * @param string $_70
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set70($_70)
    {
        $this->_70 = $_70;

        return $this;
    }

    /**
     * Get 70
     *
     * @return string
     */
    public function get70()
    {
        return $this->_70;
    }

    /**
     * Set 71
     *
     * @param string $_71
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set71($_71)
    {
        $this->_71 = $_71;

        return $this;
    }

    /**
     * Get 71
     *
     * @return string
     */
    public function get71()
    {
        return $this->_71;
    }

    /**
     * Set 72
     *
     * @param string $_72
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set72($_72)
    {
        $this->_72 = $_72;

        return $this;
    }

    /**
     * Get 72
     *
     * @return string
     */
    public function get72()
    {
        return $this->_72;
    }

    /**
     * Set 73
     *
     * @param string $_73
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set73($_73)
    {
        $this->_73 = $_73;

        return $this;
    }

    /**
     * Get 73
     *
     * @return string
     */
    public function get73()
    {
        return $this->_73;
    }

    /**
     * Set 74
     *
     * @param string $_74
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set74($_74)
    {
        $this->_74 = $_74;

        return $this;
    }

    /**
     * Get 74
     *
     * @return string
     */
    public function get74()
    {
        return $this->_74;
    }

    /**
     * Set 75
     *
     * @param string $_75
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set75($_75)
    {
        $this->_75 = $_75;

        return $this;
    }

    /**
     * Get 75
     *
     * @return string
     */
    public function get75()
    {
        return $this->_75;
    }

    /**
     * Set 76
     *
     * @param string $_76
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set76($_76)
    {
        $this->_76 = $_76;

        return $this;
    }

    /**
     * Get 76
     *
     * @return string
     */
    public function get76()
    {
        return $this->_76;
    }

    /**
     * Set 77
     *
     * @param string $_77
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set77($_77)
    {
        $this->_77 = $_77;

        return $this;
    }

    /**
     * Get 77
     *
     * @return string
     */
    public function get77()
    {
        return $this->_77;
    }

    /**
     * Set 78
     *
     * @param string $_78
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set78($_78)
    {
        $this->_78 = $_78;

        return $this;
    }

    /**
     * Get 78
     *
     * @return string
     */
    public function get78()
    {
        return $this->_78;
    }

    /**
     * Set 79
     *
     * @param string $_79
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set79($_79)
    {
        $this->_79 = $_79;

        return $this;
    }

    /**
     * Get 79
     *
     * @return string
     */
    public function get79()
    {
        return $this->_79;
    }

    /**
     * Set 80
     *
     * @param string $_80
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set80($_80)
    {
        $this->_80 = $_80;

        return $this;
    }

    /**
     * Get 80
     *
     * @return string
     */
    public function get80()
    {
        return $this->_80;
    }

    /**
     * Set 81
     *
     * @param string $_81
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set81($_81)
    {
        $this->_81 = $_81;

        return $this;
    }

    /**
     * Get 81
     *
     * @return string
     */
    public function get81()
    {
        return $this->_81;
    }

    /**
     * Set 82
     *
     * @param string $_82
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set82($_82)
    {
        $this->_82 = $_82;

        return $this;
    }

    /**
     * Get 82
     *
     * @return string
     */
    public function get82()
    {
        return $this->_82;
    }

    /**
     * Set 83
     *
     * @param string $_83
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set83($_83)
    {
        $this->_83 = $_83;

        return $this;
    }

    /**
     * Get 83
     *
     * @return string
     */
    public function get83()
    {
        return $this->_83;
    }

    /**
     * Set 84
     *
     * @param string $_84
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set84($_84)
    {
        $this->_84 = $_84;

        return $this;
    }

    /**
     * Get 84
     *
     * @return string
     */
    public function get84()
    {
        return $this->_84;
    }

    /**
     * Set 85
     *
     * @param string $_85
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set85($_85)
    {
        $this->_85 = $_85;

        return $this;
    }

    /**
     * Get 85
     *
     * @return string
     */
    public function get85()
    {
        return $this->_85;
    }

    /**
     * Set 86
     *
     * @param string $_86
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set86($_86)
    {
        $this->_86 = $_86;

        return $this;
    }

    /**
     * Get 86
     *
     * @return string
     */
    public function get86()
    {
        return $this->_86;
    }

    /**
     * Set 87
     *
     * @param string $_87
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set87($_87)
    {
        $this->_87 = $_87;

        return $this;
    }

    /**
     * Get 87
     *
     * @return string
     */
    public function get87()
    {
        return $this->_87;
    }

    /**
     * Set 88
     *
     * @param string $_88
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set88($_88)
    {
        $this->_88 = $_88;

        return $this;
    }

    /**
     * Get 88
     *
     * @return string
     */
    public function get88()
    {
        return $this->_88;
    }

    /**
     * Set 89
     *
     * @param string $_89
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set89($_89)
    {
        $this->_89 = $_89;

        return $this;
    }

    /**
     * Get 89
     *
     * @return string
     */
    public function get89()
    {
        return $this->_89;
    }

    /**
     * Set 90
     *
     * @param string $_90
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set90($_90)
    {
        $this->_90 = $_90;

        return $this;
    }

    /**
     * Get 90
     *
     * @return string
     */
    public function get90()
    {
        return $this->_90;
    }

    /**
     * Set 91
     *
     * @param string $_91
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set91($_91)
    {
        $this->_91 = $_91;

        return $this;
    }

    /**
     * Get 91
     *
     * @return string
     */
    public function get91()
    {
        return $this->_91;
    }

    /**
     * Set 92
     *
     * @param string $_92
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set92($_92)
    {
        $this->_92 = $_92;

        return $this;
    }

    /**
     * Get 92
     *
     * @return string
     */
    public function get92()
    {
        return $this->_92;
    }

    /**
     * Set 93
     *
     * @param string $_93
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set93($_93)
    {
        $this->_93 = $_93;

        return $this;
    }

    /**
     * Get 93
     *
     * @return string
     */
    public function get93()
    {
        return $this->_93;
    }

    /**
     * Set 94
     *
     * @param string $_94
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set94($_94)
    {
        $this->_94 = $_94;

        return $this;
    }

    /**
     * Get 94
     *
     * @return string
     */
    public function get94()
    {
        return $this->_94;
    }

    /**
     * Set 95
     *
     * @param string $_95
     *
     * @return syntaxonRepartitionDepFr
     */
    public function set95($_95)
    {
        $this->_95 = $_95;

        return $this;
    }

    /**
     * Get 95
     *
     * @return string
     */
    public function get95()
    {
        return $this->_95;
    }

    /**
    * Get the list of all french departments
    */
    public static function getListDepFr()
    {
        return array(
            '01' => 'Ain',
            '02' => 'Aisne',
            '03' => 'Allier',
            '04' => 'Alpes-de-Haute-Provence',
            '05' => 'Hautes-Alpes',
            '06' => 'Alpes-Maritimes',
            '07' => 'Ardèche',
            '08' => 'Ardennes',
            '09' => 'Ariège',
            '10' => 'Aube',
            '11' => 'Aude',
            '12' => 'Aveyron',
            '13' => 'Bouches-du-Rhône',
            '14' => 'Calvados',
            '15' => 'Cantal',
            '16' => 'Charente',
            '17' => 'Charente-Maritime',
            '18' => 'Cher',
            '19' => 'Corrèze',
            '20' => 'Corse',
            '21' => "Côte-d'Or",
            '22' => "Côtes d'Armor",
            '23' => 'Creuse',
            '24' => 'Dordogne',
            '25' => 'Doubs',
            '26' => 'Drôme',
            '27' => 'Eure',
            '28' => 'Eure-et-Loir',
            '29' => 'Finistère',
            '30' => 'Gard',
            '31' => 'Haute-Garonne',
            '32' => 'Gers',
            '33' => 'Gironde',
            '34' => 'Hérault',
            '35' => 'Ille-et-Vilaine',
            '36' => 'Indre',
            '37' => 'Indre-et-Loire',
            '38' => 'Isère',
            '39' => 'Jura',
            '40' => 'Landes',
            '41' => 'Loir-et-Cher',
            '42' => 'Loire',
            '43' => 'Haute-Loire',
            '44' => 'Loire-Atlantique',
            '45' => 'Loiret',
            '46' => 'Lot',
            '47' => 'Lot-et-Garonne',
            '48' => 'Lozère',
            '49' => 'Maine-et-Loire',
            '50' => 'Manche',
            '51' => 'Marne',
            '52' => 'Haute-Marne',
            '53' => 'Mayenne',
            '54' => 'Meurthe-et-Moselle',
            '55' => 'Meuse',
            '56' => 'Morbihan',
            '57' => 'Moselle',
            '58' => 'Nièvre',
            '59' => 'Nord',
            '60' => 'Oise',
            '61' => 'Orne',
            '62' => 'Pas-de-Calais',
            '63' => 'Puy-de-Dôme',
            '64' => 'Pyrénées-Atlantiques',
            '65' => 'Hautes-Pyrénées',
            '66' => 'Pyrénées orientales',
            '67' => 'Bas-Rhin',
            '68' => 'Haut-Rhin',
            '69' => 'Rhône',
            '70' => 'Haute-Saône',
            '71' => 'Saône-et-Loire',
            '72' => 'Sarthe',
            '73' => 'Savoie',
            '74' => 'Haute-Savoie',
            '75' => 'Paris',
            '76' => 'Seine-Maritime',
            '77' => 'Seine-et-Marne',
            '78' => 'Yvelines',
            '79' => 'Deux-Sèvres',
            '80' => 'Somme',
            '81' => 'Tarn',
            '82' => 'Tarn-et-Garonne',
            '83' => 'Var',
            '84' => 'Vaucluse',
            '85' => 'Vendée',
            '86' => 'Vienne',
            '87' => 'Haute-Vienne',
            '88' => 'Vosges',
            '89' => 'Yonne',
            '90' => 'Territoire de Belfort',
            '91' => 'Essonne',
            '92' => 'Hauts-de-Seine',
            '93' => 'Seine-Saint-Denis',
            '94' => 'Val-de-Marne',
            '95' => "Val d'Oise"
        );
    }
}

