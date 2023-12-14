<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 2em auto;
            padding: 1em;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5em;
        }

        select {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 0.7em;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_COOKIE["micookie"])){
            if($_COOKIE["micookie"]=="spanish"){
                header("Location:pag_español.php");
            }elseif ($_COOKIE["micookie"]=="english"){
                header ("Location:pag_ingles.php");
            }
        }
    ?>
    <header>
        <h1>Language Selection</h1>
    </header>

    <form action="crearcookie.php" method="get">
        <label for="language">Select your language:</label>
        <select name="language" id="language">
            <option value="spanish">Español</option>
            <option value="english">English</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
