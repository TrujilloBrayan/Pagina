<?php

include("bd.php");

$Consulta="select * from especialidad";

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
           <td>CodigoEspecialidad</td>
           <td>NombreEspecialidad</td>
           <td colspan="2">Acciones</td>
        </tr>';  
        while($Registro=$Resultado->fetch_assoc()) {
            echo'
            <tr>
                <td>'.$Registro["CodigoEspecialidad"].'</td>
                <td>'.$Registro["NombreEspecialidad"].'</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>';
        } //Fin del ciclo
      echo '</table>';
     }


?>