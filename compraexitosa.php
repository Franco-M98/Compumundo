<?php
  //abrimos la sesión
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $user=$_SESSION['Usuario'];
  $nrocomprobante=$_SESSION['contador'];
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

    <title>Compra final &bull; Compumundo</title>

    <!-- CSS -->

    <link href="css/hoversito.css" rel="stylesheet" type="text/css" />
    <link href="css/tarjeta.css" rel="stylesheet" type="text/css" />
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >



    <!-- Codigos Bootstrap.
    ========================================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    
  </head>

  
  <body class="bg-light">
  
    <header>

    <?php
      include("plantillas/header.php");
    ?>

    </header>

  
   <!--Main---------------------------------------------------------------------------------------------------------------------------------->
   
    <main role="main">
    <form  action="php/eliminarcomprafinal.php"  method="post"  enctype="multipart/form-data" class="form-signin">

      <div class="container col-11 py-4 mb-5">
        <div class="row justify-content-center">
              
              <div class="col-md-4 bg-white">
                <div class="py-4">
                  <div class="text-center align-items-center">
                  <form  action="php/eliminarcomprafinal.php"  method="post"  enctype="multipart/form-data" class="form-signin">

                  <h6 class="card-title">Resumen de compra&nbsp;&nbsp;<img class="" src="img/otros/exito.png" width="30" height="30"><hr class="mb-3"></h6>
                  </div>
                  <?php 
                   

                    $sql = "SELECT Usuario, Tipo_tarjeta, Ultm4_tarjeta, Cod_seguridad FROM comprafinal WHERE Usuario = '$user' AND Cod_seguridad = Cod_seguridad AND Tipo_tarjeta = 'Tarjeta de Crédito' or Tipo_tarjeta = 'Tarjeta de Débito' Limit 1";
                    $resultado = mysqli_query($conexion, $sql) or die("error base de datos:". mysqli_error($conexion));
                    while ($row=mysqli_fetch_assoc($resultado)){ 
                    
                  ?>  
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="card-title py-1">Nro de tarjeta</h6>
                      </div>
                      <div class="col-3 ml-auto">
                        <p class="text-dark">****&nbsp;<?php echo $row ['Ultm4_tarjeta']; ?></p>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="card-title py-1">Forma de pago</h6>
                      </div>
                      <div class="col-5 ml-auto text-center">
                        <p class="text-"><?php echo $row ['Tipo_tarjeta']; ?></p>
                      </div>
                    </div>
                    
                    <?php 
                    }  
                  ?>
                  <hr class="mb-3">
                    <div class="row align-items-center">
                      <div class="col-2">
                        <h6 class="">Productos</h6>
                      </div>
                      <div class="col-2 ml-auto">
                        <h6 class="">Cant.</h6>
                      </div>
                      <div class="col-3 text-center">
                        <h6 class="">Precio</h6>
                      </div>
                    </div>
                    <form  action="php/eliminarcomrafinal.php"  method="post"  enctype="multipart/form-data" class="form-signin">

                    <?php 

           
                    $sql = "SELECT Usuario, Cod_Producto, Imagen, Producto, SUM(Cantidad) AS Cant,  SUM(Cantidad*Precio) as Total, Ultm4_tarjeta FROM comprafinal WHERE Usuario = '$user' AND Ultm4_tarjeta = Ultm4_tarjeta GROUP BY Cod_Producto";
                    $resultado = mysqli_query($conexion, $sql) or die("error base de datos:". mysqli_error($conexion));
                    while ($row=mysqli_fetch_assoc($resultado)){ 
                    ?>

                    <div class="row align-items-center">
                      <div class="col">
                      <input type="hidden" name="Usuario" value="<?php echo $row['Usuario']; ?>"/>
                        <label class="text-muted "><img src="<?php echo $row ['Imagen'];?>" width="40" height="40"/><?php echo $row ['Producto']; ?></label>
                      </div>
                      <div class="col-2 ml-auto text-center">
                        <label class="text-muted "><?php echo $row ['Cant']; ?></label>
                      </div>
                      <div class="col-3">
                        <p class="text-muted text-center"><?php echo '$'.$row ['Total']; ?></p>
                      </div>
                    </div>
                    <?php 
                    }  
                  ?>
                  <?php 
     
                      $consulta ="SELECT * , SUM(Cantidad) as Sumcantidad, SUM(Cantidad*Precio) as Total FROM comprafinal WHERE Usuario = '$user'";
                      $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                      while( $row = mysqli_fetch_assoc($resultado) ) { 
  
                    ?>
                    <hr class="py-1">
                    <div class="row">
                      <div class="col">
                        <h6 class="card-title py-1">Total</h6>
                      </div>
                      <div class="col-4 ml-auto text-center">
                        <h5><p class="text-dark"><?php echo '$'.$row ['Total']; ?></p></h5>
                      </div>
                    </div>

                    <?php 
                    }  
                  ?>
                  
                  
                </div>
              </div>
        </div>
          <div class="py-4">
            <div class="row justify-content-center">
              <div class="row">
                <p>                
                <a class="btn btn-dark text-white"  onclick="window.print()">Imprimir comprobante</a>
                <button class="btn btn-primary" id="limpiar" type="submit">Continuar</button>
                </form>  
                </p>
                </div>
              </div>
            </div>
          </div>
    
      </div><!-- /.row -->

    </main>
    
    <!--Footer---------------------------------------------------------------------------------------------------------------------------------->
    <div class="album py-5" style="background-color:#212121">  
          <footer id="Sucursal" class="container py-2">
            
            <div class="row">
              <div class="col-12 col-md">
                <img src="img/logooficial.png" width="70" height="70" class="rounded">
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
              </div>
              <div class="col-6 col-md text-muted">
                <b><h5><font face="Decorative">MENU PRINCIPAL</font></h4></b>
                <ul class="list-unstyled text-small">
                  <li><img src="img/Otros/Footer/informationgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#QuienesSomos?">Quiénes somos?</a></li>
                  <li><img src="img/Otros/Footer/homegris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#Inicio">Inicio</a></li>
                  <li><img src="img/Otros/Footer/ubicaciongris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#Ubicacion">Ubicación</a></li>
                  <li><img src="img/Otros/Footer/variassucursalesgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#Sucursales">Sucursales</a></li>
                </ul>
              </div>
              <div class="col-6 col-md text-muted">
               <b><h5><font face="Decorative">CATEGORIAS</font></h4></b>
                <div class="list-unstyled text-small">
                  <li><img src="img/Otros/Footer/celulargris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Celulares.php">Celulares</a></li>
                  <li><img src="img/Otros/Footer/notebookgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Notebooks.php">Notebooks</a></li>
                  <li><img src="img/Otros/Footer/televisiongris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Televisores.php">Televisores</a></li>
                  <li><img src="img/Otros/Footer/impresoragris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Impresoras.php">Impresoras</a></li>
                  <li><img src="img/Otros/Footer/auricularesgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Auriculares.php">Auriculares</a></li>
                </div>
              </div>
              <div class="col-6 col-md text-muted">
              <b><h5><font face="Decorative">CONTACTOS</font></h4></b>
                <ul class="list-unstyled text-small">
                  <li><img src="img/Otros/Footer/telefonogris.png" width="14" height="14">&nbsp;<a class="text-muted">0810-444-8330</a></li>
                  <li><img src="img/Otros/Footer/mailgris.png" width="14" height="14">&nbsp;<a class="text-muted">compumundo@gmail.com</a></li>
                  <li><img src="img/Otros/Footer/facebookgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="https://es-la.facebook.com/CompumundoArg/">Facebook</a></li>
                  <li><img src="img/Otros/Footer/instagramgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="https://www.instagram.com/compumundoarg/?hl=es-la">Instagram</a></li>
                </ul>
              </div>
            </div>

          </footer>
        </div>

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