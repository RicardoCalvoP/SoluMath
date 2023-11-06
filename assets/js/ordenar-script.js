document.getElementById("boton_progreso").addEventListener("click", Progreso);
document.getElementById("boton_actividades").addEventListener("click", Actividades);
document.getElementById("boton_extras").addEventListener("click", Extras);

//DECLARACION DE FORMULARIOS

var formulario_progreso = document.querySelector(".formulario_progreso");
var formulario_actividades = document.querySelector(".formulario_actividades");
var formulario_extras = document.querySelector(".formulario_extras");

//DELCARACION DE BOTONES

var boton_progreso = document.querySelector(".contenedor_progreso");
var boton_actividades = document.querySelector(".contenedor_actividades");
var boton_extras = document.querySelector(".contenedor_extras");

Progreso()

function Progreso() {
    formulario_progreso.style.display = "block";
    formulario_actividades.style.display = "none";
    formulario_extras.style.display = "none";
    boton_progreso.style.backgroundColor = "white";  // Corregido
    boton_actividades.style.backgroundColor = "darkgray";  // Corregido
    boton_extras.style.backgroundColor = "darkgray";  // Corregido

}

function Actividades() {
    formulario_progreso.style.display = "none";
    formulario_actividades.style.display = "block";
    formulario_extras.style.display = "none";
    boton_progreso.style.backgroundColor = "darkgray";  // Corregido
    boton_actividades.style.backgroundColor = "white";  // Corregido
    boton_extras.style.backgroundColor = "darkgray";  // Corregido
}

function Extras() {
    formulario_progreso.style.display = "none";
    formulario_actividades.style.display = "none";
    formulario_extras.style.display = "block";
    boton_progreso.style.backgroundColor = "darkgray";  // Corregido
    boton_actividades.style.backgroundColor = "darkgray";  // Corregido
    boton_extras.style.backgroundColor = "white";  // Corregido
}

