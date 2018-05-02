<?php


require_once("aeronavesoperativas.php");

class CompaniaAerea {
    var $nombre;
    var $telefonoemergencia;
    var $aeronavesoperativas;

    function __construct ($nombre,$telefonoemergencia){
        $this->nombre = $nombre;
        $this->telefonoemergencia = $telefonoemergencia;
        $this->aeronavesoperativas = array();
    }

    function getNombre (){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getTelefonoEmergencia (){
        return $this->telefonoemergencia;
    }
    function setTelefonoEmergencia($telefonoemergencia){
        $this->telefonoemergencia = $telefonoemergencia;
    }



