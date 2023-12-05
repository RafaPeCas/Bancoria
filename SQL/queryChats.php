<?php

require_once("conexion.php");
session_start();

$consulta = $conexion->prepare("SELECT * FROM chat WHERE id_usuario_1 = ? OR id_usuario_2 = ? ");
$consulta->bind_param("ii", $_SESSION["id_user"], $_SESSION["id_user"]);
$consulta->execute();
$resultado = $consulta->get_result();
