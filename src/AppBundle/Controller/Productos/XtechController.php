<?php
/**
 * Created by PhpStorm.
 * User: Carlos M
 * Date: 03/06/2016
 * Time: 06:23
 */

namespace AppBundle\Controller\Productos;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Datosxtech;
class XtechController extends Controller
{
    /**
     * @Route("/producto/detalles/xtech/{id}", name="xtech_detalles_ver")
     */
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $query = $em->createQuery('SELECT d FROM AppBundle:Datosxtech d WHERE d.productosid ='.$id.'');
        $prod= $query->getResult();
        //
        if($prod=='' ||$prod==null)
            return $this->render('productos/error/error.html.twig');

        $producto = $em->getRepository('AppBundle:Datosxtech')->find($prod[0]);
        $producto_id = $em->getRepository('AppBundle:Productos')->find($id);

        $cat=$producto->getProductosid()->getCategoriaid()->getNombre();
        $sub_cat=$producto->getProductosid()->getSubcategoriaid()->getNombre();

        // The Return
        $myreturn="";

        //PC KITS
        if(strtoupper($cat) == "COMPUTER COMPONENTS")
        {if(strtoupper($sub_cat) == "CASES")
        {$myreturn = "1_PC_KITS";}}
        //CHASIS
        if(strtoupper($cat) == "COMPUTER COMPONENTS")
        {if(strtoupper($sub_cat) == "CASES CHASIS")
        {$myreturn = "2_CHASIS";}}
        //POWER SUPPLIES
        if(strtoupper($cat) == "COMPUTER COMPONENTS")
        {if(strtoupper($sub_cat) == "POWER SUPPLIES")
        {$myreturn = "3_POWER_SUPPLIES";}}
        //BAGS
        if(strtoupper($cat) == "CARRYING CASES")
        {if(strtoupper($sub_cat) == "CARRYING BACKPACKS")
        {$myreturn = "4_BAGS";}}
        //MINI KEYBOARD
        if(strtoupper($cat) == "COMPUTER ACCESSORIES")
        {if(strtoupper($sub_cat) == "TABLET ACCESSORIES")
        {$myreturn = "5_MINI_KEYBOARD";}}
        //KEYBOARDS & MOUSE
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "KEYBOARDS & KEYPADS")
        {$myreturn = "6_KEYBOARD_MOUSE";}}
        //
        //KEYBOARDS
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "KEYBOARDS")
        {$myreturn = "7_KEYBOARD";}}
        //
        //MICE
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "MICE")
        {$myreturn = "8_MICE";}}
        //
        //HEADSETS
        if(strtoupper($cat) == "HEADSETS")
        {if(strtoupper($sub_cat) == "HEADPHONE & HEADSETS")
        {$myreturn = "9_HEADSETS";}}
        //
        //SPEAKERS
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "SPEAKERS")
        {$myreturn = "10_SPEAKERS";}}
        //
        //ACCESORIES Mouse Pad
        if(strtoupper($cat) == "COMPUTER ACCESSORIES")
        {if(strtoupper($sub_cat) == "MOUSE PADS & WRIST PADS")
        {$myreturn = "11_MOUSE_PADS";}}
        //
        //ACCESORIES Brackets
        if(strtoupper($cat) == "MONITORS & PROJECTORS")
        {if(strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "12_ACCESORIES_BRACKETS";}}
        //
        //ACCESORIES Webcams
        if(strtoupper($cat) == "CAMERAS & CAMCORDERS")
        {if(strtoupper($sub_cat) == "WEBCAMS")
        {$myreturn = "13_WEBCAMS";}}
        //
        //ACCESORIES Card Reader
        if(strtoupper($cat) == "MEMORIES")
        {if(strtoupper($sub_cat) == "MEMORY MEDIA READERS")
        {$myreturn = "14_CARD_READER";}}
        //
        //ACCESORIES Cooling
        if(strtoupper($cat) == "COMPUTER ACCESSORIES")
        {if(strtoupper($sub_cat) == "NOTEBOOK ACCESSORIES COOLING")
        {$myreturn = "15_COOLING";}}
        //
        //ACCESORIES Lock
        if(strtoupper($cat) == "COMPUTER ACCESSORIES")
        {if(strtoupper($sub_cat) == "NOTEBOOK ACCESSORIES LOCK")
        {$myreturn = "16_LOCK";}}
        //
        //ACCESORIES Sata USB
        if(strtoupper($cat) == "STORAGE")
        {if(strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "17_SATA_USB";}}
        //
        //ACCESORIES Stick
        if(strtoupper($cat) == "CELLPHONES")
        {if(strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "18_STICK";}}
        //
        //CHAIRS
        if(strtoupper($cat) == "FURNITURE")
        {if(strtoupper($sub_cat) == "CHAIR")
        {$myreturn = "19_CHAIR";}}
        //
        //FURNITURE
        if(strtoupper($cat) == "FURNITURE")
        {if(strtoupper($sub_cat) == "DESK")
        {$myreturn = "20_DESK";}}
        //
        //CABLES & ADAPTERS-3.5mm
        if(strtoupper($cat) == "ACCESSORIES")
        {if(strtoupper($sub_cat) == "CABLES & ADAPTERS 3.5MM")
        {$myreturn = "21_CABLE_35";}}
        //
        //CABLES & ADAPTERS-Display-Slim
        if(strtoupper($cat) == "ACCESSORIES")
        {if(strtoupper($sub_cat) == "CABLES & ADAPTERS DISPLAY-SLIM")
        {$myreturn = "22_CABLE_SLIM";}}
        //
        //CABLES & ADAPTERS-DVI
        if(strtoupper($cat) == "ACCESSORIES")
        {if(strtoupper($sub_cat) == "CABLES & ADAPTERS DVI")
        {$myreturn = "23_CABLE_DVI";}}
        //
        //CABLES & ADAPTERS-Ethernet
        if(strtoupper($cat) == "COMPUTER ACCESSORIES")
        {if(strtoupper($sub_cat) == "CABLES ETHERNET")
        {$myreturn = "24_ETHERNET";}}
        //
        //CABLES & ADAPTERS HDMI
        if(strtoupper($cat) == "HDMI CABLE")
        {if(strtoupper($sub_cat) == "VIDEO")
        {$myreturn = "25_HDMI";}}
        //
        //CABLES & ADAPTERS-PRINTER
        if(strtoupper($cat) == "PRINTER")
        {if(strtoupper($sub_cat) == "PRINTER CABLES PARALLEL")
        {$myreturn = "26_PRINTERS_CABLES";}}
        //
        //CABLES & ADAPTERS-POWER
        if(strtoupper($cat) == "POWER CABLE")
        {if(strtoupper($sub_cat) == "POWER CORDS")
        {$myreturn = "27_POWER_CABLE";}}
        //
        //CABLES & ADAPTERS-SATA
        if(strtoupper($cat) == "SERIAL CABLE")
        {if(strtoupper($sub_cat) == "SATA CABLE HDD")
        {$myreturn = "28_SATA";}}
        //
        //CABLES & ADAPTERS-USB
        if(strtoupper($cat) == "USB CABLE")
        {if(strtoupper($sub_cat) == "USB")
        {$myreturn = "29_USB";}}
        //
        //CABLES & ADAPTERS-VGA
        if(strtoupper($cat) == "VGA CABLE")
        {if(strtoupper($sub_cat) == "VGA")
        {$myreturn = "30_VGA";}}
        //
        //CABLES & ADAPTERS-UTP
        if(strtoupper($cat) == "UTP CABLE")
        {if(strtoupper($sub_cat) == "UTP")
        {$myreturn = "31_UTP";}}
        //
        //CABLES & ADAPTERS-Video
        if(strtoupper($cat) == "VIDEO")
        {if(strtoupper($sub_cat) == "BNC CABLE WITH POWER")
        {$myreturn = "32_VIDEO";}}
        //
        //CABLES & ADAPTERS-Video
        if(strtoupper($cat) == "PRINTER")
        {if(strtoupper($sub_cat) == "PRINTER CABLE")
        {$myreturn = "33_PRINTER";}}
        //
        //TOOL KITS
        if(strtoupper($cat) == "NETWORKING")
        {if(strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "34_TOOL_KITS";}}
        //
        //TOOL KITS
        if(strtoupper($cat) == "COMPUTER PERIPHERALS")
        {if(strtoupper($sub_cat) == "HEADPHONE & HEADSETS")
        {$myreturn = "35_ON_THE_GO";}}
        //
        //TOOL KITS
        if(strtoupper($cat) == "COMPUTER ACCESSORIES")
        {if(strtoupper($sub_cat) == "CABLES")
        {$myreturn = "35_ON_THE_GO";}}
        //
        //ON-THE-GO Chargers
        if(strtoupper($cat) == "POWER PROTECTION")
        {if(strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "36_CHARGERS";}}
        //
        //XTECH UPS
        if(strtoupper($cat) == "POWER PROTECTION" || strtoupper($cat) == "XTECH UPS")
        {if(strtoupper($sub_cat) == "VOLTAGE / LINE REGULATORS")
        {$myreturn = "37_UPS";}}
        //
        //DISPLAY HARDWARE
        if(strtoupper($cat) == "SECURITY")
        {if(strtoupper($sub_cat) == "ACCESSORIES")
        {$myreturn = "38_DISPLAY_HARDWARE";}}
        //

        if ($request->request->count() > 1) {
            $this->Insert_Common($request,$producto,$producto_id);
        }
        //
        if($myreturn=="1_PC_KITS")
        {
            return $this->render('productos/detalles/xtech/1_PC_KITS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="2_CHASIS")
        {
            return $this->render('productos/detalles/xtech/2_CHASIS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="3_POWER_SUPPLIES")
        {
            return $this->render('productos/detalles/xtech/3_POWER_SUPPLIES.html.twig', array('klips' => $prod));
        }
        if($myreturn=="4_BAGS")
        {
            return $this->render('productos/detalles/xtech/4_BAGS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="5_MINI_KEYBOARD")
        {
            return $this->render('productos/detalles/xtech/5_MINI_KEYBOARD.html.twig', array('klips' => $prod));
        }
        if($myreturn=="6_KEYBOARD_MOUSE")
        {
            return $this->render('productos/detalles/xtech/6_KEYBOARD_MOUSE.html.twig', array('klips' => $prod));
        }
        if($myreturn=="7_KEYBOARD")
        {
            return $this->render('productos/detalles/xtech/7_KEYBOARD.html.twig', array('klips' => $prod));
        }
        if($myreturn=="8_MICE")
        {
            return $this->render('productos/detalles/xtech/8_MICE.html.twig', array('klips' => $prod));
        }
        if($myreturn=="9_HEADSETS")
        {
            return $this->render('productos/detalles/xtech/9_HEADSETS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="10_SPEAKERS")
        {
            return $this->render('productos/detalles/xtech/10_SPEAKERS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="11_MOUSE_PADS")
        {
            return $this->render('productos/detalles/xtech/11_MOUSE_PADS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="12_ACCESORIES_BRACKETS")
        {
            return $this->render('productos/detalles/xtech/12_ACCESORIES_BRACKETS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="13_WEBCAMS")
        {
            return $this->render('productos/detalles/xtech/13_WEBCAMS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="14_CARD_READER")
        {
            return $this->render('productos/detalles/xtech/14_CARD_READER.html.twig', array('klips' => $prod));
        }
        if($myreturn=="15_COOLING")
        {
            return $this->render('productos/detalles/xtech/15_COOLING.html.twig', array('klips' => $prod));
        }
        if($myreturn=="16_LOCK")
        {
            return $this->render('productos/detalles/xtech/16_LOCK.html.twig', array('klips' => $prod));
        }
        if($myreturn=="17_SATA_USB")
        {
            return $this->render('productos/detalles/xtech/17_SATA_USB.html.twig', array('klips' => $prod));
        }
        if($myreturn=="18_STICK")
        {
            return $this->render('productos/detalles/xtech/18_STICK.html.twig', array('klips' => $prod));
        }
        if($myreturn=="19_CHAIR")
        {
            return $this->render('productos/detalles/xtech/19_CHAIR.html.twig', array('klips' => $prod));
        }
        if($myreturn=="20_DESK")
        {
            return $this->render('productos/detalles/xtech/20_DESK.html.twig', array('klips' => $prod));
        }
        if($myreturn=="21_CABLE_35")
        {
            return $this->render('productos/detalles/xtech/21_CABLE_35.html.twig', array('klips' => $prod));
        }
        if($myreturn=="22_CABLE_SLIM")
        {
            return $this->render('productos/detalles/xtech/22_CABLE_SLIM.html.twig', array('klips' => $prod));
        }
        if($myreturn=="23_CABLE_DVI")
        {
            return $this->render('productos/detalles/xtech/23_CABLE_DVI.html.twig', array('klips' => $prod));
        }
        if($myreturn=="24_ETHERNET")
        {
            return $this->render('productos/detalles/xtech/24_ETHERNET.html.twig', array('klips' => $prod));
        }
        if($myreturn=="25_HDMI")
        {
            return $this->render('productos/detalles/xtech/25_HDMI.html.twig', array('klips' => $prod));
        }
        if($myreturn=="26_PRINTERS_CABLES")
        {
            return $this->render('productos/detalles/xtech/26_PRINTERS_CABLES.html.twig', array('klips' => $prod));
        }
        if($myreturn=="27_POWER_CABLE")
        {
            return $this->render('productos/detalles/xtech/27_POWER_CABLE.html.twig', array('klips' => $prod));
        }
        if($myreturn=="28_SATA")
        {
            return $this->render('productos/detalles/xtech/28_SATA.html.twig', array('klips' => $prod));
        }
        if($myreturn=="29_USB")
        {
            return $this->render('productos/detalles/xtech/29_USB.html.twig', array('klips' => $prod));
        }
        if($myreturn=="30_VGA")
        {
            return $this->render('productos/detalles/xtech/30_VGA.html.twig', array('klips' => $prod));
        }
        if($myreturn=="31_UTP")
        {
            return $this->render('productos/detalles/xtech/31_UTP.html.twig', array('klips' => $prod));
        }
        if($myreturn=="32_VIDEO")
        {
            return $this->render('productos/detalles/xtech/32_VIDEO.html.twig', array('klips' => $prod));
        }
        if($myreturn=="33_PRINTER")
        {
            return $this->render('productos/detalles/xtech/33_PRINTER.html.twig', array('klips' => $prod));
        }
        if($myreturn=="34_TOOL_KITS")
        {
            return $this->render('productos/detalles/xtech/34_TOOL_KITS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="35_ON_THE_GO")
        {
            return $this->render('productos/detalles/xtech/35_ON_THE_GO.html.twig', array('klips' => $prod));
        }
        if($myreturn=="36_CHARGERS")
        {
            return $this->render('productos/detalles/xtech/36_CHARGERS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="37_UPS")
        {
            return $this->render('productos/detalles/xtech/37_UPS.html.twig', array('klips' => $prod));
        }
        if($myreturn=="38_DISPLAY_HARDWARE")
        {
            return $this->render('productos/detalles/xtech/38_DISPLAY_HARDWARE.html.twig', array('klips' => $prod));
        }
        return $this->redirectToRoute('producto_ver');

    }
    public function Insert_Common(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $producto->setx1($request->request->get('x1'));
        $producto->setx2($request->request->get('x2'));
        $producto->setx3($request->request->get('x3'));
        $producto->setx4($request->request->get('x4'));
        $producto->setx5($request->request->get('x5'));
        $producto->setx6($request->request->get('x6'));
        $producto->setx7($request->request->get('x7'));
        $producto->setx8($request->request->get('x8'));
        $producto->setx9($request->request->get('x9'));
        $producto->setx10($request->request->get('x10'));
        $producto->setx11($request->request->get('x11'));
        $producto->setx12($request->request->get('x12'));
        $producto->setx13($request->request->get('x13'));
        $producto->setx14($request->request->get('x14'));
        $producto->setx15($request->request->get('x15'));
        $producto->setx16($request->request->get('x16'));
        $producto->setx17($request->request->get('x17'));
        $producto->setx18($request->request->get('x18'));
        $producto->setx19($request->request->get('x19'));
        $producto->setx20($request->request->get('x20'));
        $producto->setx21($request->request->get('x21'));
        $producto->setx22($request->request->get('x22'));
        $producto->setx23($request->request->get('x23'));
        $producto->setx24($request->request->get('x24'));
        $producto->setx25($request->request->get('x25'));
        $producto->setx26($request->request->get('x26'));
        $producto->setx27($request->request->get('x27'));
        $producto->setx28($request->request->get('x28'));
        $producto->setx29($request->request->get('x29'));
        $producto->setx30($request->request->get('x30'));
        $producto->setx31($request->request->get('x31'));
        $producto->setx32($request->request->get('x32'));
        $producto->setx33($request->request->get('x33'));
        $producto->setx34($request->request->get('x34'));
        $producto->setx35($request->request->get('x35'));
        $producto->setx36($request->request->get('x36'));
        $producto->setx37($request->request->get('x37'));
        $producto->setx38($request->request->get('x38'));
        $producto->setx39($request->request->get('x39'));
        $producto->setx40($request->request->get('x40'));
        $producto->setx41($request->request->get('x41'));
        $producto->setx42($request->request->get('x42'));
        $producto->setx43($request->request->get('x43'));
        $producto->setx44($request->request->get('x44'));
        $producto->setx45($request->request->get('x45'));
        $producto->setx46($request->request->get('x46'));
        $producto->setx47($request->request->get('x47'));
        $producto->setx48($request->request->get('x48'));
        $producto->setx49($request->request->get('x49'));
        $producto->setx50($request->request->get('x50'));
        $producto->setx51($request->request->get('x51'));
        $producto->setx52($request->request->get('x52'));
        $producto->setx53($request->request->get('x53'));
        $producto->setx54($request->request->get('x54'));
        $producto->setx55($request->request->get('x55'));
        $producto->setx56($request->request->get('x56'));
        $producto->setx57($request->request->get('x57'));
        $producto->setx58($request->request->get('x58'));
        $producto->setx59($request->request->get('x59'));
        $producto->setx60($request->request->get('x60'));
        $producto->setx61($request->request->get('x61'));
        $producto->setx62($request->request->get('x62'));
        $producto->setx63($request->request->get('x63'));
        $producto->setx64($request->request->get('x64'));
        $producto->setx65($request->request->get('x65'));
        $producto->setx66($request->request->get('x66'));
        $producto->setx67($request->request->get('x67'));
        $producto->setx68($request->request->get('x68'));
        $producto->setx69($request->request->get('x69'));
        $producto->setx70($request->request->get('x70'));
        $producto->setx71($request->request->get('x71'));
        $producto->setx72($request->request->get('x72'));
        $producto->setx73($request->request->get('x73'));
        $producto->setx74($request->request->get('x74'));
        $producto->setx75($request->request->get('x75'));
        $producto->setx76($request->request->get('x76'));
        $producto->setx77($request->request->get('x77'));
        $producto->setx78($request->request->get('x78'));
        $producto->setx79($request->request->get('x79'));
        $producto->setx80($request->request->get('x80'));
        $producto->setx81($request->request->get('x81'));
        //
        $producto->setProductosid($id);
        //
        $em->persist($producto);
        $em->flush();
    }
}