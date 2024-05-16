<?php

if(!empty($_GET["CodigoEspecialidad"])){

include("bd.php");

$CodigoEspecialidad= $_GET["CodigoEspecialidad"];
$ConsultaES= "DELETE FROM especialidad WHERE `especialidad`.`CodigoEspecialidad`  = ".$CodigoEspecialidad;


//echo $ConsultaTal;


$ResultadoES=False;
    try {
    $ResultadoES= mysqli_query($Conexion, $ConsultaES);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo eliminar la especialidad con codigo: ".$CodigoEspecialidad;
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($ResultadoES == False) { $Mensaje="No se pudo eliminar la especialidad con codigo: ".$CodigoEspecialidad;
                  //die($mysqli_error($Conexion));
                 }
    else {   $Mensaje="Se elimino la especialidad con codigo: ".$CodigoEspecialidad;
       
        } 
    echo $Mensaje;
    }
?>