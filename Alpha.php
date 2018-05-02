<?php
require_once("compania.php");

class Alpha extends Compania {
    var $codautorizacion;

    function __construct ($nombre,$telefonoemergencia,$codautorizacion){
        parent::__construct($nombre,$telefonoemergencia);
        $this->codautorizacion = $codautorizacion;
    }
    function getCodAutorizacion (){
        return $this->codautorizacion;
    }
    function setCodAutorizacion($codautorizacion){
        $this->codautorizacion = $codautorizacion;
    }
}