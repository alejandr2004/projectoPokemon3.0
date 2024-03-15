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


if (isset($_SESSION["pista4"])){

    echo '<p class="pista">Este Pokemon fue creado a partir del ADN de otro pokemon</p>';
    echo '<a href="./pregunta4.php"><button class="bot">Volver al combate</button>';

}



?>

</body>
</html>