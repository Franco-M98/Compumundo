<?php


$total = $_POST['Total'];

include("conexion.php");
  
$sql = "SELECT * FROM carrito";

$consulta = mysqli_query($conexion,$sql);

while($filas = mysqli_fetch_assoc($consulta)){
  
$total = $filas["Cantidad"] * $filas["Precio"];
  
}
  
  
?>

<?php
include("carrito.php")
?>