<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "BE/operacionBE.class.php";
/**
 * Description of operacionesDAO
 *
 * @author MAC
 */
class operacionesDAO {
    //put your code here
    public function obtenerOperaciones($idUsuario){
        $bd=Db::getInstance();
        $sqlusuario = "select o.fechaoperacion,g.descripcion as tipo, g2.descripcion as subtipo,o.monto,o.descripcion from operaciones o inner join generica g on o.tipooperacion = g.idgenerica inner join  generica g2 on o.metodooperacion = g2.idgenerica where idusuario ='".$idUsuario."' order by o.fechaoperacion desc limit 100"; 
          $storage = new SplObjectStorage();
	  $arrayusuario = $bd->ejecutar($sqlusuario);
	  while ($x=$bd->obtener_fila($arrayusuario,0)){
              $operaciones = new operacionBE();
              $operaciones->setFecha($x['fechaoperacion']);
              $operaciones->setTipo($x['tipo']);
              $operaciones->setSubTipo($x['subtipo']);
              $operaciones->setMonto($x['monto']);
              $storage->attach($operaciones);
          }
          return $storage;
    }
    
}
