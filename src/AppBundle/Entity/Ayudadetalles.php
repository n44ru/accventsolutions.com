<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ayudadetalles
 *
 * @ORM\Table(name="ayudadetalles", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FKAyudaDetal650739", columns={"AyudaProductosid"})})
 * @ORM\Entity
 */
class Ayudadetalles
{
    /**
     * @var string
     *
     * @ORM\Column(name="detalles", type="string", length=255, nullable=true)
     */
    private $detalles;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Ayudaproductos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ayudaproductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AyudaProductosid", referencedColumnName="id")
     * })
     */
    private $ayudaproductosid;



    /**
     * Set detalles
     *
     * @param string $detalles
     * @return Ayudadetalles
     */
    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;

        return $this;
    }

    /**
     * Get detalles
     *
     * @return string 
     */
    public function getDetalles()
    {
        return $this->detalles;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Ayudadetalles
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set video
     *
     * @param string $video
     * @return Ayudadetalles
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
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
     * Set ayudaproductosid
     *
     * @param \AppBundle\Entity\Ayudaproductos $ayudaproductosid
     * @return Ayudadetalles
     */
    public function setAyudaproductosid(\AppBundle\Entity\Ayudaproductos $ayudaproductosid = null)
    {
        $this->ayudaproductosid = $ayudaproductosid;

        return $this;
    }

    /**
     * Get ayudaproductosid
     *
     * @return \AppBundle\Entity\Ayudaproductos 
     */
    public function getAyudaproductosid()
    {
        return $this->ayudaproductosid;
    }
}
