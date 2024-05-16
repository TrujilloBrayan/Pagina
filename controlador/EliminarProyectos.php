<?php

if(!empty($_GET["CodigoProyecto"])){

include("bd.php");

$CodigoProyecto=$_GET["CodigoProyecto"];
$ConsultaTal= "DELETE FROM proyecto WHERE `proyecto`.`CodigoProyecto` = ".$CodigoProyecto;


//echo $ConsultaTal;


$ResultadoTal=False;
    try {
    $ResultadoTal= mysqli_query($Conexion, $ConsultaTal);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo eliminar el proyecto con codigo: ".$CodigoProyecto;
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($ResultadoTal == False) { $Mensaje="No se pudo eliminar el proyecto con codigo: ".$CodigoProyecto;
                  //die($mysqli_error($Conexion));
                 }
    else {   $Mensaje="Se elimino el proyecto con codigo: ".$CodigoProyecto;
       
        } 
    echo $Mensaje;
    }
?>