document.getElementById("boton_progreso").addEventListener("click", Progreso);
document.getElementById("boton_actividades").addEventListener("click", Actividades);
document.getElementById("boton_extras").addEventListener("click", Extras);

var formulario_progreso = document.querySelector(".formulario_progreso");
var formulario_actividades = document.querySelector(".formulario_actividades");
var formulario_extras = document.querySelector(".formulario_extras");

function Progreso() {
    formulario_progreso.display = "block";
    formulario_actividades.display = "none";
    formulario_extras.display = "none";
}

function Actividades() {
    formulario_progreso.display = "none";
    formulario_actividades.display = "block";
    formulario_extras.display = "none";
}

function Extras() {
    formulario_progreso.display = "none";
    formulario_actividades.display = "none";
    formulario_extras.display = "block";
}