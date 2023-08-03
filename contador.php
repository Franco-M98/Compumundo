
<?php




include("conexion.php");
$sql = "SELECT COUNT(*) as cuenta FROM carrito";
$resultado = mysqli_query($conexion, $sql);
$filas = mysqli_fetch_assoc($resultado);
echo 'Número de productos de registros: ' . $filas ['cuenta'];







?>
