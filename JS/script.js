"use strict"

function incioCreado(estado) {
    if (estado == "iniciar") {
        crearcuenta.classList.toggle("ocultar");
        titulo.textContent = "Iniciar sesión";
        console.log("iniciar")
    } else if (estado == "crear") {
        crearcuenta.classList.toggle("ocultar");
        titulo.textContent = "Crear cuenta";
        console.log("crear")
    }
};


function actualizarReloj() {
    var reloj = document.getElementById('reloj');
    var fechaActual = new Date();

    var horas = fechaActual.getHours();
    var minutos = fechaActual.getMinutes();
    var segundos = fechaActual.getSeconds();

    // Formatear para que siempre haya dos dígitos
    horas = horas < 10 ? '0' + horas : horas;
    minutos = minutos < 10 ? '0' + minutos : minutos;
    segundos = segundos < 10 ? '0' + segundos : segundos;

    var horaActual = horas + ':' + minutos + ':' + segundos;

    reloj.textContent = horaActual;
}

// Actualizar cada segundo
setInterval(actualizarReloj, 1000);

// Llamar a la función una vez para mostrar la hora de inmediato
actualizarReloj();
