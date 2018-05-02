<?php
require_once("compania.php");

class CompaniaBeta extends Compania {
    var $anofundacion;

    function __construct ($nombre,$telefonoemergencia,$anofundacion){
        parent::__construct($nombre,$telefonoemergencia);
        $this->anofundacion = $anofundacion;
    }
    function getAnoFundacion (){
        return $this->anofundacion;
    }
    function setAnoFundacion($anofundacion){
        $this->anofundacion = $anofundacion;
    }
}