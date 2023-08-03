
<?php 


$buscar="";
$buscar=$_POST ['Buscar'];
include("conexion.php");
if($buscar!=""){
    $consulta= "SELECT * FROM productos WHERE Cod_Producto LIKE '%".$buscar."%' OR Producto LIKE '%".$buscar."%' OR Descripcion LIKE '%".$buscar."%' ";
    $resultado = mysqli_query($conexion, $consulta);
}
?>



<table class="table table-striped table-dark text-center">
        <thead>
            <tr class="bg-secondary">
                <th>Cod_Producto</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Cantidad</th>   
                <th>Precio</th>
                <th>Editar</th>
            </tr>
        </thead>  

<?php

while ($productos = mysqli_fetch_assoc ($resultado) ) {
?>
  
<tr >  
<td><?php echo $productos ['Cod_Producto']; ?></td>
<td><?php echo $productos ['Producto']; ?></td>
<td><?php echo $productos ['Descripcion']; ?></td>
<td><?php echo $productos ['Cantidad']; ?></td>   
<td><?php echo $productos ['Precio']; ?></td>
<td><div class="text-center">
<a href="#" class="btn btn-outline-danger" role="button"> Eliminar </a>

<a href="#" class="btn btn-outline-dark" role="button">Guardar </a> 
<a href="#" class="btn btn-outline-success" role="button">Actualizar </a></div> </td>

</tr>
   
    
    
<?php   
}  
?>
    
</table> 





