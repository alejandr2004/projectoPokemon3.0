<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/estilo.css">

</head>
<body class="cheater">
  


<?php

session_start();


if($_SESSION['tramposo']==1){

    echo '<p id="trampa">¡Eres un tramposo!</p>';
}






?>







    
</body>
</html>