
<link rel="stylesheet" href="../CSS/estilo.css">

<body class="felicidades">
<img class="congrats" src="../IMG/congratulations.gif">  

<?php



if (empty($_SESSION['tick_6'])){

    $_SESSION['tramposo']=1;
    header("<location:trampas.php");
}

?>







</body>
</html>