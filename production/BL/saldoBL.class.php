<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "DAO/saldoDAO.class.php";
/**
 * Description of saldoBL
 *
 * @author MAC
 */
class saldoBL {
    //put your code here
    function obtenerSaldo($idCliente){
        $nuevoSaldo = new saldoDAO();
        return $nuevoSaldo->obtenerSaldo($idCliente);
    }
}
