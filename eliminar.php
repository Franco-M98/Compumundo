<?php
include("conexion.php");
$checkbox=$_POST['Checkbox'];

//SI SE PRESIONA EN EL BOTON ELIMINAR

foreach($checkbox as $value)
    {
        $sql= "DELETE FROM carrito WHERE Cod_Producto =".$value."";
        mysqli_query($conexion, $sql); 
        
        if ($sql){
            header("Location:carrito.php");
            echo "Registro eliminado";
        }else{
            echo "Elimacion erronea";
        }
    
    }

?>