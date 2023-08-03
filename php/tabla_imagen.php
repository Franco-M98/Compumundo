<?php
     include("conexion.php");
     $sql="Select*from imagenes";
     $resultado=mysqli_query($conexion,$sql);
?>

<table border = 1>
             <tr>
                 <td> Usuario </td>
                 <td> Imagenes </td>

             </tr>
<?php

     while ($row=mysqli_fetch_array($resultado)){
?>
           <tr>
               <td> <?php echo $row ['Usuario'];?></td>
               <td> <?php echo $row ['Imagenes'];?></td>

           </tr>
<?php
}
?>

</table>
