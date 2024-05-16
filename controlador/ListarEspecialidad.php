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
                <td><a href="ActualizacionEspecialidad.php?CodigoEspecialidad='.$Registro["CodigoEspecialidad"].'"> Editar </a></td>
                <td><a href="#" onclick="PreguntarE('.$Registro["CodigoEspecialidad"].')">Eliminar</a></td>
            </tr>';
        } //Fin del ciclo
      echo '</table>';
     }


?>

<script type="text/javascript">
    function PreguntarE(CodigoEspecialidad)
    {
        if(confirm("¿Estas seguro de eliminar la especialidad con codigo "+CodigoEspecialidad+"?"))
        {
            window.location.href = "Especialidad.php?CodigoEspecialidad="+CodigoEspecialidad;
        }
    }
</script>