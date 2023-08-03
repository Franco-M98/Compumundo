<?php
  session_start();
  error_reporting(0);
?> 


<?php
$checkbox = $_POST['checkbox'];

//SI SE PRESIONA EN EL BOTON ELIMINAR

include("conexion.php");
if (empty($_POST['checkbox'])) {

    echo "<script>
        alert ('Seleccione el producto que quiera eliminar.');
        window.location = '../carrito.php';
        </script>";
     
    }else{
    
    foreach($checkbox as $value){

        $sql= "DELETE FROM carrito WHERE Cod_Producto =".$value." ";
        mysqli_query($conexion, $sql); 
        
        if (empty($sql)){
            echo "No hay ningun producto en el carrito para eliminar.";

        }else{
            header("Location:../carrito.php");
            echo "Registro eliminado";
        }
    
    }
}

?>