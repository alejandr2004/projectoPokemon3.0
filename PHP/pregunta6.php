<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Document</title>
</head>
<body class="fondobatalla">
<link href="enlace nivel 6"><img src="imagen nivel 6">

<form method="get">
<p>¿Qué tipo de Pokémon es Gengar?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
<label for="respuesta1">a. Fantasma/Veneno</label><br> correcta
<input type="radio" id="respuesta2" name="respuesta" value="b">
<label for="respuesta2">b. Siniestro/Fantasma</label><br>
<input type="radio" id="respuesta3" name="respuesta" value="c">
<label for="respuesta3">c.  Veneno</label><br>
<input type="radio" id="respuesta4" name="respuesta" value="d">
<label for="respuesta4">d. Fantasma</label><br><br>
<button class="bajo">Enviar</button>
</form>  


<?php 

session_start();



$valor_barra=100;
$valor_enemigo=100;



$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="a"){
  
  $_SESSION['tick_6']=1; 
  $valor_enemigo=0;
  header("Location:../felicidades.php");
}
/*Si la respuesta del usuario es la "a", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="a"){
  $valor_barra=50;
  echo '<p class="pista">introduce la pista aqui Alex</p>';
 }

?>


<?php




if (empty($_SESSION['tick_5'])){

$_SESSION['tramposo']=1;
header("location:trampas.php");
}

// session_destroy(); /*Esto se pondrá en felicidades*/


?>

<progress id="aliado" max="100" value="<?php echo $valor_barra; ?>"><?php echo $valor_barra; ?>%</progress>
<progress id="enemigo" max="100" value="<?php echo $valor_enemigo; ?>"><?php echo $valor_enemigo; ?>%</progress>

</body>
</html>