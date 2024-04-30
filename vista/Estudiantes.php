<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Estudiantes</title>
</head>
<body>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <a href="RegistroEstudiante.php">Registrar Estudiante</a>
    <br>
    <?php
    include("../controlador/EliminarEstudiante.php");
    include("../controlador/ListarEstudiante.php");
    ?>
  
</body>
</html>