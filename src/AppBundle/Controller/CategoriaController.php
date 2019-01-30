<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categoria;

class CategoriaController extends Controller
{
    /**
     * @Route("/categoria", name="cat_ver")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('AppBundle:Categoria')->findAll();
        return $this->render('categoria/ver.html.twig', array('cat' => $categoria));
    }

    /**
     * @Route("/categoria/insertar", name="cat_insertar")
     */
    public function InsertarAction(Request $request)
    {
        if ($request->request->count() >= 1) {
            $nombre = $request->request->get('nombre');
            $cat = $request->request->get('categoria');

            $categoria = new Categoria();
            $categoria->setNombre($nombre);
            $categoria->setCategoria($cat);

            $em = $this->getDoctrine()->getManager();
            $em->persist($categoria);
            $em->flush();
            return $this->redirectToRoute('cat_ver');
        }

        return $this->render('categoria/insertar.html.twig');
    }

    /**
     * @Route("/categoria/actualizar/{id}", name="cat_actualizar")
     */
    public function ActualizarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('AppBundle:Categoria')->find($id);
        if ($request->request->count() >= 1) {

            $nombre = $request->request->get('nombre');
            $cat = $request->request->get('categoria');
            //
            $categoria->setNombre($nombre);
            $categoria->setCategoria($cat);
            $em->persist($categoria);
            $em->flush();
            return $this->redirectToRoute('cat_ver');
        }

        return $this->render('categoria/actualizar.html.twig', array('cat' => $categoria));
    }

    /**
     * @Route("/categoria/eliminar/{id}", name="cat_eliminar")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('AppBundle:Categoria')->find($id);
        //
        $query = $em->createQuery('SELECT p FROM AppBundle:Productos p WHERE p.categoriaid=' . $id . '');
        $exist = $query->getResult();
        if ($exist == '' || $exist == null) {
            $em->remove($categoria);
            $em->flush();
            return $this->redirectToRoute('cat_ver');
        } else  return $this->render('categoria/error/error.html.twig');
    }
}