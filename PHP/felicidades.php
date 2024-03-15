<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body class="felicidades">
  
<a href="../index.html"><button class="bot">Volver al inicio</button>

<img class="congrats" src="../IMG/congratulations.gif">  

<?php

session_start();


if (empty($_SESSION['tick_6'])){

    $_SESSION['tramposo']=1;
    header("location:trampas.php");
}


session_destroy();         /*Cuando se salga de felicidades se destruirán los valores de las variables de sesión*/

?>
</body>
</html>











</body>
</html>