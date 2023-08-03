
<div class="container home">  
    
    <h2>Telefonos Celulares </h2>
    
    <!-------Buscador------------------------------------------------------------------------------------------------>

    <form action="buscar.php" class="form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data">
        <input class="form-control mr-sm-2"  name="carrito" type="search" placeholder="Search" aria-label="Search">
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
    
    <form action="eliminar.php" class="form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data">
        <table class="table table-striped border">
            <thead>
                <tr class="">
                    <th>Opciones</th>
                    <th>Cod_Usuario</th>
                    <th>Imagen</th>
                    <th>Cod_Producto</th>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>


                </tr>
            </thead>

            <tbody>
                
                <?php 
                include("conexion.php");
                $consulta = "SELECT * FROM carrito";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $carrito = mysqli_fetch_assoc($resultado) ) {
                ?>
                
                    <tr >  
                        <td><div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="Checkbox[]" value="<?php echo $carrito['Cod_Producto']?>"/>
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div></td>
    
                        <td><?php echo $carrito ['Cod_Usuario']; ?></td>
                        <td><img src="/Compumundo/<?php echo $carrito ['Imagen'] ?>" width="50" height="50"/></td>
                        <td><?php echo $carrito ['Cod_Producto']; ?></td>
                        <td><?php echo $carrito ['Producto']; ?></td>
                        <td><?php echo $carrito ['Descripcion']; ?></td>
                        <td><input type="number" class="form-control text-center" value="<?php echo $carrito ['Cantidad']; ?>"/></td>   
                        <td><?php echo '$'.$carrito ['Precio']; ?></td>
                        <td><input type="submit" class="btn btn-danger"  name="eliminar" value="Eliminar" /> </td>
                        <td> <a href="#" class="btn btn-success" role="button">Actualizar </a> </td>
                        
                    </tr>
                
            
                   
                <?php 
                }
                ?>

            </tbody>
        </table>  
  
        <p> <a href="#" class="btn btn-outline-warning"  role="button"><img src="img/actualizar-flecha.png"  width="15" height="15" alt="..."> Actualizar </a>
        <input type="submit" name="eliminar" value="Eliminar" class="btn btn-outline-danger" role="button"  /> </p>

    </form>
 
</div>
