<?php

 include("conexion.php");


 //SI SE PRESIONA EN EL BOTON ELIMINAR


 $sql= "INSERT INTO carrito (Cod_Producto, Producto, Descripcion, Cantidad, Precio) VALUES (1100, 'Huawei', '20GB', 1, 17000 )";
 mysqli_query($conexion, $sql); 
            
    if ($sql){
        header("Location:ayuda.php");
        echo "Agregado al carrito exitosamente";
    }else{
        echo "Error";
    }


?>