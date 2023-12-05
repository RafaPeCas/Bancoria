<?php

include("conexion.php");
include("chats.php");
session_start();
$chat = $fila['id'];
$emisor = $_SESSION["id_user"];

$fecha_msg = date("Y-m-d H:i:s");
$mensaje = $_POST["mensaje"];


$consulta = $conexion->prepare("INSERT INTO mensaje (id_chat, emisor, fecha_msg, mensaje) VALUES (?, ?, ?, ?)");
$consulta->bind_param("isss", $chat, $emisor, $fecha_msg, $mensaje);
$consulta->execute();

header("Location: ../chat.php");
exit();
