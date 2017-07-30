<?PHP
session_start();
include 'Db.php';
include "BL/anexosBL.class.php";

?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro de anexos</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- jupload Theme Style
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/jupload/css/style.css">-->
    <link rel="stylesheet" href="js/jupload/css/jquery.fileupload.css"> 
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
            <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            <?PHP
           include 'menu.php';
            ?>
            
          </div>
        </div>
       <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="glyphicon glyphicon-th" aria-hidden="true"></span>&nbsp;Opciones
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li><a href="salida.php"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de anexos asignados</h2>
   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form  method="post" id="formulario">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de Campaña</label>
                        <input type="text" class="form-control" id="campania" placeholder="Campaña" name="campania">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Mensaje</label>
                        <input type="text" class="form-control" id="mensaje" placeholder="mensaje" name="mensaje">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Cantidad de variables</label>
                        <select class="form-control" id="variables">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                      </div>
                       <br>
                      <!-- Cargador inicio --> 
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button" id ="cargaSMS">
                        <i class="glyphicon glyphicon-plus" ></i>

                        <span>Cargar registros SMS</span>
                        <!-- The file input field used as target for the file upload widget -->
                        <input id="fileupload" type="file" accept=".csv" name="files[]" >
                         <input type="hidden" id="hiddenfichero" name="hiddenfichero" value="">    
                         <input type="hidden" id="adjuntofile" name="adjuntofile" value="">   
                         
                         
                    </span>
                    <!-- The global progress bar 
                    <!-- The container for the uploaded files -->
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Fichero Cargado</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <div id="files" class="files"></div>
                            </ul>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger" id="btn-enviar">Iniciar distribucion</button>
                     <!-- Cargador fin --> 
   </form>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Mensajes enviados</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <div id="files" class="files"><div id="resp"></div></div>
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

                
                
                

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
              
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="../build/js/dropzone.js"></script>
    <!-- jupload Theme Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/jupload/js/vendor/jquery.ui.widget.js"></script>
    <script src="js/jupload/js/jquery.iframe-transport.js"></script>
    <script src="js/jupload/js/jquery.fileupload.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"> </script><!---->
    <script>
        $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = window.location.hostname === 'blueimp.github.io' ?
                    '//jquery-file-upload.appspot.com/' : 'server/php/';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    $('#cargaSMS').attr("disabled", true);
                    $('<p/>').text(file.name).appendTo('#files');
                    $('#adjuntofile').val(file.name);
                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
            }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
        });
      function ProcesarEnvio(){
        //alert($("#files").text()+" - "+$("#campania").val()+" - "+$("#hiddenfichero").val());  
      }
      //
      $(document).ready(function(){
            $("#variables").change(function(){
                $('#hiddenfichero').val($(this).val());
            });
        });
        
      $(document).on('ready',function(){       
    $('#btn-enviar').click(function(){
        var url = "envio_sms.php";
        
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#formulario").serialize(), 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
       });
       ProcesarEnvio();
       return false;
       
    });
});  
      </script>
      
  </body>
</html>