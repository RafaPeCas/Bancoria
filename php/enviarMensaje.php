<?php

include("conexion.php");
$chat=2;
$emisor=5;

$fecha_msg= date("Y-m-d H:i:s");
$mensaje = $_POST["mensaje"];


$consulta = "INSERT INTO mensaje (id_chat, emisor, fecha_msg, mensaje) VALUES ('$chat', '$emisor', '$fecha_msg','$mensaje')";
$resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

header("Location: ../chat.php");
exit();

