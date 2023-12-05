<?php

require_once("conexion.php");

$consulta = $conexion->prepare("SELECT * FROM mensaje WHERE id_chat= ?");
$consulta->bind_param("s",$chat);
$consulta->execute();
$resultado = $consulta->get_result();

// Esto tiene que ir en el controlador
if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        if ($fila["emisor"]==$emisor){
            echo "<p class='enviado'>" . $fila['mensaje'] . "</p>";
        }else{
            echo "<p class='recibido'>" . $fila['mensaje'] . "</p>";
        }
        
    }
} else {
    echo "<p>No hay mensajes disponibles.</p>";
}
