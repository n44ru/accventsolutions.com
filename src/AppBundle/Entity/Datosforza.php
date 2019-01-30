<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datosforza
 *
 * @ORM\Table(name="datosforza", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"}), @ORM\UniqueConstraint(name="f14", columns={"f14"})}, indexes={@ORM\Index(name="FKDatosForza402103", columns={"Productosid"})})
 * @ORM\Entity
 */
class Datosforza
{
    /**
     * @var string
     *
     * @ORM\Column(name="f1", type="string", length=255, nullable=true)
     */
    private $f1;

    /**
     * @var string
     *
     * @ORM\Column(name="f2", type="string", length=255, nullable=true)
     */
    private $f2;

    /**
     * @var string
     *
     * @ORM\Column(name="f3", type="string", length=255, nullable=true)
     */
    private $f3;

    /**
     * @var string
     *
     * @ORM\Column(name="f4", type="string", length=255, nullable=true)
     */
    private $f4;

    /**
     * @var string
     *
     * @ORM\Column(name="f5", type="string", length=255, nullable=true)
     */
    private $f5;

    /**
     * @var string
     *
     * @ORM\Column(name="f6", type="string", length=255, nullable=true)
     */
    private $f6;

    /**
     * @var string
     *
     * @ORM\Column(name="f7", type="string", length=255, nullable=true)
     */
    private $f7;

    /**
     * @var string
     *
     * @ORM\Column(name="f8", type="string", length=255, nullable=true)
     */
    private $f8;

    /**
     * @var string
     *
     * @ORM\Column(name="f9", type="string", length=255, nullable=true)
     */
    private $f9;

    /**
     * @var string
     *
     * @ORM\Column(name="f10", type="string", length=255, nullable=true)
     */
    private $f10;

    /**
     * @var string
     *
     * @ORM\Column(name="f11", type="string", length=255, nullable=true)
     */
    private $f11;

    /**
     * @var string
     *
     * @ORM\Column(name="f12", type="string", length=255, nullable=true)
     */
    private $f12;

    /**
     * @var string
     *
     * @ORM\Column(name="f13", type="string", length=255, nullable=true)
     */
    private $f13;

    /**
     * @var string
     *
     * @ORM\Column(name="f14", type="string", length=255, nullable=true)
     */
    private $f14;

    /**
     * @var string
     *
     * @ORM\Column(name="f15", type="string", length=255, nullable=true)
     */
    private $f15;

    /**
     * @var string
     *
     * @ORM\Column(name="f16", type="string", length=255, nullable=true)
     */
    private $f16;

    /**
     * @var string
     *
     * @ORM\Column(name="f17", type="string", length=255, nullable=true)
     */
    private $f17;

    /**
     * @var string
     *
     * @ORM\Column(name="f18", type="string", length=255, nullable=true)
     */
    private $f18;

    /**
     * @var string
     *
     * @ORM\Column(name="f19", type="string", length=255, nullable=true)
     */
    private $f19;

    /**
     * @var string
     *
     * @ORM\Column(name="f20", type="string", length=255, nullable=true)
     */
    private $f20;

    /**
     * @var string
     *
     * @ORM\Column(name="f21", type="string", length=255, nullable=true)
     */
    private $f21;

    /**
     * @var string
     *
     * @ORM\Column(name="f22", type="string", length=255, nullable=true)
     */
    private $f22;

    /**
     * @var string
     *
     * @ORM\Column(name="f23", type="string", length=255, nullable=true)
     */
    private $f23;

    /**
     * @var string
     *
     * @ORM\Column(name="f24", type="string", length=255, nullable=true)
     */
    private $f24;

    /**
     * @var string
     *
     * @ORM\Column(name="f25", type="string", length=255, nullable=true)
     */
    private $f25;

    /**
     * @var string
     *
     * @ORM\Column(name="f26", type="string", length=255, nullable=true)
     */
    private $f26;

    /**
     * @var string
     *
     * @ORM\Column(name="f27", type="string", length=255, nullable=true)
     */
    private $f27;

    /**
     * @var string
     *
     * @ORM\Column(name="f28", type="string", length=255, nullable=true)
     */
    private $f28;

    /**
     * @var string
     *
     * @ORM\Column(name="f29", type="string", length=255, nullable=true)
     */
    private $f29;

    /**
     * @var string
     *
     * @ORM\Column(name="f30", type="string", length=255, nullable=true)
     */
    private $f30;

    /**
     * @var string
     *
     * @ORM\Column(name="f31", type="string", length=255, nullable=true)
     */
    private $f31;

    /**
     * @var string
     *
     * @ORM\Column(name="f32", type="string", length=255, nullable=true)
     */
    private $f32;

    /**
     * @var string
     *
     * @ORM\Column(name="f33", type="string", length=255, nullable=true)
     */
    private $f33;

    /**
     * @var string
     *
     * @ORM\Column(name="f34", type="string", length=255, nullable=true)
     */
    private $f34;

    /**
     * @var string
     *
     * @ORM\Column(name="f35", type="string", length=255, nullable=true)
     */
    private $f35;

    /**
     * @var string
     *
     * @ORM\Column(name="f36", type="string", length=255, nullable=true)
     */
    private $f36;

    /**
     * @var string
     *
     * @ORM\Column(name="f37", type="string", length=255, nullable=true)
     */
    private $f37;

    /**
     * @var string
     *
     * @ORM\Column(name="f38", type="string", length=255, nullable=true)
     */
    private $f38;

    /**
     * @var string
     *
     * @ORM\Column(name="f39", type="string", length=255, nullable=true)
     */
    private $f39;

    /**
     * @var string
     *
     * @ORM\Column(name="f40", type="string", length=255, nullable=true)
     */
    private $f40;

    /**
     * @var string
     *
     * @ORM\Column(name="f41", type="string", length=255, nullable=true)
     */
    private $f41;

    /**
     * @var string
     *
     * @ORM\Column(name="f42", type="string", length=255, nullable=true)
     */
    private $f42;

    /**
     * @var string
     *
     * @ORM\Column(name="f43", type="string", length=255, nullable=true)
     */
    private $f43;

    /**
     * @var string
     *
     * @ORM\Column(name="f44", type="string", length=255, nullable=true)
     */
    private $f44;

    /**
     * @var string
     *
     * @ORM\Column(name="f45", type="string", length=255, nullable=true)
     */
    private $f45;

    /**
     * @var string
     *
     * @ORM\Column(name="f46", type="string", length=255, nullable=true)
     */
    private $f46;

    /**
     * @var string
     *
     * @ORM\Column(name="f47", type="string", length=255, nullable=true)
     */
    private $f47;

    /**
     * @var string
     *
     * @ORM\Column(name="f48", type="string", length=255, nullable=true)
     */
    private $f48;

    /**
     * @var string
     *
     * @ORM\Column(name="f49", type="string", length=255, nullable=true)
     */
    private $f49;

    /**
     * @var string
     *
     * @ORM\Column(name="f50", type="string", length=255, nullable=true)
     */
    private $f50;

    /**
     * @var string
     *
     * @ORM\Column(name="f51", type="string", length=255, nullable=true)
     */
    private $f51;

    /**
     * @var string
     *
     * @ORM\Column(name="f52", type="string", length=255, nullable=true)
     */
    private $f52;

    /**
     * @var string
     *
     * @ORM\Column(name="f53", type="string", length=255, nullable=true)
     */
    private $f53;

    /**
     * @var string
     *
     * @ORM\Column(name="f54", type="string", length=255, nullable=true)
     */
    private $f54;

    /**
     * @var string
     *
     * @ORM\Column(name="f55", type="string", length=255, nullable=true)
     */
    private $f55;

    /**
     * @var string
     *
     * @ORM\Column(name="f56", type="string", length=255, nullable=true)
     */
    private $f56;

    /**
     * @var string
     *
     * @ORM\Column(name="f57", type="string", length=255, nullable=true)
     */
    private $f57;

    /**
     * @var string
     *
     * @ORM\Column(name="f58", type="string", length=255, nullable=true)
     */
    private $f58;

    /**
     * @var string
     *
     * @ORM\Column(name="f59", type="string", length=255, nullable=true)
     */
    private $f59;

    /**
     * @var string
     *
     * @ORM\Column(name="f60", type="string", length=255, nullable=true)
     */
    private $f60;

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
     * Set f1
     *
     * @param string $f1
     * @return Datosforza
     */
    public function setF1($f1)
    {
        $this->f1 = $f1;

        return $this;
    }

    /**
     * Get f1
     *
     * @return string 
     */
    public function getF1()
    {
        return $this->f1;
    }

    /**
     * Set f2
     *
     * @param string $f2
     * @return Datosforza
     */
    public function setF2($f2)
    {
        $this->f2 = $f2;

        return $this;
    }

    /**
     * Get f2
     *
     * @return string 
     */
    public function getF2()
    {
        return $this->f2;
    }

    /**
     * Set f3
     *
     * @param string $f3
     * @return Datosforza
     */
    public function setF3($f3)
    {
        $this->f3 = $f3;

        return $this;
    }

    /**
     * Get f3
     *
     * @return string 
     */
    public function getF3()
    {
        return $this->f3;
    }

    /**
     * Set f4
     *
     * @param string $f4
     * @return Datosforza
     */
    public function setF4($f4)
    {
        $this->f4 = $f4;

        return $this;
    }

    /**
     * Get f4
     *
     * @return string 
     */
    public function getF4()
    {
        return $this->f4;
    }

    /**
     * Set f5
     *
     * @param string $f5
     * @return Datosforza
     */
    public function setF5($f5)
    {
        $this->f5 = $f5;

        return $this;
    }

    /**
     * Get f5
     *
     * @return string 
     */
    public function getF5()
    {
        return $this->f5;
    }

    /**
     * Set f6
     *
     * @param string $f6
     * @return Datosforza
     */
    public function setF6($f6)
    {
        $this->f6 = $f6;

        return $this;
    }

    /**
     * Get f6
     *
     * @return string 
     */
    public function getF6()
    {
        return $this->f6;
    }

    /**
     * Set f7
     *
     * @param string $f7
     * @return Datosforza
     */
    public function setF7($f7)
    {
        $this->f7 = $f7;

        return $this;
    }

    /**
     * Get f7
     *
     * @return string 
     */
    public function getF7()
    {
        return $this->f7;
    }

    /**
     * Set f8
     *
     * @param string $f8
     * @return Datosforza
     */
    public function setF8($f8)
    {
        $this->f8 = $f8;

        return $this;
    }

    /**
     * Get f8
     *
     * @return string 
     */
    public function getF8()
    {
        return $this->f8;
    }

    /**
     * Set f9
     *
     * @param string $f9
     * @return Datosforza
     */
    public function setF9($f9)
    {
        $this->f9 = $f9;

        return $this;
    }

    /**
     * Get f9
     *
     * @return string 
     */
    public function getF9()
    {
        return $this->f9;
    }

    /**
     * Set f10
     *
     * @param string $f10
     * @return Datosforza
     */
    public function setF10($f10)
    {
        $this->f10 = $f10;

        return $this;
    }

    /**
     * Get f10
     *
     * @return string 
     */
    public function getF10()
    {
        return $this->f10;
    }

    /**
     * Set f11
     *
     * @param string $f11
     * @return Datosforza
     */
    public function setF11($f11)
    {
        $this->f11 = $f11;

        return $this;
    }

    /**
     * Get f11
     *
     * @return string 
     */
    public function getF11()
    {
        return $this->f11;
    }

    /**
     * Set f12
     *
     * @param string $f12
     * @return Datosforza
     */
    public function setF12($f12)
    {
        $this->f12 = $f12;

        return $this;
    }

    /**
     * Get f12
     *
     * @return string 
     */
    public function getF12()
    {
        return $this->f12;
    }

    /**
     * Set f13
     *
     * @param string $f13
     * @return Datosforza
     */
    public function setF13($f13)
    {
        $this->f13 = $f13;

        return $this;
    }

    /**
     * Get f13
     *
     * @return string 
     */
    public function getF13()
    {
        return $this->f13;
    }

    /**
     * Set f14
     *
     * @param string $f14
     * @return Datosforza
     */
    public function setF14($f14)
    {
        $this->f14 = $f14;

        return $this;
    }

    /**
     * Get f14
     *
     * @return string 
     */
    public function getF14()
    {
        return $this->f14;
    }

    /**
     * Set f15
     *
     * @param string $f15
     * @return Datosforza
     */
    public function setF15($f15)
    {
        $this->f15 = $f15;

        return $this;
    }

    /**
     * Get f15
     *
     * @return string 
     */
    public function getF15()
    {
        return $this->f15;
    }

    /**
     * Set f16
     *
     * @param string $f16
     * @return Datosforza
     */
    public function setF16($f16)
    {
        $this->f16 = $f16;

        return $this;
    }

    /**
     * Get f16
     *
     * @return string 
     */
    public function getF16()
    {
        return $this->f16;
    }

    /**
     * Set f17
     *
     * @param string $f17
     * @return Datosforza
     */
    public function setF17($f17)
    {
        $this->f17 = $f17;

        return $this;
    }

    /**
     * Get f17
     *
     * @return string 
     */
    public function getF17()
    {
        return $this->f17;
    }

    /**
     * Set f18
     *
     * @param string $f18
     * @return Datosforza
     */
    public function setF18($f18)
    {
        $this->f18 = $f18;

        return $this;
    }

    /**
     * Get f18
     *
     * @return string 
     */
    public function getF18()
    {
        return $this->f18;
    }

    /**
     * Set f19
     *
     * @param string $f19
     * @return Datosforza
     */
    public function setF19($f19)
    {
        $this->f19 = $f19;

        return $this;
    }

    /**
     * Get f19
     *
     * @return string 
     */
    public function getF19()
    {
        return $this->f19;
    }

    /**
     * Set f20
     *
     * @param string $f20
     * @return Datosforza
     */
    public function setF20($f20)
    {
        $this->f20 = $f20;

        return $this;
    }

    /**
     * Get f20
     *
     * @return string 
     */
    public function getF20()
    {
        return $this->f20;
    }

    /**
     * Set f21
     *
     * @param string $f21
     * @return Datosforza
     */
    public function setF21($f21)
    {
        $this->f21 = $f21;

        return $this;
    }

    /**
     * Get f21
     *
     * @return string 
     */
    public function getF21()
    {
        return $this->f21;
    }

    /**
     * Set f22
     *
     * @param string $f22
     * @return Datosforza
     */
    public function setF22($f22)
    {
        $this->f22 = $f22;

        return $this;
    }

    /**
     * Get f22
     *
     * @return string 
     */
    public function getF22()
    {
        return $this->f22;
    }

    /**
     * Set f23
     *
     * @param string $f23
     * @return Datosforza
     */
    public function setF23($f23)
    {
        $this->f23 = $f23;

        return $this;
    }

    /**
     * Get f23
     *
     * @return string 
     */
    public function getF23()
    {
        return $this->f23;
    }

    /**
     * Set f24
     *
     * @param string $f24
     * @return Datosforza
     */
    public function setF24($f24)
    {
        $this->f24 = $f24;

        return $this;
    }

    /**
     * Get f24
     *
     * @return string 
     */
    public function getF24()
    {
        return $this->f24;
    }

    /**
     * Set f25
     *
     * @param string $f25
     * @return Datosforza
     */
    public function setF25($f25)
    {
        $this->f25 = $f25;

        return $this;
    }

    /**
     * Get f25
     *
     * @return string 
     */
    public function getF25()
    {
        return $this->f25;
    }

    /**
     * Set f26
     *
     * @param string $f26
     * @return Datosforza
     */
    public function setF26($f26)
    {
        $this->f26 = $f26;

        return $this;
    }

    /**
     * Get f26
     *
     * @return string 
     */
    public function getF26()
    {
        return $this->f26;
    }

    /**
     * Set f27
     *
     * @param string $f27
     * @return Datosforza
     */
    public function setF27($f27)
    {
        $this->f27 = $f27;

        return $this;
    }

    /**
     * Get f27
     *
     * @return string 
     */
    public function getF27()
    {
        return $this->f27;
    }

    /**
     * Set f28
     *
     * @param string $f28
     * @return Datosforza
     */
    public function setF28($f28)
    {
        $this->f28 = $f28;

        return $this;
    }

    /**
     * Get f28
     *
     * @return string 
     */
    public function getF28()
    {
        return $this->f28;
    }

    /**
     * Set f29
     *
     * @param string $f29
     * @return Datosforza
     */
    public function setF29($f29)
    {
        $this->f29 = $f29;

        return $this;
    }

    /**
     * Get f29
     *
     * @return string 
     */
    public function getF29()
    {
        return $this->f29;
    }

    /**
     * Set f30
     *
     * @param string $f30
     * @return Datosforza
     */
    public function setF30($f30)
    {
        $this->f30 = $f30;

        return $this;
    }

    /**
     * Get f30
     *
     * @return string 
     */
    public function getF30()
    {
        return $this->f30;
    }

    /**
     * Set f31
     *
     * @param string $f31
     * @return Datosforza
     */
    public function setF31($f31)
    {
        $this->f31 = $f31;

        return $this;
    }

    /**
     * Get f31
     *
     * @return string 
     */
    public function getF31()
    {
        return $this->f31;
    }

    /**
     * Set f32
     *
     * @param string $f32
     * @return Datosforza
     */
    public function setF32($f32)
    {
        $this->f32 = $f32;

        return $this;
    }

    /**
     * Get f32
     *
     * @return string 
     */
    public function getF32()
    {
        return $this->f32;
    }

    /**
     * Set f33
     *
     * @param string $f33
     * @return Datosforza
     */
    public function setF33($f33)
    {
        $this->f33 = $f33;

        return $this;
    }

    /**
     * Get f33
     *
     * @return string 
     */
    public function getF33()
    {
        return $this->f33;
    }

    /**
     * Set f34
     *
     * @param string $f34
     * @return Datosforza
     */
    public function setF34($f34)
    {
        $this->f34 = $f34;

        return $this;
    }

    /**
     * Get f34
     *
     * @return string 
     */
    public function getF34()
    {
        return $this->f34;
    }

    /**
     * Set f35
     *
     * @param string $f35
     * @return Datosforza
     */
    public function setF35($f35)
    {
        $this->f35 = $f35;

        return $this;
    }

    /**
     * Get f35
     *
     * @return string 
     */
    public function getF35()
    {
        return $this->f35;
    }

    /**
     * Set f36
     *
     * @param string $f36
     * @return Datosforza
     */
    public function setF36($f36)
    {
        $this->f36 = $f36;

        return $this;
    }

    /**
     * Get f36
     *
     * @return string 
     */
    public function getF36()
    {
        return $this->f36;
    }

    /**
     * Set f37
     *
     * @param string $f37
     * @return Datosforza
     */
    public function setF37($f37)
    {
        $this->f37 = $f37;

        return $this;
    }

    /**
     * Get f37
     *
     * @return string 
     */
    public function getF37()
    {
        return $this->f37;
    }

    /**
     * Set f38
     *
     * @param string $f38
     * @return Datosforza
     */
    public function setF38($f38)
    {
        $this->f38 = $f38;

        return $this;
    }

    /**
     * Get f38
     *
     * @return string 
     */
    public function getF38()
    {
        return $this->f38;
    }

    /**
     * Set f39
     *
     * @param string $f39
     * @return Datosforza
     */
    public function setF39($f39)
    {
        $this->f39 = $f39;

        return $this;
    }

    /**
     * Get f39
     *
     * @return string 
     */
    public function getF39()
    {
        return $this->f39;
    }

    /**
     * Set f40
     *
     * @param string $f40
     * @return Datosforza
     */
    public function setF40($f40)
    {
        $this->f40 = $f40;

        return $this;
    }

    /**
     * Get f40
     *
     * @return string 
     */
    public function getF40()
    {
        return $this->f40;
    }

    /**
     * Set f41
     *
     * @param string $f41
     * @return Datosforza
     */
    public function setF41($f41)
    {
        $this->f41 = $f41;

        return $this;
    }

    /**
     * Get f41
     *
     * @return string 
     */
    public function getF41()
    {
        return $this->f41;
    }

    /**
     * Set f42
     *
     * @param string $f42
     * @return Datosforza
     */
    public function setF42($f42)
    {
        $this->f42 = $f42;

        return $this;
    }

    /**
     * Get f42
     *
     * @return string 
     */
    public function getF42()
    {
        return $this->f42;
    }

    /**
     * Set f43
     *
     * @param string $f43
     * @return Datosforza
     */
    public function setF43($f43)
    {
        $this->f43 = $f43;

        return $this;
    }

    /**
     * Get f43
     *
     * @return string 
     */
    public function getF43()
    {
        return $this->f43;
    }

    /**
     * Set f44
     *
     * @param string $f44
     * @return Datosforza
     */
    public function setF44($f44)
    {
        $this->f44 = $f44;

        return $this;
    }

    /**
     * Get f44
     *
     * @return string 
     */
    public function getF44()
    {
        return $this->f44;
    }

    /**
     * Set f45
     *
     * @param string $f45
     * @return Datosforza
     */
    public function setF45($f45)
    {
        $this->f45 = $f45;

        return $this;
    }

    /**
     * Get f45
     *
     * @return string 
     */
    public function getF45()
    {
        return $this->f45;
    }

    /**
     * Set f46
     *
     * @param string $f46
     * @return Datosforza
     */
    public function setF46($f46)
    {
        $this->f46 = $f46;

        return $this;
    }

    /**
     * Get f46
     *
     * @return string 
     */
    public function getF46()
    {
        return $this->f46;
    }

    /**
     * Set f47
     *
     * @param string $f47
     * @return Datosforza
     */
    public function setF47($f47)
    {
        $this->f47 = $f47;

        return $this;
    }

    /**
     * Get f47
     *
     * @return string 
     */
    public function getF47()
    {
        return $this->f47;
    }

    /**
     * Set f48
     *
     * @param string $f48
     * @return Datosforza
     */
    public function setF48($f48)
    {
        $this->f48 = $f48;

        return $this;
    }

    /**
     * Get f48
     *
     * @return string 
     */
    public function getF48()
    {
        return $this->f48;
    }

    /**
     * Set f49
     *
     * @param string $f49
     * @return Datosforza
     */
    public function setF49($f49)
    {
        $this->f49 = $f49;

        return $this;
    }

    /**
     * Get f49
     *
     * @return string 
     */
    public function getF49()
    {
        return $this->f49;
    }

    /**
     * Set f50
     *
     * @param string $f50
     * @return Datosforza
     */
    public function setF50($f50)
    {
        $this->f50 = $f50;

        return $this;
    }

    /**
     * Get f50
     *
     * @return string 
     */
    public function getF50()
    {
        return $this->f50;
    }

    /**
     * Set f51
     *
     * @param string $f51
     * @return Datosforza
     */
    public function setF51($f51)
    {
        $this->f51 = $f51;

        return $this;
    }

    /**
     * Get f51
     *
     * @return string 
     */
    public function getF51()
    {
        return $this->f51;
    }

    /**
     * Set f52
     *
     * @param string $f52
     * @return Datosforza
     */
    public function setF52($f52)
    {
        $this->f52 = $f52;

        return $this;
    }

    /**
     * Get f52
     *
     * @return string 
     */
    public function getF52()
    {
        return $this->f52;
    }

    /**
     * Set f53
     *
     * @param string $f53
     * @return Datosforza
     */
    public function setF53($f53)
    {
        $this->f53 = $f53;

        return $this;
    }

    /**
     * Get f53
     *
     * @return string 
     */
    public function getF53()
    {
        return $this->f53;
    }

    /**
     * Set f54
     *
     * @param string $f54
     * @return Datosforza
     */
    public function setF54($f54)
    {
        $this->f54 = $f54;

        return $this;
    }

    /**
     * Get f54
     *
     * @return string 
     */
    public function getF54()
    {
        return $this->f54;
    }

    /**
     * Set f55
     *
     * @param string $f55
     * @return Datosforza
     */
    public function setF55($f55)
    {
        $this->f55 = $f55;

        return $this;
    }

    /**
     * Get f55
     *
     * @return string 
     */
    public function getF55()
    {
        return $this->f55;
    }

    /**
     * Set f56
     *
     * @param string $f56
     * @return Datosforza
     */
    public function setF56($f56)
    {
        $this->f56 = $f56;

        return $this;
    }

    /**
     * Get f56
     *
     * @return string 
     */
    public function getF56()
    {
        return $this->f56;
    }

    /**
     * Set f57
     *
     * @param string $f57
     * @return Datosforza
     */
    public function setF57($f57)
    {
        $this->f57 = $f57;

        return $this;
    }

    /**
     * Get f57
     *
     * @return string 
     */
    public function getF57()
    {
        return $this->f57;
    }

    /**
     * Set f58
     *
     * @param string $f58
     * @return Datosforza
     */
    public function setF58($f58)
    {
        $this->f58 = $f58;

        return $this;
    }

    /**
     * Get f58
     *
     * @return string 
     */
    public function getF58()
    {
        return $this->f58;
    }

    /**
     * Set f59
     *
     * @param string $f59
     * @return Datosforza
     */
    public function setF59($f59)
    {
        $this->f59 = $f59;

        return $this;
    }

    /**
     * Get f59
     *
     * @return string 
     */
    public function getF59()
    {
        return $this->f59;
    }

    /**
     * Set f60
     *
     * @param string $f60
     * @return Datosforza
     */
    public function setF60($f60)
    {
        $this->f60 = $f60;

        return $this;
    }

    /**
     * Get f60
     *
     * @return string 
     */
    public function getF60()
    {
        return $this->f60;
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
     * @return Datosforza
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
