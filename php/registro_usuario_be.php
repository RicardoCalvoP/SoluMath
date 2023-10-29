<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];


    //VERIFICAR USUARIO UNICO
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
    $verificar_telefono = mysqli_query($conexion, "SELECT * FROM usuarios WHERE telefono = '$telefono'");
    
    if($nombre== NULL || $apellido== NULL || $usuario== NULL || $contrasena== NULL || $telefono== NULL){
        echo'
        <script>
        alert("Es necesario llenar todas las casillas");
        window.location = "../index.php"; 
        </script>
        ';
        exit();
        
    }
    else {
        if(mysqli_num_rows($verificar_usuario) > 0){
            echo'
            <script>
            alert("Ese usuario ya esta en uso");
            window.location = "../index.php"; 
            </script>
            ';
            exit();
        }
        if(mysqli_num_rows($verificar_telefono) > 0){
            echo'
            <script>
            alert("Ese telefono ya esta registrado");
            window.location = "../index.php"; 
            </script>
            ';
            exit();
        }
    $query = "INSERT INTO usuarios(nombre, apellido, usuario, contrasena, telefono) VALUES('$nombre', '$apellido', '$usuario', '$contrasena', '$telefono')";

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