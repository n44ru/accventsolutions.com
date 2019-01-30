<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Solicitud;

class SolicitudController extends Controller
{
    /**
     * @Route("/solicitudes", name="solicitud")
     */
    public function solicitudesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $titulo = $request->request->get('stitle');
        $productox = $request->request->get('sproducto');
        $mensajex = $request->request->get('smensaje');
        $usuariox = $request->request->get('suser');
        //
        $producto = $em->getRepository('AppBundle:Productos')->find($productox);
        $usuario = $em->getRepository('AppBundle:User')->find($usuariox);
        //
        $solicitud = new Solicitud();
        $solicitud->setTitulo($titulo);
        $solicitud->setProductosid($producto);
        $solicitud->setMensaje($mensajex);
        $solicitud->setUserid($usuario);
        $solicitud->setProcesada('NO');
        //
        $em = $this->getDoctrine()->getManager();
        $em->persist($solicitud);
        $em->flush();
        return $this->redirectToRoute('vista_body_only', array('id' => $productox));
    }
    /**
     * @Route("/solicitudes/insertar", name="insertar_solicitud")
     */
    public function InsertarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository('AppBundle:Productos')->findAll();

        if ($request->request->count() > 1) {
            $titulo = $request->request->get('stitle');
            $productox = $request->request->get('sproducto');
            $mensajex = $request->request->get('smensaje');
            $usuariox = $request->request->get('suser');
            //
            $producto = $em->getRepository('AppBundle:Productos')->find($productox);
            $usuario = $em->getRepository('AppBundle:User')->find($usuariox);
            //
            $solicitud = new Solicitud();
            $solicitud->setTitulo($titulo);
            $solicitud->setProductosid($producto);
            $solicitud->setMensaje($mensajex);
            $solicitud->setUserid($usuario);
            $solicitud->setProcesada('NO');
            //
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitud);
            $em->flush();
            return $this->redirectToRoute('ver_solicitud');
        }
        return $this->render('admin/solicitudes/insertar.html.twig', array('prod' => $prod));
    }

    /**
     * @Route("/solicitudes/ver/", name="ver_solicitud")
     */
    public function solicitudesverAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sol = $em->getRepository('AppBundle:Solicitud')->findAll();
        return $this->render('admin/solicitudes/ver.html.twig', array('sol' => $sol));
    }

    /**
     * @Route("/solicitudes/editar/{id}", name="editar_solicitud")
     */
    public function solicitudeseditarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $solicitud = $em->getRepository('AppBundle:Solicitud')->find($id);
        //
        if ($request->request->count() >= 1) {
            $procesada = $request->request->get('sprocesada');
            $solicitud->setProcesada($procesada);
            //
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitud);
            $em->flush();
            return $this->redirectToRoute('ver_solicitud');
        }

        return $this->render('admin/solicitudes/editar.html.twig', array('sol' => $solicitud));
    }

    /**
     * @Route("/solicitudes/eliminar/{id}", name="eliminar_solicitud")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Solicitud')->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('ver_solicitud');
    }
}