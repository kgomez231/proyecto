<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="../styles.css">
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
        require("../conexion.php");
        $busqueda=$_GET["search"];
        $consulta = "SELECT * FROM producto WHERE producto LIKE '%$busqueda%'";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            foreach ($fila as $filax){
                echo "<td>" . $filax . "</td>";
            }
            echo "<br>";
        }

        mysqli_close($conexion);
        ?>
        </tr>
    </table>
</body>
</html>