<?php
  session_start();
  error_reporting(0);
?> 

<?php

$user = $_POST['User'];
$clave = $_POST['Clave'];
$_SESSION['Usuario']=$user;    


include("conexion.php");
$consulta= "SELECT * FROM registrodeusuario WHERE Usuario = '$user' AND Clave = '$clave' LIMIT 1" ; 
$resultado = mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if ($filas>0){
  header("location:indexprincipal.php"); 
  
}
else{
  echo "Usuario inexistente, registrese en el sitema";} ?>
  <a href="Volver.php">Volver</a>

<?php  

mysqli_free_result($resultado);
mysqli_close($conexion);

?>



