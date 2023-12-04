<?php

include("conexion.php");
$chat=1;
$emisor=2;

$mensaje = $_POST["mensaje"];


$consulta = "INSERT INTO mensaje (id_chat, emisor, mensaje) VALUES ('$chat', '$emisor','$mensaje')";
$resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

header("Location: ../chat.php");
exit();

