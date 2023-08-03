<div class="card col-sm-12 shadow-lg">
  <div class="row">
    <div id="" class="col-sm-6 text-center py-2">
      <img src="<?php echo $row ['Imagen']; ?>"  width="400" height="400">
    </div>
    <div class="col-4 col-sm-6">
      <div class="card-body">
        <h3><p class="d-inline-block py-2 mb-2 text-muted"><?php echo $row ['Producto']; ?></p><img src="<?php echo $row ['Marca'];?>" width="60" height="60"/></h3>
        <input type="hidden" name="Usuario" value="<?php echo $row['Usuario']; ?>"/>
        <input type="hidden" name="producto" value="<?php echo $row ['Producto']; ?>" /> 
        <div class="form-row">
          <div class="col-10 mb-2">
            <input type="hidden" name="codproducto" value="<?php echo $row ['Cod_Producto']; ?>" />
            <p class="card-text text-muted"><?php echo ''.$row ['Descripcion']; ?><p>
            <input type="hidden" name="descripcion" value="<?php echo $row ['Descripcion']; ?>"/>
          </div>
          <p class="col-form-label card-text py-2">Cantidad:</p>
          <div class="col-sm-5 mb-4">
            <input type="number" class="form-control bg-light text-center col-sm-8" name="Cantidad" onclick="limpiarFormulario()" name="Cantidad" required/>
          </div>
          <div class="col-10 py-1">
            <h1 class="card-text"><font face="Decorative"><?php echo '$'.$row ['Precio']; ?></font></h1>
            <input type="hidden" name="precio" value="<?php echo $row ['Precio']; ?>" /> 
          </div>
        </div>
        <hr class="form-row col-10 mb-3">
        <div class="form-row">
          <p><input  type="submit" class="btn"  value="Agregar al carrito"/>
          <a href="carrito.php" class="btn btn-primary" role="button">Comprar carrito</a></p>
        </div>  
      </div>    
    </div>    
  </div>
</div>


