<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Estudiantes</title>
</head>
<body>
    <h1>ACTUALIZACION DE ESTUDIANTES</h1>

<?php include("../controlador/ActualizarEstudiante.php"); ?>
    <form action="ActualizacionEstudiantes.php" method="post">

        <input type="hidden" id="CodigoActual" name="CodigoActual" value="<?php echo $_GET["CodigoEstudiante"]; ?>">
        <label for="CodigoEstudiante">Codigo Estudiante:</label><br>
        <?php //echo $Registro["CodigoEstudiante"]; ?>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="<?php echo $Registro["CodigoEstudiante"]; ?>"> <br>

        <label for="PrimerNombre">Primer Nombre:</label><br>
        <input type="text" name="PrimerNombre" id="PrimerNombre" value="<?php echo $Registro["PrimerNombre"]; ?> " > <br>

        <label for="SegundoNombre">Segundo Nombre:</label><br>
        <input type="text" name="SegundoNombre" id="SegundoNombre" value="<?php echo $Registro["SegundoNombre"]; ?> "><br>

        <label for="PrimerApellido">Primer Apellido:</label><br>
        <input type="text" name="PrimerApellido" id="PrimerApellido" value="<?php echo $Registro["PrimerApellido"]; ?>"> <br>

        <label for="SegundoApellido">Segundo Apellido:</label><br>
        <input type="text" name="SegundoApellido" id="SegundoApellido" value="<?php echo $Registro["SegundoApellido"]; ?>"> <br>

        <label for="Curso">Curso:</label><br>
        <input type="text" name="Curso" id="Curso" value="<?php echo $Registro["Curso"]; ?>"> <br>

        <label for="EspecialidadEstudiante">Especialidad:</label><br>
            <?php include("../controlador/ComboEspecialidades.php"); ?>  
        <br>
           <label for="ProyectoEstudiante">Proyecto:</label><br>
           <?php include("../controlador/ComboProyectos.php"); ?> 
           <br>

        <label for="FechaDeNacimiento">Fecha De Nacimiento:</label>
        <?php //echo $Registro["FechaNacimiento"]; ?>
        <input type="date" name="FechaDeNacimiento" id="FechaDeNacimiento" value="<?php echo $Registro["FechaNacimiento"]; ?>"> <br>
        <button type="submit">Actualizar Estudiante</button>

    </form>
   

</body>
</html>