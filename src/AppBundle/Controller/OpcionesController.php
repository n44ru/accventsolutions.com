<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ayudaproductos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OpcionesController extends Controller
{
    /**
     * @Route("/ayuda", name="ayuda_ver")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ayudaprod = $em->getRepository('AppBundle:Ayudaproductos')->findAll();
        return $this->render('opciones/ver.html.twig', array('ayudaprod' => $ayudaprod));
    }

    /**
     * @Route("/ayuda/insertar", name="ayuda_insertar")
     */
    public function InsertarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('AppBundle:Productos')->findAll();

        if ($request->request->count() > 1) {
            $sistemas = $request->request->get('sistemas');
            $tipodeproblema = $request->request->get('tipodeproblema');
            $pdf = $request->request->get('pdf');
            $pdf2 = $request->request->get('pdf2');
            $pdf3 = $request->request->get('pdf3');
            $drivers = $request->request->get('drivers');
            $drivers2 = $request->request->get('drivers2');
            $drivers3 = $request->request->get('drivers3');
            $idproductos = $request->request->get('idproductos');
            $com = $request->request->get('comentarios');
            //
            $productos = $em->getRepository('AppBundle:Productos')->find($idproductos);
            //
            $ayudaproductos = new Ayudaproductos();
            $ayudaproductos->setSistemas($sistemas);
            $ayudaproductos->setTipodeproblema($tipodeproblema);
            $ayudaproductos->setPdf($pdf);
            $ayudaproductos->setPdf2($pdf2);
            $ayudaproductos->setPdf3($pdf3);
            $ayudaproductos->setDrivers($drivers);
            $ayudaproductos->setDrivers2($drivers2);
            $ayudaproductos->setDrivers3($drivers3);
            $ayudaproductos->setProductosid($productos);
            $ayudaproductos->setComentarios($com);
            //
            $em->persist($ayudaproductos);
            $em->flush();
            return $this->redirectToRoute('ayuda_ver');
        }
        return $this->render('opciones/insertar.html.twig', array('prod' => $productos));
    }

    /**
     * @Route("/ayuda/eliminar/{id}", name="ayuda_eliminar")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        // Eliminando las relaciones en Detalles
        $query_2 = $em->createQuery('DELETE FROM AppBundle:Ayudadetalles m WHERE m.ayudaproductosid = '.$id.'');
        $query_2->getResult();
        //
        $ayudaproductos = $em->getRepository('AppBundle:Ayudaproductos')->find($id);
        $em->remove($ayudaproductos);
        $em->flush();
        return $this->redirectToRoute('ayuda_ver');
    }

    /**
     * @Route("/ayuda/actualizar/{id}", name="ayuda_actualizar")
     */
    public function ActualizarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('AppBundle:Productos')->findAll();
        $ayudaproductos = $em->getRepository('AppBundle:Ayudaproductos')->find($id);

        if ($request->request->count() > 1) {
            $sistemas = $request->request->get('sistemas');
            $tipodeproblema = $request->request->get('tipodeproblema');
            $pdf = $request->request->get('pdf');
            $pdf2 = $request->request->get('pdf2');
            $pdf3 = $request->request->get('pdf3');
            $drivers = $request->request->get('drivers');
            $drivers2 = $request->request->get('drivers2');
            $drivers3 = $request->request->get('drivers3');
            $idproductos = $request->request->get('idproductos');
            $com = $request->request->get('comentarios');
            //
            $productos = $em->getRepository('AppBundle:Productos')->find($idproductos);
            //
            $ayudaproductos->setSistemas($sistemas);
            $ayudaproductos->setTipodeproblema($tipodeproblema);
            $ayudaproductos->setPdf($pdf);
            $ayudaproductos->setPdf2($pdf2);
            $ayudaproductos->setPdf3($pdf3);
            $ayudaproductos->setDrivers($drivers);
            $ayudaproductos->setDrivers2($drivers2);
            $ayudaproductos->setDrivers3($drivers3);
            $ayudaproductos->setProductosid($productos);
            $ayudaproductos->setComentarios($com);
            //
            $em->persist($ayudaproductos);
            $em->flush();
            return $this->redirectToRoute('ayuda_ver');
        }
        return $this->render('opciones/actualizar.html.twig', array('prod' => $productos, 'ayudaprod' => $ayudaproductos));
    }

}