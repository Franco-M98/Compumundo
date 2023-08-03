<?php
    include('conexion.php');
    
    $consulta = mysqli_query("SELECT * FROM carrito");
    $total = 0; // total declarado antes del bucle
    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
    while( $carrito = mysqli_fetch_assoc($resultado) )
    {
    $total = $total + $carrito['Precio']; // Sumar variable $total + resultado de la consulta
    }
    echo $total; 
?>