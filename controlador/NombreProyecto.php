<?php

include("bd.php");

$ConsultaP="select * from proyecto where CodigoProyecto='".$Registro["CodigoProyecto"]."'";

$ResultadoP=False;
    try {
    $ResultadoP= mysqli_query($Conexion, $ConsultaP);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo consultar el proyecto";
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($ResultadoP == False) { $Mensaje="No se pudo consultar el proyecto";
                  //die($mysqli_error($Conexion));
                 }
    else {   
       $RegistroP=$ResultadoP->fetch_assoc();
       echo $RegistroP["NombreProyecto"];
     }


?>