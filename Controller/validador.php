<?php
include("conexion.php");

session_start();
$dni = $_POST["dni"];
$pass = $_POST["password"];



$filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

foreach ($filas as $columna) {
    if ($dni == $columna["DNI"] && $pass == $columna["pass"]) {
        echo "Bienvenido " . $columna["nombre"] . " " . $columna["apellidos"];
        $_SESSION["id_user"] = $columna["id"];
        break; // Si encuentras una coincidencia, puedes salir del bucle
    } else {
        echo "Inicio de sesión incorrecto";
    }
}

?>

<a href="chats.php"><button> chats </button></a>