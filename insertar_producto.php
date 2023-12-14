<?php

include("conexion.php");

$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);
if (mysqli_connect_errno()) {
    echo "La conexión ha fallado";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encontró la bd");

if (isset($_GET["enviar"])) {
    $id_cod = $_GET['cod_producto'];
    $seccion = $_GET['seccion'];
    $producto = $_GET['producto'];
    $pais = $_GET['pais'];
    $importado = $_GET['importado'];
    $precio = $_GET['precio'];

    $consulta = "INSERT INTO producto (id_producto, seccion, producto, origen, importada, precio)
     VALUES (
        '$id_cod',
        '$seccion',
        '$producto',
        '$pais',
        '$importado',
        '$precio')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script>alert('Datos guardados correctamente');</script>";
        echo "<script>window.location.href='form_registro.php';</script>";
    } else {
        echo "<script>alert('Error en la inserción');</script>";
        echo "<script>window.location.href='form_registro.php';</script>";
    }

    mysqli_close($conexion);
} else {
    echo "<script>alert('Error en la inserción');</script>";
}
?>
