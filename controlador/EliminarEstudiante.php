<?php

if(!empty($_GET["CodigoEstudiante"])){

include("bd.php");

$CodigoEstudiante=$_GET["CodigoEstudiante"];
$ConsultaDel="DELETE FROM estudiante WHERE `estudiante`.`CodigoEstudiante` = ".$CodigoEstudiante;


//echo $ConsultaDel;


$ResultadoDel=False;
    try {
    $ResultadoDel= mysqli_query($Conexion, $ConsultaDel);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo eliminar el estudiante con codigo: ".$CodigoEstudiante;
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($ResultadoDel == False) { $Mensaje="No se pudo eliminar el estudiante con codigo: ".$CodigoEstudiante;
                  //die($mysqli_error($Conexion));
                 }
    else {   $Mensaje="Se elimino el estudiante con codigo: ".$CodigoEstudiante;
       
        } 
    echo $Mensaje;
    }
?>