<?php
  session_start();
  error_reporting(0);
?> 

<?php 

  $user = $_POST['Usuario'];


  include("conexion.php"); 

 $sql= "DELETE FROM comprafinal WHERE Usuario ='$user' ";
 mysqli_query($conexion, $sql);
  
 echo
 "<script>
   alert ('Gracias por su compra');
   window.location = '../Index.php'
 </script>";



?>