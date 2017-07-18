<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "BE/anexoBE.class.php";
/**
 * Description of AnexosDAO
 *
 * @author MAC
 */
class AnexosDAO {
    //put your code here
     public function obtenerAnexos($idUsuario){
        $bd=Db::getInstance();
        $storage = new SplObjectStorage();
        $sqlanexo = "SELECT nombre,numero,secret FROM `anexo` WHERE '".$idUsuario."'"; 
          
	  $anexos = $bd->ejecutar($sqlanexo);
	  while ($x=$bd->obtener_fila($anexos,0)){
              $anexo = new anexoBE();
              $anexo->setNombre($x['nombre']);
              $anexo->setNumero($x['numero']);
              $anexo->setClave($x['secret']);
              $storage->attach($anexo);
          }
          return $storage;
    }
}
