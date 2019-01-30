<?php

namespace AppBundle\Controller\Productos;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Datosnexxt;
use AppBundle\Entity\Productos;

class NexxtController extends Controller
{
    /**
     * @Route("/producto/detalles/nexxt/{id}", name="nexxt_detalles_ver")
     */
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $query = $em->createQuery('SELECT d FROM AppBundle:Datosnexxt d WHERE d.productosid ='.$id.'');
        $prod= $query->getResult();

        if($prod=='' ||$prod==null)
            return $this->render('productos/error/error.html.twig');
        //
        $producto = $em->getRepository('AppBundle:Datosnexxt')->find($prod[0]);
        //IF
        $cat=$producto->getProductosid()->getCategoriaid()->getNombre();
        $sub_cat=$producto->getProductosid()->getSubcategoriaid()->getNombre();
        //

        // The Return
        $myreturn="";
        //
        $producto_id = $em->getRepository('AppBundle:Productos')->find($id);
        // The Fix
        if(strtoupper($cat) == "COMPUTER COMPONENTS")
        {
            if(strtoupper($sub_cat) == "POWER SUPPLIES")
                {
                    if ($request->request->count() > 1) {
                        $this->Insert_Static($request, $producto, $producto_id);
                    }
                    return $this->render('productos/detalles/nexxt/new/1_OTHERS.html.twig', array('nexxt' => $prod));
                }
        }
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "TOOLS & TOOLKITS")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/1_OTHERS.html.twig', array('nexxt' => $prod));
            }
        }
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "TOOLS & TOOLKITS TESTER")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/2_TTTESTER.html.twig', array('nexxt' => $prod));
            }
        }
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "ACCESSORIES" || strtoupper($sub_cat) == "MOUNTS & WALL PLATES")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/1_OTHERS.html.twig', array('nexxt' => $prod));
            }
        }
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "CONNECTORS" || strtoupper($sub_cat) == "CONNECTORS CABLE")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/3_CONN.html.twig', array('nexxt' => $prod));
            }
        }
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "CONNECTORS" || strtoupper($sub_cat) == "CONNECTORS CABLE")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/3_CONN.html.twig', array('nexxt' => $prod));
            }
        }
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "CABLING ACCESSORIES CABLEMANAGE")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/4_CABLEMANAGE.html.twig', array('nexxt' => $prod));
            }
        }
        //5_FIBER_PANEL
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "CABLING ACCESSORIES FIBER PANEL")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/5_FIBER_PANEL.html.twig', array('nexxt' => $prod));
            }
        }
        //6_FIBER_CONNECT
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "CABLING ACCESSORIES FIBER CONNECT")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/6_FIBER_CONNECT.html.twig', array('nexxt' => $prod));
            }
        }
        //7_Fitting Accessories
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "FITTING ACCESSORIES")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/7_FITTING.html.twig', array('nexxt' => $prod));
            }
        }
        //8_Velcros
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "CABLING ACCESSORIES VELCROS")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/8_VELCROS.html.twig', array('nexxt' => $prod));
            }
        }
        //CABLING ACCESSORIES
        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "CABLING ACCESSORIES")
            {
                if ($request->request->count() > 1) {
                    $this->Insert_Static($request, $producto, $producto_id);
                }
                return $this->render('productos/detalles/nexxt/new/1_OTHERS.html.twig', array('nexxt' => $prod));
            }
        }


        if(strtoupper($cat) == "NETWORKING")
        {
            if(strtoupper($sub_cat) == "WIRELESS ROUTERS" || strtoupper($sub_cat) == "ACCESS POINTS" )
            {
                $myreturn = "WR";
            }
            elseif(strtoupper($sub_cat) == "HUBS & SWITCHES")
            {
                $myreturn = "HUBS";
            }
            elseif(strtoupper($sub_cat) == "ADAPTERS & CONTROLLERS" || strtoupper($sub_cat) == "OTHER" || strtoupper($sub_cat) == "MODEMS")
            {
                $myreturn = "ADA";
            }
            elseif(strtoupper($sub_cat) == "PRINT SERVERS")
            {
                $myreturn = "PSERV";
            }
            elseif(strtoupper($sub_cat) == "KITS")
            {
                $myreturn = "CAM";
            }
            elseif(strtoupper($sub_cat) == "SECURITY & MONITORING HARDWARE KITS")
            {
                $myreturn = "KITS";
            }
            elseif(strtoupper($sub_cat) == "CABLES")
            {
                $myreturn = "CABLE";
            }
            //new
            elseif(strtoupper($sub_cat) == "CABLING ACCESSORIES BOOTS")
            {
                $myreturn = "OTHER";
            }
            elseif(strtoupper($sub_cat) == "ANTENNAS")
            {
                $myreturn = "ANT";
            }
            elseif(strtoupper($sub_cat) == "MOUNTS & WALL PLATES")
            {
                $myreturn = "MOUNTS";
            }
            elseif(strtoupper($sub_cat) == "OTHER")
            {
                $myreturn = "OTHER";
            }
            elseif(strtoupper($sub_cat) == "RACKS, CABINETS & PATCH PANELS")
            {
                $myreturn = "RACKS";
            }
        }
        elseif(strtoupper($cat) == "SECURITY")
        {
            if(strtoupper($sub_cat) == "CAMERAS")
            {
                $myreturn = "CAM";
            }
            if(strtoupper($sub_cat) == "KITS")
            {
                $myreturn = "CCTV";
            }
        }
        elseif(strtoupper($cat) == "CAMERAS & CAMCORDERS")
        {
            if(strtoupper($sub_cat) == "SURVEILLANCE CAMERAS")
            {
                $myreturn = "CCTV";
            }
        }
        //

        if ($request->request->count() > 1) {
            if($myreturn== "WR")
            {
                $this->Insert_WR($request,$producto,$producto_id);
            }
            if($myreturn== "HUBS")
            {
                $this->Insert_Hub($request,$producto,$producto_id);
            }
            if($myreturn== "ADA")
            {
                $this->Insert_Ada($request,$producto,$producto_id);
            }
            if($myreturn== "CAM")
            {
                $this->Insert_Cam($request,$producto,$producto_id);
            }
            if($myreturn== "PSERV")
            {
                $this->Insert_PServ($request,$producto,$producto_id);
            }
            if($myreturn== "CCTV")
            {
                $this->Insert_Cam($request,$producto,$producto_id);
            }
            if($myreturn== "KITS")
            {
                $this->Insert_Kits($request,$producto,$producto_id);
            }
            if($myreturn== "CABLE")
            {
                $this->Insert_Cable($request,$producto,$producto_id);
            }
            if($myreturn== "ANT")
            {
                $this->Insert_Static($request,$producto,$producto_id);
            }
            if($myreturn== "ACC")
            {
                $this->Insert_Similars($request,$producto,$producto_id);
            }
            if($myreturn== "MOUNTS")
            {
                $this->Insert_Similars($request,$producto,$producto_id);
            }
            if($myreturn== "CONN")
            {
                $this->Insert_Connectors($request,$producto,$producto_id);
            }
            if($myreturn== "OTHER")
            {
                $this->Insert_Other($request,$producto,$producto_id);
            }
            if($myreturn== "RACKS")
            {
                $this->Insert_Racks($request,$producto,$producto_id);
            }
        }
        if($myreturn=="WR")
        {
            return $this->render('productos/detalles/nexxt/wirelessrouters.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn== "HUBS")
        {
            return $this->render('productos/detalles/nexxt/hubsandswitches.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "ADA")
        {
            return $this->render('productos/detalles/nexxt/adaptersandcontrollers.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "CAM")
        {
            return $this->render('productos/detalles/nexxt/cameras.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "PSERV")
        {
            return $this->render('productos/detalles/nexxt/printservers.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "CCTV")
        {
            return $this->render('productos/detalles/nexxt/cameras.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "KITS")
        {
            return $this->render('productos/detalles/nexxt/kits_cctv.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "CABLE")
        {
            return $this->render('productos/detalles/nexxt/cables.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "ANT")
        {
            return $this->render('productos/detalles/nexxt/new/1_OTHERS.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "ACC")
        {
            return $this->render('productos/detalles/nexxt/accesories.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "MOUNTS")
        {
            return $this->render('productos/detalles/nexxt/mounts.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "CONN")
        {
            return $this->render('productos/detalles/nexxt/connectors.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "OTHER")
        {
            return $this->render('productos/detalles/nexxt/other.html.twig', array('nexxt' => $prod));
        }
        elseif($myreturn == "RACKS")
        {
            return $this->render('productos/detalles/nexxt/racks.html.twig', array('nexxt' => $prod));
        }
        else {
            return $this->redirectToRoute('producto_ver');
        }
    }
    public function Insert_Static(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $producto->setn1($request->request->get('n1'));
        $producto->setn2($request->request->get('n2'));
        $producto->setn3($request->request->get('n3'));
        $producto->setn4($request->request->get('n4'));
        $producto->setn5($request->request->get('n5'));
        $producto->setn6($request->request->get('n6'));
        $producto->setn7($request->request->get('n7'));
        $producto->setn8($request->request->get('n8'));
        $producto->setn9($request->request->get('n9'));
        $producto->setn10($request->request->get('n10'));
        $producto->setn11($request->request->get('n11'));
        $producto->setn12($request->request->get('n12'));
        $producto->setn13($request->request->get('n13'));
        $producto->setn14($request->request->get('n14'));
        $producto->setn15($request->request->get('n15'));
        $producto->setn16($request->request->get('n16'));
        $producto->setn17($request->request->get('n17'));
        $producto->setn18($request->request->get('n18'));
        $producto->setn19($request->request->get('n19'));
        $producto->setn20($request->request->get('n20'));
        $producto->setn21($request->request->get('n21'));
        $producto->setn22($request->request->get('n22'));
        $producto->setn23($request->request->get('n23'));
        $producto->setn24($request->request->get('n24'));
        $producto->setn25($request->request->get('n25'));
        $producto->setn26($request->request->get('n26'));
        $producto->setn27($request->request->get('n27'));
        $producto->setn28($request->request->get('n28'));
        $producto->setn29($request->request->get('n29'));
        $producto->setn30($request->request->get('n30'));
        $producto->setn31($request->request->get('n31'));
        $producto->setn32($request->request->get('n32'));
        $producto->setn33($request->request->get('n33'));
        $producto->setn34($request->request->get('n34'));
        $producto->setn35($request->request->get('n35'));
        $producto->setn36($request->request->get('n36'));
        $producto->setn37($request->request->get('n37'));
        $producto->setn38($request->request->get('n38'));
        $producto->setn39($request->request->get('n39'));
        $producto->setn40($request->request->get('n40'));
        $producto->setn41($request->request->get('n41'));
        $producto->setn42($request->request->get('n42'));
        $producto->setn43($request->request->get('n43'));
        $producto->setn44($request->request->get('n44'));
        $producto->setn45($request->request->get('n45'));
        $producto->setn46($request->request->get('n46'));
        $producto->setn47($request->request->get('n47'));
        $producto->setn48($request->request->get('n48'));
        $producto->setn49($request->request->get('n49'));
        $producto->setn50($request->request->get('n50'));
        $producto->setn51($request->request->get('n51'));
        $producto->setn52($request->request->get('n52'));
        $producto->setn53($request->request->get('n53'));
        $producto->setn54($request->request->get('n54'));
        $producto->setn55($request->request->get('n55'));
        $producto->setn56($request->request->get('n56'));
        $producto->setn57($request->request->get('n57'));
        $producto->setn58($request->request->get('n58'));
        $producto->setn59($request->request->get('n59'));
        $producto->setn60($request->request->get('n60'));
        $producto->setn61($request->request->get('n61'));
        $producto->setn62($request->request->get('n62'));
        $producto->setn63($request->request->get('n63'));
        $producto->setn64($request->request->get('n64'));
        $producto->setn65($request->request->get('n65'));
        $producto->setn66($request->request->get('n66'));
        $producto->setn67($request->request->get('n67'));
        $producto->setn68($request->request->get('n68'));
        $producto->setn69($request->request->get('n69'));
        $producto->setn70($request->request->get('n70'));
        //
        $producto->setProductosid($id);
        //
        $em->persist($producto);
        $em->flush();
    }
    public function Insert_WR(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        //$producto = new Datosnexxt();
        $producto->setRemotemanagement($request->request->get('nRM'));
        $producto->setWeigth($request->request->get('nWeigth'));
        $producto->setWidth($request->request->get('nWidth'));
        $producto->setHeigth($request->request->get('nHeigth'));
        $producto->setLength($request->request->get('nLength'));
        $producto->setStatus($request->request->get('nStatus'));
        $producto->setTechnologydetails($request->request->get('nTechnologydetails'));
        $producto->setStandards($request->request->get('nStandards'));
        $producto->setLanports($request->request->get('nLanports'));
        $producto->setWanports($request->request->get('nWanports'));
        $producto->setLedindicators($request->request->get('nLedindicators'));
        $producto->setAntennas($request->request->get('nAntennas'));
        $producto->setAntennapower($request->request->get('nAntennapower'));
        $producto->setNetworkmedia($request->request->get('nNetworkmedia'));
        $producto->setNat($request->request->get('nNat'));
        $producto->setUsbstorageport($request->request->get('nUsbstorageport'));
        $producto->setPower($request->request->get('nPower'));
        $producto->setBands($request->request->get('nBands'));
        $producto->setSpeed($request->request->get('nSpeed'));
        $producto->setWds($request->request->get('nWds'));
        $producto->setWps($request->request->get('nWps'));
        $producto->setSoftwaresetup($request->request->get('nSoftwaresetup'));
        $producto->setFirmwaretype($request->request->get('nFirmwaretype'));
        $producto->setFirmwarelastversion($request->request->get('nFirmwarelastversion'));
        $producto->setIpdefaultgateway($request->request->get('nIpdefaultgateway'));
        $producto->setQualityofservice($request->request->get('nQualityofservice'));
        $producto->setDynamicdns($request->request->get('nDynamicdns'));
        $producto->setFirewallsecurity($request->request->get('nFirewallsecurity'));
        $producto->setPortforwarding($request->request->get('nPortforwarding'));
        $producto->setAccesscontrol($request->request->get('nAccesscontrol'));
        $producto->setDhcp($request->request->get('nDhcp'));
        $producto->setCertification($request->request->get('nCertification'));
        $producto->setTemperature($request->request->get('nTemperature'));
        $producto->setHumidity($request->request->get('nHumidity'));
        $producto->setOscompatibility($request->request->get('nOscompatibility'));
        $producto->setMinsysreq($request->request->get('nMinsysreq'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));
        //
        $producto->setn5($request->request->get('n5'));
        $producto->setn19($request->request->get('n19'));
        $producto->setn20($request->request->get('n20'));
        $producto->setn21($request->request->get('n21'));
        $producto->setn38($request->request->get('n38'));
        $producto->setn32($request->request->get('n32'));
        $producto->setn41($request->request->get('n41'));
        $producto->setn42($request->request->get('n42'));
        $producto->setn44($request->request->get('n44'));
        //
        $producto->setProductosid($id);
        //
        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Hub(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $producto->setWeigth($request->request->get('nWeigth'));
        $producto->setWidth($request->request->get('nWidth'));
        $producto->setHeigth($request->request->get('nHeigth'));
        $producto->setLength($request->request->get('nLength'));
        $producto->setStatus($request->request->get('nStatus'));
        $producto->setChip($request->request->get('nChip'));
        $producto->setStandards($request->request->get('nStandards'));
        $producto->setProtocolls($request->request->get('nProtocolls'));
        $producto->setNetworkmedia($request->request->get('dnetworkmedia'));
        $producto->setSecurity($request->request->get('nSecurity'));
        $producto->setNatentries($request->request->get('nNatentries'));
        $producto->setSoftwarespeed($request->request->get('nsoftwarespeed'));
        $producto->setLigths($request->request->get('dlights'));
        $producto->setPowersupply($request->request->get('nPowersupply'));
        $producto->setAdministration($request->request->get('nAdministration'));
        $producto->setCertification($request->request->get('nCertification'));
        $producto->setHumidity($request->request->get('nHumidity'));
        $producto->setTemperature($request->request->get('nTemperature'));
        $producto->setMinsysreq($request->request->get('nMinsysreq'));
        $producto->setOscompatibility($request->request->get('nOscompatibility'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));

        $producto->setn8($request->request->get('n8'));
        $producto->setn10($request->request->get('n10'));
        $producto->setn11($request->request->get('n11'));
        $producto->setn12($request->request->get('n12'));
        $producto->setn13($request->request->get('n13'));
        $producto->setn23($request->request->get('n23'));
        $producto->setn26($request->request->get('n26'));
        $producto->setn27($request->request->get('n27'));
        $producto->setn29($request->request->get('n29'));

        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Ada(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //
        $producto->setWeigth($request->request->get('nWeigth'));
        $producto->setWidth($request->request->get('nWidth'));
        $producto->setHeigth($request->request->get('nHeigth'));
        $producto->setLength($request->request->get('nLength'));
        $producto->setStatus($request->request->get('nStatus'));
        $producto->setTechnologydetails($request->request->get('nTechnologydetails'));
        $producto->setStandards($request->request->get('nStandards'));
        $producto->setInterface($request->request->get('nInterface'));
        $producto->setLedindicators($request->request->get('nledindicators'));
        $producto->setAntenas($request->request->get('nAntennas'));
        $producto->setWps($request->request->get('nWifiprotection'));
        $producto->setAntennapower($request->request->get('nAntennapower'));
        $producto->setNetworkmedia($request->request->get('nNetworkmedia'));
        $producto->setPower($request->request->get('nPower'));
        $producto->setBands($request->request->get('nBands'));
        $producto->setSpeed($request->request->get('nSpeed'));
        $producto->setNetworksecurity($request->request->get('nNetworksecurity'));
        $producto->setCertification($request->request->get('nCertification'));
        $producto->setTemperature($request->request->get('nTemperature'));
        $producto->setHumidity($request->request->get('nHumidity'));
        $producto->setOscompatibility($request->request->get('nOscompatibility'));
        $producto->setMinsysreq($request->request->get('nminsysreq'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));
        //
        $producto->setn23($request->request->get('n23'));
        $producto->setn26($request->request->get('n26'));
        $producto->setn27($request->request->get('n27'));
        $producto->setn29($request->request->get('n29'));
        //
        $producto->setProductosid($id);
        //
        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Cam(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //borrar
        //$producto = new Datosnexxt();
        //
        $producto->setWeigth($request->request->get('nWeigth'));
        $producto->setWidth($request->request->get('nWidth'));
        $producto->setHeigth($request->request->get('nHeigth'));
        $producto->setLength($request->request->get('nLength'));
        $producto->setStatus($request->request->get('nStatus'));
        $producto->setImagensensor($request->request->get('nImagensensor'));
        $producto->setResolution($request->request->get('nResolution'));
        $producto->setLens($request->request->get('nLens'));
        $producto->setViewingangle($request->request->get('nViewingangle'));
        $producto->setMinimunilumination($request->request->get('nMinimunilumination'));
        $producto->setInfraredled($request->request->get('nInfraredled'));
        $producto->setNigthvisionrange($request->request->get('nNigthvisionrange'));
        $producto->setDigitalzoom($request->request->get('nDigitalzoom'));
        $producto->setMemorycardslot($request->request->get('nMemorycardslot'));
        $producto->setCompression($request->request->get('nCompression'));
        $producto->setFramerate($request->request->get('nFramerate'));
        $producto->setMirrorflip($request->request->get('nMirrorflip'));
        $producto->setRecordfileformat($request->request->get('nRecordfileformat'));
        $producto->setComunication($request->request->get('ncomunication'));
        $producto->setAudiocompression($request->request->get('naudiocompression'));
        $producto->setInput($request->request->get('nInput'));
        $producto->setOutput($request->request->get('nOutput'));
        $producto->setInterface($request->request->get('nInterface'));
        $producto->setSupportedprotocols($request->request->get('nSupportedprotocols'));
        $producto->setDynamicdns($request->request->get('ndynamicdns'));
        $producto->setFirewallsecurity($request->request->get('nfirewallsecurity'));
        $producto->setPortforwarding($request->request->get('nportforwardind'));
        $producto->setDHCP($request->request->get('ndhcp'));
        $producto->setStandards($request->request->get('nstandards'));
        $producto->setAntenas($request->request->get('nAntennas'));
        $producto->setAntennagain($request->request->get('nAntennagain'));
        $producto->setNetworksecurity($request->request->get('nnetworksecurity'));
        $producto->setRanges($request->request->get('nRanges'));
        $producto->setHorizontalspeed($request->request->get('nHorizontalspeed'));
        $producto->setVerticalspeed($request->request->get('nVerticalspeed'));
        $producto->setFeatures($request->request->get('nFeatures'));
        $producto->setSoftsetup($request->request->get('nSoftsetup'));
        $producto->setParentalcontrol($request->request->get('nParentalcontrol'));
        $producto->setRemotemanagement($request->request->get('nremotemanagement'));
        $producto->setMultipleusermansystem($request->request->get('nMultipleusermansystem'));
        $producto->setSplitscreenview($request->request->get('nSplitscreenview'));
        $producto->setWebmanagement($request->request->get('nWebmanagement'));
        $producto->setMobileapp($request->request->get('nMobileapp'));
        $producto->setAlarmports($request->request->get('nAlarmports'));
        $producto->setMotiondetection($request->request->get('nMotiondetection'));
        $producto->setNotificationmethod($request->request->get('nNotificationmethod'));
        $producto->setMotificationscheduling($request->request->get('nNotificationscheduling'));
        $producto->setCertification($request->request->get('nCertification'));
        $producto->setTemperature($request->request->get('nTemperature'));
        $producto->setHumidity($request->request->get('nHumidity'));
        $producto->setOscompatibility($request->request->get('nOscompatibility'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setUpc($request->request->get('nups'));
        $producto->setMinsysreq($request->request->get('nminsysreq'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));

        $producto->setn53($request->request->get('n53'));
        $producto->setn56($request->request->get('n56'));
        $producto->setn57($request->request->get('n57'));
        $producto->setn59($request->request->get('n59'));

        $producto->setProductosid($id);
        //
        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Pserv(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $producto->setWeigth($request->request->get('nWeigth'));
        $producto->setWidth($request->request->get('nWidth'));
        $producto->setHeigth($request->request->get('nHeigth'));
        $producto->setLength($request->request->get('nLength'));
        $producto->setStatus($request->request->get('nstatus'));
        $producto->setChip($request->request->get('nsoftsetup'));
        $producto->setStandards($request->request->get('ndhcp'));
        $producto->setProtocolls($request->request->get('nProtocolls'));
        $producto->setOscompatibility($request->request->get('nOscompatibility'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));

        $producto->setn11($request->request->get('n11'));
        $producto->setn14($request->request->get('n14'));
        $producto->setn15($request->request->get('n15'));
        $producto->setn16($request->request->get('n16'));
        $producto->setn17($request->request->get('n17'));

        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Cable(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $producto->setCabletype($request->request->get('ncabletype'));
        $producto->setNumberofpairs($request->request->get('nnumberofpairs'));
        $producto->setNumberofwires($request->request->get('nnumberofwires'));
        $producto->setWiretype($request->request->get('nwiretype'));
        $producto->setWiregaugesize($request->request->get('nwiregaugesize'));
        $producto->setVoltagerating($request->request->get('nvoltajerating'));
        $producto->setTemperature($request->request->get('ntemperature'));
        $producto->setDialectric($request->request->get('ndialectric'));
        $producto->setInternationalstandars($request->request->get('ninternationalstandard'));
        $producto->setUlcertificate($request->request->get('nulcertificate'));
        $producto->setLength($request->request->get('ncablelength'));
        $producto->setColor($request->request->get('ncablecolor'));
        $producto->setWarranty($request->request->get('nwarranty'));
        $producto->setStatus($request->request->get('nstatus'));
        $producto->setSheetes($request->request->get('nsheetes'));
        $producto->setSheeten($request->request->get('nsheeten'));

        $producto->setn14($request->request->get('n14'));
        $producto->setn17($request->request->get('n17'));
        $producto->setn18($request->request->get('n18'));
        $producto->setn19($request->request->get('n19'));
        $producto->setn20($request->request->get('n20'));

        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Kits(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //$producto = new Datosnexxt();
        $producto->setVideoinput($request->request->get('nvideoinput'));
        $producto->setVideocompression($request->request->get('nvideocompression'));
        $producto->setAudioinput($request->request->get('naudioinput'));
        $producto->setTwowayaudioinput($request->request->get('ntwowayaudioinput'));
        $producto->setVideooutput($request->request->get('nvideooutput'));
        $producto->setVideoformat($request->request->get('nvideoformatandframerate'));
        $producto->setEncodingresolution($request->request->get('nencodingresolution'));
        $producto->setAudiooutput($request->request->get('naudiooutput'));
        $producto->setDualstreamsupport($request->request->get('ndualstreamsupport'));
        $producto->setStreamtype($request->request->get('nstreamtype'));
        $producto->setSyncplayback($request->request->get('nsyncplayback'));
        $producto->setPentaplex($request->request->get('npentaplex'));
        $producto->setSata($request->request->get('nsata'));
        $producto->setCapacity($request->request->get('ncapacity'));
        $producto->setBackupcapability($request->request->get('nbackupcapability'));
        //$producto->setFramerate($request->request->get('nframerate'));
        $producto->setNetworkinterface($request->request->get('nnetworkinterface'));
        $producto->setUsbinterface($request->request->get('nusbinterface'));
        $producto->setRs485($request->request->get('nrs485'));
        $producto->setAlarmio($request->request->get('nalarmio'));
        $producto->setHousing($request->request->get('nhousing'));
        $producto->setColor($request->request->get('ncolor'));
        $producto->setLength($request->request->get('nproductdimensions'));
        $producto->setWeigth($request->request->get('nproductweigth'));
        $producto->setPower($request->request->get('nPower'));
        $producto->setWarranty($request->request->get('nwarranty'));
        $producto->setCertificates($request->request->get('ncertificates'));
        $producto->setRemotemanagement($request->request->get('nremoteconnections'));
        $producto->setProtocols($request->request->get('nprotocols'));
        $producto->setStatus($request->request->get('nstatus'));
        $producto->setCertification($request->request->get('nCertification'));
        $producto->setTemperature($request->request->get('nTemperature'));
        $producto->setHumidity($request->request->get('nHumidity'));
        $producto->setOscompatibility($request->request->get('nOscompatibility'));
        $producto->setUpc($request->request->get('nups'));
        $producto->setMinsysreq($request->request->get('nminsysreq'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));
        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Similars(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //$producto = new Datosnexxt();
        $producto->setWeigth($request->request->get('nWeigth'));
        $producto->setWidth($request->request->get('nWidth'));
        $producto->setHeigth($request->request->get('nHeigth'));
        $producto->setLength($request->request->get('nLength'));
        $producto->setStatus($request->request->get('nStatus'));
        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Connectors(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //$producto = new Datosnexxt();
        $producto->setTensiblestrength($request->request->get('ntensible'));
        $producto->setWireentryholesize($request->request->get('nwireentryholesize'));
        $producto->setOperatingtemperature($request->request->get('noperatingtemperature'));
        $producto->setSpeed($request->request->get('nspeed'));
        $producto->setBandwidth($request->request->get('nbandwith'));
        $producto->setUpc($request->request->get('nupc'));
        $producto->setQuantityperbag($request->request->get('nquantityperbag'));
        $producto->setStatus($request->request->get('nStatus'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));
        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Other(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //$producto = new Datosnexxt();
        $producto->setCableentryholesize($request->request->get('ncableentryholesize'));
        $producto->setOperatingtemperature($request->request->get('noperatingtemperature'));
        $producto->setFittingcovertype($request->request->get('nfittingcovertype'));
        $producto->setUpc($request->request->get('nupc'));
        $producto->setQuantityperbag($request->request->get('nquantityperbag'));
        $producto->setStandards($request->request->get('nstandards'));
        $producto->setStatus($request->request->get('nStatus'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));

        $producto->setn9($request->request->get('n9'));
        $producto->setn12($request->request->get('n12'));
        $producto->setn13($request->request->get('n13'));
        $producto->setn15($request->request->get('n15'));

        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }
    public function Insert_Racks(Request $request , $producto, $id)
    {
        $em = $this->getDoctrine()->getManager();
        //$producto = new Datosnexxt();
        $producto->setPorts($request->request->get('nnumberofports'));
        $producto->setEffectiveuspace($request->request->get('neffectiveuspace'));
        $producto->setMountingtype($request->request->get('nmountingtype'));
        $producto->setOperatingtemperature($request->request->get('noperatingtemperature'));
        $producto->setWiring($request->request->get('nwiring'));
        $producto->setHeigth($request->request->get('nheigth'));
        $producto->setExternalwidth($request->request->get('nexternalwidth'));
        $producto->setDepth($request->request->get('ndepth'));
        $producto->setIncludes($request->request->get('nincludes'));
        $producto->setVoltagerating($request->request->get('nvoltagerating'));
        $producto->setTemprating($request->request->get('ntemprating'));
        $producto->setSpeed($request->request->get('nspeed'));
        $producto->setBandwidth($request->request->get('nbandwidth'));
        $producto->setStandards($request->request->get('nstandards'));
        $producto->setUlcertificate($request->request->get('nulcertificate'));
        $producto->setEtlcertificate($request->request->get('netlcertificate'));
        $producto->setUpc($request->request->get('nupc'));
        $producto->setQuantityperbag($request->request->get('nquantityperbag'));
        $producto->setStatus($request->request->get('nstatus'));
        $producto->setWarranty($request->request->get('nWarranty'));
        $producto->setSheeten($request->request->get('nSheeten'));
        $producto->setSheetes($request->request->get('nSheetes'));
        //
        $producto->setn23($request->request->get('n23'));
        $producto->setn26($request->request->get('n26'));
        $producto->setn27($request->request->get('n27'));
        $producto->setn28($request->request->get('n28'));
        $producto->setn29($request->request->get('n29'));
        //
        $producto->setProductosid($id);

        $em->persist($producto);
        $em->flush();
    }

}