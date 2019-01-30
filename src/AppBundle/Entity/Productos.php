<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos", uniqueConstraints={@ORM\UniqueConstraint(name="SKU", columns={"SKU"}), @ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FKProductos988591", columns={"Subcategoriaid"}), @ORM\Index(name="FKProductos807247", columns={"Categoriaid"}), @ORM\Index(name="FKProductos51036", columns={"Marcaid"})})
 * @ORM\Entity
 */
class Productos
{
    /**
     * @var string
     *
     * @ORM\Column(name="SKU", type="string", length=150, nullable=false)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="MPN", type="string", length=150, nullable=true)
     */
    private $mpn;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="linkproducto", type="string", length=255, nullable=false)
     */
    private $linkproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="atributos", type="string", length=255, nullable=true)
     */
    private $atributos;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=150, nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="linkimagen", type="string", length=255, nullable=true)
     */
    private $linkimagen;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="string", length=100, nullable=true)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen2", type="string", length=255, nullable=true)
     */
    private $imagen2;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen3", type="string", length=255, nullable=true)
     */
    private $imagen3;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen4", type="string", length=255, nullable=true)
     */
    private $imagen4;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf1", type="string", length=255, nullable=true)
     */
    private $pdf1;

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
     * @ORM\Column(name="driver1", type="string", length=255, nullable=true)
     */
    private $driver1;

    /**
     * @var string
     *
     * @ORM\Column(name="driver2", type="string", length=255, nullable=true)
     */
    private $driver2;

    /**
     * @var string
     *
     * @ORM\Column(name="driver3", type="string", length=255, nullable=true)
     */
    private $driver3;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string", length=255, nullable=true)
     */
    private $comentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen5", type="string", length=255, nullable=true)
     */
    private $imagen5;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen6", type="string", length=255, nullable=true)
     */
    private $imagen6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Subcategoria
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Subcategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Subcategoriaid", referencedColumnName="id")
     * })
     */
    private $subcategoriaid;

    /**
     * @var \AppBundle\Entity\Categoria
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Categoriaid", referencedColumnName="id")
     * })
     */
    private $categoriaid;

    /**
     * @var \AppBundle\Entity\Marca
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Marcaid", referencedColumnName="id")
     * })
     */
    private $marcaid;



    /**
     * Set sku
     *
     * @param string $sku
     * @return Productos
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string 
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set mpn
     *
     * @param string $mpn
     * @return Productos
     */
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Get mpn
     *
     * @return string 
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Productos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set linkproducto
     *
     * @param string $linkproducto
     * @return Productos
     */
    public function setLinkproducto($linkproducto)
    {
        $this->linkproducto = $linkproducto;

        return $this;
    }

    /**
     * Get linkproducto
     *
     * @return string 
     */
    public function getLinkproducto()
    {
        return $this->linkproducto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Productos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set atributos
     *
     * @param string $atributos
     * @return Productos
     */
    public function setAtributos($atributos)
    {
        $this->atributos = $atributos;

        return $this;
    }

    /**
     * Get atributos
     *
     * @return string 
     */
    public function getAtributos()
    {
        return $this->atributos;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Productos
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
     * Set linkimagen
     *
     * @param string $linkimagen
     * @return Productos
     */
    public function setLinkimagen($linkimagen)
    {
        $this->linkimagen = $linkimagen;

        return $this;
    }

    /**
     * Get linkimagen
     *
     * @return string 
     */
    public function getLinkimagen()
    {
        return $this->linkimagen;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Productos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set imagen2
     *
     * @param string $imagen2
     * @return Productos
     */
    public function setImagen2($imagen2)
    {
        $this->imagen2 = $imagen2;

        return $this;
    }

    /**
     * Get imagen2
     *
     * @return string 
     */
    public function getImagen2()
    {
        return $this->imagen2;
    }

    /**
     * Set imagen3
     *
     * @param string $imagen3
     * @return Productos
     */
    public function setImagen3($imagen3)
    {
        $this->imagen3 = $imagen3;

        return $this;
    }

    /**
     * Get imagen3
     *
     * @return string 
     */
    public function getImagen3()
    {
        return $this->imagen3;
    }

    /**
     * Set imagen4
     *
     * @param string $imagen4
     * @return Productos
     */
    public function setImagen4($imagen4)
    {
        $this->imagen4 = $imagen4;

        return $this;
    }

    /**
     * Get imagen4
     *
     * @return string 
     */
    public function getImagen4()
    {
        return $this->imagen4;
    }

    /**
     * Set pdf1
     *
     * @param string $pdf1
     * @return Productos
     */
    public function setPdf1($pdf1)
    {
        $this->pdf1 = $pdf1;

        return $this;
    }

    /**
     * Get pdf1
     *
     * @return string 
     */
    public function getPdf1()
    {
        return $this->pdf1;
    }

    /**
     * Set pdf2
     *
     * @param string $pdf2
     * @return Productos
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
     * @return Productos
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
     * Set driver1
     *
     * @param string $driver1
     * @return Productos
     */
    public function setDriver1($driver1)
    {
        $this->driver1 = $driver1;

        return $this;
    }

    /**
     * Get driver1
     *
     * @return string 
     */
    public function getDriver1()
    {
        return $this->driver1;
    }

    /**
     * Set driver2
     *
     * @param string $driver2
     * @return Productos
     */
    public function setDriver2($driver2)
    {
        $this->driver2 = $driver2;

        return $this;
    }

    /**
     * Get driver2
     *
     * @return string 
     */
    public function getDriver2()
    {
        return $this->driver2;
    }

    /**
     * Set driver3
     *
     * @param string $driver3
     * @return Productos
     */
    public function setDriver3($driver3)
    {
        $this->driver3 = $driver3;

        return $this;
    }

    /**
     * Get driver3
     *
     * @return string 
     */
    public function getDriver3()
    {
        return $this->driver3;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Productos
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
     * Set imagen5
     *
     * @param string $imagen5
     * @return Productos
     */
    public function setImagen5($imagen5)
    {
        $this->imagen5 = $imagen5;

        return $this;
    }

    /**
     * Get imagen5
     *
     * @return string 
     */
    public function getImagen5()
    {
        return $this->imagen5;
    }

    /**
     * Set imagen6
     *
     * @param string $imagen6
     * @return Productos
     */
    public function setImagen6($imagen6)
    {
        $this->imagen6 = $imagen6;

        return $this;
    }

    /**
     * Get imagen6
     *
     * @return string 
     */
    public function getImagen6()
    {
        return $this->imagen6;
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
     * Set subcategoriaid
     *
     * @param \AppBundle\Entity\Subcategoria $subcategoriaid
     * @return Productos
     */
    public function setSubcategoriaid(\AppBundle\Entity\Subcategoria $subcategoriaid = null)
    {
        $this->subcategoriaid = $subcategoriaid;

        return $this;
    }

    /**
     * Get subcategoriaid
     *
     * @return \AppBundle\Entity\Subcategoria 
     */
    public function getSubcategoriaid()
    {
        return $this->subcategoriaid;
    }

    /**
     * Set categoriaid
     *
     * @param \AppBundle\Entity\Categoria $categoriaid
     * @return Productos
     */
    public function setCategoriaid(\AppBundle\Entity\Categoria $categoriaid = null)
    {
        $this->categoriaid = $categoriaid;

        return $this;
    }

    /**
     * Get categoriaid
     *
     * @return \AppBundle\Entity\Categoria 
     */
    public function getCategoriaid()
    {
        return $this->categoriaid;
    }

    /**
     * Set marcaid
     *
     * @param \AppBundle\Entity\Marca $marcaid
     * @return Productos
     */
    public function setMarcaid(\AppBundle\Entity\Marca $marcaid = null)
    {
        $this->marcaid = $marcaid;

        return $this;
    }

    /**
     * Get marcaid
     *
     * @return \AppBundle\Entity\Marca 
     */
    public function getMarcaid()
    {
        return $this->marcaid;
    }
}
