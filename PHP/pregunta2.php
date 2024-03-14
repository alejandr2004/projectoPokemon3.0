<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Document</title>
</head>
<body class="fondobatalla">
<link href="enlace nivel 2"><img src="imagen nivel 2">

<form method="get">
<p>¿Qué tipo de Pokémon es Volcarona?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
  <label for="respuesta1">a. Fuego/Volador</label><br>
  <input type="radio" id="respuesta2" name="respuesta" value="b">
  <label for="respuesta2">b. Bicho/fuego</label><br> 
  <input type="radio" id="respuesta3" name="respuesta" value="c">
  <label for="respuesta3">c.  Fuego</label><br>
  <input type="radio" id="respuesta4" name="respuesta" value="d">
  <label for="respuesta4">d. Agua</label><br><br> 
  <button class="bajo">Enviar</button>
</form>


<?php 

$valor_barra=100;
$valor_enemigo=100;

session_start();

$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="b"){
  $_SESSION['tick_2']=1;
  $valor_enemigo=0;
  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "b", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="b"){
  $valor_barra=50;
  echo '<p class="pista">introduce la pista aqui Alex</p>';
 }

?>



<?php





if (empty($_SESSION['tick_1'])){

$_SESSION['tramposo']=1;

header("location:trampas.php");

}


?>
<progress id="aliado" max="100" value="<?php echo $valor_barra; ?>"><?php echo $valor_barra; ?>%</progress>
<progress id="enemigo" max="100" value="<?php echo $valor_enemigo; ?>"><?php echo $valor_enemigo; ?>%</progress>


</body>
</html>