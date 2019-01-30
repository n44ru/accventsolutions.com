<?php

namespace AppBundle\Controller;

use Proxies\__CG__\AppBundle\Entity\Ayudaproductos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BuscarController extends Controller
{
    /**
     * @Route("/buscar/", name="buscar")
     */
    public function marcasAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->request->count() > 1) {
            $texto = $request->request->get('buscador');
            $filtro = $request->request->get('filtro');
            if ($texto == null || $texto == '') {
                $marca = '';
                $cat = '';
                $sub_cat = '';
            }
            if ($filtro != "Todos") {
                $d_marca = "zzzzzz";
                $d_cat = "zzzzzz";
                $d_sub_cat = "zzzzzz";
                $sku = "zzzzzz";
                $mpn = "zzzzzz";
                $desc = "zzzzzz";
                $com = "zzzzzz";
                $atrib = "zzzzzz";
            } else {
                $d_marca = $texto;
                $d_cat = $texto;
                $d_sub_cat = $texto;
                $sku = $texto;
                $mpn = $texto;
                $desc = $texto;
                $com = $texto;
                $atrib = $texto;
            }
            //
            if ($filtro == "Marca") {
                $d_marca = $texto;
            } elseif ($filtro == "Categoria") {
                $d_cat = $texto;
            } elseif ($filtro == "Subcategoria") {
                $d_sub_cat = $texto;
            } elseif ($filtro == "SKU") {
                $sku = $texto;
            } elseif ($filtro == "MPN") {
                $mpn = $texto;
            } elseif ($filtro == "D") {
                $desc = $texto;
            } elseif ($filtro == "C") {
                $com = $texto;
            } elseif ($filtro == "AT") {
                $atrib = $texto;
            }
            //
            $generalquery = $em->createQuery('SELECT DISTINCT m.id FROM AppBundle:Marca m WHERE m.nombre LIKE ?1 ');
            $generalquery->setParameter(1, '%' . $d_marca . '%');
            $marca = $generalquery->getResult();
            //
            $generalquery = $em->createQuery('SELECT DISTINCT m.id FROM AppBundle:Categoria m WHERE m.nombre LIKE ?1 ');
            $generalquery->setParameter(1, '%' . $d_cat . '%');
            $cat = $generalquery->getResult();
            //
            $generalquery = $em->createQuery('SELECT DISTINCT m.id FROM AppBundle:Subcategoria m WHERE m.nombre LIKE ?1 ');
            $generalquery->setParameter(1, '%' . $d_sub_cat . '%');
            $sub_cat = $generalquery->getResult();
            //
            if ($marca == null || $marca == '')
                $marca = 0;
            else $marca = $marca[0]['id'];
            if ($cat == null || $cat == '')
                $cat = 0;
            else $cat = $cat[0]['id'];
            if ($sub_cat == null || $sub_cat == '')
                $sub_cat = 0;
            else $sub_cat = $sub_cat[0]['id'];
            //
            $query = null;
            $result = null;
            if ($filtro == 'Arbol') {
                $arbol = $texto;
                $queryold = $em->createQuery('SELECT  p FROM AppBundle:Ayudaproductos p WHERE p.tipodeproblema LIKE ?1 ');
                $queryold->setParameter(1, '%' . $arbol . '%');
                $result = $queryold->getResult();
                $this->get('twig')->addGlobal('fuearbol', '0');
            } else {
                if(strchr($texto," "))
                {
                    $todos = array();
                    $token = strtok($texto, " ");
                    $i=0;
                    while ($token !== false)
                    {
                        $todos[$i] = $token;
                        $token = strtok(" ");
                        $i++;
                    }
                    $result="";
                    // No la mejor solución, pero funciona.
                    if(count($todos)==2) {
                        $query = $em->createQuery('SELECT DISTINCT p FROM AppBundle:Productos p WHERE p.nombre LIKE   ?1 AND p.nombre LIKE   ?2 ORDER BY p.nombre ASC');
                        $query->setParameter(1, '%' . $todos[0] . '%');
                        $query->setParameter(2, '%' . $todos[1] . '%');
                        $result = $query->getResult();
                    }
                    else if(count($todos)==3) {
                        $query = $em->createQuery('SELECT DISTINCT p FROM AppBundle:Productos p WHERE p.nombre LIKE   ?1 AND p.nombre LIKE   ?2 AND p.nombre LIKE   ?3 ORDER BY p.nombre ASC');
                        $query->setParameter(1, '%' . $todos[0] . '%');
                        $query->setParameter(2, '%' . $todos[1] . '%');
                        $query->setParameter(3, '%' . $todos[2] . '%');
                        $result = $query->getResult();

                    }
                    else if(count($todos)==4) {
                        $query = $em->createQuery('SELECT DISTINCT p FROM AppBundle:Productos p WHERE p.nombre LIKE   ?1 AND p.nombre LIKE   ?2 AND p.nombre LIKE   ?3 AND p.nombre LIKE   ?4 ORDER BY p.nombre ASC');
                        $query->setParameter(1, '%' . $todos[0] . '%');
                        $query->setParameter(2, '%' . $todos[1] . '%');
                        $query->setParameter(3, '%' . $todos[2] . '%');
                        $query->setParameter(4, '%' . $todos[3] . '%');
                        $result = $query->getResult();
                    }
                    else if(count($todos)==5) {
                        $query = $em->createQuery('SELECT DISTINCT p FROM AppBundle:Productos p WHERE p.nombre LIKE   ?1 AND p.nombre LIKE   ?2 AND p.nombre LIKE   ?3 AND p.nombre LIKE   ?4 AND p.nombre LIKE   ?5 ORDER BY p.nombre ASC');
                        $query->setParameter(1, '%' . $todos[0] . '%');
                        $query->setParameter(2, '%' . $todos[1] . '%');
                        $query->setParameter(3, '%' . $todos[2] . '%');
                        $query->setParameter(4, '%' . $todos[3] . '%');
                        $query->setParameter(5, '%' . $todos[4] . '%');
                        $result = $query->getResult();
                    }
                    else
                    {
                        $query = $em->createQuery('SELECT DISTINCT p FROM AppBundle:Productos p WHERE p.nombre LIKE   ?1 ORDER BY p.nombre ASC');
                        $query->setParameter(1, '%' . $texto . '%');
                        $result = $query->getResult();
                    }
                    $this->get('twig')->addGlobal('fuearbol', '1');
                    /*var_dump($todos);
                    var_dump($result);
                    die;*/

                }
                else {
                    $query = $em->createQuery('SELECT DISTINCT p FROM AppBundle:Productos p WHERE p.nombre LIKE ?1 OR p.sku LIKE ?5 OR p.mpn LIKE ?6 OR p.descripcion LIKE ?7 OR p.comentarios LIKE ?8 OR p.atributos LIKE ?9 OR p.marcaid = ?2 OR p.categoriaid = ?3 OR p.subcategoriaid = ?4 ORDER BY p.nombre ASC');
                    $query->setParameter(1, '%' . $texto . '%');
                    $query->setParameter(2, $marca);
                    $query->setParameter(3, $cat);
                    $query->setParameter(4, $sub_cat);
                    $query->setParameter(5, '%' . $sku . '%');
                    $query->setParameter(6, '%' . $mpn . '%');
                    $query->setParameter(7, '%' . $desc . '%');
                    $query->setParameter(8, '%' . $com . '%');
                    $query->setParameter(9, '%' . $atrib . '%');
                    $this->get('twig')->addGlobal('fuearbol', '1');
                    $result = $query->getResult();
                }
            }
            //
            if ($result == null || $result == '')
                $this->get('twig')->addGlobal('algo', '1');
            else $this->get('twig')->addGlobal('algo', '0');
            return $this->render('buscar/Main/main2.html.twig', array(
                'result' => $result));
        }
        return $this->render('buscar/Main/main.html.twig');
    }

    /**
     * @Route("/buscar/marcas/{id_marca}", name="buscar2")
     */
    public function catAction(Request $request, $id_marca)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM AppBundle:Categoria p WHERE p.marcaid =' . $id_marca . '');
        $categorias = $query->getResult();
        //
        $marca = $em->getRepository('AppBundle:Marca')->find($id_marca);
        //
        if ($request->request->count() == 1) {
            $id_cat = $request->request->get('categoria');
            return $this->redirectToRoute('buscar3', array('id_marca' => $id_marca, 'id_cat' => $id_cat));
        }
        return $this->render('buscar/Main/main2.html.twig', array(
            'cat' => $categorias, 'marca' => $marca
        ));
    }

    /**
     * @Route("/buscar/marca/{id_marca}/categoria/{id_cat}", name="buscar3")
     */
    public function subcatAction(Request $request, $id_marca, $id_cat)
    {
        $em = $this->getDoctrine()->getManager();
        $query1 = $em->createQuery('SELECT p FROM AppBundle:Subcategoria p WHERE p.categoriaid =' . $id_cat . '');
        $subcategorias = $query1->getResult();
        $cat = $em->getRepository('AppBundle:Categoria')->find($id_cat);
        $marca = $em->getRepository('AppBundle:Marca')->find($id_marca);

        if ($request->request->count() == 1 && $request->request->get('productos') == null) {
            $id_subcat = $request->request->get('subcat');
            $query = $em->createQuery('SELECT p FROM AppBundle:Productos p WHERE p.categoriaid =' . $id_cat . ' and p.marcaid=' . $id_marca . ' and p.subcategoriaid=' . $id_subcat . '');
            $productos = $query->getResult();
            if ($productos == '' || $productos == null) {
                $subcat = $em->getRepository('AppBundle:Subcategoria')->find($id_subcat);
                return $this->render('buscar/error/error.html.twig', array('sub_cat' => $subcat));
            }
            return $this->render('buscar/prod.html.twig', array('prod' => $productos));
        }
        if ($request->request->get('productos') != null) {
            $id = $request->request->get('productos');
            return $this->redirectToRoute('vista_body_only', array('id' => $id));
        }
        return $this->render('buscar/Main/main3.html.twig', array('marca' => $marca, 'cat' => $cat,
            'subcat' => $subcategorias
        ));
    }

    /**
     * @Route("/buscar/{id}/{sys}", name="vista_body")
     */
    public function productoAction($id, $sys)
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository('AppBundle:Ayudaproductos')->find($sys);
        $textosys = $prod->getSistemas();
        $sysquery = $em->createQuery('SELECT p FROM AppBundle:Ayudaproductos p WHERE p.productosid =' . $id . ' and p.sistemas= ?1');
        $sysquery->setParameter(1, $textosys);
        $ayuda = $sysquery->getResult();
        $prod = $em->getRepository('AppBundle:Productos')->find($id);
        $detalles = array();
        for ($i = 0; $i < count($ayuda); $i++) {
            $indice = $ayuda[$i]->getId();
            $query = $em->createQuery('SELECT p FROM AppBundle:Ayudadetalles p WHERE p.ayudaproductosid =' . $indice . '');
            $detalles[$i] = $query->getResult();
        }
        $this->get('twig')->addGlobal('i', '0');
        $this->get('twig')->addGlobal('m', '0');
        return $this->render('buscar/new.html.twig', array('detalles' => $detalles, 'ayuda' => $ayuda, 'prod' => $prod));
    }

    /**
     * @Route("/buscar/{id}", name="vista_body_only")
     */
    public function productoonlyAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $query = $em->createQuery('SELECT p FROM AppBundle:Ayudaproductos p WHERE p.productosid =' . $id . ' ORDER BY p.sistemas ASC');
        $ayuda = $query->getResult();
        if ($ayuda == null || $ayuda == '') {
            $this->get('twig')->addGlobal('tiene', '1');
        } else $this->get('twig')->addGlobal('tiene', '0');
        if ($request->request->count() >= 1) {
            $id_sys = $request->request->get('sistemas');
            return $this->redirectToRoute('vista_body', array('sys' => $id_sys, 'id' => $id));
        }
        $productos = $em->getRepository('AppBundle:Productos')->find($id);
        return $this->render('buscar/part.html.twig', array('prod' => $productos, 'ayuda' => $ayuda));
    }

}