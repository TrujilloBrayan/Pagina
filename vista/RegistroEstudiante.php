<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>
    <h1>REGISTRO DE ESTUDIANTES</h1>

<?php include("../controlador/RegistrarEstudiante.php");?>
    <form action="RegistroEstudiante.php" method="post">
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
        <label for="EspecialidadEstudiante">Especialidad:</label><br>
            <?php include("../controlador/ComboEspecialidades.php"); ?>  
        <br>
           <label for="ProyectoEstudiante">Proyecto:</label><br>
           <?php include("../controlador/ComboProyectos.php"); ?> 
           <br>

        <label for="FechaDeNacimiento">Fecha De Nacimiento:</label>
        <input type="date" name="FechaDeNacimiento" id="FechaDeNacimiento"><br>
        <button type="submit">Registrar Estudiante</button>

    </form>
   

</body>
</html>