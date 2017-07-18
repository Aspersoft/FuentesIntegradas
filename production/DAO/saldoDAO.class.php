<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of saldoDAO
 *
 * @author MAC
 */

class saldoDAO {
    //put your code here
    function obtenerSaldo($idCliente){
        $bd=Db::getInstance();
        $sqlusuario = "SELECT * FROM `usuario` WHERE idcliente ='".$idCliente."'";
	$arrayusuario = $bd->ejecutar($sqlusuario);
	while ($x=$bd->obtener_fila($arrayusuario,0)){
	  	$saldo =$x['saldo'];
	}
        return $saldo;  
    }
}
