<?php

namespace AppBundle\Controller\Productos;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Datosforza;
use AppBundle\Entity\Productos;

class ForzaController extends Controller
{
    /**
     * @Route("/producto/detalles/forza/{id}", name="forza_detalles_ver")
     */
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $query = $em->createQuery('SELECT d FROM AppBundle:Datosforza d WHERE d.productosid =' . $id . '');
        $prod = $query->getResult();

        if ($prod == '' || $prod == null)
            return $this->render('productos/error/error.html.twig');
        //
        $producto = $em->getRepository('AppBundle:Datosforza')->find($prod[0]);
        //IF
        $cat = $producto->getProductosid()->getCategoriaid()->getNombre();
        $sub_cat = $producto->getProductosid()->getSubcategoriaid()->getNombre();
        //

        // The Return
        $myreturn = "";
        //

        //CABLES
        if (strtoupper($cat) == "ACCESSORIES") {
            if (strtoupper($sub_cat) == "CABLE") {
                $myreturn = "1_CABLES";
            }
        }
        //
        //NOTEBOOK CHARGERS
        if (strtoupper($cat) == "ACCESSORIES") {
            if (strtoupper($sub_cat) == "NOTEBOOK CHARGERS") {
                $myreturn = "2_CHARGERS";
            }
        }
        //
        //Chargers
        if (strtoupper($cat) == "ACCESSORIES") {
            if (strtoupper($sub_cat) == "CHARGERS") {
                $myreturn = "3_CHARGERS";
            }
        }
        //
        //OTHERS
        if (strtoupper($cat) == "ACCESSORIES") {
            if (strtoupper($sub_cat) == "NOTEBOOK ACCESSORIES") {
                $myreturn = "4_OTHERS_1";
            }
        }
        //
        //Batteries
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "UPS / BATTERY BACKUP") {
                $myreturn = "5_BATTERIES";
            }
        }
        //
        //NOTEBOOK_BATTERIES
        if (strtoupper($cat) == "ACCESSORIES") {
            if (strtoupper($sub_cat) == "NOTEBOOK BATTERIES") {
                $myreturn = "6_NOTEBOOK_BATTERIES";
            }
        }
        //
        //POWER_STRIP
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "POWER STRIP") {
                $myreturn = "7_POWER_STRIP";
            }
        }
        //
        //SURGE PROTECTORS RSO-RHT
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "SURGE PROTECTORS RSO-RHT") {
                $myreturn = "8_RSO_RHT";
            }
        }
        //
        //Surge Protectors FSP
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "SURGE PROTECTORS FSP") {
                $myreturn = "9_FSP";
            }
        }
        //
        //Voltage Protectors
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "VOLTAGE PROTECTORS") {
                $myreturn = "10_VOLTAGE_P";
            }
        }
        //
        //Voltage Protectors
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "VOLTAGE / LINE REGULATORS") {
                $myreturn = "11_VOLTAGE_LINE_R";
            }
        }
        //
        //INVERTERS
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "INVERTERS") {
                $myreturn = "12_INVERTERS";
            }
        }
        //
        //INVERTERS
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "UPS / INTERACTIVE") {
                $myreturn = "13_UPS_INT";
            }
        }
        //
        //UPS_ONLINE
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "UPS / BATTERY BACKUP ONLINE" || strtoupper($sub_cat) == "UPS / ONLINE") {
                $myreturn = "14_UPS_ONLINE";
            }
        }
        //
        //UPS_ONLINE
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "UPS / ONLINE FDC T-RT") {
                $myreturn = "15_FDC_T_RT";
            }
        }
        //
        //UPS_ONLINE
        if (strtoupper($cat) == "POWER PROTECTION") {
            if (strtoupper($sub_cat) == "UPS / ONLINE RACK") {
                $myreturn = "16_RACK";
            }
        }
        //
        //UPS_ONLINE
        if (strtoupper($cat) == "WALLTAP") {
            if (strtoupper($sub_cat) == "OUTLETS") {
                $myreturn = "17_OUTLETS";
            }
        }
        //
        //UPS_ONLINE
        if (strtoupper($cat) == "OTHERS") {
            if (strtoupper($sub_cat) == "OTHERS") {
                $myreturn = "18_OTHERS";
            }
        }
        //

        //
        $producto_id = $em->getRepository('AppBundle:Productos')->find($id);

        if ($request->request->count() > 1) {
            $this->Insert_Common($request,$producto,$producto_id);
        }

        if($myreturn=="1_CABLES")
        {
            return $this->render('productos/detalles/forza/new/1_CABLES.html.twig', array('forza' => $prod));
        }
        if($myreturn=="2_CHARGERS")
        {
            return $this->render('productos/detalles/forza/new/2_CHARGERS.html.twig', array('forza' => $prod));
        }
        if($myreturn=="3_CHARGERS")
        {
            return $this->render('productos/detalles/forza/new/3_CHARGERS.html.twig', array('forza' => $prod));
        }
        if($myreturn=="4_OTHERS_1")
        {
            return $this->render('productos/detalles/forza/new/4_OTHERS_1.html.twig', array('forza' => $prod));
        }
        if($myreturn=="4_OTHERS_2")
        {
            return $this->render('productos/detalles/forza/new/4_OTHERS_2.html.twig', array('forza' => $prod));
        }
        if($myreturn=="5_BATTERIES")
        {
            return $this->render('productos/detalles/forza/new/5_BATTERIES.html.twig', array('forza' => $prod));
        }
        if($myreturn=="6_NOTEBOOK_BATTERIES")
        {
            return $this->render('productos/detalles/forza/new/6_NOTEBOOK_BATTERIES.html.twig', array('forza' => $prod));
        }
        if($myreturn=="7_POWER_STRIP")
        {
            return $this->render('productos/detalles/forza/new/7_POWER_STRIP.html.twig', array('forza' => $prod));
        }
        if($myreturn=="8_RSO_RHT")
        {
            return $this->render('productos/detalles/forza/new/8_RSO_RHT.html.twig', array('forza' => $prod));
        }
        if($myreturn=="9_FSP")
        {
            return $this->render('productos/detalles/forza/new/9_FSP.html.twig', array('forza' => $prod));
        }
        if($myreturn=="10_VOLTAGE_P")
        {
            return $this->render('productos/detalles/forza/new/10_VOLTAGE_P.html.twig', array('forza' => $prod));
        }
        //
        if($myreturn=="11_VOLTAGE_LINE_R")
        {
            return $this->render('productos/detalles/forza/new/11_VOLTAGE_LINE_R.html.twig', array('forza' => $prod));
        }
        if($myreturn=="12_INVERTERS")
        {
            return $this->render('productos/detalles/forza/new/12_INVERTERS.html.twig', array('forza' => $prod));
        }
        if($myreturn=="13_UPS_INT")
        {
            return $this->render('productos/detalles/forza/new/13_UPS_INT.html.twig', array('forza' => $prod));
        }
        if($myreturn=="14_UPS_ONLINE")
        {
            return $this->render('productos/detalles/forza/new/14_UPS_ONLINE.html.twig', array('forza' => $prod));
        }
        if($myreturn=="15_FDC_T_RT")
        {
            return $this->render('productos/detalles/forza/new/15_FDC_T_RT.html.twig', array('forza' => $prod));
        }
        if($myreturn=="16_RACK")
        {
            return $this->render('productos/detalles/forza/new/16_RACK.html.twig', array('forza' => $prod));
        }
        if($myreturn=="17_OUTLETS")
        {
            return $this->render('productos/detalles/forza/new/17_OUTLETS.html.twig', array('forza' => $prod));
        }
        if($myreturn=="18_OTHERS")
        {
            return $this->render('productos/detalles/forza/new/18_OTHERS.html.twig', array('forza' => $prod));
        }
        return $this->redirectToRoute('producto_ver');

    }
    public function Insert_Common(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $producto->setf1($request->request->get('f1'));
        $producto->setf2($request->request->get('f2'));
        $producto->setf3($request->request->get('f3'));
        $producto->setf4($request->request->get('f4'));
        $producto->setf5($request->request->get('f5'));
        $producto->setf6($request->request->get('f6'));
        $producto->setf7($request->request->get('f7'));
        $producto->setf8($request->request->get('f8'));
        $producto->setf9($request->request->get('f9'));
        $producto->setf10($request->request->get('f10'));
        $producto->setf11($request->request->get('f11'));
        $producto->setf12($request->request->get('f12'));
        $producto->setf13($request->request->get('f13'));
        $producto->setf14($request->request->get('f14'));
        $producto->setf15($request->request->get('f15'));
        $producto->setf16($request->request->get('f16'));
        $producto->setf17($request->request->get('f17'));
        $producto->setf18($request->request->get('f18'));
        $producto->setf19($request->request->get('f19'));
        $producto->setf20($request->request->get('f20'));
        $producto->setf21($request->request->get('f21'));
        $producto->setf22($request->request->get('f22'));
        $producto->setf23($request->request->get('f23'));
        $producto->setf24($request->request->get('f24'));
        $producto->setf25($request->request->get('f25'));
        $producto->setf26($request->request->get('f26'));
        $producto->setf27($request->request->get('f27'));
        $producto->setf28($request->request->get('f28'));
        $producto->setf29($request->request->get('f29'));
        $producto->setf30($request->request->get('f30'));
        $producto->setf31($request->request->get('f31'));
        $producto->setf32($request->request->get('f32'));
        $producto->setf33($request->request->get('f33'));
        $producto->setf34($request->request->get('f34'));
        $producto->setf35($request->request->get('f35'));
        $producto->setf36($request->request->get('f36'));
        $producto->setf37($request->request->get('f37'));
        $producto->setf38($request->request->get('f38'));
        $producto->setf39($request->request->get('f39'));
        $producto->setf40($request->request->get('f40'));
        $producto->setf41($request->request->get('f41'));
        $producto->setf42($request->request->get('f42'));
        $producto->setf43($request->request->get('f43'));
        $producto->setf44($request->request->get('f44'));
        $producto->setf45($request->request->get('f45'));
        $producto->setf46($request->request->get('f46'));
        $producto->setf47($request->request->get('f47'));
        $producto->setf48($request->request->get('f48'));
        $producto->setf49($request->request->get('f49'));
        $producto->setf50($request->request->get('f50'));
        $producto->setf51($request->request->get('f51'));
        $producto->setf52($request->request->get('f52'));
        $producto->setf53($request->request->get('f53'));
        $producto->setf54($request->request->get('f54'));
        $producto->setf55($request->request->get('f55'));
        $producto->setf56($request->request->get('f56'));
        $producto->setf57($request->request->get('f57'));
        $producto->setf58($request->request->get('f58'));
        $producto->setf59($request->request->get('f59'));
        $producto->setf60($request->request->get('f60'));
        /*
        var_dump($request->request->get('f1'));
        var_dump($request->request->get('f2'));
        var_dump($request->request->get('f3'));
        die;*/
        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }

}