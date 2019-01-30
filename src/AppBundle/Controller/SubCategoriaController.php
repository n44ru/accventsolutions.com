<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Subcategoria;

class SubCategoriaController extends Controller
{
    /**
     * @Route("/subcategoria", name="subcat_ver")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $subcategoria = $em->getRepository('AppBundle:Subcategoria')->findAll();
        return $this->render('subcategoria/ver.html.twig', array('cat' => $subcategoria));
    }

    /**
     * @Route("/subcategoria/insertar", name="subcat_insertar")
     */
    public function InsertarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('AppBundle:Categoria')->findAll();

        if ($request->request->count() >= 1) {
            $nombre = $request->request->get('nombre');
            $subcat = $request->request->get('subcategoria');
            $cat = $request->request->get('categoria');

            $categoria = $em->getRepository('AppBundle:Categoria')->find($cat);
            $subcategoria = new Subcategoria();
            $subcategoria->setNombre($nombre);
            $subcategoria->setSubcategoria($subcat);
            $subcategoria->setCategoriaid($categoria);

            $em = $this->getDoctrine()->getManager();
            $em->persist($subcategoria);
            $em->flush();
            return $this->redirectToRoute('subcat_ver');
        }

        return $this->render('subcategoria/insertar.html.twig', array('cat' => $categoria));
    }

    /**
     * @Route("/subcategoria/actualizar/{id}", name="subcat_actualizar")
     */
    public function ActualizarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $subcategoria = $em->getRepository('AppBundle:Subcategoria')->find($id);
        $categoria = $em->getRepository('AppBundle:Categoria')->findAll();
        if ($request->request->count() >= 1) {

            $nombre = $request->request->get('nombre');
            $subcat = $request->request->get('subcategoria');
            $cat = $request->request->get('categoria');

            $categoria = $em->getRepository('AppBundle:Categoria')->find($cat);

            $subcategoria->setNombre($nombre);
            $subcategoria->setSubcategoria($subcat);
            $subcategoria->setCategoriaid($categoria);
            $em = $this->getDoctrine()->getManager();
            $em->persist($subcategoria);
            $em->flush();
            return $this->redirectToRoute('subcat_ver');
        }

        return $this->render('subcategoria/actualizar.html.twig', array('subcat' => $subcategoria, 'cat' => $categoria));
    }

    /**
     * @Route("/subcategoria/eliminar/{id}", name="subcat_eliminar")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $subcategoria = $em->getRepository('AppBundle:Subcategoria')->find($id);
        //
        $query = $em->createQuery('SELECT p FROM AppBundle:Productos p WHERE p.subcategoriaid=' . $id . '');
        $exist = $query->getResult();
        if ($exist == '' || $exist == null) {
            $em->remove($subcategoria);
            $em->flush();
            return $this->redirectToRoute('subcat_ver');
        } else  return $this->render('subcategoria/error/error.html.twig');
    }
}