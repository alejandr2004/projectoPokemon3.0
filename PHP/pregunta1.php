
<link rel="stylesheet" href="../CSS/estilo.css">
<body class="fondobatalla">
  

<form  method="get">
 <p>¿Cuál es el Pokémon inicial de tipo fuego en la región de Kanto?<p>
 <input type="radio" id="respuesta1" name="respuesta" value="a">
  <label for="respuesta1">a. Bulbasaur</label><br>
  <input type="radio" id="respuesta2" name="respuesta" value="b">
  <label for="respuesta2">b. Charmander</label><br>
  <input type="radio" id="respuesta3" name="respuesta" value="c">
  <label for="respuesta3">c.  Squirtle</label><br>
  <input type="radio" id="respuesta4" name="respuesta" value="d">
  <label for="respuesta4">d. Pikachu</label><br><br>
 <button class="bajo">Enviar</button>
</form>


<div>
  <img class="rival" src="../IMG/candelabro enemigo (de frente).gif">
</div>
<div>
  <img class="aliado" src="../IMG/umbreon_espaldas.gif">
</div>



<?php 


session_start();



if (isset($_GET["respuesta"])) {
$respuesta_usuario=$_GET['respuesta'];  /*Recojo la respuesta del usuario*/


if($respuesta_usuario=="b"){
  $_SESSION['tick_1']=1;                            /*Aquí pondré la barra de vida del rival a 0*/
  $valor_enemigo=0;

  header("Location:../inicio.html");

}
/*Si la respuesta del usuario es la "b", lo enviará a la pantalla inicial*/

}
?>


<?php



if(isset($respuesta_usuario) && $respuesta_usuario!="b"){
 $_SESSION['pista1']=1;
 header("location:pista1.php");
 
}




?>






</body>

</html>