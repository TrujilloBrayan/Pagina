<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Especialidad</title>
</head>
<body>
    <h1>REGISTRO DE ESPECIALIDAD</h1>
<?php include("../controlador/RegistrarEspecialidad.php");?>
    <form action="RegistroEspecialidad.php" method="post">
        <label for="Codigo">Codigo:</label>
        <input type="number" name="Codigo" id="Codigo"><br>
        <label for="NombreDeEspecialidad">Nombre De Especialidad:</label>
        <input type="text" name="NombreDeEspecialidad" id="NombreDeEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>

    </form>
   

</body>
</html>