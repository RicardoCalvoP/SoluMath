<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if($nombre== NULL || $apellido== NULL || $usuario== NULL || $contrasena== NULL){
        echo'
        <script>
        alert("Hubo un error, intentelo de nuevo");
        window.location = "../index.php"; 
        </script>
        ';
    }
    else {
    $query = "INSERT INTO usuarios(nombre, apellido, usuario, contrasena) VALUES('$nombre', '$apellido', '$usuario', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);
    echo '
        <script>
        window.location = "../index.php"; 
        </script>
        ';
        //Cambiar window location a la pagina de registro
    }
    mysqli_close($conexion);
?>