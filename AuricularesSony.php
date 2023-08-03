<?php
  //abrimos la sesión
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $user=$_SESSION['Usuario'];
  include("php/conexion.php");
    

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logooficial.png">

    <title>Auriculares | Sony &bull; Compumundo</title>

    <!-- CSS -->
    
    <link href="css/movimientodeimagen.css" rel="stylesheet" type="text/css">
    <link href="css/hoversito.css" rel="stylesheet" type="text/css">
    <link href="css/estiloss.css" rel="stylesheet"  type="text/css" >
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >
    

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link href="album.css" rel="stylesheet">


    <!-- Codigos Bootstrap.
    ========================================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  </head>
  
  <!-- Inicio del Navbar.
  ========================================================= -->

  <body>

  <header>

      <?php
        include ("plantillas/header.php");
      ?>
  
      <!----Modelo-------------------------------------------------------------------------------------------------------->
      
    <nav class="navbar navbar-expand-lg bg-light">
      <a href="#" aria-label="Product">
            <img src="img/Auriculares/Sony/SonyLogoGris.jpg" width="50" height="48">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
      <div class="nav collapse navbar-collapse justify-content-md-center" role="tablist" >
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellInspiron" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Auriculares/Sony/MDREX110LP/SonyMDREX110LPGris.jpg" width="30" height="30">&nbsp;Sony MDR-EX110LP</a>
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellLatitude" role="tab" aria-controls="HuaweiMate10" aria-selected="false"><img src="img/Auriculares/Sony/MDR10RBT/SonyMDR10RBTGris.jpg" width="30" height="30">&nbsp;Sony MDR-10RBT</a>
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellPrecision" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Auriculares/Sony/MDRV55/SonyMDRV55Gris.jpg" width="30" height="30">&nbsp;Sony MDR-V55</a>
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellVostro" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="img/Auriculares/Sony/MDRZ1R/SonyMDRZ1RGris.jpg" width="30" height="30">&nbsp;Sony MDR-Z1R</a>
      </div>
    </nav>
  </header>

  <main role="main">
      
    <div class="container py-3 mb-5">

    <?php
      if (!isset($_SESSION['Usuario'])) 
      {
    ?> 

<!--------Sin Inicio de Sesión-------------------------------------------------------------------------------------------------------------------->

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="DellInspiron" role="tabpanel" aria-labelledby="nav-home-tab">
              

                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row">
                      <div class="bg-light breadcrumb-bar">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sony MDR-EX110LP</li>
                          </ol>
                        </nav>
                      </div>
                      <!----------------------------------------------------------------------------------------------------------->
                      <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5201";
                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                        while( $row = mysqli_fetch_assoc($resultado) ){
                      ?>

                      <!--------------------------------------------------------------------------------------------------------------->   
                      <?php
                        include ("plantillas/caratula.php");
                        }
                      ?>

                    </div>
                  </div>
                </div>
            
            </div>

          <div class="tab-pane fade" id="DellLatitude" role="tabpanel" aria-labelledby="HuaweiMate10">
      
                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row">
                      <div class="bg-light breadcrumb-bar">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sony MDR-10RBT</li>
                          </ol>
                        </nav>
                      </div>
                      <!----------------------------------------------------------------------------------------------------------->
                      <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5202";
                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                        while( $row = mysqli_fetch_assoc($resultado) ){
                      ?>

                      <!--------------------------------------------------------------------------------------------------------------->   
                      <?php
                        include ("plantillas/caratula.php");
                        }
                      ?>

                    </div>
                  </div>
                </div>
                  
          </div>


          <div class="tab-pane fade" id="DellPrecision" role="tabpanel" aria-labelledby="nav-contact-tab">
      
              <div class="row justify-content-center mb-4">
                <div class="col-xl-10 col-lg-11">
                  <div class="row">
                    <div class="bg-light breadcrumb-bar">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                          <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Sony MDR-V55</li>
                        </ol>
                      </nav>
                    </div>
                    <!----------------------------------------------------------------------------------------------------------->
                    <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5203";
                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                        while( $row = mysqli_fetch_assoc($resultado) ){
                      ?>

                    <!--------------------------------------------------------------------------------------------------------------->   
                    <?php
                        include ("plantillas/caratula.php");
                        }
                    ?>

                  </div>
                </div>
              </div>
      
          </div>
        <div class="tab-pane fade" id="DellVostro" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="row justify-content-center mb-4">
              <div class="col-xl-10 col-lg-11">
                <div class="row">
                  <div class="bg-light breadcrumb-bar">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sony MDR-Z1R</li>
                      </ol>
                    </nav>
                  </div>
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5204";
                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                        while( $row = mysqli_fetch_assoc($resultado) ){
                      ?>

                  <!--------------------------------------------------------------------------------------------------------------->   
                  <?php
                    include ("plantillas/caratula.php");
                    }
                  ?>
                </div>
              </div>
            </div>
        </div>

       
                      
      </div>

    <?php
      }
      else{
    ?>

  <!--------Con Inicio de Sesión-------------------------------------------------------------------------------------------------------------------->
  
  <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="DellInspiron" role="tabpanel" aria-labelledby="nav-home-tab">
          
          <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

            <div class="row justify-content-center mb-4">
              <div class="col-xl-10 col-lg-11">
                <div class="row">
                  <div class="bg-light breadcrumb-bar">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <p><li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sony MDR-EX110LP</li>
                        </p>
                      </ol>
                    </nav>
                  </div>
                  
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
        
                    $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5201";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ){
                  ?>

                  <!--------------------------------------------------------------------------------------------------------------->   
                  <?php
                    include ("plantillas/caratulalogin.php");
                    }
                  ?>

                </div>
              </div>
            </div>
          </form>
        </div>

      <div class="tab-pane fade" id="DellLatitude" role="tabpanel" aria-labelledby="DellLatitude">
  
        <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

            <div class="row justify-content-center mb-4">
              <div class="col-xl-10 col-lg-11">
                <div class="row">
                  <div class="bg-light breadcrumb-bar">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sony MDR-10RBT</li>
                      </ol>
                    </nav>
                  </div>
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
                   
                    $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5202";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ){
                  ?>

                  <!--------------------------------------------------------------------------------------------------------------->   
                  <?php
                    include ("plantillas/caratulalogin.php");
                    }
                  ?>

                </div>
              </div>
            </div>
          </form>
              
      </div>


      <div class="tab-pane fade" id="DellPrecision" role="tabpanel" aria-labelledby="nav-contact-tab">
  
        <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

          <div class="row justify-content-center mb-4">
            <div class="col-xl-10 col-lg-11">
              <div class="row">
                <div class="bg-light breadcrumb-bar">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                      <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Sony MDR-V55</li>
                    </ol>
                  </nav>
                </div>
                <!----------------------------------------------------------------------------------------------------------->
                <?php
              
                  $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5203";
                  $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                  while( $row = mysqli_fetch_assoc($resultado) ){
                ?>

                <!--------------------------------------------------------------------------------------------------------------->   
                <?php
                  include ("plantillas/caratulalogin.php");
                  }
                ?>

              </div>
            </div>
          </div>
        </form>
  
      </div>
  <div class="tab-pane fade" id="DellVostro" role="tabpanel" aria-labelledby="nav-contact-tab">
    <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

      <div class="row justify-content-center mb-4">
        <div class="col-xl-10 col-lg-11">
          <div class="row">
            <div class="bg-light breadcrumb-bar">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                  <li class="breadcrumb-item"><a class="text-info" href="Auriculares.php">Auriculares</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sony MDR-Z1R</li>
                </ol>
              </nav>
            </div>
            <!----------------------------------------------------------------------------------------------------------->
            <?php
       
              $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5204";
              $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
              while( $row = mysqli_fetch_assoc($resultado) ){
            ?>

            <!--------------------------------------------------------------------------------------------------------------->   
            <?php
             include ("plantillas/caratulalogin.php");
             }
            ?>
          </div>
        </div>
      </div>
    </form>  
  
  
  </div>

 

                
</div>
  
  
  <?php 
   } 
  ?>


</div>
</main>


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
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>

    <script>
      // Select all elements with data-toggle="tooltips" in the document
      $('[data-toggle="tooltip"]').tooltip();

      // Select a specified element
      $('#myTooltip').tooltip();
    </script>
    
    <script>
      function limpiarFormulario() {
        document.getElementById("").reset();
      }
    </script>

    <script>
      // Select all elements with data-toggle="tooltips" in the document
      $('[data-toggle="tooltip"]').tooltip();

      // Select a specified element
      $('#myTooltip').tooltip();
    </script>


  </body>

</html>