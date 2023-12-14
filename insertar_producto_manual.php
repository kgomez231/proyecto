<?php

include ("conexion.php");

$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);
if(mysqli_connect_errno()){
    echo "la conexion ha fallado";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die ("no se encontro la bd");

$consulta= "INSERT INTO producto (id_producto, seccion, producto, origen, importada, precio) VALUES ('ar41', 'FERRETERIA', 'Pela Cables', 'China', 'VERDADERO', '25000')";
$resultado=mysqli_query($conexion, $consulta);

mysqli_close($conexion)


?>