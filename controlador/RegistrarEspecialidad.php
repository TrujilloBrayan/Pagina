<?php
if (!empty($_POST["Codigo"]) && !empty($_POST["NombreDeEspecialidad"])){
    $Codigo = $_POST["Codigo"] ;
    $NombreDeEspecialidad = $_POST["NombreDeEspecialidad"] ;  

    include("bd.php");
    $Consulta="INSERT INTO especialidad (CodigoEspecialidad,NombreEspecialidad) VALUES ('".$Codigo."','".$NombreDeEspecialidad."')";
    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo registrar la especialidad por error de los datos";
             //print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo registrar la especialidad";
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="La especialidad se registro correctamente"; }
    
    } //Fin del if 
else {
    $Mensaje="El codigo y el nombre de la especialidad es obligatorio";
    }
    echo $Mensaje;

?>
  