<?php

include("bd.php");

$Consulta="select * from proyecto";

$Resultado=False;
    try {
    $Resultado= mysqli_query($Conexion, $Consulta);    
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo consultar las especialidades";
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($Resultado == False) { $Mensaje="No se pudo consultar las especialidades";
                  //die($mysqli_error($Conexion));
                 }
    else {   
        echo  '<table border=1">
        <tr>
           <td>Codigo del proyecto</td>
           <td>Nombre del proyecto</td>
           <td>Resumen</td>
           <td>Fecha del registro</td>
           <td colspan="2">Acciones</td>
        </tr>';  
        while($Registro=$Resultado->fetch_assoc()) {
            echo'
            <tr>
                <td>'.$Registro["CodigoProyecto"].'</td>
                <td>'.$Registro["NombreProyecto"].'</td>
                <td>'.$Registro["Resumen"].'</td>
                <td>'.$Registro["FechaRegistro"].'</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>';
        } //Fin del ciclo
      echo '</table>';
     }

     

?>