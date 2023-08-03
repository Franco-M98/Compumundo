<?php
  session_start();
  error_reporting(0);
?> 


<?php
$checkbox = $_POST['checkbox'];
$nrotarjeta4 = $_POST['Ntarjeta4'];


//SI SE PRESIONA EN EL BOTON ELIMINAR

include("conexion.php");
if (empty($_POST['checkbox'])) {

    echo "<script>
        alert ('Seleccione la tarjeta que quiera eliminar.');
        window.location = '../formadepago.php';
        </script>";
     
    }else{
    
    foreach($checkbox as $value){

        $sql= "DELETE FROM tarjetas WHERE Nro_tarjeta =".$value." AND Ultm4_tarjeta = '$nrotarjeta4' ";
        mysqli_query($conexion, $sql); 
        
        if (empty($sql)){
            echo "No hay ninguna tarjeta cargada.";

        }else{
            header("Location:../formadepago.php");
            echo "Tarjeta eliminada";
        }
    
    }
}

?>