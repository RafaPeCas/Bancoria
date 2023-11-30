<?php

include("conexion.php");

$nombre=$_POST["username"];
$apellidos= $_POST["apellidos"];
$dni=$_POST["dni"];
$fecha_nacimiento=$_POST["fNac"];
$email=$_POST["email"];
$direccion=$_POST["direccion"];
$cp=$_POST["cp"];
$ciudad=$_POST["ciudad"];
$provincia=$_POST["provincia"];
$pais=$_POST["pais"];
$pass=$numeroAleatorio = rand(1000, 9999);

function generarIban(){
    
}

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
