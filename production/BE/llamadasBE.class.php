<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of llamadasbe
 *
 * @author MAC
 */
class llamadasBE {
    //put your code here
        private $usuarioDid;
        private $usuarioAnexo;
        private $numeroDestino;
        private $duracion;
        private $costo;
        private $destino;
        private $rutaGrabacionVoz;
        private $fechaInicio;
        private $idGrabacion;
        
        function getIdGrabacion() {
            return $this->idGrabacion;
        }

        function setIdGrabacion($idGrabacion) {
            $this->idGrabacion = $idGrabacion;
        }

                
        function getFechaInicio() {
            return $this->fechaInicio;
        }

        function setFechaInicio($fechaInicio) {
            $this->fechaInicio = $fechaInicio;
        }

                
        
        function getUsuarioDid() {
            return $this->usuarioDid;
        }

        function getUsuarioAnexo() {
            return $this->usuarioAnexo;
        }

        function getNumeroDestino() {
            return $this->numeroDestino;
        }

        function getDuracion() {
            return $this->duracion;
        }

        function getCosto() {
            return $this->costo;
        }

        function getDestino() {
            return $this->destino;
        }

        function getRutaGrabacionVoz() {
            return $this->rutaGrabacionVoz;
        }

        function setUsuarioDid($usuarioDid) {
            $this->usuarioDid = $usuarioDid;
        }

        function setUsuarioAnexo($usuarioAnexo) {
            $this->usuarioAnexo = $usuarioAnexo;
        }

        function setNumeroDestino($numeroDestino) {
            $this->numeroDestino = $numeroDestino;
        }

        function setDuracion($duracion) {
            $this->duracion = $duracion;
        }

        function setCosto($costo) {
            $this->costo = $costo;
        }

        function setDestino($destino) {
            $this->destino = $destino;
        }

        function setRutaGrabacionVoz($rutaGrabacionVoz) {
            $this->rutaGrabacionVoz = $rutaGrabacionVoz;
        }


        
        
    
}
