
<link rel="stylesheet" href="../CSS/estilo.css">

<body class="fondobatalla">
  
<!-- <link href="enlace nivel 5"><img src="imagen nivel 5"> -->

<form method="get">
<p>¿Cuál es el Pokémon que evoluciona en Jolteon, Vaporeon o Flareon mediante diferentes métodos de evolución?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
  <label for="respuesta1">a. Bulbasaur</label><br>
  <input type="radio" id="respuesta2" name="respuesta" value="b">
  <label for="respuesta2">b. Mew</label><br>
  <input type="radio" id="respuesta3" name="respuesta" value="c">
  <label for="respuesta3">c.  Eevee</label><br> 
  <input type="radio" id="respuesta4" name="respuesta" value="d">
  <label for="respuesta4">d. Pikachu</label><br><br>
  <button class="bajo">Enviar</button>
</form>

<div>
  <img class="rival5" src="../IMG/skitty enemigo (de frente).gif">
</div>

<div>
  <img class="aliado5" src="../IMG/umbreon_espaldas.gif">
</div>

<?php 
session_start();

if (isset($_GET["respuesta"])) {
$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="c"){
  $_SESSION['tick_5']=1;
  $valor_enemigo=0;
  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "c", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="c"){
  $_SESSION['pista5']=1;
  header("location:pista5.php");
 }

}
?>




<?php




if (empty($_SESSION['tick_4'])){
  
$_SESSION['tramposo']=1;
header("location:trampas.php");
}



?>




</body>
</html>