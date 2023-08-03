
<div class="container home">  
    
    <h2>Telefonos Celulares </h2>
    
<!-------Buscador------------------------------------------------------------------------------------------------>

<form action="buscador.php" class="form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data">
  <input class="form-control mr-sm-2"  name="Buscar" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Buscar</button>
</form> 

<select >

<option value="">Nro de Registros</option>
<option value="limit 1">1</option>
<option value="limit 2">2</option>
<option value="limit 3">3</option>
<option value="limit 4">4</option>
<option value="limit 5">5</option>

</select>


<!-------Fin del Buscador------------------------------------------------------------------------------------->  
    </h2>

    <table class="table table-striped border">
        <thead>
            <tr class="">
                <th>Opciones</th>
                <th>Cod_Producto</th>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Cantidad</th>   
                <th>Precio</th>
                <th></th>
                


            </tr>
        </thead>


        <tbody>
            
            <?php 
            include("conexion.php");
            $consulta = "SELECT * FROM productos";
            $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
            while( $productos = mysqli_fetch_assoc($resultado) ) {
            ?>
            
            <form action="eliminar.php" class="form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data">
               <tr >  
               <td> <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="Checkbox[]" value="<?php echo $productos['Cod_Producto']?>"/>
                <label class="form-check-label" for="exampleCheck1"></label>
                </div></td>

               <td><?php echo $productos ['Cod_Producto']; ?></td>
               <td><?php echo $productos ['Imagen']; ?></td>
               <td><?php echo $productos ['Producto']; ?></td>
               <td><?php echo $productos ['Descripcion']; ?></td>
               <td><?php echo $productos ['Cantidad']; ?></td>   
               <td><?php echo $productos ['Precio']; ?></td>
              <!-- <td><input type="submit" class="btn btn-danger"  name="eliminar" value="Eliminar" /> </td> -->
               <td> <img src="img/eliminar3.png" class="" width="25px" height="25px"  title="Eliminar" type="submit" class=""  name="eliminar" value="Eliminar" /> </td>
             
               </tr>
               
           
                
            <?php 
          }
           ?>

        </tbody>
    </table>  
    
    <nav aria-label="Page navigation example ">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="pager-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
    
    <p> <a href="#" class="btn btn-outline-warning"  role="button">  Actualizar </a>
    
    <input type="submit" name="eliminar" value="Eliminar" class="btn btn-outline-danger" role="button"  />   
    
    <img src="img/actualizar-flecha.png" title="Actualizar" width="15" height="15" >
     </p>
</form>
    
    

</div>


