<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <form action = "#" method = "GET">
        <input type="text" name="test">
        <button>Envoyer</button>
    </form>
<?php

//var_dump($_GET);
$test = $_GET["test"];
echo $test;
?>
</body>
</html>