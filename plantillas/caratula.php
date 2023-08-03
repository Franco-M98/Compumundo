<div class="card col-sm-12 shadow-lg">
  <div class="row">
    <div id="" class="col-sm-6 text-center py-2">
      <img src="<?php echo $row ['Imagen']; ?>"  width="400" height="400">
    </div>
    <div class="col-4 col-sm-6">
      <div class="card-body">
        <h3><p class="d-inline-block py-2 mb-2 text-muted"><?php echo $row ['Producto']; ?></p><img src="<?php echo $row ['Marca'];?>" width="60" height="60"/></h3>
        <div class="form-row">
          <div class="col-10 mb-2">
            <p class="card-text text-muted"><?php echo ''.$row ['Descripcion']; ?><p>
          </div>
          <p class="col-form-label card-text py-2">Cantidad:</p>
          <div class="col-sm-5 mb-4">
            <input type="number" class="form-control bg-light text-center col-sm-8" name="Cantidad" onclick="limpiarFormulario()" name="Cantidad" required/>
          </div>
          <div class="col-10 py-1">
            <h4 class="card-text text-dark"><b><font face="Decorative">Inicie sesión o registrese, para ver el precio del producto.</font></b></h4>
          </div>
        </div>
        <hr class="form-row col-10 mb-3">
        <div class="form-row">
          <p><a href="Login.php" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Para agregar productos al carrito inicie sesión sino registrese." role="button">Agregar al carrito</a>
          <a href="Login.php" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Para comprar productos del carrito inicie sesión sino registrese." role="button">Comprar carrito</a></p>
        </div>  
      </div>
    </div>
  </div>
</div>  