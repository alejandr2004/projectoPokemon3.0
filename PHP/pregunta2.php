
<link rel="stylesheet" href="../CSS/estilo.css">

<body class="fondobatalla">
<!-- <link href="enlace nivel 2"><img src="imagen nivel 2"> -->

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

<div>
  <img class="rival2" src="../IMG/enfrente2.gif">
</div>

<div>
  <img class="aliado2" src="../IMG/umbreon_espaldas.gif">
</div>

<?php 

session_start();
if (isset($_GET["respuesta"])) {
$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="b"){
  $_SESSION['tick_2']=1;
  $valor_enemigo=0;
  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "b", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="b"){
  $_SESSION['pista2']=1;
  header("location:pista2.php");
 }

}


?>



<?php





if (empty($_SESSION['tick_1'])){

$_SESSION['tramposo']=1;

header("location:trampas.php");

}


?>



</body>
</html>