<?php

require_once("conexion.php");



$consulta =$conexion->prepare( "INSERT INTO usuarios (nombre, apellidos, IBAN, pass, DNI, email, fecha_nacimiento, direccion, cp, ciudad, provincia, pais, fecha_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$consulta->bind_param("isss", $nombre, $apellidos, $pass, $dni, $email, $fecha_nacimiento, $direccion, $cp, $ciudad, $provincia, $pais, $fecha_actual);
$consulta->execute();
