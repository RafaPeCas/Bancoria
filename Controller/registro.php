<?php

include("conexion.php");

$nombre = $_POST["username"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$fecha_nacimiento = $_POST["fNac"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$cp = $_POST["cp"];
$ciudad = $_POST["ciudad"];
$provincia = $_POST["provincia"];
$pais = $_POST["pais"];
$pass = $numeroAleatorio = rand(1000, 9999);
$iban = generarIban();
$fecha_actual = date("Y-m-d H:i:s");

function generarIban()
{
    global $nombre;
    $nombret = strtolower($nombre);
    $abc = "abcdefghijklmnñopqrstuvwxyz";
    $iban = "";
    if (strlen($nombret) < 4) {
        $i = 4 - strlen($nombret);
        while ($i > 0) {
            $nombret .= "z";
            $i--;
        }
    }
    for ($i = 0; $i < 4; $i++) {
        $posicion = strpos($abc, $nombret[$i]);
        $iban .= decbin($posicion);
    }
    return $iban;
}



?>

<h1>Usuario registrado correctamente</h1>
<a href="chats.php"><button> chats </button></a>