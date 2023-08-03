<?php

  //abrimos la sesión
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $user=$_SESSION['Usuario'];
  include("php/conexion.php");
 
  if (!isset($_SESSION['Usuario'])) 
  {
    header("location:Index.php"); 
  }
 


?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logooficial.png">

    <title>Forma de pago &bull; Compumundo</title>

    <!-- CSS -->

    <link href="css/hoversito.css" rel="stylesheet" type="text/css" />
    <link href="css/tarjeta.css" rel="stylesheet" type="text/css" />
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >
    <link href="css/carritoo.css" rel="stylesheet"  type="text/css" >



    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
        
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">


    <!-- Codigos Bootstrap.
    ========================================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
          

  </head>

  
  <body class="bg-light">
  
  <header>

    <!-- Inicio del Navbar.
      ========================================================= -->

      <?php
      include("plantillas/header.php");
      ?>

      <!----Barra de celulares-------------------------------------------------------------------------------------------------------->

</header>

   <!--Main---------------------------------------------------------------------------------------------------------------------------------->
   
    <main role="main">
      <div class="container col-11 py-5 mb-5">
        <div class="row">
              <div class="col-8">
                <div class="text center mb-5">
                  <h4 class="card-title py-1 mb-4">¿Cómo querés pagar?</h4>
                  <form action="php/eliminartarjetas.php" class="my-2 my-lg-0" method="post" enctype="multipart/form-data">
                  <div class="row align-items-center">
                    <div class="col-10">
                      <h6 class="card-title mb-2">Medios sugeridos</h6>
                     </div>
                    <div class="col-2 ml-auto">
                      <button class="btn btn-sm btn-danger mb-2" type="submit" data-toggle="tooltip" data-placement="left" title="Seleccione la tarjeta que quiera eliminar">Eliminar</button>
                    </div>
                  </div>
                  <ul class="list-group mb-5">

                  <?php 
                 
                        $consulta = "SELECT * FROM tarjetas WHERE Usuario = '$user'";
                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                        $row=mysqli_fetch_assoc($resultado);
                        if ($row>0){
                      
                        
                        
                    ?>
                  <?php 
               
                    $sql = "SELECT Tipo_tarjeta, Nro_tarjeta, Ultm4_tarjeta FROM tarjetas WHERE Usuario = '$user' AND Tipo_tarjeta = 'Tarjeta de Crédito'";
                    $resultado= $conexion ->query($sql);
                    while ($row = $resultado ->fetch_assoc()) {
                  ?>
                      <li class="list-group-item py-4 form-check form-check-inline">
                      <div class="row align-items-center">
                        <div class="col-7">
                        <label><input type="radio" class="form-check-input" name="checkbox[]" value="<?php echo $row['Nro_tarjeta']?>"/>
                        <input type="hidden" class="form-check-input" name="Ntarjeta4" value="<?php echo $row['Ultm4_tarjeta']?>"/>

                        &nbsp;<img src="img/otros/tarjeta2.png" width="45" height="45">&nbsp;&nbsp;&nbsp;<?php  echo $row ['Tipo_tarjeta']; ?>&nbsp;&nbsp;**** <?php  echo $row ['Ultm4_tarjeta']; ?></label>
                        </div>
                        <div class="col-2 ml-auto text-center">
                        <a href="pagofinalcredito.php" class="btn" role="button col-md-4">Pagar</a>
                        </div>
                      </div>
                      </li>
                      <?php 
                    }  
                  ?>

                  

                   <?php 
                  
                    $sql = "SELECT Tipo_tarjeta, Nro_tarjeta, Ultm4_tarjeta FROM tarjetas WHERE Usuario = '$user' AND Tipo_tarjeta = 'Tarjeta de Débito'";
                    $resultado= $conexion ->query($sql);
                    while ($row = $resultado ->fetch_assoc()) {
                  ?>
                      <li class="list-group-item py-4 form-check form-check-inline">
                      <div class="row align-items-center">
                        <div class="col-7">
                        <label><input type="radio" class="form-check-input" name="checkbox[]" value="<?php echo $row['Nro_tarjeta']?>"/>
                        <input type="hidden" class="form-check-input" name="Ntarjeta4" value="<?php echo $row['Ultm4_tarjeta']?>"/>
                        &nbsp;<img src="img/otros/tarjeta2.png" width="45" height="45">&nbsp;&nbsp;&nbsp;<?php  echo $row ['Tipo_tarjeta']; ?>&nbsp;&nbsp;**** <?php  echo $row ['Ultm4_tarjeta']; ?></label>
                        </div>
                        <div class="col-2 ml-auto text-center">
                        <a href="pagofinaldebito.php" class="btn" role="button col-md-4">Pagar</a>
                        </div>
                      </div>
                      </li>
                      <?php 
                    } } else {
                  ?>

                  <table class="table bg-white border">
                    <tbody>
                    <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>  
                      <td class="text-center py-5"><h2><font> Agrega una forma de pago</font></h2></td>   
                      <td class="text-center"></td>   
                      <td class="text-center"></td>
                    </tbody>   
                        
                  </table>  

                  <?php 
                    }  
                  ?>

                  </ul>
                 
                  <div class="mb-4"></div>
                  <h6 class="card-title mb-3">Otros medios</h6>
                  <ul class="list-group">
                    <li class="list-group-item py-4 form-check form-check-inline">
                      <div class="row align-items-center">
                        <div class="col-7">
                        <label class="form-check-label">&nbsp;<img src="img/otros/tarjeta1.png" width="45" height="45">&nbsp;&nbsp;&nbsp;Nueva tarjeta de Crédito</label>
                        </div>
                        <div class="col-2 ml-auto text-center">
                        <a href="registrotarjetacredito.php" class="btn" role="button col-md-4">Agregar</a>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item py-4 form-check form-check-inline">
                      <div class="row align-items-center">
                        <div class="col-7">
                        <label class="form-check-label">&nbsp;<img src="img/otros/tarjeta1.png" width="45" height="45">&nbsp;&nbsp;&nbsp;Nueva tarjeta de Débito</label>
                        </div>
                        <div class="col-2 ml-auto text-center">
                        <a href="registrotarjetadebito.php" class="btn" role="button col-md-4">Agregar</a>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                  
                </div>
                <div class="row">
                  <div class="col-2">
                    <a href="carrito.php" class="btn" role="button col-md-4">Volver</a>
                  </div>
                  <!--
                  <div class="col-2 ml-auto">
                    <button class="btn btn-primary" type="submit">Continuar</button>
                    </form>
                  </div>
                  -->
                </div>
              </div>
              <div class="col-md-4 ml-auto bg-white">
               <!-- <?php 
                  $sql = "SELECT Imagen FROM carrito WHERE Usuario = '$user'";
                  $resultado= $conexion ->query($sql);
                  while ($row = $resultado ->fetch_assoc()) {
                ?>
                  <div class="text-center py-2">
                  <p><img src="<?php echo $row ['Imagen'];?>" width="50" height="50"/></p>
                  </div>
                      
                <?php 
                 }  
                ?>-->


                <div class="py-4">
                  <h6 class="card-title py-2">Resumen de compra<hr></h6>
                  <?php 
                    $sql = "SELECT *, Imagen, Count(Cod_Producto) as Cod_Producto, SUM(Cantidad*Precio) as Total FROM carrito WHERE Usuario = '$user'";
                    $resultado= $conexion ->query($sql);
                    while ($row = $resultado ->fetch_assoc()) {
                  ?>
                    <div class="row">
                      <div class="col">
                        <label class="text-muted">Productos&nbsp;<span class="text-muted">(<?php  echo $row ['Cod_Producto']; ?>)</span></label>
                      </div>
                      <div class="col-4 ml-auto">
                        <p class="text-muted"><?php echo '$'.$row ['Total']; ?></p>
                      </div>
                    </div>
                    <hr class="py-1">
                    <div class="row">
                      <div class="col">
                        <h6 class="card-title py-1">Págas</h6>
                      </div>
                      <div class="col-4 ml-auto">
                        <h5><p class="text-dark"><?php echo '$'.$row ['Total']; ?></p></h5>
                      </div>
                    </div>
                  <?php 
                    }  
                  ?>
                </div>
              </div>
        
      </div><!-- /.row -->
    </main>

    <!--Footer---------------------------------------------------------------------------------------------------------------------------------->
    <footer>
      <?php
        include ("plantillas/footer.php")
      ?>
    </footer>
    
    <!--Fin del Footer--------------------------------------------------------------------------------------------------------------------->
  

    <!-- Codigos JavaScript.
    ========================================================= -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
    $(function () {
    $('[data-toggle="popover"]').popover()
    })
    </script>

    <script>
      // Select all elements with data-toggle="tooltips" in the document
      $('[data-toggle="tooltip"]').tooltip();

      // Select a specified element
      $('#myTooltip').tooltip();
    </script>



    <!-- Fin del JavaScript.
    ========================================================= -->

  </body>

</html>