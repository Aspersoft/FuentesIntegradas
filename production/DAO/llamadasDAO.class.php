<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "BE/llamadasBE.class.php";
/**
 * Description of registrollamadas
 *
 * @author MAC
 */
class llamadasDAO {
    //put your code here
    function registroLlamadas($usuarioDid){
        $bd=Db::getInstance();
        $storage = new SplObjectStorage();
         $sqlusuario = "SELECT * FROM `registro_llamadas` WHERE usuariodid ='".$usuarioDid."' and estado = 'ANSWER' and llamadacosto >0 order by llamadainicio desc limit 100";
	$arrayusuario = $bd->ejecutar($sqlusuario);
        while ($x=$bd->obtener_fila($arrayusuario,0)){
            $llamadas = new llamadasBE();
            $llamadas->setUsuarioDid($x['usuariodid']);
            $llamadas->setNumeroDestino($x['llamadanumero']);
            $llamadas->setFechaInicio($x['llamadainicio']);
            $llamadas->setUsuarioAnexo($x['usuarioanexo']);
            $llamadas->setDuracion($x['llamadaduracion']);
            $llamadas->setCosto($x['llamadacosto']);
            $llamadas->setIdGrabacion($x['uniqueid']);
            $llamadas->setDestino($x['llamadadestino']);
            $llamadas->setRutaGrabacionVoz("audios/".$x['usuarioanexo']."/".$x['uniqueid']."wav");
            $storage->attach($llamadas);
        }
        return $storage;
    }
    
    
    
}
