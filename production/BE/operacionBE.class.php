<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of operacionBE
 *
 * @author MAC
 */
class operacionBE {
    //put your code here
    
    public $fecha;
    public $tipo;
    public $subTipo;
    public $monto;
    
    function getFecha() {
        return $this->fecha;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getSubTipo() {
        return $this->subTipo;
    }

    function getMonto() {
        return $this->monto;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setSubTipo($subTipo) {
        $this->subTipo = $subTipo;
    }

    function setMonto($monto) {
        $this->monto = $monto;
    }


}
