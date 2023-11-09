<?php

function ejecutar_consulta($laconsulta){
    require("../conexion.php");
    $consulta = "SELECT * FROM producto WHERE producto LIKE '%$laconsulta%'";
    $resultado = mysqli_query($conexion, $consulta);

    echo ("<tr>
        <th>ID</th>
        <th>Seccion</th>
        <th>Producto</th>
        <th>Origen</th>
        <th>Importado</th>
        <th>Precio</th>
    </tr>");
    while ($fila = mysqli_fetch_row($resultado)) {
        echo "<tr>";
        foreach ($fila as $arrayx) {
            echo "<td>" . $arrayx . "</td>";
        }
        echo "</tr><br>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="../styles2.css">

</head>
<body>
    <table>

        <?php   
        require("../conexion.php");

        $mibusqueda = isset($_GET["buscarx"]);
        $mipagina = $_SERVER["PHP_SELF"];

        if (isset($_GET["buscarx"])) {
            $mibusqueda = $_GET["buscarx"];
            ejecutar_consulta($mibusqueda);
        } else {
            echo("<div class='main-content'>
            <form class='search' method='get' action='$mipagina'>
                <div class='form-search'>
                    <input type='search' name='buscarx' placeholder='Buscar...'>
                    <button type='submit'><i class='fas fa-search'></i></button>
                </div>
            </form>
        </div>");                 
        }
                
        ?>
    </table>
</body>
</html>
