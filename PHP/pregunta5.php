<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Document</title>
</head>
<body class="fondobatalla">
  
<link href="enlace nivel 5"><img src="imagen nivel 5">

<form method="get">
<p>¿Cuál es el Pokémon que evoluciona en Jolteon, Vaporeon o Flareon mediante diferentes métodos de evolución?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
  <label for="respuesta1">a. Bulbasaur</label><br>
  <input type="radio" id="respuesta2" name="respuesta" value="b">
  <label for="respuesta2">b. Mew</label><br>
  <input type="radio" id="respuesta3" name="respuesta" value="c">
  <label for="respuesta3">c.  Eevee</label><br> correcta
  <input type="radio" id="respuesta4" name="respuesta" value="d">
  <label for="respuesta4">d. Pikachu</label><br><br>
  <button class="bajo">Enviar</button>
</form>

<?php 
session_start();
$valor_barra=100;
$valor_enemigo=100;

$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="c"){
  $_SESSION['tick_5']=1;
  $valor_enemigo=0;
  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "c", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="c"){
  $valor_barra=50;
  echo '<p class="pista">introudce la pista Alex</p>';
 }


?>




<?php




if (empty($_SESSION['tick_4'])){
  
$_SESSION['tramposo']=1;
header("location:trampas.php");
}



?>

<progress id="aliado" max="100" value="<?php echo $valor_barra; ?>"><?php echo $valor_barra; ?>%</progress>
<progress id="enemigo" max="100" value="<?php echo $valor_enemigo; ?>"><?php echo $valor_enemigo; ?>%</progress>


</body>
</html>