<?php
  session_start();
  error_reporting(0);

?> 

<?php


  $user = $_POST['Usuario'];
  $tipodetarjeta = $_POST['tipodetarjeta'];
  $nrotarjeta = $_POST['Ntarjeta'];
  $nrotarjeta4 = $_POST['Ntarjeta4'];
  $nombreyapellido = $_POST['NyA'];
  $fecha = $_POST['fecha'];
  $seguridad = $_POST['seguridad'];
  $dni = $_POST['DNI'];

  include("conexion.php");
  
  $consulta= "SELECT Nro_tarjeta, Ultm4_tarjeta FROM tarjetas WHERE Usuario='$user' AND Tipo_tarjeta ='$tipodetarjeta' LIMIT 1" ; 
  $resultado = mysqli_query($conexion,$consulta);

  $filas = mysqli_fetch_assoc($resultado);

  if ($filas > 0 ){
    
    echo 
    "<script>
      alert ('Limite maximio de registro (1)');
      window.location = '../formadepago.php';
    </script>";
  }
    
  else {

    $sql= "INSERT INTO tarjetas (Usuario, Tipo_tarjeta, Nro_tarjeta, Ultm4_tarjeta, NombreyApellido, Fecha_vencimiento, Cod_seguridad, DNI) VALUES ('$user', '$tipodetarjeta', '$nrotarjeta', '$nrotarjeta4', '$nombreyapellido', '$fecha', '$seguridad', '$dni') " ; 

    mysqli_query($conexion,$sql);
  
    
    
      echo 
      "<script>
        alert ('Tarjeta registrada con exito');
        window.location = '../formadepago.php';
      </script>";
      
    
    
    
  }


?>
