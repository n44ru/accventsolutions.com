<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ayudaproductos
 *
 * @ORM\Table(name="ayudaproductos", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FKAyudaProdu908102", columns={"Productosid"})})
 * @ORM\Entity
 */
class Ayudaproductos
{
    /**
     * @var string
     *
     * @ORM\Column(name="sistemas", type="string", length=150, nullable=true)
     */
    private $sistemas;

    /**
     * @var string
     *
     * @ORM\Column(name="tipodeproblema", type="string", length=255, nullable=true)
     */
    private $tipodeproblema;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=255, nullable=true)
     */
    private $pdf;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf2", type="string", length=255, nullable=true)
     */
    private $pdf2;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf3", type="string", length=255, nullable=true)
     */
    private $pdf3;

    /**
     * @var string
     *
     * @ORM\Column(name="drivers", type="string", length=255, nullable=true)
     */
    private $drivers;

    /**
     * @var string
     *
     * @ORM\Column(name="drivers2", type="string", length=255, nullable=true)
     */
    private $drivers2;

    /**
     * @var string
     *
     * @ORM\Column(name="drivers3", type="string", length=255, nullable=true)
     */
    private $drivers3;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string", length=255, nullable=true)
     */
    private $comentarios;

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
     * Set sistemas
     *
     * @param string $sistemas
     * @return Ayudaproductos
     */
    public function setSistemas($sistemas)
    {
        $this->sistemas = $sistemas;

        return $this;
    }

    /**
     * Get sistemas
     *
     * @return string 
     */
    public function getSistemas()
    {
        return $this->sistemas;
    }

    /**
     * Set tipodeproblema
     *
     * @param string $tipodeproblema
     * @return Ayudaproductos
     */
    public function setTipodeproblema($tipodeproblema)
    {
        $this->tipodeproblema = $tipodeproblema;

        return $this;
    }

    /**
     * Get tipodeproblema
     *
     * @return string 
     */
    public function getTipodeproblema()
    {
        return $this->tipodeproblema;
    }

    /**
     * Set pdf
     *
     * @param string $pdf
     * @return Ayudaproductos
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get pdf
     *
     * @return string 
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set pdf2
     *
     * @param string $pdf2
     * @return Ayudaproductos
     */
    public function setPdf2($pdf2)
    {
        $this->pdf2 = $pdf2;

        return $this;
    }

    /**
     * Get pdf2
     *
     * @return string 
     */
    public function getPdf2()
    {
        return $this->pdf2;
    }

    /**
     * Set pdf3
     *
     * @param string $pdf3
     * @return Ayudaproductos
     */
    public function setPdf3($pdf3)
    {
        $this->pdf3 = $pdf3;

        return $this;
    }

    /**
     * Get pdf3
     *
     * @return string 
     */
    public function getPdf3()
    {
        return $this->pdf3;
    }

    /**
     * Set drivers
     *
     * @param string $drivers
     * @return Ayudaproductos
     */
    public function setDrivers($drivers)
    {
        $this->drivers = $drivers;

        return $this;
    }

    /**
     * Get drivers
     *
     * @return string 
     */
    public function getDrivers()
    {
        return $this->drivers;
    }

    /**
     * Set drivers2
     *
     * @param string $drivers2
     * @return Ayudaproductos
     */
    public function setDrivers2($drivers2)
    {
        $this->drivers2 = $drivers2;

        return $this;
    }

    /**
     * Get drivers2
     *
     * @return string 
     */
    public function getDrivers2()
    {
        return $this->drivers2;
    }

    /**
     * Set drivers3
     *
     * @param string $drivers3
     * @return Ayudaproductos
     */
    public function setDrivers3($drivers3)
    {
        $this->drivers3 = $drivers3;

        return $this;
    }

    /**
     * Get drivers3
     *
     * @return string 
     */
    public function getDrivers3()
    {
        return $this->drivers3;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Ayudaproductos
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
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
     * @return Ayudaproductos
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
