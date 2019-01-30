<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Marca;

class MarcaController extends Controller
{
    /**
     * @Route("/marca", name="marca_ver")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $marca = $em->getRepository('AppBundle:Marca')->findAll();
        return $this->render('marcas/ver.html.twig', array('marca' => $marca));
    }

    /**
     * @Route("/marca/insertar", name="marca_insertar")
     */
    public function InsertarAction(Request $request)
    {
        if ($request->request->count() >= 1) {
            $nombre = $request->request->get('nombre');
            $marcas = $request->request->get('marca');
            $detalles = $request->request->get('detalles');
            $slogan = $request->request->get('slogan');
            $web = $request->request->get('web');
            //
            // Metodo para SUBIR FICEHROS
            define('UPLOADPATH', 'images/uploads/');
            //
            $image = $_FILES['logo']['name'];
            $target = UPLOADPATH . $nombre . '/' . $image;

            if (!file_exists(UPLOADPATH . $nombre)) {
                mkdir(UPLOADPATH . $nombre);
            }
            //
            move_uploaded_file($_FILES['logo']['tmp_name'], $target);
            //
            $marca = new Marca();
            $marca->setNombre($nombre);
            $marca->setDetalles($detalles);
            $marca->setMarca($marcas);
            $marca->setSlogan($slogan);
            //
            if ($image != null && $image != '')
                $marca->setLogo($target);
            //
            $marca->setSitioweb($web);
            $em = $this->getDoctrine()->getManager();
            $em->persist($marca);
            $em->flush();
            return $this->redirectToRoute('marca_ver');
        }


        return $this->render('marcas/insertar.html.twig');
    }

    /**
     * @Route("/marca/eliminar/{id}", name="marca_eliminar")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('AppBundle:Marca')->find($id);

        $query = $em->createQuery('SELECT p FROM AppBundle:Productos p WHERE p.marcaid=' . $id . '');
        $exist = $query->getResult();
        if ($exist == '' || $exist == null) {
            $em->remove($categoria);
            $em->flush();
            return $this->redirectToRoute('marca_ver');
        } else  return $this->render('marcas/error/error.html.twig');
    }

    /**
     * @Route("/marca/actualizar/{id}", name="marca_actualizar")
     */
    public function ActualizarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $marca = $em->getRepository('AppBundle:Marca')->find($id);
        //
        if ($request->request->count() >= 1) {
            $nombre = $request->request->get('nombre');
            $marcas = $request->request->get('marca');
            $detalles = $request->request->get('detalles');
            $slogan = $request->request->get('slogan');
            $web = $request->request->get('web');
            //
            // Metodo para SUBIR FICEHROS
            define('UPLOADPATH', 'images/uploads/');
            //
            $image = $_FILES['logo']['name'];
            $target = UPLOADPATH . $nombre . '/' . $image;

            if (!file_exists(UPLOADPATH . $nombre)) {
                mkdir(UPLOADPATH . $nombre);
            }
            //
            move_uploaded_file($_FILES['logo']['tmp_name'], $target);
            //
            $marca->setNombre($nombre);
            $marca->setDetalles($detalles);
            $marca->setSlogan($slogan);
            $marca->setMarca($marcas);
            //
            if ($image != null && $image != '')
                $marca->setLogo($target);
            //
            $marca->setSitioweb($web);
            $em = $this->getDoctrine()->getManager();
            $em->persist($marca);
            $em->flush();
            return $this->redirectToRoute('marca_ver');
        }

        return $this->render('marcas/actualizar.html.twig', array('marca' => $marca));
    }

}