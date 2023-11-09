<?php

require("conexion.php");

$consulta = "SELECT * FROM datos_personales";
$resultado = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_row($resultado)) {
    foreach ($fila as $row){
        echo "$row";
    }
    echo "</br></br>";
}
mysqli_close($conexion);

?>