<?php

class Pista {
var $longitud;
var $orientacion;
var $codigo;

    function __construct ($longitud,$orientacion){
        $this->longitud = $longitud;
        $this->orientacion = $orientacion;
    }
    function getLongitud (){
        return $this->longitud;
    }
    function setLongitud($longitud){
        $this->longitud = $longitud;
    }
    function getOrientacion (){
        return $this->orientacion;
    }
    function setOrientacion($orientacion){
        $this->orientacion = $orientacion;
    }
    function getcodigo (){
        return $this->codigo;
    }
    function setcodigo($codigo){
        $this->codigo = $$codigo;
    }
}