<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!$_COOKIE["micookie"]){
        header("Location:seleccionidioma.php");
    }
    elseif($_COOKIE["micookie"]=="spanish"){
        header("Location:pag_español.php");
    }elseif ($_COOKIE["micookie"]=="english"){
        header ("Location:pag_ingles.php");
    }
    ?>
    
</body>
</html>