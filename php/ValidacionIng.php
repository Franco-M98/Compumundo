<?php
session_start();

$nombre = $_POST['User'];
$password = $_POST['Clave'];


$conexion=mysqli_connect("localhost","root","","afiliados");

 

$consulta = mysqli_query ($conexion, "SELECT * FROM altauser WHERE Usuario = '$nombre' AND Password = '$password' LIMIT 1");  

if(!$consulta){ 
    header("location: TablasAltaUsuario.php");
    echo mysqli_error($mysqli_connect);
    
   
} 

if($user= mysqli_fetch_assoc($consulta)) {
    header("location: Contacto.php");
    
} else {
$sql= "INSERT INTO altauser (Usuario, Password, DNI, Fecha de Nacimiento, Direccion) VALUES ('".$_POST["User"]."','".$_POST["Clave"].")";
mysqli_query($conexion, $sql);    
    
    }

?>

<?php
include("TablasAltaUsuario.php")
?>

