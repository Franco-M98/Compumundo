<?php
  session_start();
  
?> 

<?php 

$cod_producto = $_POST['codproducto'];
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['Cantidad'];
$precio = $_POST['precio'];
/*$total= $cantidad * $precio;*/
$_SESSION['Cantidad'] = $cantidad;



include("conexion.php"); 
$sql="INSERT INTO carrito (Cod_Producto, Producto, Descripcion, Cantidad , Precio)
SELECT Cod_Producto, Producto, Descripcion, '$cantidad' , Precio FROM productos WHERE cod_Producto = '$cod_producto' ";
mysqli_query($conexion,$sql);


/*
$sql = "SELECT COUNT(*) as Cantidad FROM carrito";
$resultado = mysqli_query($conexion, $sql);
$_SESSION = mysqli_fetch_assoc($resultado);
echo 'Número de productos de registros: ' . $_SESSION ['Cantidad'];



# incluimos los datos de la conexión  
include("conexion.php"); 
// Comprobamos si el nombre esta registrado 
$sql = "SELECT * FROM productos where Cod_Producto = '$cod_producto'"); // Ejecutamos la consulta
	if(mysqli_num_rows($sql>0)) {
	
echo "el nombre ya esta registradio en nuestra bd.";

 } else {
# escribimos la sentencia MySQL 
$sql="INSERT INTO carrito (Cod_Producto, Producto, Descripcion, Cantidad , Precio) VALUES (Cod_Producto, Producto, Descripcion, '$cantidad' , Precio)";
mysqli_query($conexion,$consulta);
*/
?>