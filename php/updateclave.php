<?php
  session_start();
  error_reporting(0);
 
?> 

<?php

require("conexion.php");

$user = $_POST['User'];
$clave = $_POST['Clave'];

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];



/* $_SESSION['foto'] = $destino; */


$sql = "UPDATE registrodeusuario SET Clave= '$clave'  WHERE Usuario='$user' ";
/* $sql="INSERT INTO imagenes  (Usuario, Imagenes) VALUES ('$user' ,'".$destino."')" ;*/
mysqli_query($conexion, $sql);  

if($sql){
  
  echo 
    "<script>
      alert ('Se cambio la clave con exito!');
      window.location = '../MisDatos.php';
    </script>";
  
  

}else{
  echo "Error al insertar";
}


?>

<?php
include("../micuenta.php")
?>