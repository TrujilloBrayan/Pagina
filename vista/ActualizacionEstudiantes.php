<?php
    include("Navegacion.php");
    echo "<h1>ACTUALIZAR ESTUDIANTES</h1>"; 
    include("../controlador/ActualizarEstudiante.php"); 
    echo '<form action="ActualizacionEstudiantes.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoEstudiante"].'">
        <label for="CodigoEstudiante">Codigo Estudiante:</label><br>
        <?php //echo $Registro["CodigoEstudiante"]; ?>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="'. $Registro["CodigoEstudiante"].'"> <br>
        <label for="PrimerNombre">Primer Nombre:</label><br>
        <input type="text" name="PrimerNombre" id="PrimerNombre" value="'. $Registro["PrimerNombre"].'" > <br>
        <label for="SegundoNombre">Segundo Nombre:</label><br>
        <input type="text" name="SegundoNombre" id="SegundoNombre" value="'. $Registro["SegundoNombre"].'"><br>
        <label for="PrimerApellido">Primer Apellido:</label><br>
        <input type="text" name="PrimerApellido" id="PrimerApellido" value="'. $Registro["PrimerApellido"].'"> <br>
        <label for="SegundoApellido">Segundo Apellido:</label><br>
        <input type="text" name="SegundoApellido" id="SegundoApellido" value="'. $Registro["SegundoApellido"].'"> <br>
        <label for="Curso">Curso:</label><br>
        <input type="text" name="Curso" id="Curso" value="'. $Registro["Curso"].'"> <br>
       
        <label for="EspecialidadEstudiante">Especialidad:</label>'; 
            include("../controlador/ComboEspecialidades.php");
            echo '  
         <br>
           <label for="ProyectoEstudiante">Proyecto:</label>'; 
            include("../controlador/ComboProyectos.php");
            echo ' 
           <br>

        <label for="FechaDeNacimiento">Fecha De Nacimiento:</label>
       
        <input type="date" name="FechaDeNacimiento" id="FechaDeNacimiento" value="'.$Registro["FechaNacimiento"].'"> <br>
        <button type="submit">Actualizar Estudiante</button>

    </form>';
   include("Footer.php");
   ?>

