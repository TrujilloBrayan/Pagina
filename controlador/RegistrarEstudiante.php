<?php

/*$CodigoEstudiante = $_POST["CodigoEstudiante"] ; 
    $PrimerNombre = $_POST["PrimerNombre"] ;
    $SegundoNombre = $_POST["SegundoNombre"] ;
    $PrimerApellido = $_POST["PrimerApellido"] ;
    $SegundoApellido = $_POST["SegundoApellido"] ;
    $Curso = $_POST["Curso"] ;
    $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"] ;
    $ProyectoEstudiante = $_POST["ProyectoEstudiante"] ;
    $FechaDeNacimiento = $_POST["FechaDeNacimiento"] ;
    
    include("bd.php");
    $Consulta="INSERT INTO estudiante (CodigoEstudiante,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Curso,CodigoEspecialidad,CodigoProyecto,FechaNacimiento) VALUES ('".$CodigoEstudiante."' , '".$PrimerNombre."' , '".$SegundoNombre."', '".$PrimerApellido."', '".$SegundoApellido."', '".$Curso ."', '".$EspecialidadEstudiante."', '".$ProyectoEstudiante."','".$FechaDeNacimiento."')" ;

    echo $Consulta;*/

//echo $_POST["ProyectoEstudiante"];
if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["ProyectoEstudiante"])  )   {
    $CodigoEstudiante = $_POST["CodigoEstudiante"] ; 
    $PrimerNombre = $_POST["PrimerNombre"] ;
    $SegundoNombre = $_POST["SegundoNombre"] ;
    $PrimerApellido = $_POST["PrimerApellido"] ;
    $SegundoApellido = $_POST["SegundoApellido"] ;
    $Curso = $_POST["Curso"] ;
    $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"] ;
    $ProyectoEstudiante = $_POST["ProyectoEstudiante"] ;
    $FechaDeNacimiento = $_POST["FechaDeNacimiento"] ;
    
    include("bd.php");
    $Consulta="INSERT INTO estudiante (CodigoEstudiante,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Curso,CodigoEspecialidad,CodigoProyecto,FechaNacimiento) VALUES ('".$CodigoEstudiante."' , '".$PrimerNombre."' , '".$SegundoNombre."', '".$PrimerApellido."', '".$SegundoApellido."', '".$Curso ."', '".$EspecialidadEstudiante."', '".$ProyectoEstudiante."','".$FechaDeNacimiento."')" ;

    //echo $Consulta;

    $Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo registrar el estudiante por error en los datos";
             //print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo registrar el estudiante";
                  //die($mysqli_error($Conexion));
                 }
    else { $Mensaje="El estudiante se registro correctamente"; }
    
    } //Fin del if 
else {
    $Mensaje="El codigo del estudiante, el primer nombre,  el primer apellido, , el curso, la especialidad y el proyecto son obligatorios ";
    }
    echo "<h3>" .$Mensaje. "<h3>"  

?>
  