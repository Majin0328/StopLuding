// Lista de textos que se mostrarán
const textos = [
    { palabra: "caja", genero: "femenino", color: "#ff00ff" }, // Neon Pink
    { palabra: "sobre", genero: "masculino", color: "#00ffff" }, // Neon Cyan
    { palabra: "tirada", genero: "femenino", color: "#ff00aa" }, // Neon Magenta
    { palabra: "cofre", genero: "masculino", color: "#39ff14" }, // Neon Green
    { palabra: "ruleta", genero: "femenino", color: "#ff6600" }, // Neon Orange
    { palabra: "dado", genero: "masculino", color: "#ff007f" }, // Neon Rose
    { palabra: "apuesta", genero: "femenino", color: "#00ffcc" }, // Neon Turquoise
    { palabra: "bote", genero: "masculino", color: "#cc00ff" }, // Neon Purple
    { palabra: "lootbox", genero: "femenino", color: "#ffcc00" }, // Neon Yellow
    { palabra: "póker", genero: "masculino", color: "#00ff00" }  // Neon Lime
];

// Obtén el elemento del DOM
const elemento = document.getElementById("texto-cambiante");

// Variable para llevar el índice del texto actual
let indice = 0;

// Función para cambiar el texto
function cambiarTexto() {
    // Obtén la palabra actual, su género y su color
    const textoActual = textos[indice];
    const palabra = textoActual.palabra;
    const genero = textoActual.genero;
    const color = textoActual.color;

    // Define el artículo en función del género
    const articulo = (genero === "femenino") ? "una" : "un";

    // Actualiza el contenido del elemento
    elemento.innerHTML = `No es solo ${articulo} <span style="color: ${color};">${palabra}</span>`;

    // Incrementa el índice o reinícialo si llega al final del array
    indice = (indice + 1) % textos.length;
}

// Cambia el texto cada 2 segundos (2000 milisegundos)
setInterval(cambiarTexto, 2000);