<?php
// src/AppBundle/Controller/SecurityController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'default/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error' => $error,
            )
        );
    }
    /**
     * @Route("/logout", name="user_logout")
     */
    public function logoutAction(Request $request)
    {
    }

    /**
     * @Route("/admin/myuser/edit/{id}", name="myuser_edit")
     */
    public function myusereditAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);
        //
        if ($request->request->count() > 1) {
            $pass = $request->request->get('password1');
            if ($pass != '' || $pass != null) {
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($user);
                $password = $encoder->encodePassword($pass, $user->getSalt());
                //
                $user->setPassword($password);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }

        return $this->render('user/editar.html.twig', array('user' => $user));
    }

    /**
     * @Route("/admin/user/", name="user_view")
     */
    public function userviewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('admin/ver.html.twig', array('users' => $users));
    }

    /**
     * @Route("/admin/user/create", name="user_create")
     */
    public function usercreateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->request->count() > 1) {
            $nombre = $request->request->get('username');
            $query = $em->createQuery('SELECT p FROM AppBundle:User p WHERE p.username = ?1 ');
            $query->setParameter(1, $nombre);
            $resultado = $query->getResult();
            if($resultado!=null)
            {
                $mensaje=array('mensaje'=>$nombre);
                return $this->render('admin/error/messages.html.twig', array('msg' => $mensaje));
            }
            $pass = $request->request->get('password1');
            $roles = $request->request->get('rol');

            $user = new User();
            $user->setUsername($nombre);
            //Cifra la contraseña
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($pass, $user->getSalt());
            //
            $user->setPassword($password);
            //
            $final_rol = '';
            if ($roles == 'user')
                $final_rol = 'ROLE_USER';
            elseif ($roles == 'tec')
                $final_rol = 'ROLE_TEC';
            elseif ($roles == 'admin')
                $final_rol = 'ROLE_ADMIN';
            $user->setRoles($final_rol);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_view');
        }

        return $this->render('admin/insertar.html.twig');
    }

    /**
     * @Route("/admin/user/edit/{id}", name="user_edit_admin")
     */
    public function usereditAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);
        //
        if ($request->request->count() > 1) {
            $nombre = $request->request->get('username');
            $pass = $request->request->get('password1');
            $roles = $request->request->get('rol');

            if ($pass != '12345678') {
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($user);
                $password = $encoder->encodePassword($pass, $user->getSalt());
                //
                $user->setPassword($password);
            }
            //
            $final_rol = '';
            if ($roles != null || $roles != '') {
                if ($roles == 'user')
                    $final_rol = 'ROLE_USER';
                elseif ($roles == 'tec')
                    $final_rol = 'ROLE_TEC';
                elseif ($roles == 'admin')
                    $final_rol = 'ROLE_ADMIN';
                $user->setRoles($final_rol);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_view');
        }

        return $this->render('admin/editar.html.twig', array('user' => $user));
    }

    /**
     * @Route("/admin/user/delete/{id}", name="user_delete")
     */
    public function EliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        // Eliminando las relaciones en Solicitudes.
        $query_2 = $em->createQuery('DELETE FROM AppBundle:Solicitud m WHERE m.userid = '.$id.'');
        $query_2->getResult();
        //
        $user = $em->getRepository('AppBundle:User')->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('user_view');
    }
}