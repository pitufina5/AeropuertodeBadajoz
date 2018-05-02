<?php


require_once("vuelo.php");
require_once("pista.php");
require_once("tienda.php");

class Aeropuerto {
    var $denominacion;
    var $latitud;
    var $longitud;
    var $vuelos;
    var $pistas;
    var $tiendas;

    function __construct ($denominacion,$latitud,$longitud){
        $this->dinternacional = $dinternacional;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->vuelos = array();
        $this->pistas = array();
        $this->tiendas = array();
    }
    function getDInternacional (){
        return $this->dinternacional;
    }
    function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }
    function getLatitud (){
        return $this->latitud;
    }
    function setLatitud($latitud){
        $this->latitud = $latitud;
    }
    function getLongitud (){
        return $this->longitud;
    }
    function setLongitud($longitud){
        $this->longitud = $longitud;
    }



