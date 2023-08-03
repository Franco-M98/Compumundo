<?php
  session_start();
  error_reporting(0);

?> 

<?php 

  $cod_producto = $_POST['codproducto'];
  $producto = $_POST['producto'];
  $descripcion = $_POST['descripcion'];
  $cantidad = $_POST['Cantidad'];
  $precio = $_POST['precio'];
  $user = $_POST['Usuario'];

  $_SESSION['Cantidad'] = $cantidad;
  $_SESSION['codproducto'] = $cod_producto;


  include("conexion.php"); 

  if ($cantidad <= 0)
  {
    
    echo 
    "<script>
      alert ('Ingrese un número mayor que 0');
      window.history.back();
    </script>";
    
  }
  else{
		
    $sql="INSERT INTO carrito (Usuario, Cod_Producto, Imagen, Producto, Descripcion, Cantidad , Precio)
    Select  Usuario, Cod_Producto, Imagen, Producto, Descripcion, '$cantidad', Precio from productos, registrodeusuario where cod_Producto = '$cod_producto' and Usuario = '$user' ";

    mysqli_query($conexion,$sql);

    echo
    "<script>
      alert ('Se agrego el producto al carrito');
      window.history.back();
    </script>";
   
    /*header("Location:".$_SERVER['HTTP_REFERER']);*/
     


  }

?>



