<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cerrar Sesión</title>

<link rel="stylesheet" href="../frontend/css/estilos.css">

</head>
<body>

<div class="contenedor">

<h2>Sesión cerrada</h2>

<p>Has cerrado sesión correctamente.</p>

<img src="../frontend/img/fin.jpg" class="imagen-bottom">

<br><br>

<a href="../frontend/login.html">Volver al Login</a>

</div>

</body>
</html>