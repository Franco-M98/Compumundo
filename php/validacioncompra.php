<?php
  session_start();
  error_reporting(0);
?> 

<?php 

  $user = $_POST['Usuario'];
  $tipodetarjeta = $_POST['tipodetarjeta'];
  $nrotarjeta = $_POST['Ntarjeta'];
  $nrotarjeta4 = $_POST['Ntarjeta4'];
  $seguridad = $_POST['seguridad'];
  $seguridad1 = $_POST['seguridad1'];


  
  include("conexion.php"); 

  

  if ($seguridad1 == $seguridad){

    $sql="INSERT INTO comprafinal (Usuario, Cod_Producto, Imagen, Producto, Cantidad, Precio, Tipo_Tarjeta, Nro_Tarjeta, Ultm4_tarjeta, Cod_seguridad)
    Select  tarjetas.Usuario, carrito.Cod_Producto , carrito.Imagen, carrito.Producto, carrito.Cantidad, carrito.Precio, tarjetas.Tipo_tarjeta, tarjetas.Nro_Tarjeta, tarjetas.Ultm4_tarjeta, '$seguridad' from tarjetas inner join carrito on tarjetas.Usuario = carrito.Usuario WHERE tarjetas.Usuario ='$user' AND tarjetas.Cod_seguridad = '$seguridad' AND tarjetas.Tipo_Tarjeta = '$tipodetarjeta' ";

    mysqli_query($conexion,$sql);
    

    echo
    "<script>
      alert ('Tu compra se ha realizado con exito.');
      window.location = '../compraexitosa.php'
    </script>";
    $sql= "DELETE FROM carrito WHERE Usuario ='$user' ";
      mysqli_query($conexion, $sql);
  }
  else{
    echo 
    "<script>
      alert ('Verifíque el código de seguridad.');
      window.history.back();
    </script>";
   
    /*header("Location:".$_SERVER['HTTP_REFERER']);*/
     
  }

?>