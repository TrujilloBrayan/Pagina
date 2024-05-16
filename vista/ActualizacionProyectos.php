<?php
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR PROYECTOS</h1>";
     include("../controlador/ActualizarProyecto.php"); 
    echo ' <form action="ActualizacionProyectos.php" method="post">

        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoProyecto"].'">
        <label for="CodigoProyecto">Codigo Proyecto:</label><br>
        <?php //echo $Registro["CodigoEstudiante"];  ?>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto" value="'.$Registro["CodigoProyecto"].'"> <br>

        
        <label for="NombreProyecto">Nombre de Proyecto:</label>
        <input type="text" id="NombreProyecto" name="NombreProyecto" value="'.$Registro["NombreProyecto"].'"><br>

        <label for="Resumen">Resumen:</label>
        <textarea id="Resumen" name="Resumen" rows="5" cols="20"></textarea><br>
        


        <label for="FechaRegistro">Fecha de Registro:</label>
        <?php ?>
        <input type="date" name="FechaRegistro" id="FechaRegistro" value="'.$Registro["FechaRegistro"].'"><br>
        <button type="submit">Actualizar Proyecto</button>

    
    

    </form> ';
    
include("Footer.php");
?>

   

