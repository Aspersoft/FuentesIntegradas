<?php   
    $usuario ="";
    $password="";
    $nombreFichero      = $_POST['adjuntofile'];
    $nombreCampania     = $_POST['campania'];
    $cantidadVariables  = $_POST['hiddenfichero'];
    $mensajebase            = $_POST['mensaje'];
    $debug="";
    
    $fp = fopen("server/php/files/".$nombreFichero, "r");
    while(!feof($fp)) {
        $linea = fgets($fp);
        $variables = preg_split("/[\t]/", $linea);
        switch ($cantidadVariables) {
        case 0:
            $numero=$variables[0];
            $mensajeremplazo=$mensajebase;
            $debug .=$mensajeremplazo."<br>";
            $ruta="http://192.168.1.150:80/sendsms?username=".$usuario."&password=".$password."&phonenumber=".$numero."&message=".$mensajeremplazo;      
            envio($ruta);
            //$debug .=$ruta."\n";
            break;
        case 1:
            $numero=$variables[0];
            $mensaje = str_replace("%%1%%", $variables[1], $mensajebase);
            $mensajeremplazo=$mensaje;
            $debug .=$mensajeremplazo."<br>";
            $ruta="http://192.168.1.150:80/sendsms?username=".$usuario."&password=".$password."&phonenumber=".$numero."&message=".$mensajeremplazo;      
            envio($ruta);
            //$debug .=$ruta."\n";
            break;
        case 2:
            $numero=$variables[0];
            $mensaje = str_replace("%%1%%", $variables[1], $mensajebase);
            $mensaje = str_replace("%%2%%", $variables[2], $mensaje);
            $mensajeremplazo=$mensaje;
            $debug .=$mensajeremplazo."<br>";
            $ruta="http://192.168.1.150:80/sendsms?username=".$usuario."&password=".$password."&phonenumber=".$numero."&message=".$mensajeremplazo;      
            envio($ruta);
            //$debug .=$ruta."\n";
            break;
        case 3:
            $numero=$variables[0];
            $mensaje = str_replace("%%1%%", $variables[1], $mensajebase);
            $mensaje = str_replace("%%2%%", $variables[2], $mensaje);
            $mensaje = str_replace("%%3%%", $variables[3], $mensaje);
            $mensajeremplazo=$mensaje;
            $debug .=$mensajeremplazo."<br>";
            $ruta="http://192.168.1.150:80/sendsms?username=".$usuario."&password=".$password."&phonenumber=".$numero."&message=".$mensajeremplazo;      
            envio($ruta);
            //$debug .=$ruta."\n";
            break;
        case 4:
            $numero=$variables[0];
            $mensaje = str_replace("%%1%%", $variables[1], $mensajebase);
            $mensaje = str_replace("%%2%%", $variables[2], $mensaje);
            $mensaje = str_replace("%%3%%", $variables[3], $mensaje);
            $mensaje = str_replace("%%4%%", $variables[4], $mensaje);
            $mensajeremplazo=$mensaje;
            $debug .=$mensajeremplazo."<br>";
            $ruta="http://192.168.1.150:80/sendsms?username=".$usuario."&password=".$password."&phonenumber=".$numero."&message=".$mensajeremplazo;      
            envio($ruta);
            //$debug .=$ruta."\n";
            break;
        case 5:
            $numero=$variables[0];
            $mensaje = str_replace("%%1%%", $variables[1], $mensajebase);
            $mensaje = str_replace("%%2%%", $variables[2], $mensaje);
            $mensaje = str_replace("%%3%%", $variables[3], $mensaje);
            $mensaje = str_replace("%%4%%", $variables[4], $mensaje);
            $mensaje = str_replace("%%5%%", $variables[5], $mensaje);
            $mensajeremplazo=$mensaje;
            $debug .=$mensajeremplazo."<br>";
            $ruta="http://192.168.1.150:80/sendsms?username=".$usuario."&password=".$password."&phonenumber=".$numero."&message=".$mensajeremplazo;      
            envio($ruta);
            //$debug .=$ruta."\n";
            break;
        }
        
    }
    fclose($fp);
    
    function envio($urlenvio){
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $urlenvio);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);
    }

    echo $debug; 
?>