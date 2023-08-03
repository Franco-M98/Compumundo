<?php
  session_start();
  error_reporting(0);
 
?> 

<?php

require("conexion.php");

$user = $_POST['User'];
$imagen=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="img/";
$destino=$ruta."".$imagen;

move_uploaded_file($archivo, $destino);
$sql="INSERT INTO imagenes (Usuario, Imagenes) VALUES ('".$user."','".$destino."')";
mysqli_query($conexion, $sql);  

if($sql){
  echo "Insertado Correctamente";
}else{
  echo "Error al insertar";
}


?>

<?php
include("../micuenta.php")
?>
