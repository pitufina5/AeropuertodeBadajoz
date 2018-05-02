<?php


require_once("aeropuerto.php");

class Internacional extends Aeropuerto {
    var $terminales;
    var $numpistas;

    function __construct ($denominacion,$latitud,$longitud,$numpistas,$terminales){
        parent::__construct($denominacion,$latitud,$longitud);
        $this->terminales = $terminales;
        $this->numpistas = $numpistas;
    }
    function getTerminales (){
        return $this->terminales;
    }
    function setTerminales($terminales){
        $this->terminales = $terminales;
    }
    function getPistas (){
        return $this->numpistas;
    }
    function setPistas($numpistas){
        $this->numpistas = $numpistas;
    }
}