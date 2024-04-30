<?php
//echo $_POST["ProyectoEstudiante"];
include("bd.php");


if (!empty($_GET["CodigoEstudiante"])) {
    $Consulta= "select * from estudiante where CodigoEstudiante = ".$_GET["CodigoEstudiante"];
 
    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo consultar el estudiante con codigo ".$_GET["CodigoEstudiante"];
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo consultar el estudiante con codigo ".$_GET["CodigoEstudiante"];
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="Se pudo consultar el estudiante con codigo ".$_GET["CodigoEstudiante"]; }
    $Registro=$Resultado->fetch_assoc();
}

else if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["ProyectoEstudiante"])  )   {
    $CodigoEstudiante = $_POST["CodigoEstudiante"] ; 
    $PrimerNombre = $_POST["PrimerNombre"] ;
    $SegundoNombre = $_POST["SegundoNombre"] ;
    $PrimerApellido = $_POST["PrimerApellido"] ;
    $SegundoApellido = $_POST["SegundoApellido"] ;
    $Curso = $_POST["Curso"] ;
    $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"] ;
    $ProyectoEstudiante = $_POST["ProyectoEstudiante"] ;
    $FechaDeNacimiento = $_POST["FechaDeNacimiento"] ;
    
    $Consulta="UPDATE estudiante SET CodigoEstudiante = '".$CodigoEstudiante."', PrimerNombre = '".$PrimerNombre."', SegundoNombre = '".$SegundoNombre."', PrimerApellido = '".$PrimerApellido."', SegundoApellido = '".$SegundoApellido."', Curso = '".$Curso ."', CodigoEspecialidad = '".$EspecialidadEstudiante."', CodigoProyecto = '".$ProyectoEstudiante."', FechaNacimiento = '".$FechaDeNacimiento."' WHERE estudiante.CodigoEstudiante = ".$_POST["CodigoActual"]; 

    //$Consulta="INSERT INTO estudiante (CodigoEstudiante,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Curso,CodigoEspecialidad,CodigoProyecto,FechaNacimiento) VALUES ('' , '' , '', '', '', '', '', '','')" ;

    //echo $Consulta;
    

    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo actualizar el estudiante por error en los datos";
             //print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo actualizar el estudiante";
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="El estudiante se actualizo correctamente"; }
         //echo $Consulta;
         //header('Location: Estudiantes.php');

    
    } //Fin del if 
else {
    $Mensaje="El codigo del estudiante, el primer nombre,  el primer apellido, , el curso, la especialidad y el proyecto son obligatorios ";
    }
    echo "<h3>" .$Mensaje. "<h3>"  

    //$EstudianteActualizando
?>
  