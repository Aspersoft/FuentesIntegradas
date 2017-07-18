<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include registrollamadaDAO::class;
include "DAO/llamadasDAO.class.php";
/**
 * Description of llamadasBL
 *
 * @author MAC
 */
class llamadasBL {
    //put your code here
    function registroLlamadas($usuarioDid){
    $registroLlamadas = new llamadasDAO();
    return  $registroLlamadas->registroLlamadas($usuarioDid);
    }
}
