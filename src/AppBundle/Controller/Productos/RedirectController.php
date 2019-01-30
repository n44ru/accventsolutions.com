<?php

namespace AppBundle\Controller\Productos;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Datosklip;
use AppBundle\Entity\Productos;

class RedirectController extends Controller
{
    /**
     * @Route("/producto/detalles/{id}", name="producto_detalles_ver")
     */
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('AppBundle:Productos')->find($id);
        $marca = $producto->getMarcaid()->getNombre();

        if (strtoupper($marca) == "KLIP XTREME") {
            return $this->redirectToRoute('klip_detalles_ver', array('id' => $producto->getID()));
        }
        if (strtoupper($marca) == "NEXXT SOLUTIONS") {
            return $this->redirectToRoute('nexxt_detalles_ver', array('id' => $producto->getID()));
        }
        if (strtoupper($marca) == "XTECH") {
            return $this->redirectToRoute('xtech_detalles_ver', array('id' => $producto->getID()));
        }
        if (strtoupper($marca) == "FORZA UPS") {
            return $this->redirectToRoute('forza_detalles_ver', array('id' => $producto->getID()));
        }
        return $this->redirectToRoute('producto_ver');
    }
    /**
     * @Route("/producto/redirect/{id}", name="producto_find")
     */
    public function redirecttofindAction(Request $request, $id)
    {

    }

}
