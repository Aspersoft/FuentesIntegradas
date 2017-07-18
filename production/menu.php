<?php
include "BL/saldoBL.class.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="navbar nav_title" style="border: 0;">
              <a href="inicio.php" class="site_title"><i class="fa fa-paw"></i> <span>Plataforma VOIP</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img"> 
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2><?PHP echo $_SESSION['nombre']  ?></h2>
                Saldo S/<?PHP 
                $nuevoSaldo = new saldoBL();
                echo  number_format($nuevoSaldo->obtenerSaldo($_SESSION['idcliente']), 2, '.', '');  ?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu </h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Cliente<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="reporte_llamadas.php">Reporte de llamadas</a></li>
                      <li><a href="reporte_recargas.php">Reporte de operaciones</a></li>
                      <li><a href="reporte_anexos.php">Reporte de anexos</a></li>
                      <li><a href="servicio_sms.php">Gestion SMS</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Distribuidor<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Mantenimientos de clientes</a></li>
                      <li><a href="form_advanced.html">Recarga de clientes</a></li>
                      <li><a href="form_validation.html">Mantenimiento de anexos</a></li>
                      <li><a href="form_wizards.html">Reporte de recargas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Administrador<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Mantimientos de Distribuidores</a></li>
                      <li><a href="media_gallery.html">Recarga de distribuidores</a></li>
                      <li><a href="typography.html">Reporte de recargas</a></li>
                      <li><a href="form_validation.html">Mantenimiento de anexos</a></li>
                      <li><a href="icons.html">Mantenimiento de tarifas</a></li>
                    </ul>
                  </li>
                 
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->