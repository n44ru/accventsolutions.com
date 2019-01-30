<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Ayudadetalles;

class DetallesController extends Controller
{
    /**
     * @Route("/detalles", name="detalles_ver")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $detalles = $em->getRepository('AppBundle:Ayudadetalles')->findAll();
        return $this->render('detalles/ver.html.twig', array('detalles' => $detalles));
    }

    /**
     * @Route("/detalles/insertar", name="detalles_insertar")
     */
    public function InsertarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $ayudaproductos = $em->getRepository('AppBundle:Ayudaproductos')->findAll();

        if ($request->request->count() > 1) {

            //
            $ayudaprod = $request->request->get('ayudaproductosid');
            //
            define('UPLOADPATH', 'images/uploads/');
            for ($i = 0; $i < 5; $i++) {
                $detalles = $request->request->get('detalles' . $i);
                $video = $request->request->get('video' . $i);
                //
                $image = $_FILES['imagen' . $i]['name'];

                /*var_dump($detalles);
                var_dump($video);
                var_dump($image);
                die;*/
                if (!file_exists(UPLOADPATH . $ayudaprod)) {
                    mkdir(UPLOADPATH . $ayudaprod);
                }
                $target = UPLOADPATH . $ayudaprod . '/' . $image;
                //
                move_uploaded_file($_FILES['imagen'.$i]['tmp_name'], $target);
                $ayudaproductos = $em->getRepository('AppBundle:AyudaProductos')->find($ayudaprod);
                $ayudadetalles = new Ayudadetalles();
                if ($detalles != null || $detalles != '') {
                    $ayudadetalles->setDetalles($detalles);
                    $ayudadetalles->setAyudaproductosid($ayudaproductos);
                    $ayudadetalles->setVideo($video);
                    if ($image != null && $image != '')
                        $ayudadetalles->setImagen($target);
                    //
                    $em->persist($ayudadetalles);
                    $em->flush();
                }

            }
            return $this->redirectToRoute('detalles_ver');
        }

        return $this->render('detalles/insertar.html.twig', array('ayudaprod' => $ayudaproductos));
    }

    /**
     * @Route("/detalles/actualizar/{id}", name="detalles_actualizar")
     */
    public function ActualizarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $ayudaproductos = $em->getRepository('AppBundle:Ayudaproductos')->findAll();
        $ayudadetalles = $em->getRepository('AppBundle:Ayudadetalles')->find($id);

        if ($request->request->count() > 1) {
            $detalles = $request->request->get('detalles');
            $ayudaprod = $request->request->get('ayudaproductosid');
            $video = $request->request->get('video');

            define('UPLOADPATH', 'images/uploads/');
            $image = $_FILES['imagen']['name'];

            $target = UPLOADPATH . $ayudaprod . '/' . $image;

            if (!file_exists(UPLOADPATH . $ayudaprod)) {
                mkdir(UPLOADPATH . $ayudaprod);
            }

            //
            move_uploaded_file($_FILES['imagen']['tmp_name'], $target);

            $ayudaproductos = $em->getRepository('AppBundle:AyudaProductos')->find($ayudaprod);
            //
            $ayudadetalles->setDetalles($detalles);
            $ayudadetalles->setAyudaproductosid($ayudaproductos);
            $ayudadetalles->setVideo($video);
            if ($image != null && $image != '')
                $ayudadetalles->setImagen($target);
            //
            $em->persist($ayudadetalles);
            $em->flush();
            return $this->redirectToRoute('detalles_ver');
        }

        return $this->render('detalles/actualizar.html.twig', array('detalles' => $ayudadetalles, 'ayudaprod' => $ayudaproductos));
    }

    /**
     * @Route("/detalles/eliminar/{id}", name="detalles_eliminar")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $detalles = $em->getRepository('AppBundle:Ayudadetalles')->find($id);
        $em->remove($detalles);
        $em->flush();
        return $this->redirectToRoute('detalles_ver');
    }
}