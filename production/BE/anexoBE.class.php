<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of anexoBE
 *
 * @author MAC
 */
class anexoBE {
    //put your code here
    public $nombre;
    public $numero;
    public $clave;
    
    function getNombre() {
        return $this->nombre;
    }

    function getNumero() {
        return $this->numero;
    }

    function getClave() {
        return $this->clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }


}
