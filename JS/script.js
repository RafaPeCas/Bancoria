"use strict"

document.getElementById('registrarUser').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío por defecto del formulario

    // Capturar valores del formulario
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById('email').value;

    // Realizar acciones con los datos (puedes validarlos o enviarlos a un servidor)
    // Por ejemplo, aquí mostramos los valores en la consola
    console.log('Nombre de usuario:', username);
    console.log('Contraseña:', password);
    console.log('Email:', email);
});