<?php

namespace AppBundle\Controller\Productos;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Datosklip;
use AppBundle\Entity\Productos;

class KlipController extends Controller
{
    /**
     * @Route("/producto/detalles/klip/{id}", name="klip_detalles_ver")
     */
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $query = $em->createQuery('SELECT d FROM AppBundle:Datosklip d WHERE d.productosid ='.$id.'');
        $prod= $query->getResult();

        if($prod=='' ||$prod==null)
            return $this->render('productos/error/error.html.twig');

        $producto = $em->getRepository('AppBundle:Datosklip')->find($prod[0]);

        $producto_id = $em->getRepository('AppBundle:Productos')->find($id);

        $cat=$producto->getProductosid()->getCategoriaid()->getNombre();
        $sub_cat=$producto->getProductosid()->getSubcategoriaid()->getNombre();

        // The Return
        $myreturn="";

        //KLIP HEADPHONES
        if(strtoupper($cat) == "AUDIO & VIDEO")
        {if(strtoupper($sub_cat) == "HEADPHONES" || strtoupper($sub_cat) == "HEADPHONES & HEADSETS")
            {$myreturn = "KLIP HEADPHONES";}}
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "HEADPHONES & HEADSETS")
        {$myreturn = "KLIP HEADPHONES";}}
        //
        //KLIP HEADSETS
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "EAR PHONES & EAR CLIPS")
        {$myreturn = "KLIP HEADSETS";}}
        //
        //MOBILE HEADSETS
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "HEADPHONES & HEADSETS MOBILE")
        {$myreturn = "MOBILE HEADSETS";}}
        //
        //Audio ACCESORIES
        if(strtoupper($cat) == "AUDIO & VIDEO")
        {if(strtoupper($sub_cat) == "PORTABLE MEDIA PLAYERS" || strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "AUDIO ACCESORIES";}}
        //
        //Cameras & Camcorders
        if(strtoupper($cat) == "CAMERAS & CAMCORDERS")
        {if(strtoupper($sub_cat) == "WEBCAMS")
        {$myreturn = "CAMERAS & CAMCORDERS";}}
        //
        //Carrying Cases & Backs
        if(strtoupper($cat) == "CARRYING CASES")
        {if(strtoupper($sub_cat) == "CAMERA & VIDEO CASES")
        {$myreturn = "C_CASES";}}

        if(strtoupper($cat) == "CARRYING CASES")
        {if(strtoupper($sub_cat) == "CELL PHONE CASES")
        {$myreturn = "CELLPHONES CASES";}}

        //
        //Notebook Accessories
        if(strtoupper($cat) == "COMPUTER ACCESSORIES")
        {if(strtoupper($sub_cat) == "NOTEBOOK ACCESSORIES")
        {$myreturn = "C_CASES";}}
        //
        //Notebook Accessories
        if(strtoupper($cat) == "CARRYING CASES")
        {if(strtoupper($sub_cat) == "CARRYING BACKPACKS")
        {$myreturn = "C_CASES";}}
        //
        //CD-DVD Wallets
        if(strtoupper($cat) == "CARRYING CASES")
        {if(strtoupper($sub_cat) == "CD / DVD WALLETS")
        {$myreturn = "CD-DVD WALLETS";}}
        //
        //Cellphone Cases
        if(strtoupper($cat) == "CELL PHONES")
        {if(strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "CELLPHONES CASES";}}
        //
        //Notebook Carrying Case
        if(strtoupper($cat) == "CARRYING CASES")
        {if(strtoupper($sub_cat) == "NOTEBOOK CARRYING CASES")
        {$myreturn = "NOTEBOOK_CASES";}}
        //
        //Comp. Peripherals
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "MICE" || strtoupper($sub_cat) == "MICROPHONE" || strtoupper($sub_cat) == "KEYBOARD" || strtoupper($sub_cat) == "KEYBOARD & MOUSE")
        {$myreturn = "COMP_PERI";}}
        //
        //Comp. Speakers Peripherals
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "SPEAKERS")
        {$myreturn = "COMP_SPEAKERS";}}
        //
        //Consumables & Media
        if(strtoupper($cat) == "CONSUMABLES & MEDIA")
        {if(strtoupper($sub_cat) == "PAPERS")
        {$myreturn = "PAPERS";}}
        //
        //Memories Readers
        if(strtoupper($cat) == "MEMORIES")
        {if(strtoupper($sub_cat) == "MEMORY MEDIA READERS")
        {$myreturn = "MEMORY_READERS";}}
        //
        //Monitor & Projectors
        if(strtoupper($cat) == "MONITORS & PROJECTORS")
        {if(strtoupper($sub_cat) == "PROJECTION SCREENS" || strtoupper($sub_cat) == "ACCESSORIES" || strtoupper($sub_cat) == "OTHER")
        {$myreturn = "MONITORS_PROJECTORS";}}

        //
        //Power Protection
        if(strtoupper($cat) == "ACCESSORIES")
        {if(strtoupper($sub_cat) == "POWER DEVICES, CHARGERS & BATTERIES")
        {$myreturn = "POWER_PROTECTION";}}
        //
        //Power Protection
        if(strtoupper($cat) == "POWER PROTECTION")
        {if(strtoupper($sub_cat) == "UPS / BATTERY BACKUP")
        {$myreturn = "POWER_PROTECTION";}}
        //
        //Accessories
        //Cables & Adapters
        if(strtoupper($cat) == "ACCESSORIES")
        {if(strtoupper($sub_cat) == "USB HUBS" || strtoupper($sub_cat) == "CLEANING KITS & DUST COVERS" || strtoupper($sub_cat) == "CABLES & ADAPTERS" || strtoupper($sub_cat) == "NOTEBOOK ACCESSORIES" || strtoupper($sub_cat) == "OTHER ACCESSORIES" || strtoupper($sub_cat) == "UNCATEGORIZED")
        {$myreturn = "ACCESSORIES";}}
        //

        if ($request->request->count() > 1) {
                $this->Insert_Common($request,$producto,$producto_id);
        }
        //
        if($myreturn=="KLIP HEADPHONES")
        {
            return $this->render('productos/detalles/klip/KLIP_HEADPHONES.html.twig', array('klips' => $prod));
        }
        if($myreturn=="KLIP HEADSETS")
        {
            return $this->render('productos/detalles/klip/KLIP_HEADSETS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="MOBILE HEADSETS")
        {
            return $this->render('productos/detalles/klip/MOBILE_HEADSETS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="AUDIO ACCESORIES")
        {
            return $this->render('productos/detalles/klip/AUDIO_ACCESORIES.html.twig', array('klips' => $prod));
        }
        if($myreturn=="CAMERAS & CAMCORDERS")
        {
            return $this->render('productos/detalles/klip/CAMERAS_CAMCORDERS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="C_CASES")
        {
            return $this->render('productos/detalles/klip/C_CASES.html.twig', array('klips' => $prod));
        }
        if($myreturn=="CD-DVD WALLETS")
        {
            return $this->render('productos/detalles/klip/CD_DVD_WALLETS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="CELLPHONES CASES")
        {
            return $this->render('productos/detalles/klip/CELLPHONES_CASES.html.twig', array('klips' => $prod));
        }
        if($myreturn=="NOTEBOOK_CASES")
        {
            return $this->render('productos/detalles/klip/NOTEBOOK_CASES.html.twig', array('klips' => $prod));
        }
        if($myreturn=="COMP_PERI")
        {
            return $this->render('productos/detalles/klip/COMP_PERI.html.twig', array('klips' => $prod));
        }
        if($myreturn=="COMP_SPEAKERS")
        {
            return $this->render('productos/detalles/klip/COMP_SPEAKERS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="PAPERS")
        {
            return $this->render('productos/detalles/klip/PAPERS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="MEMORY_READERS")
        {
            return $this->render('productos/detalles/klip/MEMORY_READERS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="MONITORS_PROJECTORS")
        {
            return $this->render('productos/detalles/klip/MONITORS_PROJECTORS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="POWER_PROTECTION")
        {
            return $this->render('productos/detalles/klip/POWER_PROTECTION.html.twig', array('klips' => $prod));
        }
        if($myreturn=="ACCESSORIES")
        {
            return $this->render('productos/detalles/klip/ACCESSORIES.html.twig', array('klips' => $prod));
        }
        return $this->redirectToRoute('producto_ver');

    }
    public function Insert_Common(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $producto->setk1($request->request->get('k1'));
        $producto->setk2($request->request->get('k2'));
        $producto->setk3($request->request->get('k3'));
        $producto->setk4($request->request->get('k4'));
        $producto->setk5($request->request->get('k5'));
        $producto->setk6($request->request->get('k6'));
        $producto->setk7($request->request->get('k7'));
        $producto->setk8($request->request->get('k8'));
        $producto->setk9($request->request->get('k9'));
        $producto->setk10($request->request->get('k10'));
        $producto->setk11($request->request->get('k11'));
        $producto->setk12($request->request->get('k12'));
        $producto->setk13($request->request->get('k13'));
        $producto->setk14($request->request->get('k14'));
        $producto->setk15($request->request->get('k15'));
        $producto->setk16($request->request->get('k16'));
        $producto->setk17($request->request->get('k17'));
        $producto->setk18($request->request->get('k18'));
        $producto->setk19($request->request->get('k19'));
        $producto->setk20($request->request->get('k20'));
        $producto->setk21($request->request->get('k21'));
        $producto->setk22($request->request->get('k22'));
        $producto->setk23($request->request->get('k23'));
        $producto->setk24($request->request->get('k24'));
        $producto->setk25($request->request->get('k25'));
        $producto->setk26($request->request->get('k26'));
        $producto->setk27($request->request->get('k27'));
        $producto->setk28($request->request->get('k28'));
        $producto->setk29($request->request->get('k29'));
        $producto->setk30($request->request->get('k30'));
        //
        $producto->setProductosid($id);
        //
        $em->persist($producto);
        $em->flush();
    }
}