<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud", indexes={@ORM\Index(name="FKSolicitud78267", columns={"Userid"}), @ORM\Index(name="FKSolicitud631315", columns={"Productosid"})})
 * @ORM\Entity
 */
class Solicitud
{
    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=255, nullable=true)
     */
    private $mensaje;

    /**
     * @var string
     *
     * @ORM\Column(name="Procesada", type="string", length=2, nullable=false)
     */
    private $procesada;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Userid", referencedColumnName="id")
     * })
     */
    private $userid;

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
     * Set titulo
     *
     * @param string $titulo
     * @return Solicitud
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     * @return Solicitud
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set procesada
     *
     * @param string $procesada
     * @return Solicitud
     */
    public function setProcesada($procesada)
    {
        $this->procesada = $procesada;

        return $this;
    }

    /**
     * Get procesada
     *
     * @return string 
     */
    public function getProcesada()
    {
        return $this->procesada;
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
     * Set userid
     *
     * @param \AppBundle\Entity\User $userid
     * @return Solicitud
     */
    public function setUserid(\AppBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set productosid
     *
     * @param \AppBundle\Entity\Productos $productosid
     * @return Solicitud
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
