<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="assets/CSS/estilos.css">
</head>

<body>
    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera_iniciar_sesion">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="boton_iniciar_sesion">Iniciar Sesión</button>
                </div>
                <div class="caja_trasera_Registrarse">
                    <h3>¿Primera vez aquí?</h3>
                    <p>Regístrate para entrar a la página</p>
                    <button id="boton_Registro">Regístrate</button>
                </div>
            </div>

            <!-- FORMULARIO PARA REGISTRARSE O INICIAR SESIÓN -->
            <div class="contenedor_login_registro">
                <!-- INICIAR SESIÓN -->
                <form action="php/login_usuario_be.php" method="POST" class="formulario_iniciar_sesion">
                    <h2>Inicia Sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Confirmar</button>
                </form>
                <!-- REGISTRO -->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario_registro">
                    <h2>Regístrate</h2>
                    <input type="text" placeholder="Nombre" name="nombre" required>
                    <input type="text" placeholder="Apellido" name="apellido" required>
                    <input type="tel" placeholder="Teléfono" name="telefono" minlength = "8" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Confirmar</button>
                </form>
                <!-- TERMINA FORMULARIO -->
            </div>

        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>