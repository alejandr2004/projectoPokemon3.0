
<link rel="stylesheet" href="../CSS/estilo.css">


<body class="fondobatalla">
<!-- <link href="enlace nivel 3"><img src="imagen nivel 3"> -->


<form class="form2" method="get">
<p class="estilo">¿Cuál es el Pokémon legendario que representa el equilibrio entre el tiempo y el espacio?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
  <label for="respuesta1">a. Palkia</label><br>
  <input type="radio" id="respuesta2" name="respuesta" value="b">
  <label for="respuesta2">b. Giratina</label><br>
  <input type="radio" id="respuesta3" name="respuesta" value="c">
  <label for="respuesta3">c.  Dialga</label><br>
  <input type="radio" id="respuesta4" name="respuesta" value="d">
  <label for="respuesta4">d. Arceus</label><br><br>
  <button class="bajo">Enviar</button>
</form> 

<div>
  <img class="rival3" src="../IMG/enfrente_enemigo.gif">
</div>
<div>
  <img class="aliado3" src="../IMG/umbreon_espaldas.gif">
</div>

<?php 



session_start();

if (isset($_GET["respuesta"])) {
$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="c"){
  $_SESSION['tick_3']=1;
  $valor_enemigo=0;
  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "c", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="c"){
  $valor_barra=50;
  echo '<p class="pista">Este Pokemon legendario sale en la portada del juego Pokemon diamente</p>';
 }
}
?>



<?php



if (empty($_SESSION['tick_2'])){

$_SESSION['tramposo']=1;   

header("location:trampas.php");
}


?>


</body>
</html>