<?php

require_once("conexion.php");

$consulta = $conexion->prepare("SELECT * FROM usuarios WHERE DNI = ? && pass = ?");
$consulta->bind_param("ss", $dni, $pass);
$consulta->execute();
$resultado = $consulta->get_result();