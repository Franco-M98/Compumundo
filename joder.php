<?php
  session_start();
   error_reporting(0);
?> 

<?php 

$cod_producto = $_POST['Cod_Producto'];
$cantidad = $_POST['Cantidad'];

$imagen=$_FILES['Imagen']['name'];
$archivo=$_FILES['Imagen']['tmp_name'];
$ruta="img/";
$ruta=$ruta."".$imagen;



include("conexion.php"); 

move_uploaded_file($archivo, $ruta);
$sql="INSERT INTO carrito SELECT * FROM productos WHERE Cod_Producto = '".$cod_producto."' ";
mysqli_query($conexion,$sql);
if ($sql){

    $sql="INSERT INTO carrito (Cod_Producto, Imagen) VALUES ('".$cod_producto."', '".$ruta."')";
    mysqli_query($conexion,$sql);

   
   

} 
else {
    
    echo "el nombre ya esta registradio en nuestra bd.";

   
}

?>