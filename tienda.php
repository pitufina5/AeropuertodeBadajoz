<?php
class Tienda {
    var $nombre;
    var $numlocal;
    var $metros;
    function __construct ($nombre, $numlocal, $metros) {
        $this-> nombre = $nombre;
        $this-> numlocal = $numlocal;
        $this-> metros = $metros;
    }
    function getNombre { 
        return $this->nombre;
    }
    function getNumeroLocal (){
        return $this->numerolocal;
    }
    function setNumeroLocal($numerolocal){
        $this->numerolocal = $numerolocal;
    }
    function getMetros(){
        return $this->metros;
    }
}   
    



   

    

    
                        