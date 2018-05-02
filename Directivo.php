<?php
require_once ("empleado.php");

class Directorio extends Empleado {
    var $acciones;

    function __construct ($nombre,$fechanac,$acciones){
        parent::__construct($nombre,$fechanac);
        $this->acciones = $acciones;
    }

    function getAcciones (){
        return $this->acciones;
    }
    function setAcciones($acciones){
        $this->acciones = $acciones;
    }
}