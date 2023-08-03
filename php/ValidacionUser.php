<?php
include("conexion.php");
$user=$_POST['Usuario'];
$clave=$_POST['Password'];
$numero=0;

$sql="SELECT * FROM afiliados WHERE Usuario='".$user."' AND Password='".$clave."'";
$resultado=mysql_query($sql);
$numero=mysql_num_rows($resultado);

if (mysql_num_rows($resultado)>0)
{
header ("Location: Index.php");    
}

$sql= "INSERT INTO registro (Usuario, Password) VALUES ('".$_POST["User"]."','".$_POST["Clave"]."')";
mysqli_query($conexion, $sql); 




//vemos si el usuario y contraseña son válidos
if ($_POST["usuario"]==$user && $_POST["contrasena"]==$clave){
//usuario y contraseña válidos
//se define una sesion y se guarda el dato session_start();
$_SESSION["autenticado"]= "SI";
header ("Location: Index.php");
}else {
//si no existe se va a login.php
header("Location: Login.php?errorusuario=si");
}

//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] != "SI") {
//si no existe, va a la página de autenticacion
header("Location: Login.php");
//salimos de este script
exit();
}

?>

















if($numero > 0){
echo 'Ya existe el usuario';
}
else{
session_start();
$_SESSION['Usuario']=$user;
header("Location:Tablas.php");
   }

?>
