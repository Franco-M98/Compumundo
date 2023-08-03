<?php
  session_start();
  error_reporting(0);
?> 

<?php

$user = $_POST['User'];
$clave = $_POST['Clave'];
$nombre = $_POST['Nombre'];
$imagen = $_POST['Imagen'];


include("conexion.php");
$consulta= "SELECT * FROM registrodeusuario WHERE Usuario = '$user' AND Clave = '$clave' LIMIT 1" ; 
$resultado = mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if ($filas>0){

  session_start();
 
  $_SESSION['Usuario']="$user";
  
  echo "<script>
        alert ('Bienvenido $user');
        window.location = '../Index.php';
      </script>";
  
}
else {
  echo 
   "<script>
        alert ('Usuario inexistente, verifique los datos ingresados. Sino registrese en el sistema');
        window.location = '../Login.php';
      </script>";
  
} ?>

<?php  

mysqli_free_result($resultado);
mysqli_close($conexion);

?>



