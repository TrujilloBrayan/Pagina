<?php

include("bd.php");

$ConsultaE="select * from especialidad where CodigoEspecialidad='".$Registro["CodigoEspecialidad"]."'";

$ResultadoE=False;
    try {
    $ResultadoE= mysqli_query($Conexion, $ConsultaE);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo consultar la especialidad";
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($ResultadoE == False) { $Mensaje="No se pudo consultar la especialidad";
                  //die($mysqli_error($Conexion));
                 }
    else {   
       $RegistroE=$ResultadoE->fetch_assoc();
       echo $RegistroE["NombreEspecialidad"];
     }


?>