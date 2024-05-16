<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/TRUJILLO_PHP1/css/estilo.css">
</head>
<body>

<ul>
  <li><a href="/TRUJILLO_PHP1">Incio</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Estudiante</a>
    <div class="dropdown-content">
      <a href="/TRUJILLO_PHP1/vista/Estudiantes.php">Listar estudiantes</a>
      <a href="/TRUJILLO_PHP1/vista/RegistroEstudiante.php">Registrar estudiantes</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Especialidad</a>
    <div class="dropdown-content">
      <a href="/TRUJILLO_PHP1/vista/Especialidad.php">Listar especialidad</a>
      <a href="/TRUJILLO_PHP1/vista/RegistroEspecialidad.php">Registrar especialidad</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Proyecto</a>
    <div class="dropdown-content">
      <a href="/TRUJILLO_PHP1/vista/Proyectos.php">Listar proyectos</a>
      <a href="/TRUJILLO_PHP1/vista/RegistroProyectos.php">Registrar proyectos</a>
    </div>
  </li>
</ul>
';

?>

