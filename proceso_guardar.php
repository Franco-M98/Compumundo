<?php
session_start();

require("conexion.php");
if(isset($_POST['User']) && !empty($_POST['User']))
{
$sql= "INSERT INTO imagenes (Usuario) VALUES ('".$_POST["User"]."')";
mysqli_query($conexion, $sql);    

}

?>

<?php
include("indexprincipal.php")
?>
