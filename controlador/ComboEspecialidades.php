<?php
 include("bd.php");

 $ConsultaEsp="SELECT * FROM especialidad";

 $ResultadoEsp=False;
    try {
    $ResultadoEsp= mysqli_query($Conexion, $ConsultaEsp);   
        }
    
    catch (exception $e)
           { $Mensaje="No se pudo consultar las especialidades";
             print $e->getMessage();
             //print $Resultado;
             //$error=$e->getMessage();
         }

    if($ResultadoEsp == False) { $Mensaje="No se pudo consultar las especialidades";
                  //die($mysqli_error($Conexion));
                 }
    else { 
        
        echo  '<select name="EspecialidadEstudiante" id="EspecialidadEstudiante">';  
        while($RegistroEsp=$ResultadoEsp->fetch_assoc()) {

          if ($Registro["CodigoEspecialidad"]==$RegistroEsp["CodigoEspecialidad"]) {

            echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'" selected>'.$RegistroEsp["NombreEspecialidad"].'</option>';

          }
         else {echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'">'.$RegistroEsp["NombreEspecialidad"].'</option>';}


        } //Fin del ciclo
      echo '</select>';




     }




?>