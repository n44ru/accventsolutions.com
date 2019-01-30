<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT(p.id) FROM AppBundle:Solicitud p WHERE p.procesada = ?1');
        $query->setParameter(1,'NO');
        $max = $query->getResult();
        $this->get('twig')->addGlobal('max', $max);
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/admin", name="admin_ver")
     */
    public function adminAction()
    {
        return $this->render('default/admin.html.twig');
    }
}
