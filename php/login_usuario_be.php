<?php

include 'conexion_be.php'
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena'");


?>