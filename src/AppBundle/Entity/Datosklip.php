<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datosklip
 *
 * @ORM\Table(name="datosklip", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FKDatosKlip122292", columns={"Productosid"})})
 * @ORM\Entity
 */
class Datosklip
{
    /**
     * @var string
     *
     * @ORM\Column(name="k1", type="string", length=255, nullable=true)
     */
    private $k1;

    /**
     * @var string
     *
     * @ORM\Column(name="k2", type="string", length=255, nullable=true)
     */
    private $k2;

    /**
     * @var string
     *
     * @ORM\Column(name="k3", type="string", length=255, nullable=true)
     */
    private $k3;

    /**
     * @var string
     *
     * @ORM\Column(name="k4", type="string", length=255, nullable=true)
     */
    private $k4;

    /**
     * @var string
     *
     * @ORM\Column(name="k5", type="string", length=255, nullable=true)
     */
    private $k5;

    /**
     * @var string
     *
     * @ORM\Column(name="k6", type="string", length=255, nullable=true)
     */
    private $k6;

    /**
     * @var string
     *
     * @ORM\Column(name="k7", type="string", length=255, nullable=true)
     */
    private $k7;

    /**
     * @var string
     *
     * @ORM\Column(name="k8", type="string", length=255, nullable=true)
     */
    private $k8;

    /**
     * @var string
     *
     * @ORM\Column(name="k9", type="string", length=255, nullable=true)
     */
    private $k9;

    /**
     * @var string
     *
     * @ORM\Column(name="k10", type="string", length=255, nullable=true)
     */
    private $k10;

    /**
     * @var string
     *
     * @ORM\Column(name="k11", type="string", length=255, nullable=true)
     */
    private $k11;

    /**
     * @var string
     *
     * @ORM\Column(name="k12", type="string", length=255, nullable=true)
     */
    private $k12;

    /**
     * @var string
     *
     * @ORM\Column(name="k13", type="string", length=255, nullable=true)
     */
    private $k13;

    /**
     * @var string
     *
     * @ORM\Column(name="k14", type="string", length=255, nullable=true)
     */
    private $k14;

    /**
     * @var string
     *
     * @ORM\Column(name="k15", type="string", length=255, nullable=true)
     */
    private $k15;

    /**
     * @var string
     *
     * @ORM\Column(name="k16", type="string", length=255, nullable=true)
     */
    private $k16;

    /**
     * @var string
     *
     * @ORM\Column(name="k17", type="string", length=255, nullable=true)
     */
    private $k17;

    /**
     * @var string
     *
     * @ORM\Column(name="k18", type="string", length=255, nullable=true)
     */
    private $k18;

    /**
     * @var string
     *
     * @ORM\Column(name="k19", type="string", length=255, nullable=true)
     */
    private $k19;

    /**
     * @var string
     *
     * @ORM\Column(name="k20", type="string", length=255, nullable=true)
     */
    private $k20;

    /**
     * @var string
     *
     * @ORM\Column(name="k21", type="string", length=255, nullable=true)
     */
    private $k21;

    /**
     * @var string
     *
     * @ORM\Column(name="k22", type="string", length=255, nullable=true)
     */
    private $k22;

    /**
     * @var string
     *
     * @ORM\Column(name="k23", type="string", length=255, nullable=true)
     */
    private $k23;

    /**
     * @var string
     *
     * @ORM\Column(name="k24", type="string", length=255, nullable=true)
     */
    private $k24;

    /**
     * @var string
     *
     * @ORM\Column(name="k25", type="string", length=255, nullable=true)
     */
    private $k25;

    /**
     * @var string
     *
     * @ORM\Column(name="k26", type="string", length=255, nullable=true)
     */
    private $k26;

    /**
     * @var string
     *
     * @ORM\Column(name="k27", type="string", length=255, nullable=true)
     */
    private $k27;

    /**
     * @var string
     *
     * @ORM\Column(name="k28", type="string", length=255, nullable=true)
     */
    private $k28;

    /**
     * @var string
     *
     * @ORM\Column(name="k29", type="string", length=255, nullable=true)
     */
    private $k29;

    /**
     * @var string
     *
     * @ORM\Column(name="k30", type="string", length=255, nullable=true)
     */
    private $k30;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Productos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Productosid", referencedColumnName="id")
     * })
     */
    private $productosid;



    /**
     * Set k1
     *
     * @param string $k1
     * @return Datosklip
     */
    public function setK1($k1)
    {
        $this->k1 = $k1;

        return $this;
    }

    /**
     * Get k1
     *
     * @return string 
     */
    public function getK1()
    {
        return $this->k1;
    }

    /**
     * Set k2
     *
     * @param string $k2
     * @return Datosklip
     */
    public function setK2($k2)
    {
        $this->k2 = $k2;

        return $this;
    }

    /**
     * Get k2
     *
     * @return string 
     */
    public function getK2()
    {
        return $this->k2;
    }

    /**
     * Set k3
     *
     * @param string $k3
     * @return Datosklip
     */
    public function setK3($k3)
    {
        $this->k3 = $k3;

        return $this;
    }

    /**
     * Get k3
     *
     * @return string 
     */
    public function getK3()
    {
        return $this->k3;
    }

    /**
     * Set k4
     *
     * @param string $k4
     * @return Datosklip
     */
    public function setK4($k4)
    {
        $this->k4 = $k4;

        return $this;
    }

    /**
     * Get k4
     *
     * @return string 
     */
    public function getK4()
    {
        return $this->k4;
    }

    /**
     * Set k5
     *
     * @param string $k5
     * @return Datosklip
     */
    public function setK5($k5)
    {
        $this->k5 = $k5;

        return $this;
    }

    /**
     * Get k5
     *
     * @return string 
     */
    public function getK5()
    {
        return $this->k5;
    }

    /**
     * Set k6
     *
     * @param string $k6
     * @return Datosklip
     */
    public function setK6($k6)
    {
        $this->k6 = $k6;

        return $this;
    }

    /**
     * Get k6
     *
     * @return string 
     */
    public function getK6()
    {
        return $this->k6;
    }

    /**
     * Set k7
     *
     * @param string $k7
     * @return Datosklip
     */
    public function setK7($k7)
    {
        $this->k7 = $k7;

        return $this;
    }

    /**
     * Get k7
     *
     * @return string 
     */
    public function getK7()
    {
        return $this->k7;
    }

    /**
     * Set k8
     *
     * @param string $k8
     * @return Datosklip
     */
    public function setK8($k8)
    {
        $this->k8 = $k8;

        return $this;
    }

    /**
     * Get k8
     *
     * @return string 
     */
    public function getK8()
    {
        return $this->k8;
    }

    /**
     * Set k9
     *
     * @param string $k9
     * @return Datosklip
     */
    public function setK9($k9)
    {
        $this->k9 = $k9;

        return $this;
    }

    /**
     * Get k9
     *
     * @return string 
     */
    public function getK9()
    {
        return $this->k9;
    }

    /**
     * Set k10
     *
     * @param string $k10
     * @return Datosklip
     */
    public function setK10($k10)
    {
        $this->k10 = $k10;

        return $this;
    }

    /**
     * Get k10
     *
     * @return string 
     */
    public function getK10()
    {
        return $this->k10;
    }

    /**
     * Set k11
     *
     * @param string $k11
     * @return Datosklip
     */
    public function setK11($k11)
    {
        $this->k11 = $k11;

        return $this;
    }

    /**
     * Get k11
     *
     * @return string 
     */
    public function getK11()
    {
        return $this->k11;
    }

    /**
     * Set k12
     *
     * @param string $k12
     * @return Datosklip
     */
    public function setK12($k12)
    {
        $this->k12 = $k12;

        return $this;
    }

    /**
     * Get k12
     *
     * @return string 
     */
    public function getK12()
    {
        return $this->k12;
    }

    /**
     * Set k13
     *
     * @param string $k13
     * @return Datosklip
     */
    public function setK13($k13)
    {
        $this->k13 = $k13;

        return $this;
    }

    /**
     * Get k13
     *
     * @return string 
     */
    public function getK13()
    {
        return $this->k13;
    }

    /**
     * Set k14
     *
     * @param string $k14
     * @return Datosklip
     */
    public function setK14($k14)
    {
        $this->k14 = $k14;

        return $this;
    }

    /**
     * Get k14
     *
     * @return string 
     */
    public function getK14()
    {
        return $this->k14;
    }

    /**
     * Set k15
     *
     * @param string $k15
     * @return Datosklip
     */
    public function setK15($k15)
    {
        $this->k15 = $k15;

        return $this;
    }

    /**
     * Get k15
     *
     * @return string 
     */
    public function getK15()
    {
        return $this->k15;
    }

    /**
     * Set k16
     *
     * @param string $k16
     * @return Datosklip
     */
    public function setK16($k16)
    {
        $this->k16 = $k16;

        return $this;
    }

    /**
     * Get k16
     *
     * @return string 
     */
    public function getK16()
    {
        return $this->k16;
    }

    /**
     * Set k17
     *
     * @param string $k17
     * @return Datosklip
     */
    public function setK17($k17)
    {
        $this->k17 = $k17;

        return $this;
    }

    /**
     * Get k17
     *
     * @return string 
     */
    public function getK17()
    {
        return $this->k17;
    }

    /**
     * Set k18
     *
     * @param string $k18
     * @return Datosklip
     */
    public function setK18($k18)
    {
        $this->k18 = $k18;

        return $this;
    }

    /**
     * Get k18
     *
     * @return string 
     */
    public function getK18()
    {
        return $this->k18;
    }

    /**
     * Set k19
     *
     * @param string $k19
     * @return Datosklip
     */
    public function setK19($k19)
    {
        $this->k19 = $k19;

        return $this;
    }

    /**
     * Get k19
     *
     * @return string 
     */
    public function getK19()
    {
        return $this->k19;
    }

    /**
     * Set k20
     *
     * @param string $k20
     * @return Datosklip
     */
    public function setK20($k20)
    {
        $this->k20 = $k20;

        return $this;
    }

    /**
     * Get k20
     *
     * @return string 
     */
    public function getK20()
    {
        return $this->k20;
    }

    /**
     * Set k21
     *
     * @param string $k21
     * @return Datosklip
     */
    public function setK21($k21)
    {
        $this->k21 = $k21;

        return $this;
    }

    /**
     * Get k21
     *
     * @return string 
     */
    public function getK21()
    {
        return $this->k21;
    }

    /**
     * Set k22
     *
     * @param string $k22
     * @return Datosklip
     */
    public function setK22($k22)
    {
        $this->k22 = $k22;

        return $this;
    }

    /**
     * Get k22
     *
     * @return string 
     */
    public function getK22()
    {
        return $this->k22;
    }

    /**
     * Set k23
     *
     * @param string $k23
     * @return Datosklip
     */
    public function setK23($k23)
    {
        $this->k23 = $k23;

        return $this;
    }

    /**
     * Get k23
     *
     * @return string 
     */
    public function getK23()
    {
        return $this->k23;
    }

    /**
     * Set k24
     *
     * @param string $k24
     * @return Datosklip
     */
    public function setK24($k24)
    {
        $this->k24 = $k24;

        return $this;
    }

    /**
     * Get k24
     *
     * @return string 
     */
    public function getK24()
    {
        return $this->k24;
    }

    /**
     * Set k25
     *
     * @param string $k25
     * @return Datosklip
     */
    public function setK25($k25)
    {
        $this->k25 = $k25;

        return $this;
    }

    /**
     * Get k25
     *
     * @return string 
     */
    public function getK25()
    {
        return $this->k25;
    }

    /**
     * Set k26
     *
     * @param string $k26
     * @return Datosklip
     */
    public function setK26($k26)
    {
        $this->k26 = $k26;

        return $this;
    }

    /**
     * Get k26
     *
     * @return string 
     */
    public function getK26()
    {
        return $this->k26;
    }

    /**
     * Set k27
     *
     * @param string $k27
     * @return Datosklip
     */
    public function setK27($k27)
    {
        $this->k27 = $k27;

        return $this;
    }

    /**
     * Get k27
     *
     * @return string 
     */
    public function getK27()
    {
        return $this->k27;
    }

    /**
     * Set k28
     *
     * @param string $k28
     * @return Datosklip
     */
    public function setK28($k28)
    {
        $this->k28 = $k28;

        return $this;
    }

    /**
     * Get k28
     *
     * @return string 
     */
    public function getK28()
    {
        return $this->k28;
    }

    /**
     * Set k29
     *
     * @param string $k29
     * @return Datosklip
     */
    public function setK29($k29)
    {
        $this->k29 = $k29;

        return $this;
    }

    /**
     * Get k29
     *
     * @return string 
     */
    public function getK29()
    {
        return $this->k29;
    }

    /**
     * Set k30
     *
     * @param string $k30
     * @return Datosklip
     */
    public function setK30($k30)
    {
        $this->k30 = $k30;

        return $this;
    }

    /**
     * Get k30
     *
     * @return string 
     */
    public function getK30()
    {
        return $this->k30;
    }

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
     * Set productosid
     *
     * @param \AppBundle\Entity\Productos $productosid
     * @return Datosklip
     */
    public function setProductosid(\AppBundle\Entity\Productos $productosid = null)
    {
        $this->productosid = $productosid;

        return $this;
    }

    /**
     * Get productosid
     *
     * @return \AppBundle\Entity\Productos 
     */
    public function getProductosid()
    {
        return $this->productosid;
    }
}
