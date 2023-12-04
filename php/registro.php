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
        }
    }
    for ($i = 0; $i < 4; $i++) {
        $posicion = strpos($abc, $nombret[$i]);
        $iban .= decbin($posicion);
    }
    return $iban;
}

$consulta = "INSERT INTO usuarios (nombre, apellidos, IBAN, pass, DNI, email, fecha_nacimiento, direccion, cp, ciudad, provincia, pais, fecha_registro) VALUES ('$nombre', '$apellidos', '$iban', '$pass', '$dni', '$email', '$fecha_nacimiento', '$direccion', '$cp', '$ciudad', '$provincia', '$pais', '$fecha_actual')";
$resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

?>

<h1>Usuario registrado correctamente</h1>