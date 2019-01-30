<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datosnexxt
 *
 * @ORM\Table(name="datosnexxt", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FKDatosNexxt498091", columns={"Productosid"})})
 * @ORM\Entity
 */
class Datosnexxt
{
    /**
     * @var string
     *
     * @ORM\Column(name="weigth", type="string", length=255, nullable=true)
     */
    private $weigth;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=255, nullable=true)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="heigth", type="string", length=255, nullable=true)
     */
    private $heigth;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="string", length=255, nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="technologydetails", type="string", length=255, nullable=true)
     */
    private $technologydetails;

    /**
     * @var string
     *
     * @ORM\Column(name="lanports", type="string", length=255, nullable=true)
     */
    private $lanports;

    /**
     * @var string
     *
     * @ORM\Column(name="wanports", type="string", length=255, nullable=true)
     */
    private $wanports;

    /**
     * @var string
     *
     * @ORM\Column(name="ledindicators", type="string", length=255, nullable=true)
     */
    private $ledindicators;

    /**
     * @var string
     *
     * @ORM\Column(name="antennapower", type="string", length=255, nullable=true)
     */
    private $antennapower;

    /**
     * @var string
     *
     * @ORM\Column(name="networkmedia", type="string", length=255, nullable=true)
     */
    private $networkmedia;

    /**
     * @var string
     *
     * @ORM\Column(name="nat", type="string", length=255, nullable=true)
     */
    private $nat;

    /**
     * @var string
     *
     * @ORM\Column(name="usbstorageport", type="string", length=255, nullable=true)
     */
    private $usbstorageport;

    /**
     * @var string
     *
     * @ORM\Column(name="power", type="string", length=255, nullable=true)
     */
    private $power;

    /**
     * @var string
     *
     * @ORM\Column(name="bands", type="string", length=255, nullable=true)
     */
    private $bands;

    /**
     * @var string
     *
     * @ORM\Column(name="speed", type="string", length=255, nullable=true)
     */
    private $speed;

    /**
     * @var string
     *
     * @ORM\Column(name="wds", type="string", length=255, nullable=true)
     */
    private $wds;

    /**
     * @var string
     *
     * @ORM\Column(name="wps", type="string", length=255, nullable=true)
     */
    private $wps;

    /**
     * @var string
     *
     * @ORM\Column(name="softwaresetup", type="string", length=255, nullable=true)
     */
    private $softwaresetup;

    /**
     * @var string
     *
     * @ORM\Column(name="firmwaretype", type="string", length=255, nullable=true)
     */
    private $firmwaretype;

    /**
     * @var string
     *
     * @ORM\Column(name="firmwarelastversion", type="string", length=255, nullable=true)
     */
    private $firmwarelastversion;

    /**
     * @var string
     *
     * @ORM\Column(name="ipdefaultgateway", type="string", length=255, nullable=true)
     */
    private $ipdefaultgateway;

    /**
     * @var string
     *
     * @ORM\Column(name="remotemanagement", type="string", length=255, nullable=true)
     */
    private $remotemanagement;

    /**
     * @var string
     *
     * @ORM\Column(name="qualityofservice", type="string", length=255, nullable=true)
     */
    private $qualityofservice;

    /**
     * @var string
     *
     * @ORM\Column(name="dynamicdns", type="string", length=255, nullable=true)
     */
    private $dynamicdns;

    /**
     * @var string
     *
     * @ORM\Column(name="firewallsecurity", type="string", length=255, nullable=true)
     */
    private $firewallsecurity;

    /**
     * @var string
     *
     * @ORM\Column(name="portforwarding", type="string", length=255, nullable=true)
     */
    private $portforwarding;

    /**
     * @var string
     *
     * @ORM\Column(name="accesscontrol", type="string", length=255, nullable=true)
     */
    private $accesscontrol;

    /**
     * @var string
     *
     * @ORM\Column(name="dhcp", type="string", length=255, nullable=true)
     */
    private $dhcp;

    /**
     * @var string
     *
     * @ORM\Column(name="certification", type="string", length=255, nullable=true)
     */
    private $certification;

    /**
     * @var string
     *
     * @ORM\Column(name="temperature", type="string", length=255, nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="humidity", type="string", length=255, nullable=true)
     */
    private $humidity;

    /**
     * @var string
     *
     * @ORM\Column(name="oscompatibility", type="string", length=255, nullable=true)
     */
    private $oscompatibility;

    /**
     * @var string
     *
     * @ORM\Column(name="warranty", type="string", length=255, nullable=true)
     */
    private $warranty;

    /**
     * @var string
     *
     * @ORM\Column(name="sheeten", type="string", length=255, nullable=true)
     */
    private $sheeten;

    /**
     * @var string
     *
     * @ORM\Column(name="sheetes", type="string", length=255, nullable=true)
     */
    private $sheetes;

    /**
     * @var string
     *
     * @ORM\Column(name="chip", type="string", length=255, nullable=true)
     */
    private $chip;

    /**
     * @var string
     *
     * @ORM\Column(name="protocolls", type="string", length=255, nullable=true)
     */
    private $protocolls;

    /**
     * @var string
     *
     * @ORM\Column(name="security", type="string", length=255, nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="natentries", type="string", length=255, nullable=true)
     */
    private $natentries;

    /**
     * @var string
     *
     * @ORM\Column(name="softwarespeed", type="string", length=255, nullable=true)
     */
    private $softwarespeed;

    /**
     * @var string
     *
     * @ORM\Column(name="ligths", type="string", length=255, nullable=true)
     */
    private $ligths;

    /**
     * @var string
     *
     * @ORM\Column(name="powersupply", type="string", length=255, nullable=true)
     */
    private $powersupply;

    /**
     * @var string
     *
     * @ORM\Column(name="administration", type="string", length=255, nullable=true)
     */
    private $administration;

    /**
     * @var string
     *
     * @ORM\Column(name="minsysreq", type="string", length=255, nullable=true)
     */
    private $minsysreq;

    /**
     * @var string
     *
     * @ORM\Column(name="standards", type="string", length=255, nullable=true)
     */
    private $standards;

    /**
     * @var string
     *
     * @ORM\Column(name="interface", type="string", length=255, nullable=true)
     */
    private $interface;

    /**
     * @var string
     *
     * @ORM\Column(name="antennas", type="string", length=255, nullable=true)
     */
    private $antennas;

    /**
     * @var string
     *
     * @ORM\Column(name="networksecurity", type="string", length=255, nullable=true)
     */
    private $networksecurity;

    /**
     * @var string
     *
     * @ORM\Column(name="certifications", type="string", length=255, nullable=true)
     */
    private $certifications;

    /**
     * @var string
     *
     * @ORM\Column(name="imagensensor", type="string", length=255, nullable=true)
     */
    private $imagensensor;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=255, nullable=true)
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="lens", type="string", length=255, nullable=true)
     */
    private $lens;

    /**
     * @var string
     *
     * @ORM\Column(name="viewingangle", type="string", length=255, nullable=true)
     */
    private $viewingangle;

    /**
     * @var string
     *
     * @ORM\Column(name="minimunilumination", type="string", length=255, nullable=true)
     */
    private $minimunilumination;

    /**
     * @var string
     *
     * @ORM\Column(name="infraredled", type="string", length=255, nullable=true)
     */
    private $infraredled;

    /**
     * @var string
     *
     * @ORM\Column(name="nigthvisionrange", type="string", length=255, nullable=true)
     */
    private $nigthvisionrange;

    /**
     * @var string
     *
     * @ORM\Column(name="digitalzoom", type="string", length=255, nullable=true)
     */
    private $digitalzoom;

    /**
     * @var string
     *
     * @ORM\Column(name="memorycardslot", type="string", length=255, nullable=true)
     */
    private $memorycardslot;

    /**
     * @var string
     *
     * @ORM\Column(name="compression", type="string", length=255, nullable=true)
     */
    private $compression;

    /**
     * @var string
     *
     * @ORM\Column(name="framerate", type="string", length=255, nullable=true)
     */
    private $framerate;

    /**
     * @var string
     *
     * @ORM\Column(name="mirrorflip", type="string", length=255, nullable=true)
     */
    private $mirrorflip;

    /**
     * @var string
     *
     * @ORM\Column(name="recordfileformat", type="string", length=255, nullable=true)
     */
    private $recordfileformat;

    /**
     * @var string
     *
     * @ORM\Column(name="comunication", type="string", length=255, nullable=true)
     */
    private $comunication;

    /**
     * @var string
     *
     * @ORM\Column(name="input", type="string", length=255, nullable=true)
     */
    private $input;

    /**
     * @var string
     *
     * @ORM\Column(name="output", type="string", length=255, nullable=true)
     */
    private $output;

    /**
     * @var string
     *
     * @ORM\Column(name="supportedprotocols", type="string", length=255, nullable=true)
     */
    private $supportedprotocols;

    /**
     * @var string
     *
     * @ORM\Column(name="antenas", type="string", length=255, nullable=true)
     */
    private $antenas;

    /**
     * @var string
     *
     * @ORM\Column(name="antennagain", type="string", length=255, nullable=true)
     */
    private $antennagain;

    /**
     * @var string
     *
     * @ORM\Column(name="ranges", type="string", length=255, nullable=true)
     */
    private $ranges;

    /**
     * @var string
     *
     * @ORM\Column(name="horizontalspeed", type="string", length=255, nullable=true)
     */
    private $horizontalspeed;

    /**
     * @var string
     *
     * @ORM\Column(name="verticalspeed", type="string", length=255, nullable=true)
     */
    private $verticalspeed;

    /**
     * @var string
     *
     * @ORM\Column(name="features", type="string", length=255, nullable=true)
     */
    private $features;

    /**
     * @var string
     *
     * @ORM\Column(name="softsetup", type="string", length=255, nullable=true)
     */
    private $softsetup;

    /**
     * @var string
     *
     * @ORM\Column(name="parentalcontrol", type="string", length=255, nullable=true)
     */
    private $parentalcontrol;

    /**
     * @var string
     *
     * @ORM\Column(name="multipleusermansystem", type="string", length=255, nullable=true)
     */
    private $multipleusermansystem;

    /**
     * @var string
     *
     * @ORM\Column(name="splitscreenview", type="string", length=255, nullable=true)
     */
    private $splitscreenview;

    /**
     * @var string
     *
     * @ORM\Column(name="mobileapp", type="string", length=255, nullable=true)
     */
    private $mobileapp;

    /**
     * @var string
     *
     * @ORM\Column(name="alarmports", type="string", length=255, nullable=true)
     */
    private $alarmports;

    /**
     * @var string
     *
     * @ORM\Column(name="motiondetection", type="string", length=255, nullable=true)
     */
    private $motiondetection;

    /**
     * @var string
     *
     * @ORM\Column(name="notificationmethod", type="string", length=255, nullable=true)
     */
    private $notificationmethod;

    /**
     * @var string
     *
     * @ORM\Column(name="motificationscheduling", type="string", length=255, nullable=true)
     */
    private $motificationscheduling;

    /**
     * @var string
     *
     * @ORM\Column(name="cabletype", type="string", length=255, nullable=true)
     */
    private $cabletype;

    /**
     * @var string
     *
     * @ORM\Column(name="numberofpairs", type="string", length=255, nullable=true)
     */
    private $numberofpairs;

    /**
     * @var string
     *
     * @ORM\Column(name="numberofwires", type="string", length=255, nullable=true)
     */
    private $numberofwires;

    /**
     * @var string
     *
     * @ORM\Column(name="wiretype", type="string", length=255, nullable=true)
     */
    private $wiretype;

    /**
     * @var string
     *
     * @ORM\Column(name="wiregaugesize", type="string", length=255, nullable=true)
     */
    private $wiregaugesize;

    /**
     * @var string
     *
     * @ORM\Column(name="dialectric", type="string", length=255, nullable=true)
     */
    private $dialectric;

    /**
     * @var string
     *
     * @ORM\Column(name="strength", type="string", length=255, nullable=true)
     */
    private $strength;

    /**
     * @var string
     *
     * @ORM\Column(name="internationalstandars", type="string", length=255, nullable=true)
     */
    private $internationalstandars;

    /**
     * @var string
     *
     * @ORM\Column(name="ulcertificate", type="string", length=255, nullable=true)
     */
    private $ulcertificate;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="videoinput", type="string", length=255, nullable=true)
     */
    private $videoinput;

    /**
     * @var string
     *
     * @ORM\Column(name="videocompression", type="string", length=255, nullable=true)
     */
    private $videocompression;

    /**
     * @var string
     *
     * @ORM\Column(name="audioinput", type="string", length=255, nullable=true)
     */
    private $audioinput;

    /**
     * @var string
     *
     * @ORM\Column(name="twowayaudioinput", type="string", length=255, nullable=true)
     */
    private $twowayaudioinput;

    /**
     * @var string
     *
     * @ORM\Column(name="videooutput", type="string", length=255, nullable=true)
     */
    private $videooutput;

    /**
     * @var string
     *
     * @ORM\Column(name="videoformat", type="string", length=255, nullable=true)
     */
    private $videoformat;

    /**
     * @var string
     *
     * @ORM\Column(name="encodingresolution", type="string", length=255, nullable=true)
     */
    private $encodingresolution;

    /**
     * @var string
     *
     * @ORM\Column(name="audiooutput", type="string", length=255, nullable=true)
     */
    private $audiooutput;

    /**
     * @var string
     *
     * @ORM\Column(name="dualstreamsupport", type="string", length=255, nullable=true)
     */
    private $dualstreamsupport;

    /**
     * @var string
     *
     * @ORM\Column(name="streamtype", type="string", length=255, nullable=true)
     */
    private $streamtype;

    /**
     * @var string
     *
     * @ORM\Column(name="syncplayback", type="string", length=255, nullable=true)
     */
    private $syncplayback;

    /**
     * @var string
     *
     * @ORM\Column(name="pentaplex", type="string", length=255, nullable=true)
     */
    private $pentaplex;

    /**
     * @var string
     *
     * @ORM\Column(name="sata", type="string", length=255, nullable=true)
     */
    private $sata;

    /**
     * @var string
     *
     * @ORM\Column(name="capacity", type="string", length=255, nullable=true)
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="backupcapability", type="string", length=255, nullable=true)
     */
    private $backupcapability;

    /**
     * @var string
     *
     * @ORM\Column(name="networkinterface", type="string", length=255, nullable=true)
     */
    private $networkinterface;

    /**
     * @var string
     *
     * @ORM\Column(name="usbinterface", type="string", length=255, nullable=true)
     */
    private $usbinterface;

    /**
     * @var string
     *
     * @ORM\Column(name="rs485", type="string", length=255, nullable=true)
     */
    private $rs485;

    /**
     * @var string
     *
     * @ORM\Column(name="alarmio", type="string", length=255, nullable=true)
     */
    private $alarmio;

    /**
     * @var string
     *
     * @ORM\Column(name="housing", type="string", length=255, nullable=true)
     */
    private $housing;

    /**
     * @var string
     *
     * @ORM\Column(name="certificates", type="string", length=255, nullable=true)
     */
    private $certificates;

    /**
     * @var string
     *
     * @ORM\Column(name="protocols", type="string", length=255, nullable=true)
     */
    private $protocols;

    /**
     * @var string
     *
     * @ORM\Column(name="cableentryholesize", type="string", length=255, nullable=true)
     */
    private $cableentryholesize;

    /**
     * @var string
     *
     * @ORM\Column(name="operatingtemperature", type="string", length=255, nullable=true)
     */
    private $operatingtemperature;

    /**
     * @var string
     *
     * @ORM\Column(name="fittingcovertype", type="string", length=255, nullable=true)
     */
    private $fittingcovertype;

    /**
     * @var string
     *
     * @ORM\Column(name="upc", type="string", length=255, nullable=true)
     */
    private $upc;

    /**
     * @var string
     *
     * @ORM\Column(name="quantityperbag", type="string", length=255, nullable=true)
     */
    private $quantityperbag;

    /**
     * @var string
     *
     * @ORM\Column(name="tensiblestrength", type="string", length=255, nullable=true)
     */
    private $tensiblestrength;

    /**
     * @var string
     *
     * @ORM\Column(name="wireentryholesize", type="string", length=255, nullable=true)
     */
    private $wireentryholesize;

    /**
     * @var string
     *
     * @ORM\Column(name="transmissionspeed", type="string", length=255, nullable=true)
     */
    private $transmissionspeed;

    /**
     * @var string
     *
     * @ORM\Column(name="bandwidth", type="string", length=255, nullable=true)
     */
    private $bandwidth;

    /**
     * @var string
     *
     * @ORM\Column(name="ports", type="string", length=255, nullable=true)
     */
    private $ports;

    /**
     * @var string
     *
     * @ORM\Column(name="effectiveuspace", type="string", length=255, nullable=true)
     */
    private $effectiveuspace;

    /**
     * @var string
     *
     * @ORM\Column(name="mountingtype", type="string", length=255, nullable=true)
     */
    private $mountingtype;

    /**
     * @var string
     *
     * @ORM\Column(name="wiring", type="string", length=255, nullable=true)
     */
    private $wiring;

    /**
     * @var string
     *
     * @ORM\Column(name="externalwidth", type="string", length=255, nullable=true)
     */
    private $externalwidth;

    /**
     * @var string
     *
     * @ORM\Column(name="depth", type="string", length=255, nullable=true)
     */
    private $depth;

    /**
     * @var string
     *
     * @ORM\Column(name="includes", type="string", length=255, nullable=true)
     */
    private $includes;

    /**
     * @var string
     *
     * @ORM\Column(name="voltagerating", type="string", length=255, nullable=true)
     */
    private $voltagerating;

    /**
     * @var string
     *
     * @ORM\Column(name="temprating", type="string", length=255, nullable=true)
     */
    private $temprating;

    /**
     * @var string
     *
     * @ORM\Column(name="etlcertificate", type="string", length=255, nullable=true)
     */
    private $etlcertificate;

    /**
     * @var string
     *
     * @ORM\Column(name="webmanagement", type="string", length=255, nullable=true)
     */
    private $webmanagement;

    /**
     * @var string
     *
     * @ORM\Column(name="audiocompression", type="string", length=255, nullable=true)
     */
    private $audiocompression;

    /**
     * @var string
     *
     * @ORM\Column(name="n1", type="string", length=255, nullable=true)
     */
    private $n1;

    /**
     * @var string
     *
     * @ORM\Column(name="n2", type="string", length=255, nullable=true)
     */
    private $n2;

    /**
     * @var string
     *
     * @ORM\Column(name="n3", type="string", length=255, nullable=true)
     */
    private $n3;

    /**
     * @var string
     *
     * @ORM\Column(name="n4", type="string", length=255, nullable=true)
     */
    private $n4;

    /**
     * @var string
     *
     * @ORM\Column(name="n5", type="string", length=255, nullable=true)
     */
    private $n5;

    /**
     * @var string
     *
     * @ORM\Column(name="n6", type="string", length=255, nullable=true)
     */
    private $n6;

    /**
     * @var string
     *
     * @ORM\Column(name="n7", type="string", length=255, nullable=true)
     */
    private $n7;

    /**
     * @var string
     *
     * @ORM\Column(name="n8", type="string", length=255, nullable=true)
     */
    private $n8;

    /**
     * @var string
     *
     * @ORM\Column(name="n9", type="string", length=255, nullable=true)
     */
    private $n9;

    /**
     * @var string
     *
     * @ORM\Column(name="n10", type="string", length=255, nullable=true)
     */
    private $n10;

    /**
     * @var string
     *
     * @ORM\Column(name="n11", type="string", length=255, nullable=true)
     */
    private $n11;

    /**
     * @var string
     *
     * @ORM\Column(name="n12", type="string", length=255, nullable=true)
     */
    private $n12;

    /**
     * @var string
     *
     * @ORM\Column(name="n13", type="string", length=255, nullable=true)
     */
    private $n13;

    /**
     * @var string
     *
     * @ORM\Column(name="n14", type="string", length=255, nullable=true)
     */
    private $n14;

    /**
     * @var string
     *
     * @ORM\Column(name="n15", type="string", length=255, nullable=true)
     */
    private $n15;

    /**
     * @var string
     *
     * @ORM\Column(name="n16", type="string", length=255, nullable=true)
     */
    private $n16;

    /**
     * @var string
     *
     * @ORM\Column(name="n17", type="string", length=255, nullable=true)
     */
    private $n17;

    /**
     * @var string
     *
     * @ORM\Column(name="n18", type="string", length=255, nullable=true)
     */
    private $n18;

    /**
     * @var string
     *
     * @ORM\Column(name="n19", type="string", length=255, nullable=true)
     */
    private $n19;

    /**
     * @var string
     *
     * @ORM\Column(name="n20", type="string", length=255, nullable=true)
     */
    private $n20;

    /**
     * @var string
     *
     * @ORM\Column(name="n21", type="string", length=255, nullable=true)
     */
    private $n21;

    /**
     * @var string
     *
     * @ORM\Column(name="n22", type="string", length=255, nullable=true)
     */
    private $n22;

    /**
     * @var string
     *
     * @ORM\Column(name="n23", type="string", length=255, nullable=true)
     */
    private $n23;

    /**
     * @var string
     *
     * @ORM\Column(name="n24", type="string", length=255, nullable=true)
     */
    private $n24;

    /**
     * @var string
     *
     * @ORM\Column(name="n25", type="string", length=255, nullable=true)
     */
    private $n25;

    /**
     * @var string
     *
     * @ORM\Column(name="n26", type="string", length=255, nullable=true)
     */
    private $n26;

    /**
     * @var string
     *
     * @ORM\Column(name="n27", type="string", length=255, nullable=true)
     */
    private $n27;

    /**
     * @var string
     *
     * @ORM\Column(name="n28", type="string", length=255, nullable=true)
     */
    private $n28;

    /**
     * @var string
     *
     * @ORM\Column(name="n29", type="string", length=255, nullable=true)
     */
    private $n29;

    /**
     * @var string
     *
     * @ORM\Column(name="n30", type="string", length=255, nullable=true)
     */
    private $n30;

    /**
     * @var string
     *
     * @ORM\Column(name="n31", type="string", length=255, nullable=true)
     */
    private $n31;

    /**
     * @var string
     *
     * @ORM\Column(name="n32", type="string", length=255, nullable=true)
     */
    private $n32;

    /**
     * @var string
     *
     * @ORM\Column(name="n33", type="string", length=255, nullable=true)
     */
    private $n33;

    /**
     * @var string
     *
     * @ORM\Column(name="n34", type="string", length=255, nullable=true)
     */
    private $n34;

    /**
     * @var string
     *
     * @ORM\Column(name="n35", type="string", length=255, nullable=true)
     */
    private $n35;

    /**
     * @var string
     *
     * @ORM\Column(name="n36", type="string", length=255, nullable=true)
     */
    private $n36;

    /**
     * @var string
     *
     * @ORM\Column(name="n37", type="string", length=255, nullable=true)
     */
    private $n37;

    /**
     * @var string
     *
     * @ORM\Column(name="n38", type="string", length=255, nullable=true)
     */
    private $n38;

    /**
     * @var string
     *
     * @ORM\Column(name="n39", type="string", length=255, nullable=true)
     */
    private $n39;

    /**
     * @var string
     *
     * @ORM\Column(name="n40", type="string", length=255, nullable=true)
     */
    private $n40;

    /**
     * @var string
     *
     * @ORM\Column(name="n41", type="string", length=255, nullable=true)
     */
    private $n41;

    /**
     * @var string
     *
     * @ORM\Column(name="n42", type="string", length=255, nullable=true)
     */
    private $n42;

    /**
     * @var string
     *
     * @ORM\Column(name="n43", type="string", length=255, nullable=true)
     */
    private $n43;

    /**
     * @var string
     *
     * @ORM\Column(name="n44", type="string", length=255, nullable=true)
     */
    private $n44;

    /**
     * @var string
     *
     * @ORM\Column(name="n45", type="string", length=255, nullable=true)
     */
    private $n45;

    /**
     * @var string
     *
     * @ORM\Column(name="n46", type="string", length=255, nullable=true)
     */
    private $n46;

    /**
     * @var string
     *
     * @ORM\Column(name="n47", type="string", length=255, nullable=true)
     */
    private $n47;

    /**
     * @var string
     *
     * @ORM\Column(name="n48", type="string", length=255, nullable=true)
     */
    private $n48;

    /**
     * @var string
     *
     * @ORM\Column(name="n49", type="string", length=255, nullable=true)
     */
    private $n49;

    /**
     * @var string
     *
     * @ORM\Column(name="n50", type="string", length=255, nullable=true)
     */
    private $n50;

    /**
     * @var string
     *
     * @ORM\Column(name="n51", type="string", length=255, nullable=true)
     */
    private $n51;

    /**
     * @var string
     *
     * @ORM\Column(name="n52", type="string", length=255, nullable=true)
     */
    private $n52;

    /**
     * @var string
     *
     * @ORM\Column(name="n53", type="string", length=255, nullable=true)
     */
    private $n53;

    /**
     * @var string
     *
     * @ORM\Column(name="n54", type="string", length=255, nullable=true)
     */
    private $n54;

    /**
     * @var string
     *
     * @ORM\Column(name="n55", type="string", length=255, nullable=true)
     */
    private $n55;

    /**
     * @var string
     *
     * @ORM\Column(name="n56", type="string", length=255, nullable=true)
     */
    private $n56;

    /**
     * @var string
     *
     * @ORM\Column(name="n57", type="string", length=255, nullable=true)
     */
    private $n57;

    /**
     * @var string
     *
     * @ORM\Column(name="n58", type="string", length=255, nullable=true)
     */
    private $n58;

    /**
     * @var string
     *
     * @ORM\Column(name="n59", type="string", length=255, nullable=true)
     */
    private $n59;

    /**
     * @var string
     *
     * @ORM\Column(name="n60", type="string", length=255, nullable=true)
     */
    private $n60;

    /**
     * @var string
     *
     * @ORM\Column(name="n61", type="string", length=255, nullable=true)
     */
    private $n61;

    /**
     * @var string
     *
     * @ORM\Column(name="n62", type="string", length=255, nullable=true)
     */
    private $n62;

    /**
     * @var string
     *
     * @ORM\Column(name="n63", type="string", length=255, nullable=true)
     */
    private $n63;

    /**
     * @var string
     *
     * @ORM\Column(name="n64", type="string", length=255, nullable=true)
     */
    private $n64;

    /**
     * @var string
     *
     * @ORM\Column(name="n65", type="string", length=255, nullable=true)
     */
    private $n65;

    /**
     * @var string
     *
     * @ORM\Column(name="n66", type="string", length=255, nullable=true)
     */
    private $n66;

    /**
     * @var string
     *
     * @ORM\Column(name="n67", type="string", length=255, nullable=true)
     */
    private $n67;

    /**
     * @var string
     *
     * @ORM\Column(name="n68", type="string", length=255, nullable=true)
     */
    private $n68;

    /**
     * @var string
     *
     * @ORM\Column(name="n69", type="string", length=255, nullable=true)
     */
    private $n69;

    /**
     * @var string
     *
     * @ORM\Column(name="n70", type="string", length=255, nullable=true)
     */
    private $n70;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Productos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Productosid", referencedColumnName="id")
     * })
     */
    private $productosid;



    /**
     * Set weigth
     *
     * @param string $weigth
     * @return Datosnexxt
     */
    public function setWeigth($weigth)
    {
        $this->weigth = $weigth;

        return $this;
    }

    /**
     * Get weigth
     *
     * @return string 
     */
    public function getWeigth()
    {
        return $this->weigth;
    }

    /**
     * Set width
     *
     * @param string $width
     * @return Datosnexxt
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set heigth
     *
     * @param string $heigth
     * @return Datosnexxt
     */
    public function setHeigth($heigth)
    {
        $this->heigth = $heigth;

        return $this;
    }

    /**
     * Get heigth
     *
     * @return string 
     */
    public function getHeigth()
    {
        return $this->heigth;
    }

    /**
     * Set length
     *
     * @param string $length
     * @return Datosnexxt
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Datosnexxt
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set technologydetails
     *
     * @param string $technologydetails
     * @return Datosnexxt
     */
    public function setTechnologydetails($technologydetails)
    {
        $this->technologydetails = $technologydetails;

        return $this;
    }

    /**
     * Get technologydetails
     *
     * @return string 
     */
    public function getTechnologydetails()
    {
        return $this->technologydetails;
    }

    /**
     * Set lanports
     *
     * @param string $lanports
     * @return Datosnexxt
     */
    public function setLanports($lanports)
    {
        $this->lanports = $lanports;

        return $this;
    }

    /**
     * Get lanports
     *
     * @return string 
     */
    public function getLanports()
    {
        return $this->lanports;
    }

    /**
     * Set wanports
     *
     * @param string $wanports
     * @return Datosnexxt
     */
    public function setWanports($wanports)
    {
        $this->wanports = $wanports;

        return $this;
    }

    /**
     * Get wanports
     *
     * @return string 
     */
    public function getWanports()
    {
        return $this->wanports;
    }

    /**
     * Set ledindicators
     *
     * @param string $ledindicators
     * @return Datosnexxt
     */
    public function setLedindicators($ledindicators)
    {
        $this->ledindicators = $ledindicators;

        return $this;
    }

    /**
     * Get ledindicators
     *
     * @return string 
     */
    public function getLedindicators()
    {
        return $this->ledindicators;
    }

    /**
     * Set antennapower
     *
     * @param string $antennapower
     * @return Datosnexxt
     */
    public function setAntennapower($antennapower)
    {
        $this->antennapower = $antennapower;

        return $this;
    }

    /**
     * Get antennapower
     *
     * @return string 
     */
    public function getAntennapower()
    {
        return $this->antennapower;
    }

    /**
     * Set networkmedia
     *
     * @param string $networkmedia
     * @return Datosnexxt
     */
    public function setNetworkmedia($networkmedia)
    {
        $this->networkmedia = $networkmedia;

        return $this;
    }

    /**
     * Get networkmedia
     *
     * @return string 
     */
    public function getNetworkmedia()
    {
        return $this->networkmedia;
    }

    /**
     * Set nat
     *
     * @param string $nat
     * @return Datosnexxt
     */
    public function setNat($nat)
    {
        $this->nat = $nat;

        return $this;
    }

    /**
     * Get nat
     *
     * @return string 
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * Set usbstorageport
     *
     * @param string $usbstorageport
     * @return Datosnexxt
     */
    public function setUsbstorageport($usbstorageport)
    {
        $this->usbstorageport = $usbstorageport;

        return $this;
    }

    /**
     * Get usbstorageport
     *
     * @return string 
     */
    public function getUsbstorageport()
    {
        return $this->usbstorageport;
    }

    /**
     * Set power
     *
     * @param string $power
     * @return Datosnexxt
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return string 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set bands
     *
     * @param string $bands
     * @return Datosnexxt
     */
    public function setBands($bands)
    {
        $this->bands = $bands;

        return $this;
    }

    /**
     * Get bands
     *
     * @return string 
     */
    public function getBands()
    {
        return $this->bands;
    }

    /**
     * Set speed
     *
     * @param string $speed
     * @return Datosnexxt
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return string 
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set wds
     *
     * @param string $wds
     * @return Datosnexxt
     */
    public function setWds($wds)
    {
        $this->wds = $wds;

        return $this;
    }

    /**
     * Get wds
     *
     * @return string 
     */
    public function getWds()
    {
        return $this->wds;
    }

    /**
     * Set wps
     *
     * @param string $wps
     * @return Datosnexxt
     */
    public function setWps($wps)
    {
        $this->wps = $wps;

        return $this;
    }

    /**
     * Get wps
     *
     * @return string 
     */
    public function getWps()
    {
        return $this->wps;
    }

    /**
     * Set softwaresetup
     *
     * @param string $softwaresetup
     * @return Datosnexxt
     */
    public function setSoftwaresetup($softwaresetup)
    {
        $this->softwaresetup = $softwaresetup;

        return $this;
    }

    /**
     * Get softwaresetup
     *
     * @return string 
     */
    public function getSoftwaresetup()
    {
        return $this->softwaresetup;
    }

    /**
     * Set firmwaretype
     *
     * @param string $firmwaretype
     * @return Datosnexxt
     */
    public function setFirmwaretype($firmwaretype)
    {
        $this->firmwaretype = $firmwaretype;

        return $this;
    }

    /**
     * Get firmwaretype
     *
     * @return string 
     */
    public function getFirmwaretype()
    {
        return $this->firmwaretype;
    }

    /**
     * Set firmwarelastversion
     *
     * @param string $firmwarelastversion
     * @return Datosnexxt
     */
    public function setFirmwarelastversion($firmwarelastversion)
    {
        $this->firmwarelastversion = $firmwarelastversion;

        return $this;
    }

    /**
     * Get firmwarelastversion
     *
     * @return string 
     */
    public function getFirmwarelastversion()
    {
        return $this->firmwarelastversion;
    }

    /**
     * Set ipdefaultgateway
     *
     * @param string $ipdefaultgateway
     * @return Datosnexxt
     */
    public function setIpdefaultgateway($ipdefaultgateway)
    {
        $this->ipdefaultgateway = $ipdefaultgateway;

        return $this;
    }

    /**
     * Get ipdefaultgateway
     *
     * @return string 
     */
    public function getIpdefaultgateway()
    {
        return $this->ipdefaultgateway;
    }

    /**
     * Set remotemanagement
     *
     * @param string $remotemanagement
     * @return Datosnexxt
     */
    public function setRemotemanagement($remotemanagement)
    {
        $this->remotemanagement = $remotemanagement;

        return $this;
    }

    /**
     * Get remotemanagement
     *
     * @return string 
     */
    public function getRemotemanagement()
    {
        return $this->remotemanagement;
    }

    /**
     * Set qualityofservice
     *
     * @param string $qualityofservice
     * @return Datosnexxt
     */
    public function setQualityofservice($qualityofservice)
    {
        $this->qualityofservice = $qualityofservice;

        return $this;
    }

    /**
     * Get qualityofservice
     *
     * @return string 
     */
    public function getQualityofservice()
    {
        return $this->qualityofservice;
    }

    /**
     * Set dynamicdns
     *
     * @param string $dynamicdns
     * @return Datosnexxt
     */
    public function setDynamicdns($dynamicdns)
    {
        $this->dynamicdns = $dynamicdns;

        return $this;
    }

    /**
     * Get dynamicdns
     *
     * @return string 
     */
    public function getDynamicdns()
    {
        return $this->dynamicdns;
    }

    /**
     * Set firewallsecurity
     *
     * @param string $firewallsecurity
     * @return Datosnexxt
     */
    public function setFirewallsecurity($firewallsecurity)
    {
        $this->firewallsecurity = $firewallsecurity;

        return $this;
    }

    /**
     * Get firewallsecurity
     *
     * @return string 
     */
    public function getFirewallsecurity()
    {
        return $this->firewallsecurity;
    }

    /**
     * Set portforwarding
     *
     * @param string $portforwarding
     * @return Datosnexxt
     */
    public function setPortforwarding($portforwarding)
    {
        $this->portforwarding = $portforwarding;

        return $this;
    }

    /**
     * Get portforwarding
     *
     * @return string 
     */
    public function getPortforwarding()
    {
        return $this->portforwarding;
    }

    /**
     * Set accesscontrol
     *
     * @param string $accesscontrol
     * @return Datosnexxt
     */
    public function setAccesscontrol($accesscontrol)
    {
        $this->accesscontrol = $accesscontrol;

        return $this;
    }

    /**
     * Get accesscontrol
     *
     * @return string 
     */
    public function getAccesscontrol()
    {
        return $this->accesscontrol;
    }

    /**
     * Set dhcp
     *
     * @param string $dhcp
     * @return Datosnexxt
     */
    public function setDhcp($dhcp)
    {
        $this->dhcp = $dhcp;

        return $this;
    }

    /**
     * Get dhcp
     *
     * @return string 
     */
    public function getDhcp()
    {
        return $this->dhcp;
    }

    /**
     * Set certification
     *
     * @param string $certification
     * @return Datosnexxt
     */
    public function setCertification($certification)
    {
        $this->certification = $certification;

        return $this;
    }

    /**
     * Get certification
     *
     * @return string 
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     * @return Datosnexxt
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set humidity
     *
     * @param string $humidity
     * @return Datosnexxt
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return string 
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set oscompatibility
     *
     * @param string $oscompatibility
     * @return Datosnexxt
     */
    public function setOscompatibility($oscompatibility)
    {
        $this->oscompatibility = $oscompatibility;

        return $this;
    }

    /**
     * Get oscompatibility
     *
     * @return string 
     */
    public function getOscompatibility()
    {
        return $this->oscompatibility;
    }

    /**
     * Set warranty
     *
     * @param string $warranty
     * @return Datosnexxt
     */
    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;

        return $this;
    }

    /**
     * Get warranty
     *
     * @return string 
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Set sheeten
     *
     * @param string $sheeten
     * @return Datosnexxt
     */
    public function setSheeten($sheeten)
    {
        $this->sheeten = $sheeten;

        return $this;
    }

    /**
     * Get sheeten
     *
     * @return string 
     */
    public function getSheeten()
    {
        return $this->sheeten;
    }

    /**
     * Set sheetes
     *
     * @param string $sheetes
     * @return Datosnexxt
     */
    public function setSheetes($sheetes)
    {
        $this->sheetes = $sheetes;

        return $this;
    }

    /**
     * Get sheetes
     *
     * @return string 
     */
    public function getSheetes()
    {
        return $this->sheetes;
    }

    /**
     * Set chip
     *
     * @param string $chip
     * @return Datosnexxt
     */
    public function setChip($chip)
    {
        $this->chip = $chip;

        return $this;
    }

    /**
     * Get chip
     *
     * @return string 
     */
    public function getChip()
    {
        return $this->chip;
    }

    /**
     * Set protocolls
     *
     * @param string $protocolls
     * @return Datosnexxt
     */
    public function setProtocolls($protocolls)
    {
        $this->protocolls = $protocolls;

        return $this;
    }

    /**
     * Get protocolls
     *
     * @return string 
     */
    public function getProtocolls()
    {
        return $this->protocolls;
    }

    /**
     * Set security
     *
     * @param string $security
     * @return Datosnexxt
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return string 
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set natentries
     *
     * @param string $natentries
     * @return Datosnexxt
     */
    public function setNatentries($natentries)
    {
        $this->natentries = $natentries;

        return $this;
    }

    /**
     * Get natentries
     *
     * @return string 
     */
    public function getNatentries()
    {
        return $this->natentries;
    }

    /**
     * Set softwarespeed
     *
     * @param string $softwarespeed
     * @return Datosnexxt
     */
    public function setSoftwarespeed($softwarespeed)
    {
        $this->softwarespeed = $softwarespeed;

        return $this;
    }

    /**
     * Get softwarespeed
     *
     * @return string 
     */
    public function getSoftwarespeed()
    {
        return $this->softwarespeed;
    }

    /**
     * Set ligths
     *
     * @param string $ligths
     * @return Datosnexxt
     */
    public function setLigths($ligths)
    {
        $this->ligths = $ligths;

        return $this;
    }

    /**
     * Get ligths
     *
     * @return string 
     */
    public function getLigths()
    {
        return $this->ligths;
    }

    /**
     * Set powersupply
     *
     * @param string $powersupply
     * @return Datosnexxt
     */
    public function setPowersupply($powersupply)
    {
        $this->powersupply = $powersupply;

        return $this;
    }

    /**
     * Get powersupply
     *
     * @return string 
     */
    public function getPowersupply()
    {
        return $this->powersupply;
    }

    /**
     * Set administration
     *
     * @param string $administration
     * @return Datosnexxt
     */
    public function setAdministration($administration)
    {
        $this->administration = $administration;

        return $this;
    }

    /**
     * Get administration
     *
     * @return string 
     */
    public function getAdministration()
    {
        return $this->administration;
    }

    /**
     * Set minsysreq
     *
     * @param string $minsysreq
     * @return Datosnexxt
     */
    public function setMinsysreq($minsysreq)
    {
        $this->minsysreq = $minsysreq;

        return $this;
    }

    /**
     * Get minsysreq
     *
     * @return string 
     */
    public function getMinsysreq()
    {
        return $this->minsysreq;
    }

    /**
     * Set standards
     *
     * @param string $standards
     * @return Datosnexxt
     */
    public function setStandards($standards)
    {
        $this->standards = $standards;

        return $this;
    }

    /**
     * Get standards
     *
     * @return string 
     */
    public function getStandards()
    {
        return $this->standards;
    }

    /**
     * Set interface
     *
     * @param string $interface
     * @return Datosnexxt
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface
     *
     * @return string 
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set antennas
     *
     * @param string $antennas
     * @return Datosnexxt
     */
    public function setAntennas($antennas)
    {
        $this->antennas = $antennas;

        return $this;
    }

    /**
     * Get antennas
     *
     * @return string 
     */
    public function getAntennas()
    {
        return $this->antennas;
    }

    /**
     * Set networksecurity
     *
     * @param string $networksecurity
     * @return Datosnexxt
     */
    public function setNetworksecurity($networksecurity)
    {
        $this->networksecurity = $networksecurity;

        return $this;
    }

    /**
     * Get networksecurity
     *
     * @return string 
     */
    public function getNetworksecurity()
    {
        return $this->networksecurity;
    }

    /**
     * Set certifications
     *
     * @param string $certifications
     * @return Datosnexxt
     */
    public function setCertifications($certifications)
    {
        $this->certifications = $certifications;

        return $this;
    }

    /**
     * Get certifications
     *
     * @return string 
     */
    public function getCertifications()
    {
        return $this->certifications;
    }

    /**
     * Set imagensensor
     *
     * @param string $imagensensor
     * @return Datosnexxt
     */
    public function setImagensensor($imagensensor)
    {
        $this->imagensensor = $imagensensor;

        return $this;
    }

    /**
     * Get imagensensor
     *
     * @return string 
     */
    public function getImagensensor()
    {
        return $this->imagensensor;
    }

    /**
     * Set resolution
     *
     * @param string $resolution
     * @return Datosnexxt
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return string 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set lens
     *
     * @param string $lens
     * @return Datosnexxt
     */
    public function setLens($lens)
    {
        $this->lens = $lens;

        return $this;
    }

    /**
     * Get lens
     *
     * @return string 
     */
    public function getLens()
    {
        return $this->lens;
    }

    /**
     * Set viewingangle
     *
     * @param string $viewingangle
     * @return Datosnexxt
     */
    public function setViewingangle($viewingangle)
    {
        $this->viewingangle = $viewingangle;

        return $this;
    }

    /**
     * Get viewingangle
     *
     * @return string 
     */
    public function getViewingangle()
    {
        return $this->viewingangle;
    }

    /**
     * Set minimunilumination
     *
     * @param string $minimunilumination
     * @return Datosnexxt
     */
    public function setMinimunilumination($minimunilumination)
    {
        $this->minimunilumination = $minimunilumination;

        return $this;
    }

    /**
     * Get minimunilumination
     *
     * @return string 
     */
    public function getMinimunilumination()
    {
        return $this->minimunilumination;
    }

    /**
     * Set infraredled
     *
     * @param string $infraredled
     * @return Datosnexxt
     */
    public function setInfraredled($infraredled)
    {
        $this->infraredled = $infraredled;

        return $this;
    }

    /**
     * Get infraredled
     *
     * @return string 
     */
    public function getInfraredled()
    {
        return $this->infraredled;
    }

    /**
     * Set nigthvisionrange
     *
     * @param string $nigthvisionrange
     * @return Datosnexxt
     */
    public function setNigthvisionrange($nigthvisionrange)
    {
        $this->nigthvisionrange = $nigthvisionrange;

        return $this;
    }

    /**
     * Get nigthvisionrange
     *
     * @return string 
     */
    public function getNigthvisionrange()
    {
        return $this->nigthvisionrange;
    }

    /**
     * Set digitalzoom
     *
     * @param string $digitalzoom
     * @return Datosnexxt
     */
    public function setDigitalzoom($digitalzoom)
    {
        $this->digitalzoom = $digitalzoom;

        return $this;
    }

    /**
     * Get digitalzoom
     *
     * @return string 
     */
    public function getDigitalzoom()
    {
        return $this->digitalzoom;
    }

    /**
     * Set memorycardslot
     *
     * @param string $memorycardslot
     * @return Datosnexxt
     */
    public function setMemorycardslot($memorycardslot)
    {
        $this->memorycardslot = $memorycardslot;

        return $this;
    }

    /**
     * Get memorycardslot
     *
     * @return string 
     */
    public function getMemorycardslot()
    {
        return $this->memorycardslot;
    }

    /**
     * Set compression
     *
     * @param string $compression
     * @return Datosnexxt
     */
    public function setCompression($compression)
    {
        $this->compression = $compression;

        return $this;
    }

    /**
     * Get compression
     *
     * @return string 
     */
    public function getCompression()
    {
        return $this->compression;
    }

    /**
     * Set framerate
     *
     * @param string $framerate
     * @return Datosnexxt
     */
    public function setFramerate($framerate)
    {
        $this->framerate = $framerate;

        return $this;
    }

    /**
     * Get framerate
     *
     * @return string 
     */
    public function getFramerate()
    {
        return $this->framerate;
    }

    /**
     * Set mirrorflip
     *
     * @param string $mirrorflip
     * @return Datosnexxt
     */
    public function setMirrorflip($mirrorflip)
    {
        $this->mirrorflip = $mirrorflip;

        return $this;
    }

    /**
     * Get mirrorflip
     *
     * @return string 
     */
    public function getMirrorflip()
    {
        return $this->mirrorflip;
    }

    /**
     * Set recordfileformat
     *
     * @param string $recordfileformat
     * @return Datosnexxt
     */
    public function setRecordfileformat($recordfileformat)
    {
        $this->recordfileformat = $recordfileformat;

        return $this;
    }

    /**
     * Get recordfileformat
     *
     * @return string 
     */
    public function getRecordfileformat()
    {
        return $this->recordfileformat;
    }

    /**
     * Set comunication
     *
     * @param string $comunication
     * @return Datosnexxt
     */
    public function setComunication($comunication)
    {
        $this->comunication = $comunication;

        return $this;
    }

    /**
     * Get comunication
     *
     * @return string 
     */
    public function getComunication()
    {
        return $this->comunication;
    }

    /**
     * Set input
     *
     * @param string $input
     * @return Datosnexxt
     */
    public function setInput($input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Get input
     *
     * @return string 
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Set output
     *
     * @param string $output
     * @return Datosnexxt
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Get output
     *
     * @return string 
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Set supportedprotocols
     *
     * @param string $supportedprotocols
     * @return Datosnexxt
     */
    public function setSupportedprotocols($supportedprotocols)
    {
        $this->supportedprotocols = $supportedprotocols;

        return $this;
    }

    /**
     * Get supportedprotocols
     *
     * @return string 
     */
    public function getSupportedprotocols()
    {
        return $this->supportedprotocols;
    }

    /**
     * Set antenas
     *
     * @param string $antenas
     * @return Datosnexxt
     */
    public function setAntenas($antenas)
    {
        $this->antenas = $antenas;

        return $this;
    }

    /**
     * Get antenas
     *
     * @return string 
     */
    public function getAntenas()
    {
        return $this->antenas;
    }

    /**
     * Set antennagain
     *
     * @param string $antennagain
     * @return Datosnexxt
     */
    public function setAntennagain($antennagain)
    {
        $this->antennagain = $antennagain;

        return $this;
    }

    /**
     * Get antennagain
     *
     * @return string 
     */
    public function getAntennagain()
    {
        return $this->antennagain;
    }

    /**
     * Set ranges
     *
     * @param string $ranges
     * @return Datosnexxt
     */
    public function setRanges($ranges)
    {
        $this->ranges = $ranges;

        return $this;
    }

    /**
     * Get ranges
     *
     * @return string 
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * Set horizontalspeed
     *
     * @param string $horizontalspeed
     * @return Datosnexxt
     */
    public function setHorizontalspeed($horizontalspeed)
    {
        $this->horizontalspeed = $horizontalspeed;

        return $this;
    }

    /**
     * Get horizontalspeed
     *
     * @return string 
     */
    public function getHorizontalspeed()
    {
        return $this->horizontalspeed;
    }

    /**
     * Set verticalspeed
     *
     * @param string $verticalspeed
     * @return Datosnexxt
     */
    public function setVerticalspeed($verticalspeed)
    {
        $this->verticalspeed = $verticalspeed;

        return $this;
    }

    /**
     * Get verticalspeed
     *
     * @return string 
     */
    public function getVerticalspeed()
    {
        return $this->verticalspeed;
    }

    /**
     * Set features
     *
     * @param string $features
     * @return Datosnexxt
     */
    public function setFeatures($features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Get features
     *
     * @return string 
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Set softsetup
     *
     * @param string $softsetup
     * @return Datosnexxt
     */
    public function setSoftsetup($softsetup)
    {
        $this->softsetup = $softsetup;

        return $this;
    }

    /**
     * Get softsetup
     *
     * @return string 
     */
    public function getSoftsetup()
    {
        return $this->softsetup;
    }

    /**
     * Set parentalcontrol
     *
     * @param string $parentalcontrol
     * @return Datosnexxt
     */
    public function setParentalcontrol($parentalcontrol)
    {
        $this->parentalcontrol = $parentalcontrol;

        return $this;
    }

    /**
     * Get parentalcontrol
     *
     * @return string 
     */
    public function getParentalcontrol()
    {
        return $this->parentalcontrol;
    }

    /**
     * Set multipleusermansystem
     *
     * @param string $multipleusermansystem
     * @return Datosnexxt
     */
    public function setMultipleusermansystem($multipleusermansystem)
    {
        $this->multipleusermansystem = $multipleusermansystem;

        return $this;
    }

    /**
     * Get multipleusermansystem
     *
     * @return string 
     */
    public function getMultipleusermansystem()
    {
        return $this->multipleusermansystem;
    }

    /**
     * Set splitscreenview
     *
     * @param string $splitscreenview
     * @return Datosnexxt
     */
    public function setSplitscreenview($splitscreenview)
    {
        $this->splitscreenview = $splitscreenview;

        return $this;
    }

    /**
     * Get splitscreenview
     *
     * @return string 
     */
    public function getSplitscreenview()
    {
        return $this->splitscreenview;
    }

    /**
     * Set mobileapp
     *
     * @param string $mobileapp
     * @return Datosnexxt
     */
    public function setMobileapp($mobileapp)
    {
        $this->mobileapp = $mobileapp;

        return $this;
    }

    /**
     * Get mobileapp
     *
     * @return string 
     */
    public function getMobileapp()
    {
        return $this->mobileapp;
    }

    /**
     * Set alarmports
     *
     * @param string $alarmports
     * @return Datosnexxt
     */
    public function setAlarmports($alarmports)
    {
        $this->alarmports = $alarmports;

        return $this;
    }

    /**
     * Get alarmports
     *
     * @return string 
     */
    public function getAlarmports()
    {
        return $this->alarmports;
    }

    /**
     * Set motiondetection
     *
     * @param string $motiondetection
     * @return Datosnexxt
     */
    public function setMotiondetection($motiondetection)
    {
        $this->motiondetection = $motiondetection;

        return $this;
    }

    /**
     * Get motiondetection
     *
     * @return string 
     */
    public function getMotiondetection()
    {
        return $this->motiondetection;
    }

    /**
     * Set notificationmethod
     *
     * @param string $notificationmethod
     * @return Datosnexxt
     */
    public function setNotificationmethod($notificationmethod)
    {
        $this->notificationmethod = $notificationmethod;

        return $this;
    }

    /**
     * Get notificationmethod
     *
     * @return string 
     */
    public function getNotificationmethod()
    {
        return $this->notificationmethod;
    }

    /**
     * Set motificationscheduling
     *
     * @param string $motificationscheduling
     * @return Datosnexxt
     */
    public function setMotificationscheduling($motificationscheduling)
    {
        $this->motificationscheduling = $motificationscheduling;

        return $this;
    }

    /**
     * Get motificationscheduling
     *
     * @return string 
     */
    public function getMotificationscheduling()
    {
        return $this->motificationscheduling;
    }

    /**
     * Set cabletype
     *
     * @param string $cabletype
     * @return Datosnexxt
     */
    public function setCabletype($cabletype)
    {
        $this->cabletype = $cabletype;

        return $this;
    }

    /**
     * Get cabletype
     *
     * @return string 
     */
    public function getCabletype()
    {
        return $this->cabletype;
    }

    /**
     * Set numberofpairs
     *
     * @param string $numberofpairs
     * @return Datosnexxt
     */
    public function setNumberofpairs($numberofpairs)
    {
        $this->numberofpairs = $numberofpairs;

        return $this;
    }

    /**
     * Get numberofpairs
     *
     * @return string 
     */
    public function getNumberofpairs()
    {
        return $this->numberofpairs;
    }

    /**
     * Set numberofwires
     *
     * @param string $numberofwires
     * @return Datosnexxt
     */
    public function setNumberofwires($numberofwires)
    {
        $this->numberofwires = $numberofwires;

        return $this;
    }

    /**
     * Get numberofwires
     *
     * @return string 
     */
    public function getNumberofwires()
    {
        return $this->numberofwires;
    }

    /**
     * Set wiretype
     *
     * @param string $wiretype
     * @return Datosnexxt
     */
    public function setWiretype($wiretype)
    {
        $this->wiretype = $wiretype;

        return $this;
    }

    /**
     * Get wiretype
     *
     * @return string 
     */
    public function getWiretype()
    {
        return $this->wiretype;
    }

    /**
     * Set wiregaugesize
     *
     * @param string $wiregaugesize
     * @return Datosnexxt
     */
    public function setWiregaugesize($wiregaugesize)
    {
        $this->wiregaugesize = $wiregaugesize;

        return $this;
    }

    /**
     * Get wiregaugesize
     *
     * @return string 
     */
    public function getWiregaugesize()
    {
        return $this->wiregaugesize;
    }

    /**
     * Set dialectric
     *
     * @param string $dialectric
     * @return Datosnexxt
     */
    public function setDialectric($dialectric)
    {
        $this->dialectric = $dialectric;

        return $this;
    }

    /**
     * Get dialectric
     *
     * @return string 
     */
    public function getDialectric()
    {
        return $this->dialectric;
    }

    /**
     * Set strength
     *
     * @param string $strength
     * @return Datosnexxt
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return string 
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set internationalstandars
     *
     * @param string $internationalstandars
     * @return Datosnexxt
     */
    public function setInternationalstandars($internationalstandars)
    {
        $this->internationalstandars = $internationalstandars;

        return $this;
    }

    /**
     * Get internationalstandars
     *
     * @return string 
     */
    public function getInternationalstandars()
    {
        return $this->internationalstandars;
    }

    /**
     * Set ulcertificate
     *
     * @param string $ulcertificate
     * @return Datosnexxt
     */
    public function setUlcertificate($ulcertificate)
    {
        $this->ulcertificate = $ulcertificate;

        return $this;
    }

    /**
     * Get ulcertificate
     *
     * @return string 
     */
    public function getUlcertificate()
    {
        return $this->ulcertificate;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Datosnexxt
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set videoinput
     *
     * @param string $videoinput
     * @return Datosnexxt
     */
    public function setVideoinput($videoinput)
    {
        $this->videoinput = $videoinput;

        return $this;
    }

    /**
     * Get videoinput
     *
     * @return string 
     */
    public function getVideoinput()
    {
        return $this->videoinput;
    }

    /**
     * Set videocompression
     *
     * @param string $videocompression
     * @return Datosnexxt
     */
    public function setVideocompression($videocompression)
    {
        $this->videocompression = $videocompression;

        return $this;
    }

    /**
     * Get videocompression
     *
     * @return string 
     */
    public function getVideocompression()
    {
        return $this->videocompression;
    }

    /**
     * Set audioinput
     *
     * @param string $audioinput
     * @return Datosnexxt
     */
    public function setAudioinput($audioinput)
    {
        $this->audioinput = $audioinput;

        return $this;
    }

    /**
     * Get audioinput
     *
     * @return string 
     */
    public function getAudioinput()
    {
        return $this->audioinput;
    }

    /**
     * Set twowayaudioinput
     *
     * @param string $twowayaudioinput
     * @return Datosnexxt
     */
    public function setTwowayaudioinput($twowayaudioinput)
    {
        $this->twowayaudioinput = $twowayaudioinput;

        return $this;
    }

    /**
     * Get twowayaudioinput
     *
     * @return string 
     */
    public function getTwowayaudioinput()
    {
        return $this->twowayaudioinput;
    }

    /**
     * Set videooutput
     *
     * @param string $videooutput
     * @return Datosnexxt
     */
    public function setVideooutput($videooutput)
    {
        $this->videooutput = $videooutput;

        return $this;
    }

    /**
     * Get videooutput
     *
     * @return string 
     */
    public function getVideooutput()
    {
        return $this->videooutput;
    }

    /**
     * Set videoformat
     *
     * @param string $videoformat
     * @return Datosnexxt
     */
    public function setVideoformat($videoformat)
    {
        $this->videoformat = $videoformat;

        return $this;
    }

    /**
     * Get videoformat
     *
     * @return string 
     */
    public function getVideoformat()
    {
        return $this->videoformat;
    }

    /**
     * Set encodingresolution
     *
     * @param string $encodingresolution
     * @return Datosnexxt
     */
    public function setEncodingresolution($encodingresolution)
    {
        $this->encodingresolution = $encodingresolution;

        return $this;
    }

    /**
     * Get encodingresolution
     *
     * @return string 
     */
    public function getEncodingresolution()
    {
        return $this->encodingresolution;
    }

    /**
     * Set audiooutput
     *
     * @param string $audiooutput
     * @return Datosnexxt
     */
    public function setAudiooutput($audiooutput)
    {
        $this->audiooutput = $audiooutput;

        return $this;
    }

    /**
     * Get audiooutput
     *
     * @return string 
     */
    public function getAudiooutput()
    {
        return $this->audiooutput;
    }

    /**
     * Set dualstreamsupport
     *
     * @param string $dualstreamsupport
     * @return Datosnexxt
     */
    public function setDualstreamsupport($dualstreamsupport)
    {
        $this->dualstreamsupport = $dualstreamsupport;

        return $this;
    }

    /**
     * Get dualstreamsupport
     *
     * @return string 
     */
    public function getDualstreamsupport()
    {
        return $this->dualstreamsupport;
    }

    /**
     * Set streamtype
     *
     * @param string $streamtype
     * @return Datosnexxt
     */
    public function setStreamtype($streamtype)
    {
        $this->streamtype = $streamtype;

        return $this;
    }

    /**
     * Get streamtype
     *
     * @return string 
     */
    public function getStreamtype()
    {
        return $this->streamtype;
    }

    /**
     * Set syncplayback
     *
     * @param string $syncplayback
     * @return Datosnexxt
     */
    public function setSyncplayback($syncplayback)
    {
        $this->syncplayback = $syncplayback;

        return $this;
    }

    /**
     * Get syncplayback
     *
     * @return string 
     */
    public function getSyncplayback()
    {
        return $this->syncplayback;
    }

    /**
     * Set pentaplex
     *
     * @param string $pentaplex
     * @return Datosnexxt
     */
    public function setPentaplex($pentaplex)
    {
        $this->pentaplex = $pentaplex;

        return $this;
    }

    /**
     * Get pentaplex
     *
     * @return string 
     */
    public function getPentaplex()
    {
        return $this->pentaplex;
    }

    /**
     * Set sata
     *
     * @param string $sata
     * @return Datosnexxt
     */
    public function setSata($sata)
    {
        $this->sata = $sata;

        return $this;
    }

    /**
     * Get sata
     *
     * @return string 
     */
    public function getSata()
    {
        return $this->sata;
    }

    /**
     * Set capacity
     *
     * @param string $capacity
     * @return Datosnexxt
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set backupcapability
     *
     * @param string $backupcapability
     * @return Datosnexxt
     */
    public function setBackupcapability($backupcapability)
    {
        $this->backupcapability = $backupcapability;

        return $this;
    }

    /**
     * Get backupcapability
     *
     * @return string 
     */
    public function getBackupcapability()
    {
        return $this->backupcapability;
    }

    /**
     * Set networkinterface
     *
     * @param string $networkinterface
     * @return Datosnexxt
     */
    public function setNetworkinterface($networkinterface)
    {
        $this->networkinterface = $networkinterface;

        return $this;
    }

    /**
     * Get networkinterface
     *
     * @return string 
     */
    public function getNetworkinterface()
    {
        return $this->networkinterface;
    }

    /**
     * Set usbinterface
     *
     * @param string $usbinterface
     * @return Datosnexxt
     */
    public function setUsbinterface($usbinterface)
    {
        $this->usbinterface = $usbinterface;

        return $this;
    }

    /**
     * Get usbinterface
     *
     * @return string 
     */
    public function getUsbinterface()
    {
        return $this->usbinterface;
    }

    /**
     * Set rs485
     *
     * @param string $rs485
     * @return Datosnexxt
     */
    public function setRs485($rs485)
    {
        $this->rs485 = $rs485;

        return $this;
    }

    /**
     * Get rs485
     *
     * @return string 
     */
    public function getRs485()
    {
        return $this->rs485;
    }

    /**
     * Set alarmio
     *
     * @param string $alarmio
     * @return Datosnexxt
     */
    public function setAlarmio($alarmio)
    {
        $this->alarmio = $alarmio;

        return $this;
    }

    /**
     * Get alarmio
     *
     * @return string 
     */
    public function getAlarmio()
    {
        return $this->alarmio;
    }

    /**
     * Set housing
     *
     * @param string $housing
     * @return Datosnexxt
     */
    public function setHousing($housing)
    {
        $this->housing = $housing;

        return $this;
    }

    /**
     * Get housing
     *
     * @return string 
     */
    public function getHousing()
    {
        return $this->housing;
    }

    /**
     * Set certificates
     *
     * @param string $certificates
     * @return Datosnexxt
     */
    public function setCertificates($certificates)
    {
        $this->certificates = $certificates;

        return $this;
    }

    /**
     * Get certificates
     *
     * @return string 
     */
    public function getCertificates()
    {
        return $this->certificates;
    }

    /**
     * Set protocols
     *
     * @param string $protocols
     * @return Datosnexxt
     */
    public function setProtocols($protocols)
    {
        $this->protocols = $protocols;

        return $this;
    }

    /**
     * Get protocols
     *
     * @return string 
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    /**
     * Set cableentryholesize
     *
     * @param string $cableentryholesize
     * @return Datosnexxt
     */
    public function setCableentryholesize($cableentryholesize)
    {
        $this->cableentryholesize = $cableentryholesize;

        return $this;
    }

    /**
     * Get cableentryholesize
     *
     * @return string 
     */
    public function getCableentryholesize()
    {
        return $this->cableentryholesize;
    }

    /**
     * Set operatingtemperature
     *
     * @param string $operatingtemperature
     * @return Datosnexxt
     */
    public function setOperatingtemperature($operatingtemperature)
    {
        $this->operatingtemperature = $operatingtemperature;

        return $this;
    }

    /**
     * Get operatingtemperature
     *
     * @return string 
     */
    public function getOperatingtemperature()
    {
        return $this->operatingtemperature;
    }

    /**
     * Set fittingcovertype
     *
     * @param string $fittingcovertype
     * @return Datosnexxt
     */
    public function setFittingcovertype($fittingcovertype)
    {
        $this->fittingcovertype = $fittingcovertype;

        return $this;
    }

    /**
     * Get fittingcovertype
     *
     * @return string 
     */
    public function getFittingcovertype()
    {
        return $this->fittingcovertype;
    }

    /**
     * Set upc
     *
     * @param string $upc
     * @return Datosnexxt
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Get upc
     *
     * @return string 
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * Set quantityperbag
     *
     * @param string $quantityperbag
     * @return Datosnexxt
     */
    public function setQuantityperbag($quantityperbag)
    {
        $this->quantityperbag = $quantityperbag;

        return $this;
    }

    /**
     * Get quantityperbag
     *
     * @return string 
     */
    public function getQuantityperbag()
    {
        return $this->quantityperbag;
    }

    /**
     * Set tensiblestrength
     *
     * @param string $tensiblestrength
     * @return Datosnexxt
     */
    public function setTensiblestrength($tensiblestrength)
    {
        $this->tensiblestrength = $tensiblestrength;

        return $this;
    }

    /**
     * Get tensiblestrength
     *
     * @return string 
     */
    public function getTensiblestrength()
    {
        return $this->tensiblestrength;
    }

    /**
     * Set wireentryholesize
     *
     * @param string $wireentryholesize
     * @return Datosnexxt
     */
    public function setWireentryholesize($wireentryholesize)
    {
        $this->wireentryholesize = $wireentryholesize;

        return $this;
    }

    /**
     * Get wireentryholesize
     *
     * @return string 
     */
    public function getWireentryholesize()
    {
        return $this->wireentryholesize;
    }

    /**
     * Set transmissionspeed
     *
     * @param string $transmissionspeed
     * @return Datosnexxt
     */
    public function setTransmissionspeed($transmissionspeed)
    {
        $this->transmissionspeed = $transmissionspeed;

        return $this;
    }

    /**
     * Get transmissionspeed
     *
     * @return string 
     */
    public function getTransmissionspeed()
    {
        return $this->transmissionspeed;
    }

    /**
     * Set bandwidth
     *
     * @param string $bandwidth
     * @return Datosnexxt
     */
    public function setBandwidth($bandwidth)
    {
        $this->bandwidth = $bandwidth;

        return $this;
    }

    /**
     * Get bandwidth
     *
     * @return string 
     */
    public function getBandwidth()
    {
        return $this->bandwidth;
    }

    /**
     * Set ports
     *
     * @param string $ports
     * @return Datosnexxt
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * Get ports
     *
     * @return string 
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * Set effectiveuspace
     *
     * @param string $effectiveuspace
     * @return Datosnexxt
     */
    public function setEffectiveuspace($effectiveuspace)
    {
        $this->effectiveuspace = $effectiveuspace;

        return $this;
    }

    /**
     * Get effectiveuspace
     *
     * @return string 
     */
    public function getEffectiveuspace()
    {
        return $this->effectiveuspace;
    }

    /**
     * Set mountingtype
     *
     * @param string $mountingtype
     * @return Datosnexxt
     */
    public function setMountingtype($mountingtype)
    {
        $this->mountingtype = $mountingtype;

        return $this;
    }

    /**
     * Get mountingtype
     *
     * @return string 
     */
    public function getMountingtype()
    {
        return $this->mountingtype;
    }

    /**
     * Set wiring
     *
     * @param string $wiring
     * @return Datosnexxt
     */
    public function setWiring($wiring)
    {
        $this->wiring = $wiring;

        return $this;
    }

    /**
     * Get wiring
     *
     * @return string 
     */
    public function getWiring()
    {
        return $this->wiring;
    }

    /**
     * Set externalwidth
     *
     * @param string $externalwidth
     * @return Datosnexxt
     */
    public function setExternalwidth($externalwidth)
    {
        $this->externalwidth = $externalwidth;

        return $this;
    }

    /**
     * Get externalwidth
     *
     * @return string 
     */
    public function getExternalwidth()
    {
        return $this->externalwidth;
    }

    /**
     * Set depth
     *
     * @param string $depth
     * @return Datosnexxt
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return string 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set includes
     *
     * @param string $includes
     * @return Datosnexxt
     */
    public function setIncludes($includes)
    {
        $this->includes = $includes;

        return $this;
    }

    /**
     * Get includes
     *
     * @return string 
     */
    public function getIncludes()
    {
        return $this->includes;
    }

    /**
     * Set voltagerating
     *
     * @param string $voltagerating
     * @return Datosnexxt
     */
    public function setVoltagerating($voltagerating)
    {
        $this->voltagerating = $voltagerating;

        return $this;
    }

    /**
     * Get voltagerating
     *
     * @return string 
     */
    public function getVoltagerating()
    {
        return $this->voltagerating;
    }

    /**
     * Set temprating
     *
     * @param string $temprating
     * @return Datosnexxt
     */
    public function setTemprating($temprating)
    {
        $this->temprating = $temprating;

        return $this;
    }

    /**
     * Get temprating
     *
     * @return string 
     */
    public function getTemprating()
    {
        return $this->temprating;
    }

    /**
     * Set etlcertificate
     *
     * @param string $etlcertificate
     * @return Datosnexxt
     */
    public function setEtlcertificate($etlcertificate)
    {
        $this->etlcertificate = $etlcertificate;

        return $this;
    }

    /**
     * Get etlcertificate
     *
     * @return string 
     */
    public function getEtlcertificate()
    {
        return $this->etlcertificate;
    }

    /**
     * Set webmanagement
     *
     * @param string $webmanagement
     * @return Datosnexxt
     */
    public function setWebmanagement($webmanagement)
    {
        $this->webmanagement = $webmanagement;

        return $this;
    }

    /**
     * Get webmanagement
     *
     * @return string 
     */
    public function getWebmanagement()
    {
        return $this->webmanagement;
    }

    /**
     * Set audiocompression
     *
     * @param string $audiocompression
     * @return Datosnexxt
     */
    public function setAudiocompression($audiocompression)
    {
        $this->audiocompression = $audiocompression;

        return $this;
    }

    /**
     * Get audiocompression
     *
     * @return string 
     */
    public function getAudiocompression()
    {
        return $this->audiocompression;
    }

    /**
     * Set n1
     *
     * @param string $n1
     * @return Datosnexxt
     */
    public function setN1($n1)
    {
        $this->n1 = $n1;

        return $this;
    }

    /**
     * Get n1
     *
     * @return string 
     */
    public function getN1()
    {
        return $this->n1;
    }

    /**
     * Set n2
     *
     * @param string $n2
     * @return Datosnexxt
     */
    public function setN2($n2)
    {
        $this->n2 = $n2;

        return $this;
    }

    /**
     * Get n2
     *
     * @return string 
     */
    public function getN2()
    {
        return $this->n2;
    }

    /**
     * Set n3
     *
     * @param string $n3
     * @return Datosnexxt
     */
    public function setN3($n3)
    {
        $this->n3 = $n3;

        return $this;
    }

    /**
     * Get n3
     *
     * @return string 
     */
    public function getN3()
    {
        return $this->n3;
    }

    /**
     * Set n4
     *
     * @param string $n4
     * @return Datosnexxt
     */
    public function setN4($n4)
    {
        $this->n4 = $n4;

        return $this;
    }

    /**
     * Get n4
     *
     * @return string 
     */
    public function getN4()
    {
        return $this->n4;
    }

    /**
     * Set n5
     *
     * @param string $n5
     * @return Datosnexxt
     */
    public function setN5($n5)
    {
        $this->n5 = $n5;

        return $this;
    }

    /**
     * Get n5
     *
     * @return string 
     */
    public function getN5()
    {
        return $this->n5;
    }

    /**
     * Set n6
     *
     * @param string $n6
     * @return Datosnexxt
     */
    public function setN6($n6)
    {
        $this->n6 = $n6;

        return $this;
    }

    /**
     * Get n6
     *
     * @return string 
     */
    public function getN6()
    {
        return $this->n6;
    }

    /**
     * Set n7
     *
     * @param string $n7
     * @return Datosnexxt
     */
    public function setN7($n7)
    {
        $this->n7 = $n7;

        return $this;
    }

    /**
     * Get n7
     *
     * @return string 
     */
    public function getN7()
    {
        return $this->n7;
    }

    /**
     * Set n8
     *
     * @param string $n8
     * @return Datosnexxt
     */
    public function setN8($n8)
    {
        $this->n8 = $n8;

        return $this;
    }

    /**
     * Get n8
     *
     * @return string 
     */
    public function getN8()
    {
        return $this->n8;
    }

    /**
     * Set n9
     *
     * @param string $n9
     * @return Datosnexxt
     */
    public function setN9($n9)
    {
        $this->n9 = $n9;

        return $this;
    }

    /**
     * Get n9
     *
     * @return string 
     */
    public function getN9()
    {
        return $this->n9;
    }

    /**
     * Set n10
     *
     * @param string $n10
     * @return Datosnexxt
     */
    public function setN10($n10)
    {
        $this->n10 = $n10;

        return $this;
    }

    /**
     * Get n10
     *
     * @return string 
     */
    public function getN10()
    {
        return $this->n10;
    }

    /**
     * Set n11
     *
     * @param string $n11
     * @return Datosnexxt
     */
    public function setN11($n11)
    {
        $this->n11 = $n11;

        return $this;
    }

    /**
     * Get n11
     *
     * @return string 
     */
    public function getN11()
    {
        return $this->n11;
    }

    /**
     * Set n12
     *
     * @param string $n12
     * @return Datosnexxt
     */
    public function setN12($n12)
    {
        $this->n12 = $n12;

        return $this;
    }

    /**
     * Get n12
     *
     * @return string 
     */
    public function getN12()
    {
        return $this->n12;
    }

    /**
     * Set n13
     *
     * @param string $n13
     * @return Datosnexxt
     */
    public function setN13($n13)
    {
        $this->n13 = $n13;

        return $this;
    }

    /**
     * Get n13
     *
     * @return string 
     */
    public function getN13()
    {
        return $this->n13;
    }

    /**
     * Set n14
     *
     * @param string $n14
     * @return Datosnexxt
     */
    public function setN14($n14)
    {
        $this->n14 = $n14;

        return $this;
    }

    /**
     * Get n14
     *
     * @return string 
     */
    public function getN14()
    {
        return $this->n14;
    }

    /**
     * Set n15
     *
     * @param string $n15
     * @return Datosnexxt
     */
    public function setN15($n15)
    {
        $this->n15 = $n15;

        return $this;
    }

    /**
     * Get n15
     *
     * @return string 
     */
    public function getN15()
    {
        return $this->n15;
    }

    /**
     * Set n16
     *
     * @param string $n16
     * @return Datosnexxt
     */
    public function setN16($n16)
    {
        $this->n16 = $n16;

        return $this;
    }

    /**
     * Get n16
     *
     * @return string 
     */
    public function getN16()
    {
        return $this->n16;
    }

    /**
     * Set n17
     *
     * @param string $n17
     * @return Datosnexxt
     */
    public function setN17($n17)
    {
        $this->n17 = $n17;

        return $this;
    }

    /**
     * Get n17
     *
     * @return string 
     */
    public function getN17()
    {
        return $this->n17;
    }

    /**
     * Set n18
     *
     * @param string $n18
     * @return Datosnexxt
     */
    public function setN18($n18)
    {
        $this->n18 = $n18;

        return $this;
    }

    /**
     * Get n18
     *
     * @return string 
     */
    public function getN18()
    {
        return $this->n18;
    }

    /**
     * Set n19
     *
     * @param string $n19
     * @return Datosnexxt
     */
    public function setN19($n19)
    {
        $this->n19 = $n19;

        return $this;
    }

    /**
     * Get n19
     *
     * @return string 
     */
    public function getN19()
    {
        return $this->n19;
    }

    /**
     * Set n20
     *
     * @param string $n20
     * @return Datosnexxt
     */
    public function setN20($n20)
    {
        $this->n20 = $n20;

        return $this;
    }

    /**
     * Get n20
     *
     * @return string 
     */
    public function getN20()
    {
        return $this->n20;
    }

    /**
     * Set n21
     *
     * @param string $n21
     * @return Datosnexxt
     */
    public function setN21($n21)
    {
        $this->n21 = $n21;

        return $this;
    }

    /**
     * Get n21
     *
     * @return string 
     */
    public function getN21()
    {
        return $this->n21;
    }

    /**
     * Set n22
     *
     * @param string $n22
     * @return Datosnexxt
     */
    public function setN22($n22)
    {
        $this->n22 = $n22;

        return $this;
    }

    /**
     * Get n22
     *
     * @return string 
     */
    public function getN22()
    {
        return $this->n22;
    }

    /**
     * Set n23
     *
     * @param string $n23
     * @return Datosnexxt
     */
    public function setN23($n23)
    {
        $this->n23 = $n23;

        return $this;
    }

    /**
     * Get n23
     *
     * @return string 
     */
    public function getN23()
    {
        return $this->n23;
    }

    /**
     * Set n24
     *
     * @param string $n24
     * @return Datosnexxt
     */
    public function setN24($n24)
    {
        $this->n24 = $n24;

        return $this;
    }

    /**
     * Get n24
     *
     * @return string 
     */
    public function getN24()
    {
        return $this->n24;
    }

    /**
     * Set n25
     *
     * @param string $n25
     * @return Datosnexxt
     */
    public function setN25($n25)
    {
        $this->n25 = $n25;

        return $this;
    }

    /**
     * Get n25
     *
     * @return string 
     */
    public function getN25()
    {
        return $this->n25;
    }

    /**
     * Set n26
     *
     * @param string $n26
     * @return Datosnexxt
     */
    public function setN26($n26)
    {
        $this->n26 = $n26;

        return $this;
    }

    /**
     * Get n26
     *
     * @return string 
     */
    public function getN26()
    {
        return $this->n26;
    }

    /**
     * Set n27
     *
     * @param string $n27
     * @return Datosnexxt
     */
    public function setN27($n27)
    {
        $this->n27 = $n27;

        return $this;
    }

    /**
     * Get n27
     *
     * @return string 
     */
    public function getN27()
    {
        return $this->n27;
    }

    /**
     * Set n28
     *
     * @param string $n28
     * @return Datosnexxt
     */
    public function setN28($n28)
    {
        $this->n28 = $n28;

        return $this;
    }

    /**
     * Get n28
     *
     * @return string 
     */
    public function getN28()
    {
        return $this->n28;
    }

    /**
     * Set n29
     *
     * @param string $n29
     * @return Datosnexxt
     */
    public function setN29($n29)
    {
        $this->n29 = $n29;

        return $this;
    }

    /**
     * Get n29
     *
     * @return string 
     */
    public function getN29()
    {
        return $this->n29;
    }

    /**
     * Set n30
     *
     * @param string $n30
     * @return Datosnexxt
     */
    public function setN30($n30)
    {
        $this->n30 = $n30;

        return $this;
    }

    /**
     * Get n30
     *
     * @return string 
     */
    public function getN30()
    {
        return $this->n30;
    }

    /**
     * Set n31
     *
     * @param string $n31
     * @return Datosnexxt
     */
    public function setN31($n31)
    {
        $this->n31 = $n31;

        return $this;
    }

    /**
     * Get n31
     *
     * @return string 
     */
    public function getN31()
    {
        return $this->n31;
    }

    /**
     * Set n32
     *
     * @param string $n32
     * @return Datosnexxt
     */
    public function setN32($n32)
    {
        $this->n32 = $n32;

        return $this;
    }

    /**
     * Get n32
     *
     * @return string 
     */
    public function getN32()
    {
        return $this->n32;
    }

    /**
     * Set n33
     *
     * @param string $n33
     * @return Datosnexxt
     */
    public function setN33($n33)
    {
        $this->n33 = $n33;

        return $this;
    }

    /**
     * Get n33
     *
     * @return string 
     */
    public function getN33()
    {
        return $this->n33;
    }

    /**
     * Set n34
     *
     * @param string $n34
     * @return Datosnexxt
     */
    public function setN34($n34)
    {
        $this->n34 = $n34;

        return $this;
    }

    /**
     * Get n34
     *
     * @return string 
     */
    public function getN34()
    {
        return $this->n34;
    }

    /**
     * Set n35
     *
     * @param string $n35
     * @return Datosnexxt
     */
    public function setN35($n35)
    {
        $this->n35 = $n35;

        return $this;
    }

    /**
     * Get n35
     *
     * @return string 
     */
    public function getN35()
    {
        return $this->n35;
    }

    /**
     * Set n36
     *
     * @param string $n36
     * @return Datosnexxt
     */
    public function setN36($n36)
    {
        $this->n36 = $n36;

        return $this;
    }

    /**
     * Get n36
     *
     * @return string 
     */
    public function getN36()
    {
        return $this->n36;
    }

    /**
     * Set n37
     *
     * @param string $n37
     * @return Datosnexxt
     */
    public function setN37($n37)
    {
        $this->n37 = $n37;

        return $this;
    }

    /**
     * Get n37
     *
     * @return string 
     */
    public function getN37()
    {
        return $this->n37;
    }

    /**
     * Set n38
     *
     * @param string $n38
     * @return Datosnexxt
     */
    public function setN38($n38)
    {
        $this->n38 = $n38;

        return $this;
    }

    /**
     * Get n38
     *
     * @return string 
     */
    public function getN38()
    {
        return $this->n38;
    }

    /**
     * Set n39
     *
     * @param string $n39
     * @return Datosnexxt
     */
    public function setN39($n39)
    {
        $this->n39 = $n39;

        return $this;
    }

    /**
     * Get n39
     *
     * @return string 
     */
    public function getN39()
    {
        return $this->n39;
    }

    /**
     * Set n40
     *
     * @param string $n40
     * @return Datosnexxt
     */
    public function setN40($n40)
    {
        $this->n40 = $n40;

        return $this;
    }

    /**
     * Get n40
     *
     * @return string 
     */
    public function getN40()
    {
        return $this->n40;
    }

    /**
     * Set n41
     *
     * @param string $n41
     * @return Datosnexxt
     */
    public function setN41($n41)
    {
        $this->n41 = $n41;

        return $this;
    }

    /**
     * Get n41
     *
     * @return string 
     */
    public function getN41()
    {
        return $this->n41;
    }

    /**
     * Set n42
     *
     * @param string $n42
     * @return Datosnexxt
     */
    public function setN42($n42)
    {
        $this->n42 = $n42;

        return $this;
    }

    /**
     * Get n42
     *
     * @return string 
     */
    public function getN42()
    {
        return $this->n42;
    }

    /**
     * Set n43
     *
     * @param string $n43
     * @return Datosnexxt
     */
    public function setN43($n43)
    {
        $this->n43 = $n43;

        return $this;
    }

    /**
     * Get n43
     *
     * @return string 
     */
    public function getN43()
    {
        return $this->n43;
    }

    /**
     * Set n44
     *
     * @param string $n44
     * @return Datosnexxt
     */
    public function setN44($n44)
    {
        $this->n44 = $n44;

        return $this;
    }

    /**
     * Get n44
     *
     * @return string 
     */
    public function getN44()
    {
        return $this->n44;
    }

    /**
     * Set n45
     *
     * @param string $n45
     * @return Datosnexxt
     */
    public function setN45($n45)
    {
        $this->n45 = $n45;

        return $this;
    }

    /**
     * Get n45
     *
     * @return string 
     */
    public function getN45()
    {
        return $this->n45;
    }

    /**
     * Set n46
     *
     * @param string $n46
     * @return Datosnexxt
     */
    public function setN46($n46)
    {
        $this->n46 = $n46;

        return $this;
    }

    /**
     * Get n46
     *
     * @return string 
     */
    public function getN46()
    {
        return $this->n46;
    }

    /**
     * Set n47
     *
     * @param string $n47
     * @return Datosnexxt
     */
    public function setN47($n47)
    {
        $this->n47 = $n47;

        return $this;
    }

    /**
     * Get n47
     *
     * @return string 
     */
    public function getN47()
    {
        return $this->n47;
    }

    /**
     * Set n48
     *
     * @param string $n48
     * @return Datosnexxt
     */
    public function setN48($n48)
    {
        $this->n48 = $n48;

        return $this;
    }

    /**
     * Get n48
     *
     * @return string 
     */
    public function getN48()
    {
        return $this->n48;
    }

    /**
     * Set n49
     *
     * @param string $n49
     * @return Datosnexxt
     */
    public function setN49($n49)
    {
        $this->n49 = $n49;

        return $this;
    }

    /**
     * Get n49
     *
     * @return string 
     */
    public function getN49()
    {
        return $this->n49;
    }

    /**
     * Set n50
     *
     * @param string $n50
     * @return Datosnexxt
     */
    public function setN50($n50)
    {
        $this->n50 = $n50;

        return $this;
    }

    /**
     * Get n50
     *
     * @return string 
     */
    public function getN50()
    {
        return $this->n50;
    }

    /**
     * Set n51
     *
     * @param string $n51
     * @return Datosnexxt
     */
    public function setN51($n51)
    {
        $this->n51 = $n51;

        return $this;
    }

    /**
     * Get n51
     *
     * @return string 
     */
    public function getN51()
    {
        return $this->n51;
    }

    /**
     * Set n52
     *
     * @param string $n52
     * @return Datosnexxt
     */
    public function setN52($n52)
    {
        $this->n52 = $n52;

        return $this;
    }

    /**
     * Get n52
     *
     * @return string 
     */
    public function getN52()
    {
        return $this->n52;
    }

    /**
     * Set n53
     *
     * @param string $n53
     * @return Datosnexxt
     */
    public function setN53($n53)
    {
        $this->n53 = $n53;

        return $this;
    }

    /**
     * Get n53
     *
     * @return string 
     */
    public function getN53()
    {
        return $this->n53;
    }

    /**
     * Set n54
     *
     * @param string $n54
     * @return Datosnexxt
     */
    public function setN54($n54)
    {
        $this->n54 = $n54;

        return $this;
    }

    /**
     * Get n54
     *
     * @return string 
     */
    public function getN54()
    {
        return $this->n54;
    }

    /**
     * Set n55
     *
     * @param string $n55
     * @return Datosnexxt
     */
    public function setN55($n55)
    {
        $this->n55 = $n55;

        return $this;
    }

    /**
     * Get n55
     *
     * @return string 
     */
    public function getN55()
    {
        return $this->n55;
    }

    /**
     * Set n56
     *
     * @param string $n56
     * @return Datosnexxt
     */
    public function setN56($n56)
    {
        $this->n56 = $n56;

        return $this;
    }

    /**
     * Get n56
     *
     * @return string 
     */
    public function getN56()
    {
        return $this->n56;
    }

    /**
     * Set n57
     *
     * @param string $n57
     * @return Datosnexxt
     */
    public function setN57($n57)
    {
        $this->n57 = $n57;

        return $this;
    }

    /**
     * Get n57
     *
     * @return string 
     */
    public function getN57()
    {
        return $this->n57;
    }

    /**
     * Set n58
     *
     * @param string $n58
     * @return Datosnexxt
     */
    public function setN58($n58)
    {
        $this->n58 = $n58;

        return $this;
    }

    /**
     * Get n58
     *
     * @return string 
     */
    public function getN58()
    {
        return $this->n58;
    }

    /**
     * Set n59
     *
     * @param string $n59
     * @return Datosnexxt
     */
    public function setN59($n59)
    {
        $this->n59 = $n59;

        return $this;
    }

    /**
     * Get n59
     *
     * @return string 
     */
    public function getN59()
    {
        return $this->n59;
    }

    /**
     * Set n60
     *
     * @param string $n60
     * @return Datosnexxt
     */
    public function setN60($n60)
    {
        $this->n60 = $n60;

        return $this;
    }

    /**
     * Get n60
     *
     * @return string 
     */
    public function getN60()
    {
        return $this->n60;
    }

    /**
     * Set n61
     *
     * @param string $n61
     * @return Datosnexxt
     */
    public function setN61($n61)
    {
        $this->n61 = $n61;

        return $this;
    }

    /**
     * Get n61
     *
     * @return string 
     */
    public function getN61()
    {
        return $this->n61;
    }

    /**
     * Set n62
     *
     * @param string $n62
     * @return Datosnexxt
     */
    public function setN62($n62)
    {
        $this->n62 = $n62;

        return $this;
    }

    /**
     * Get n62
     *
     * @return string 
     */
    public function getN62()
    {
        return $this->n62;
    }

    /**
     * Set n63
     *
     * @param string $n63
     * @return Datosnexxt
     */
    public function setN63($n63)
    {
        $this->n63 = $n63;

        return $this;
    }

    /**
     * Get n63
     *
     * @return string 
     */
    public function getN63()
    {
        return $this->n63;
    }

    /**
     * Set n64
     *
     * @param string $n64
     * @return Datosnexxt
     */
    public function setN64($n64)
    {
        $this->n64 = $n64;

        return $this;
    }

    /**
     * Get n64
     *
     * @return string 
     */
    public function getN64()
    {
        return $this->n64;
    }

    /**
     * Set n65
     *
     * @param string $n65
     * @return Datosnexxt
     */
    public function setN65($n65)
    {
        $this->n65 = $n65;

        return $this;
    }

    /**
     * Get n65
     *
     * @return string 
     */
    public function getN65()
    {
        return $this->n65;
    }

    /**
     * Set n66
     *
     * @param string $n66
     * @return Datosnexxt
     */
    public function setN66($n66)
    {
        $this->n66 = $n66;

        return $this;
    }

    /**
     * Get n66
     *
     * @return string 
     */
    public function getN66()
    {
        return $this->n66;
    }

    /**
     * Set n67
     *
     * @param string $n67
     * @return Datosnexxt
     */
    public function setN67($n67)
    {
        $this->n67 = $n67;

        return $this;
    }

    /**
     * Get n67
     *
     * @return string 
     */
    public function getN67()
    {
        return $this->n67;
    }

    /**
     * Set n68
     *
     * @param string $n68
     * @return Datosnexxt
     */
    public function setN68($n68)
    {
        $this->n68 = $n68;

        return $this;
    }

    /**
     * Get n68
     *
     * @return string 
     */
    public function getN68()
    {
        return $this->n68;
    }

    /**
     * Set n69
     *
     * @param string $n69
     * @return Datosnexxt
     */
    public function setN69($n69)
    {
        $this->n69 = $n69;

        return $this;
    }

    /**
     * Get n69
     *
     * @return string 
     */
    public function getN69()
    {
        return $this->n69;
    }

    /**
     * Set n70
     *
     * @param string $n70
     * @return Datosnexxt
     */
    public function setN70($n70)
    {
        $this->n70 = $n70;

        return $this;
    }

    /**
     * Get n70
     *
     * @return string 
     */
    public function getN70()
    {
        return $this->n70;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productosid
     *
     * @param \AppBundle\Entity\Productos $productosid
     * @return Datosnexxt
     */
    public function setProductosid(\AppBundle\Entity\Productos $productosid = null)
    {
        $this->productosid = $productosid;

        return $this;
    }

    /**
     * Get productosid
     *
     * @return \AppBundle\Entity\Productos 
     */
    public function getProductosid()
    {
        return $this->productosid;
    }
}
