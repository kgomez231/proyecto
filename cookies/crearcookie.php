<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setcookie("micookie",$_GET["language"],time()+45);
        header("Location:cookie_idioma.php");
    ?>
</body>
</html>