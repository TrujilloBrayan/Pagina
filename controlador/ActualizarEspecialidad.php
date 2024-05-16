<?php
//echo $_POST["ProyectoEstudiante"];
include("bd.php");


if (!empty($_GET["CodigoEspecialidad"])) {
    $Consulta= "select * from especialidad where CodigoEspecialidad = ".$_GET["CodigoEspecialidad"];
 
    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo consultar la especialidad con codigo ".$_GET["CodigoEspecialidad"];
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo consultar la especialidad con codigo ".$_GET["CodigoEspecialidad"];
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="Se pudo consultar la especialidad con codigo ".$_GET["CodigoEspecialidad"]; }
    $Registro=$Resultado->fetch_assoc();
}

else if (!empty($_POST["CodigoEspecialidad"]) && !empty($_POST["NombreEspecialidad"]))   {
    $CodigoEspecialidad = $_POST["CodigoEspecialidad"] ; 
    $NombreEspecialidad = $_POST["NombreEspecialidad"] ;
   
    
    $Consulta="UPDATE especialidad SET CodigoEspecialidad = '".$CodigoEspecialidad."', NombreEspecialidad = '".$NombreEspecialidad."' WHERE especialidad.CodigoEspecialidad = ".$_POST["CodigoActual"];

    //$Consulta="INSERT INTO estudiante (CodigoEstudiante,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Curso,CodigoEspecialidad,CodigoProyecto,FechaNacimiento) VALUES ('' , '' , '', '', '', '', '', '','')" ;

    echo $Consulta;
    

    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo actualizar la especialidad por error en los datos";
             //print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo actualizar la especialidad";
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="La especialidad se actualizo correctamente"; }
         //echo $Consulta;
         header('Location: Especialidad.php');

    
    } //Fin del if 
else {
    $Mensaje="El codigo de la especialidad y el nombre son obligatorios ";
    }
    echo "<h3>" .$Mensaje. "<h3>"  

    //$EstudianteActualizando
?>
  