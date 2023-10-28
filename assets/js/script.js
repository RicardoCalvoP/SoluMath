document.getElementById("boton_Registro").addEventListener("click", Registro);
document.getElementById("boton_iniciar_sesion").addEventListener("click", IniciarSesion);
window.addEventListener("resize", AnchoPagina)


//DECLARACION DE VARIABLES
var contenedor_login_registro = document.querySelector(".contenedor_login_registro")
var formulario_iniciar_sesion = document.querySelector(".formulario_iniciar_sesion");
var formulario_registro = document.querySelector(".formulario_registro")
var caja_trasera_iniciar_sesion = document.querySelector(".caja_trasera_iniciar_sesion")
var caja_trasera_Registrarse = document.querySelector(".caja_trasera_Registrarse")

function AnchoPagina() {
    if (window.innerWidth > 850) {
        caja_trasera_iniciar_sesion.style.display = "block";
        caja_trasera_Registrarse.style.display = "block";
    }
    else {
        caja_trasera_Registrarse.style.display = "block";
        caja_trasera_Registrarse.style.opacity = "1";
        caja_trasera_iniciar_sesion.style.display = "none";
        formulario_iniciar_sesion.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
    }
}

AnchoPagina()

function IniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_iniciar_sesion.style.display = "block";
        caja_trasera_Registrarse.style.opacity = "1";
        caja_trasera_iniciar_sesion.style.opacity = "0";
    }
    else {
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
        formulario_iniciar_sesion.style.display = "block";
        caja_trasera_Registrarse.style.display = "block";
        caja_trasera_iniciar_sesion.style.display = "none";
    }
}

function Registro() {

    if (window.innerWidth > 850) {
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_iniciar_sesion.style.display = "none";
        caja_trasera_Registrarse.style.opacity = "0";
        caja_trasera_iniciar_sesion.style.opacity = "1";
    }
    else {
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_iniciar_sesion.style.display = "none";
        caja_trasera_Registrarse.style.display = "none";
        caja_trasera_iniciar_sesion.style.display = "block";
        caja_trasera_iniciar_sesion.style.opacity = "1";

    }
}

