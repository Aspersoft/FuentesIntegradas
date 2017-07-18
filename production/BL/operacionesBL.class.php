<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "DAO/operacionesDAO.class.php";
/**
 * Description of operacionesBL
 *
 * @author MAC
 */
class operacionesBL {
    //put your code here
    public function obtenerOperaciones($idUsuario){
        $operaciones = new operacionesDAO();
        return $operaciones->obtenerOperaciones($idUsuario);
    }
}
