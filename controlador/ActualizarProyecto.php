<?php
//echo $_POST["ProyectoEstudiante"];
include("bd.php");


if (!empty($_GET["CodigoProyecto"])) { 
    $Consulta= "select * from proyecto where CodigoProyecto = ".$_GET["CodigoProyecto"];
 
    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo consultar el proyecto con codigo ".$_GET["CodigoProyecto"];
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo consultar el proyecto con codigo ".$_GET["CodigoProyecto"];
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="Se pudo consultar el proyecto con codigo ".$_GET["CodigoProyecto"]; }
    $Registro=$Resultado->fetch_assoc();
 }

else if (!empty($_POST["CodigoProyecto"]) && !empty($_POST["NombreProyecto"]))   {
    $CodigoProyecto = $_POST["CodigoProyecto"] ; 
    $NombreProyecto = $_POST["NombreProyecto"] ;
    $Resumen = $_POST["Resumen"] ;
    $FechaRegistro = $_POST["FechaRegistro"] ;
    
    
    $Consulta="UPDATE proyecto SET CodigoProyecto = '".$CodigoProyecto."', NombreProyecto = '".$NombreProyecto."', Resumen = '".$Resumen."' WHERE proyecto.CodigoProyecto = ".$_POST["CodigoActual"];

    //$Consulta="INSERT INTO estudiante (CodigoEstudiante,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Curso,CodigoEspecialidad,CodigoProyecto,FechaNacimiento) VALUES ('' , '' , '', '', '', '', '', '','')" ;

    //echo $Consulta;
    

    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo actualizar el proyecto por error en los datos";
             //print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo actualizar el proyecto";
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="El proyecto se actualizo correctamente"; }
         //echo $Consulta;
         header('Location: Proyectos.php');

    
    } //Fin del if 
else {
    $Mensaje="El codigo del proyecto, el nombre del proyecto y la fecha son obligatorios ";
    }
    echo "<h3>" .$Mensaje. "<h3>"  

    //$EstudianteActualizando
?>
  