/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// Lista de textos que se mostrarán
const textos = ["caja", "sobre", "tirada", "cofre"];

// Obtén el elemento del DOM
const elemento = document.getElementById("texto-cambiante");

// Variable para llevar el índice del texto actual
let indice = 0;

// Función para cambiar el texto
function cambiarTexto() {
    // Actualiza el contenido del elemento
    elemento.textContent = "No es solo una " + textos[indice];

    // Incrementa el índice o reinícialo si llega al final del array
    indice = (indice + 1) % textos.length;
}

// Cambia el texto cada 2 segundos (2000 milisegundos)
setInterval(cambiarTexto, 2000);