<?php
  session_start();
  error_reporting(0);
 
?> 

<?php

require("conexion.php");

$user = $_POST['User'];
$imagen=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="img/Fotodeperfil/";
$destino=$ruta."".$imagen;


/* $_SESSION['foto'] = $destino; */
$fecha = $_POST['fecha'];
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha_actual=date("H-i d/m/Y");


move_uploaded_file($archivo, $destino);
$sql = "UPDATE registrodeusuario SET  Fecha='$fecha' , Imagenes = '".$destino."' WHERE Usuario='$user' ";
/* $sql="INSERT INTO imagenes  (Usuario, Imagenes) VALUES ('$user' ,'".$destino."')" ;*/
mysqli_query($conexion, $sql);  

if($sql){
  echo 
    "<script>
      alert ('Se cambio la imagen con exito!');
      window.location = '../MisDatos.php';
    </script>";
  

}else{
  echo "Error al insertar";
}


?>


