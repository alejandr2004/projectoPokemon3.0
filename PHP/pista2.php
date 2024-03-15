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


if (isset($_SESSION["pista2"])){

    echo '<p class="pista">Este pokemon tiene seis alas y tiene un pelaje blanco</p>';
    echo '<a href="./pregunta2.php"><button class="bot">Volver al combate</button>';
    
}



?>

</body>
</html>