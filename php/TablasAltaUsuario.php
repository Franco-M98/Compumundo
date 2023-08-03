<?php
     include("conexion.php");
     $sql="Select*from registrodeusuario";
     $resultado=mysqli_query($conexion,$sql);
?>

<table border = 1>
             <tr>
                 <td> Nombre </td>
                 <td> Apellidos</td>
                 <td> Usuario</td>
                 <td> Clave</td>
                 

             </tr>
<?php

     while ($row=mysqli_fetch_array($resultado)){
?>
           <tr>
               <td> <?php echo $row ['Nombre'];?></td>
               <td> <?php echo $row ['Apellidos'];?></td>
               <td> <?php echo $row ['Usuario'];?></td>
               <td> <?php echo $row ['Clave'];?></td>
               

           </tr>
<?php
}
?>
</table>
