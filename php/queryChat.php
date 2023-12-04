<?php

include("conexion.php");
include("registro");
$chat=1;
$emisor=2;

$consulta = "SELECT * FROM mensaje";
$resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");


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
