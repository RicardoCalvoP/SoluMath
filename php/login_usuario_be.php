<?php

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    

    $verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena'");

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
    $verificar_contrasena = mysqli_query($conexion, "SELECT * FROM usuarios WHERE contrasena = '$contrasena'");

    echo '
    <script>
    alert("Usuario '. $usuario. '");
    </script>';
    
    echo '
    <script>
    alert("Contraseña '. $contrasena. '");
    </script>';



    if (mysqli_num_rows($verificar_login) > 0) {
    
        header("location: ../pedidos.html");
        exit;
    }
    
    else if(mysqli_num_rows($verificar_contrasena) < 1){
        echo '
        <script>
        alert("Contraseña equivocada");
        window.location = "../index.php";
        </script>';
        exit;
    }
    else if(mysqli_num_rows($verificar_usuario) < 1){
        echo '
        <script>
        alert("Usuario no existente");
        window.location = "../index.php";
        </script>';
        exit;
    }

    else {
        echo '
        <script>
        alert("Usuario no existente, por favor verifique sus datos");
        window.location = "../index.php";
        </script>';
        exit;
        
    }


    mysqli_close($conexion);

?>