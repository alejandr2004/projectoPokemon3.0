<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>



<?php

session_start();


if (isset($_SESSION["pista6"])){

    echo '<p class="pista">Este Pokemon puede traspasar paredes y el suelo</p>';
    echo '<a href="./pregunta6.php"><button class="bot">Volver al combate</button>';

}



?>

</body>
</html>