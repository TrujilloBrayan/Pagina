<?php
    include("Navegacion.php");
    echo "<h1>REGISTRO DE ESTUDIANTES</h1>";

include("../controlador/RegistrarEstudiante.php");
 echo'  <form action="RegistroEstudiante.php" method="post">
        <label for="CodigoEstudiante">Codigo Estudiante:</label><br>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"><br>
        <label for="PrimerNombre">Primer Nombre:</label><br>
        <input type="text" name="PrimerNombre" id="PrimerNombre"><br>
        <label for="SegundoNombre">Segundo Nombre:</label><br>
        <input type="text" name="SegundoNombre" id="SegundoNombre"><br>
        <label for="PrimerApellido">Primer Apellido:</label><br>
        <input type="text" name="PrimerApellido" id="PrimerApellido"><br>
        <label for="SegundoApellido">Segundo Apellido:</label><br>
        <input type="text" name="SegundoApellido" id="SegundoApellido"><br>
        <label for="Curso">Curso:</label><br>
        <input type="text" name="Curso" id="Curso"><br>
        <label for="EspecialidadEstudiante">Especialidad:</label>'; 
            include("../controlador/ComboEspecialidades.php"); 
            echo' <br>
           <label for="ProyectoEstudiante">Proyecto:</label>';
            include("../controlador/ComboProyectos.php"); 
            echo' <br>

        <label for="FechaDeNacimiento">Fecha De Nacimiento:</label>
        <input type="date" name="FechaDeNacimiento" id="FechaDeNacimiento"><br>
        <button type="submit">Registrar Estudiante</button>

    </form>
    ';
   
    include("Footer.php");

    ?>