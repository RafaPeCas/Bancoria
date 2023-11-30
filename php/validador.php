<?php
include("conexion.php");

$user=$_POST["username"];
$pass= $_POST["password"];

$consulta = "SELECT * FROM usuarios WHERE nombre = '$user'";
$resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

$filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

foreach ($filas as $columna) {
    if ($user == $columna["nombre"] && $pass == $columna["pass"]) {
        echo "Bienvenido ".$user." ".$columna["id"];
        break; // Si encuentras una coincidencia, puedes salir del bucle
    }else{
        echo "Inicio de sesión incorrecto";
    }
}
