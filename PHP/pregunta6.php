
<link rel="stylesheet" href="../CSS/estilo.css">

<body class="fondobatalla">
<!-- <link href="enlace nivel 6"><img src="imagen nivel 6"> -->

<form method="get">
<p>¿Qué tipo de Pokémon es Gengar?<p>
<input type="radio" id="respuesta1" name="respuesta" value="a">
<label for="respuesta1">a. Fantasma/Veneno</label><br>
<input type="radio" id="respuesta2" name="respuesta" value="b">
<label for="respuesta2">b. Siniestro/Fantasma</label><br>
<input type="radio" id="respuesta3" name="respuesta" value="c">
<label for="respuesta3">c.  Veneno</label><br>
<input type="radio" id="respuesta4" name="respuesta" value="d">
<label for="respuesta4">d. Fantasma</label><br><br>
<button class="bajo">Enviar</button>
</form>  

<div>
  <img class="rival6" src="../IMG/jefe enemigo (de frente).gif">
</div>

<div>
  <img class="aliado6" src="../IMG/umbreon_espaldas.gif">
</div>

<?php 

session_start();






if (isset($_GET["respuesta"])) {
$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/

if($respuesta_usuario=="a"){
  
  $_SESSION['tick_6']=1; 
  $valor_enemigo=0;
  header("Location:felicidades.php");
}
/*Si la respuesta del usuario es la "a", lo enviará a la pantalla inicial*/

if(isset($respuesta_usuario) && $respuesta_usuario!="a"){
  $_SESSION['pista6']=1;
  header("location:pista6.php");
 }
}
?>


<?php




if (empty($_SESSION['tick_5'])){

$_SESSION['tramposo']=1;
header("location:trampas.php");
}

// session_destroy(); /*Esto se pondrá en felicidades*/


?>



</body>
</html>