<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Datosforza;
use AppBundle\Entity\Datosnexxt;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Productos;
use AppBundle\Entity\Datosklip;
use AppBundle\Entity\Datosxtech;

class ProductoController extends Controller
{
    /**
     * @Route("/user/productos", name="userproducto_ver")
     */
    public function userindexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository('AppBundle:Productos')->findAll();
        //$this->get('twig')->addGlobal('i', '0');
        return $this->render('default/products.html.twig', array('prod' => $prod));
    }

    /**
     * @Route("/productos", name="producto_ver")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository('AppBundle:Productos')->findAll();
        $this->get('twig')->addGlobal('i', '0');
        return $this->render('productos/ver.html.twig', array('prod' => $prod));
    }

    /**
     * @Route("/productos/insertar/marcas", name="producto_insertar_1")
     */
    public function InsertMarcaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $marcas = $em->getRepository('AppBundle:Marca')->findAll();
        if ($request->request->count() >= 1) {
            $marca = $request->request->get('marca');
            return $this->redirectToRoute('producto_insertar_2', array('id' => $marca));

        }
        return $this->render('productos/insert/insert_marca.html.twig', array('marcas' => $marcas));

    }

    /**
     * @Route("/productos/insertar/marcas/{id}", name="producto_insertar_2")
     */
    public function InsertCatAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM AppBundle:Categoria p WHERE p.marcaid =' . $id . '');
        $cat = $query->getResult();
        if ($request->request->count() > 1) {
            $cat = $request->request->get('cat');
            return $this->redirectToRoute('producto_insertar', array('id_cat' => $cat));
        }
        return $this->render('productos/insert/insert_cat.html.twig', array('cat' => $cat));

    }
    /**
     * @Route("/productos/insertar/{id_cat}", name="producto_insertar")
     */
    public function InsertarAction(Request $request, $id_cat)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM AppBundle:Subcategoria p WHERE p.categoriaid =' . $id_cat . '');
        $sub_cat = $query->getResult();

        if ($request->request->count() > 1) {
            $nombre = $request->request->get('nombre');
            //Fix
            $nombre = str_replace('/', '', $nombre);
            $nombre = str_replace('\\', '', $nombre);
            $nombre = str_replace('"', '', $nombre);
            $nombre = str_replace('|', '', $nombre);
            //
            $sku = $request->request->get('sku');
            // Ver sino hay repetidos
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT p FROM AppBundle:Productos p WHERE p.sku = ?1 ');
            $query->setParameter(1, $sku);
            $resultado = $query->getResult();

            if($resultado!=null)
            {
                $mensaje=array('mensaje'=>$sku);
                return $this->render('productos/error/messages.html.twig', array('msg' => $mensaje));
            }

            $mpn = $request->request->get('mpn');
            $linkprod = $request->request->get('link');
            $desc = $request->request->get('descripcion');
            $atrib = $request->request->get('atributos');
            //$linkimagen = $request->request->get('linkimagen');
            $precio = $request->request->get('precio');
            //New Rows
            $pdf1 = $request->request->get('pdf1');
            $pdf2 = $request->request->get('pdf2');
            $pdf3 = $request->request->get('pdf3');
            $d1 = $request->request->get('driver1');
            $d2 = $request->request->get('driver2');
            $d3 = $request->request->get('driver3');
            $com = $request->request->get('comentarios');
            //
            $categoriaid = $request->request->get('cat');
            $marcaid = $request->request->get('marca');
            $subcategoriaid = $request->request->get('subcat');
            //
            // Metodo para SUBIR FICEHROS
            define('UPLOADPATH', 'images/uploads/');
            //
            $image = $_FILES['imagen']['name'];
            // New
            $image2 = $_FILES['imagen2']['name'];
            $image3 = $_FILES['imagen3']['name'];
            $image4 = $_FILES['imagen4']['name'];
            $image5 = $_FILES['imagen5']['name'];
            //
            $target = UPLOADPATH . $nombre . '/' . $image;
            // New
            $target2 = UPLOADPATH . $nombre . '/' . $image2;
            $target3 = UPLOADPATH . $nombre . '/' . $image3;
            $target4 = UPLOADPATH . $nombre . '/' . $image4;
            $target5 = UPLOADPATH . $nombre . '/' . $image5;
            //

            if (!file_exists(UPLOADPATH . $nombre)) {
                mkdir(UPLOADPATH . $nombre);
            }
            //
            move_uploaded_file($_FILES['imagen']['tmp_name'], $target);
            //New
            move_uploaded_file($_FILES['imagen2']['tmp_name'], $target2);
            move_uploaded_file($_FILES['imagen3']['tmp_name'], $target3);
            move_uploaded_file($_FILES['imagen4']['tmp_name'], $target4);
            move_uploaded_file($_FILES['imagen5']['tmp_name'], $target5);
            //
            $producto = new Productos();
            $producto->setNombre($nombre);
            $producto->setSku($sku);
            $producto->setMpn($mpn);
            $producto->setLinkproducto($linkprod);
            $producto->setDescripcion($desc);
            $producto->setAtributos($atrib);
            if ($image != null && $image != '') //New
            {
                $producto->setImagen($target);
                $producto->setImagen2($target2);
                $producto->setImagen3($target3);
                $producto->setImagen4($target4);
                $producto->setImagen5($target5);
            }
            //
            $producto->setPdf1($pdf1);
            $producto->setPdf2($pdf2);
            $producto->setPdf3($pdf3);
            $producto->setDriver1($d1);
            $producto->setDriver2($d2);
            $producto->setDriver3($d3);
            $producto->setComentarios($com);
            //
            //$producto->setLinkimagen($linkimagen);
            $producto->setPrecio($precio);
            //Creando las relaciones.
            $categorias = $em->getRepository('AppBundle:Categoria')->find($categoriaid);
            $marcas = $em->getRepository('AppBundle:Marca')->find($marcaid);
            $subcategoria = $em->getRepository('AppBundle:Subcategoria')->find($subcategoriaid);
            //
            $producto->setCategoriaid($categorias);
            $producto->setMarcaid($marcas);
            $producto->setSubcategoriaid($subcategoria);

            $em->persist($producto);
            $em->flush();

            // Estatico

            if (strtoupper($marcas->getNombre()) == "KLIP XTREME") {
                $klip = new Datosklip();
                //
                $maxid = $producto->getId();
                $p = $em->getRepository('AppBundle:Productos')->find($maxid);
                //
                $klip->setProductosid($p);
                $em->persist($klip);
                $em->flush();
            } else
                if (strtoupper($marcas->getNombre()) == "NEXXT SOLUTIONS") {
                    $nexxt = new Datosnexxt();
                    //
                    $maxid = $producto->getId();
                    $p = $em->getRepository('AppBundle:Productos')->find($maxid);
                    //
                    $nexxt->setProductosid($p);
                    $em->persist($nexxt);
                    $em->flush();
                } else
                    if (strtoupper($marcas->getNombre()) == "XTECH") {
                        $nexxt = new Datosxtech();
                        //
                        $maxid = $producto->getId();
                        $p = $em->getRepository('AppBundle:Productos')->find($maxid);
                        //
                        $nexxt->setProductosid($p);
                        $em->persist($nexxt);
                        $em->flush();
                    } else
                        if (strtoupper($marcas->getNombre()) == "FORZA UPS") {
                            $nexxt = new Datosforza();
                            //
                            $maxid = $producto->getId();
                            $p = $em->getRepository('AppBundle:Productos')->find($maxid);
                            //
                            $nexxt->setProductosid($p);
                            $em->persist($nexxt);
                            $em->flush();
                        }
            //
            return $this->redirectToRoute('producto_ver');
        }
        return $this->render('productos/insertar.html.twig', array('subcat' => $sub_cat));
    }

    /**
     * @Route("/producto/marca/{marca}", name="dinamico")
     */
    public function DinamicAction(Request $request, $marca)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM AppBundle:Categoria p WHERE p.marcaid =' . $marca . '');
        $cat = $query->getResult();
        return $this->render('productos/ajax/categorias.html.twig', array('cat' => $cat));
    }

    /**
     * @Route("/producto/categoria/{categoria}", name="dinamicotwo")
     */
    public function DinamictwoAction(Request $request, $categoria)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM AppBundle:Subcategoria p WHERE p.categoriaid =' . $categoria . '');
        $subcat = $query->getResult();
        return $this->render('productos/ajax/subcategorias.html.twig', array('subcat' => $subcat));
    }

    /**
     * @Route("/producto/eliminar/{marca}/{id}", name="producto_eliminar")
     */
    public function EliminarAction(Request $request, $id, $marca)
    {
        $em = $this->getDoctrine()->getManager();
        // Esta hecho estatico.
        if (strtoupper($marca) == "KLIP XTREME") {
            $query = $em->createQuery('DELETE FROM AppBundle:Datosklip d WHERE d.productosid =' . $id . '');
            $query->getResult();
        } else if (strtoupper($marca) == "NEXXT SOLUTIONS") {
            $query = $em->createQuery('DELETE FROM AppBundle:Datosnexxt d WHERE d.productosid =' . $id . '');
            $query->getResult();
        } else if (strtoupper($marca) == "FORZA UPS") {
            $query = $em->createQuery('DELETE FROM AppBundle:Datosforza d WHERE d.productosid =' . $id . '');
            $query->getResult();
        } else if (strtoupper($marca) == "XTECH") {
            $query = $em->createQuery('DELETE FROM AppBundle:Datosxtech d WHERE d.productosid =' . $id . '');
            $query->getResult();
        }
        // Eliminando las relaciones de Presupuesto.
        $query_1 = $em->createQuery('SELECT m.id FROM AppBundle:Ayudaproductos m WHERE m.productosid = '.$id.'');
        $p = $query_1->getResult();
        for($i=0;$i<count($p);$i++)
        {
            $pre_actual = $em->getRepository('AppBundle:Ayudaproductos')->find($p[$i]['id']);
            $pre_actual->setProductosid(null);
            $em->persist($pre_actual);
            $em->flush();
        }
        // Terminando.
        $producto = $em->getRepository('AppBundle:Productos')->find($id);
        $em->remove($producto);
        $em->flush();

        return $this->redirectToRoute('producto_ver');
    }

    /**
     * @Route("/productos/actualizar/{id}", name="producto_actualizar")
     */
    public function ActualizarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('AppBundle:Productos')->find($id);
        //
        $categoria = $em->getRepository('AppBundle:Categoria')->findAll();
        $marca = $em->getRepository('AppBundle:Marca')->findAll();
        $subcategoria = $em->getRepository('AppBundle:Subcategoria')->findAll();
        //
        //
        if ($request->request->count() > 1) {

            $nombre = $request->request->get('nombre');
            $sku = $request->request->get('sku');
            $mpn = $request->request->get('mpn');
            $linkprod = $request->request->get('link');
            $desc = $request->request->get('descripcion');
            $atrib = $request->request->get('atributos');
            //$linkimagen = $request->request->get('linkimagen');
            $precio = $request->request->get('precio');
            //
            //New Rows
            $pdf1 = $request->request->get('pdf1');
            $pdf2 = $request->request->get('pdf2');
            $pdf3 = $request->request->get('pdf3');
            $d1 = $request->request->get('driver1');
            $d2 = $request->request->get('driver2');
            $d3 = $request->request->get('driver3');
            $com = $request->request->get('comentarios');
            //
            $categoriaid = $request->request->get('categoria');
            $marcaid = $request->request->get('marca');
            $subcategoriaid = $request->request->get('subcategoria');
            //
            // Metodo para SUBIR FICEHROS
            define('UPLOADPATH', 'images/uploads/');
            //
            $image = $_FILES['imagen']['name'];
            // New
            $image2 = $_FILES['imagen2']['name'];
            $image3 = $_FILES['imagen3']['name'];
            $image4 = $_FILES['imagen4']['name'];
            $image5 = $_FILES['imagen5']['name'];
            //
            $target = UPLOADPATH . $nombre . '/' . $image;
            // New
            $target2 = UPLOADPATH . $nombre . '/' . $image2;
            $target3 = UPLOADPATH . $nombre . '/' . $image3;
            $target4 = UPLOADPATH . $nombre . '/' . $image4;
            $target5 = UPLOADPATH . $nombre . '/' . $image5;
            //

            if (!file_exists(UPLOADPATH . $nombre)) {
                mkdir(UPLOADPATH . $nombre);
            }
            //
            move_uploaded_file($_FILES['imagen']['tmp_name'], $target);
            //New
            move_uploaded_file($_FILES['imagen2']['tmp_name'], $target2);
            move_uploaded_file($_FILES['imagen3']['tmp_name'], $target3);
            move_uploaded_file($_FILES['imagen4']['tmp_name'], $target4);
            move_uploaded_file($_FILES['imagen5']['tmp_name'], $target5);
            //
            $producto->setNombre($nombre);
            $producto->setSku($sku);
            $producto->setMpn($mpn);
            $producto->setLinkproducto($linkprod);
            $producto->setDescripcion($desc);
            $producto->setAtributos($atrib);
            //
            $producto->setPdf1($pdf1);
            $producto->setPdf2($pdf2);
            $producto->setPdf3($pdf3);
            $producto->setDriver1($d1);
            $producto->setDriver2($d2);
            $producto->setDriver3($d3);
            $producto->setComentarios($com);
            //
            if ($image != null) {
                $producto->setImagen($target);
            }
            if ($image2 != null) {
                $producto->setImagen2($target2);
            }
            if ($image3 != null) {
                $producto->setImagen3($target3);
            }
            if ($image4 != null) {
                $producto->setImagen4($target4);
            }
            if ($image5 != null) {
                $producto->setImagen5($target5);
            }
            //$producto->setLinkimagen($linkimagen);
            $producto->setPrecio($precio);
            //Creando las relaciones.
            $categorias = $em->getRepository('AppBundle:Categoria')->find($categoriaid);
            $marcas = $em->getRepository('AppBundle:Marca')->find($marcaid);
            $subcategoria = $em->getRepository('AppBundle:Subcategoria')->find($subcategoriaid);
            //
            $producto->setCategoriaid($categorias);
            $producto->setMarcaid($marcas);
            $producto->setSubcategoriaid($subcategoria);
            //
            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();
            return $this->redirectToRoute('producto_ver');
        }
        return $this->render('productos/actualizar.html.twig', array('prod' => $producto, 'cat' => $categoria, 'marca' => $marca, 'subcat' => $subcategoria));
    }

}