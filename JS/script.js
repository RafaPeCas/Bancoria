"use strict"

function incioCreado(estado){
    if (estado=="iniciar") {
        crearcuenta.classList.add("ocultar");
        iniciarsesion.classList.remove("ocultar");
        titulo.textContent = "Iniciar sesión";
        console.log("iniciar")
    }else if(estado=="crear"){
        crearcuenta.classList.remove("ocultar");
        iniciarsesion.classList.add("ocultar");
        titulo.textContent = "Crear cuenta";
        console.log("crear")
    }
};