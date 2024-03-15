<link rel="stylesheet" href="../CSS/estilo.css">

<body class="fondobatalla">
    
<!-- <link href="enlace nivel 4"><img src="imagen nivel 4"> -->



<form method="get">
<p>¿Qué tipo de Pokémon es Mewtwo?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
  <label for="respuesta1">a. Tierra</label><br>
  <input type="radio" id="respuesta2" name="respuesta" value="b">
  <label for="respuesta2">b. Normal</label><br>
  <input type="radio" id="respuesta3" name="respuesta" value="c">
  <label for="respuesta3">c.  Veneno</label><br>
  <input type="radio" id="respuesta4" name="respuesta" value="d">
  <label for="respuesta4">d. Psquico</label><br><br> 
  <button class="bajo">Enviar</button>
</form>

<div>
  <img class="rival4" src="../IMG/tentacool_enemigo.gif">
</div>

<div>
  <img class="aliado4" src="../IMG/umbreon_espaldas.gif">
</div>


<?php 

session_start();

if (isset($_GET["respuesta"])) {
$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="d"){
  $_SESSION['tick_4']=1;
  header("Location:../inicio.html");
}
/*Si la respuesta del usuario es la "d", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="d"){
  $valor_barra=50;
  echo '<p class="pista">Este Pokemon fue creado a partir del ADN de otro pokemon</p>';
 }
}
?>



<?php




if (empty($_SESSION['tick_3'])){

$_SESSION['tramposo']=1;
$valor_enemigo=0;
header("location:trampas.php");
}




?>


</body>
</html>