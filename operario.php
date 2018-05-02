<?php
require_once ("empleado.php");

class Operario extends Empleado {
    var $terminal;
    function __construct ($nombre,$fechanac,$terminal){
    parent:: __construct ($nombre,$fechanac);
    $this-> terminal = $terminal;
    }
    