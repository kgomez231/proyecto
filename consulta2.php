<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Seccion</th>
            <th>Producto</th>
            <th>Origen</th>
            <th>Importado</th>
            <th>Precio</th>
        
        <?php
        require("conexion.php");

        $consulta = "SELECT * FROM producto WHERE seccion='CERÁMICA'";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            foreach ($fila as $arrayx){
                echo "<td>" . $arrayx . "</td>";
            }
            echo "<br>";
        }

        mysqli_close($conexion);
        ?>
        </tr>
    </table>
</body>
</html>

