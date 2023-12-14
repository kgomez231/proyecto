<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>  
    <div class="title">
        <h1 >Formulario de registro</h1>
    </div>
        
        <div class="cont-1">
            <h1> Agregar Producto</h1>
            <form class="form-1"action="insertar_producto.php" method="get">
                <input type="text" name="cod_producto" placeholder="Codigo del producto">
                <input type="text" name="seccion" placeholder="Sección">
                <input type="text" name="producto" placeholder="Nombre Producto">
                <input type="text" name="pais" placeholder="Pais producto">
                <input type="number" name="precio" placeholder="Precio del producto">
                <div class="cont-12">
                    <label>El producto es Importado</label>
                    <select name="importado">
                        <option value="VERDADERO">VERDADERO</option>
                        <option value="FALSE">FALSE</option>
                    </select>
                </div>
                <div class="boton">
                    <input type="submit" value="Guardar" name="enviar"> 
                    <input type="submit" value="Limpiar"> 
                </div>
                    
            </form>
        </div>

    
</body>
</html>