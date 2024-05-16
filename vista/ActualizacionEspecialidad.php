<?php
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR ESPECIALIDAD</h1>";
    include("../controlador/ActualizarEspecialidad.php");
    echo ' <form action="ActualizacionEspecialidad.php" method="post">

        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoEspecialidad"].'">
        <label for="CodigoEspecialidad">Codigo Especialidad:</label><br>
        <?php //echo $Registro["CodigoEstudiante"];  ?>
        <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad" value="'.$Registro["CodigoEspecialidad"].'"> <br>

        
        <label for="NombreEspecialidad">Nombre de Especialidad:</label>
        <input type="text" id="NombreEspecialidad" name="NombreEspecialidad" value="'.$Registro["NombreEspecialidad"].'"><br>

        <button type="submit">Actualizar Especialidad</button>

    
    

    </form> ';
   
 include("Footer.php");
?>

