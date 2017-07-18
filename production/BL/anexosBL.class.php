<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "DAO/AnexosDAO.class.php";
/**
 * Description of anexos
 *
 * @author MAC
 */

class anexosBL {
    //put your code here
    function obtenerAnexos($usuarioDid){
    
    $registroAnexos = new AnexosDAO(); 
    return  $registroAnexos->obtenerAnexos($usuarioDid);
    }
}
