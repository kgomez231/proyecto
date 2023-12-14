<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_acceso.css">
    <title>FORMULARIO DE ACCESO</title>
  
</head>
<body>

    <h4>ACCESO AL SISTEMA</h4>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        
            <input type="email" name="correo" placeholder="  ejemplo@gmail.com" required>
            <br>
            <input type="password" name="password"placeholder="  contraseña" required><br>

            <input type="submit" name="enviar" value="ENVIAR"><br><br>
        
    </form>
    
</body>
</html>