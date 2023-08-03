<?php
  //abrimos la sesión
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $user=$_SESSION['Usuario'];
  include("php/conexion.php");
 
  /*
  $nrocomprobante=$_SESSION['contador'];
  include("php/conexion.php");*/

  if (!isset($_SESSION['Usuario'])) 
  {
    header("location:Index.php"); 
  }
   
  /*
  if( isset( $_SESSION['contador'] ) ) {
      $_SESSION['contador'] += 1;
  }else {
      $_SESSION['contador'] = 1;
  }
  */


?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logooficial.png">

    <title>Forma de pago | Crédito &bull; Compumundo</title>

    <!-- CSS -->

    <link href="css/hoversito.css" rel="stylesheet" type="text/css" />
    <link href="css/tarjeta.css" rel="stylesheet" type="text/css" />
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >


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

  <!-- Inicio del Navbar.
  ========================================================= -->

  
  <header>

    <?php
      include("plantillas/header.php");
    ?>

  </header>

  <!--Main---------------------------------------------------------------------------------------------------------------------------------->
   
    <main role="main">

      <div class="container col-11 py-5 mb-5">
        <div class="row justify-content-end">
              <div class="col-8">
                  <div class="text center mb-5">
                    <h4 class="card-title py-1 mb-4">¿Cómo querés pagar?</h4>
                    <form  action="php/validacioncompra.php"  method="post"  enctype="multipart/form-data" class="form-signin">

                    <ul class="list-group mb-5">
                    <?php 
                    
                  	$sql = "SELECT Usuario, Tipo_tarjeta, Nro_tarjeta, Ultm4_tarjeta, Cod_seguridad FROM tarjetas WHERE Usuario = '$user' AND Tipo_tarjeta = 'Tarjeta de Débito' ";
                    $resultado= $conexion ->query($sql);
                    while ($row = $resultado ->fetch_assoc()) {

                  ?>
                   
                      <li class="list-group-item py-4 form-check form-check-inline">
                      <div class="row align-items-center">
                        <div class="col-7">
                        <input type="hidden" name="Usuario" value="<?php echo $row['Usuario']; ?>"/>
                        <input type="hidden" name="tipodetarjeta" value="<?php echo $row['Tipo_tarjeta']; ?>"/>
                        <input type="hidden" name="Ntarjeta" value="<?php echo $row['Nro_tarjeta']; ?>"/>
                        <input type="hidden" name="dadsa" value="<?php echo $row['Ultm4_tarjeta']; ?>"/>
                        <input type="hidden" name="seguridad" value="<?php echo $row['Cod_seguridad']; ?>"/>
                        <label>&nbsp;<img src="img/otros/tarjeta2.png" width="45" height="45">&nbsp;&nbsp;&nbsp;<?php  echo $row ['Tipo_tarjeta']; ?>&nbsp;&nbsp;**** <?php  echo $row ['Ultm4_tarjeta']; ?></label>
                        </div>
                        <div class="col-2 ml-auto text-center">
                        <a href="formadepago.php" class="btn" role="button col-md-4">Modidifcar</a>
                        </div>
                      </div>
                      </li>
                    <?php 
                    }  
                  ?>
                  </ul> 
                    <h4 class="card-title py-1 mb-4">Ingrese los datos para continuar</h4>
                      <div class="modal-content col-12 bg-ligt">
                        <div class="row">
                          <div class="col-md-6 py-4 bg-">
                            <div class="form-group col-sm-12">
                            <h6 class="form-check-label py-2 mb-4">Ingresa el código de seguridad que se encuentra en el dorso de la tarjeta para realizar la compra.</h6>
                            <label class="form-check-label mb-2">Código de seguridad</label>
                            <input type="text" class="form-control col-8 mb-5" placeholder="Últimos 3 números" name="seguridad1" maxlength="3" pattern="[0123456789]{3}" title="Ingrese números" required autofocus />
                            </div>
                          </div>
                          <div class="col-6 ml-auto bg-dak py-2 w-100">
                            <img class="w-100" src="img/otros/tarjetaeditabledorso3.jpg">
                          </div>
                        </div>
                      </div>
                    
                  </div>
                <div class="row">
                  <div class="col-2">
                    <a href="formadepago.php" class="btn" role="button col-md-4">Volver</a>
                  </div>
                  <div class="col-2 ml-auto">
                    <button class="btn btn-primary" id="limpiar" type="submit">Pagar</button>
                    </form>
                  </div>
                </div>
              </div>
              <nav class="col-md-4 py-5 ml-auto bg-white">
                <div class="py-4">
                  <h6 class="card-title py-2">Resumen de compra<hr></h6>
                  <?php 
         
                    $sql = "SELECT *, Count(Cod_Producto) as Cod_Producto, SUM(Cantidad*Precio) as Total FROM carrito WHERE Usuario = '$user'";
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

    <script>
      function kotoba() {
        $("#result").val($("#write").val().length); //Detectamos los Caracteres del Input
        $("#result").addClass('mui--is-not-empty'); //Agregamos la Clase de Mui para decir que el input no esta vacio y que suba el Texto del Label(Como cuando haces Focus)
      } //Aqui termina la Funcion
    </script>

    <script>
      function kotoba1() {
        $("#result1").val($("#write1").val().length); //Detectamos los Caracteres del Input
        $("#result1").addClass('mui--is-not-empty'); //Agregamos la Clase de Mui para decir que el input no esta vacio y que suba el Texto del Label(Como cuando haces Focus)
      } //Aqui termina la Funcion
    </script>


    <!-- Fin del JavaScript.
    ========================================================= -->

  </body>

</html>