<?php
  session_start();
  error_reporting(0);

?> 

<?php

  $_SESSION['Usuario']=$user;
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $user = $_POST['User'];
  $clave = $_POST['Clave'];
  $clave1 = $_POST['Clave1'];
  $imagen = $_POST['imagen'];

  include("conexion.php");
  $consulta= "SELECT Usuario FROM registrodeusuario WHERE Usuario = '$user' LIMIT 1" ; 
  $resultado = mysqli_query($conexion,$consulta);

  $filas=mysqli_fetch_assoc($resultado);

  if ($filas>0){
    
    echo 
    "<script>
      alert ('Usuario ya existente');
      window.location = '../RegistrodeUsuario.php';
    </script>";
    
  }

  else if ($clave == $clave1){

    $sql= "INSERT INTO registrodeusuario (Nombre, Apellidos, Usuario, Clave, Imagenes) VALUES ('$nombre', '$apellidos', '$user', '$clave', '".$imagen."') LIMIT 1" ; 
    mysqli_query($conexion,$sql);

    echo 
    "<script>
      alert ('Usuario registrado con exito');
      window.location = '../Index.php';
    </script>";

  } else {
  

  echo 
  "<script>
    alert ('Verifique que las contraseñas coincidan');
    window.location = '../RegistrodeUsuario.php';
  </script>";
    
 }



?>


