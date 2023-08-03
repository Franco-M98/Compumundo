<?php
  error_reporting(0);
  session_start();
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

    <title>Compumundo</title>

    <!-- CSS -->
   
    <link href="css/movimientodeimagen.css" rel="stylesheet" type="text/css">
    <link href="css/hoversito.css" rel="stylesheet" type="text/css">
    <link href="css/estiloss.css" rel="stylesheet"  type="text/css" >
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >
    <link href="css/carritoo.css" rel="stylesheet"  type="text/css" >

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link href="album.css" rel="stylesheet">
    <!-- Codigos Bootstrap.
    ========================================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

  </head>

  <body>

    <header>

    <?php
    include ('plantillas/headerindex.php');
    ?>  
      
  </header>

  
    <!--------Comienzo de Main-------------------------------------------------------------------------------------------------------------->

    <main role="main">
      <div class="album py-5 b-4 bg-light"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Celulares/celularfondo.jpg" class="w-100" height="680">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-warning"><font face="Decorative">Celulares</font></h2>
                <h5>Conectate con las personas</p>
                <a href="Celulares.php" class="btn btn-warning mb-4">Ver producto</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Notebooks/notebookfondo.jpg" class="w-100" height="680">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-danger"><font face="Decorative">Notebooks</font></h2>
                <h5>La tecnología avanza</p>
                <a href="Notebooks.php" class="btn btn-danger mb-4">Ver producto</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Impresoras/impresorafondo.jpg" class="w-100" height="680">
              <div class="carousel-caption d-none d-md-block">
              <h2 class="text-primary"><font face="Decorative">Impresoras</font></h2>
                <h5>Mantenete al día</p>
                <a href="Impresoras.php" class="btn btn-primary btn-sm mb-4">Ver producto</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  
        <?php
              if (!isset($_SESSION['Usuario'])) 
              {
            ?> 
        
        <!--------Banner de QuienesSomos?------------------------------------------------------------------------------>


        <div class="album py-5 bg-light" id="QuienesSomos?">
          <div class="album py-2" id="altofondo"> 
            <i><h1 class="mb-2 py-3 text-white text-center">Quiénes somos?</h1></i>
          </div>
          <div data-target="#navbar-example2" data-offset="0">
            <div class="album">  
              <div class="container py-3 text-center">
                <div class="row align-items-center">
                  <div class="py-5 col-6 mx-auto col-md-6 order-md-2">
                    <img class="img-fluid mb-3 mb-md-0 rounded" src="img/compumundo.jpg" alt="" width="1240" height="200">
                  </div>
                  <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
                    <h1 class="mb-3 text-info">Compumundo</h1>
                    <p class="lead">
                    Es la empresa líder en comercialización de productos tecnológicos y servicios de asesoramiento postventa.
                    </p>
                    <p class="lead mb-4">
                    Con más de 17 años de historia y 40 sucursales en todo el país, es referentes en el mercado de tecnología. Cuenta con las principales marcas líderes y una amplia variedad de productos informáticos y tecnológicos.
                    </p>
                    <div class="d-flex flex-column flex-md-row lead mb-3">
                      <p><a href="Login.php" class="btn btn-info btn-lg text-white">Iniciar Sesión</a>
                      <!-- <a href="/docs/4.1/getting-started/introduction/" class="btn btn-primary btn-lg mb-3 mb-md-0 mr-md-3" onclick="">Iniciar Sesion</a> -->
                      <a href="RegistrodeUsuario.php" class="btn btn-outline-dark btn-bd-primary btn-lg mb-3 mb-md-0 mr-md-3">Crear Cuenta</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       <?php 
       }else{
         
     ?>

    <div class="album py-5 bg-light" id="QuienesSomos?">
          <div class="album py-2" id="altofondo"> 
            <i><h1 class="mb-2 py-3 text-white text-center">Quiénes somos?</h1></i>
          </div>
          <div data-target="#navbar-example2" data-offset="0">
            <div class="album">  
              <div class="container py-3 text-center">
                <div class="row align-items-center">
                  <div class="py-5 col-6 mx-auto col-md-6 order-md-2">
                    <img class="img-fluid mb-3 mb-md-0 rounded" src="img/compumundo.jpg" alt="" width="1240" height="200">
                  </div>
                  <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
                    <h1 class="mb-3 text-info">Compumundo</h1>
                    <p class="lead">
                    Es la empresa líder en comercialización de productos tecnológicos y servicios de asesoramiento postventa.
                    </p>
                    <p class="lead mb-4">
                    Con más de 17 años de historia y 40 sucursales en todo el país, es referentes en el mercado de tecnología. Cuenta con las principales marcas líderes y una amplia variedad de productos informáticos y tecnológicos.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php 
       }
         
     ?>
        <!--------Fin de Banner de QuienesSomos?------------------------------------------------------------------------------>

                   
        <!--------Banner de Inicio------------------------------------------------------------------------------------->

        <div class="album py-5 bg-light" id="Inicio">
          <div class="album py-2 bg-dark" id="altofondo"> 
            <i><h1 class="mb-2 py-3 text-white text-center">Inicio</h1></i>
          </div>
          
          <div class="container py-5">
            <div class="row">
              <div class="mb-2 col-6 col-lg-7 pr-1">
                <div style="background-color:#c6d5ea" class="banner">
                  <div class="banner-text p-3 p-lg-5">
                    <h2 class="mb-0">Celulares</h2>
                    <p style="color: #425c81" class="subtitle text-sm">Estar siempre conectados</p>
                  </div>
                  <div id="zoom" class="banner-bg text-center">
                    <a href="Celulares.php" class="stretched-link banner-link">
                      <img src="img/HuaweiP20Proazul.jpg" width="71%" class="img-fluid">
                    </a>
                  </div>
                </div>
              </div>
              <div class="mb-2 col-6 col-lg-5 pl-1">
                <div style="background-color:#eccf6f" class="banner">
                  <div class="banner-text p-3 p-lg-5">
                    <h2 class="mb-0">Notebooks</h2>
                    <p style="color: #94585e" class="subtitle text-sm">Dale un buen uso</p>
                  </div>
                  <div id="zoom" class="banner-bg text-center">
                    <a href="Notebooks.php" class="stretched-link banner-link">
                      <img src="img/notebookdellamarillo.jpg" width="100%" class="img-fluid">
                    </a>
                  </div>
                </div>
              </div>
              <div class="mb-2 col-6 col-lg-5 pr-1">
                <div style="background-color:#ece2d6" class="banner">
                  <div class="banner-text p-3 p-lg-5">
                    <h2 class="mb-0">Impresoras</h2>
                    <p style="color: #9e9056" class="subtitle text-sm">Imprime y sacale provecho</p>
                  </div>
                  <div id="zoom" class="banner-bg text-center">
                    <a href="Impresoras.php" class="stretched-link banner-link">
                      <img src="img/ImpEpsonEcoTankL1800piel.png"  width="80%"  class="img-fluid">
                    </a>
                  </div>
                </div>
              </div>
              <div class="mb-2 col-6  col-lg-7 pl-1">
                <div style="background-color:#c9f2e4" class="banner">
                  <div class="banner-text p-3 p-lg-5">
                    <h2 class="mb-0">Televisores</h2>
                    <p style="color: #9c5f8f" class="subtitle text-sm">Cada segundo vale la pena</p>
                  </div>
                  <div id ="zoom" class="banner-bg text-center">
                    <a href="Televisores.php" class="stretched-link banner-link">
                      <img src="img/TvSamsung55pverde.jpg" width="56%" class="img-fluid">
                    </a>
                  </div>
                </div>
              </div>
              <div class="mb-2 col-6 col-lg-7 pr-1">
                <div style="background-color:#c5f8fc" class="banner">
                  <div class="banner-text p-3 p-lg-5">
                    <h2 class="mb-0">Auriculares</h2>
                    <p style="color: #418a70" class="subtitle text-sm">Relaja y disfruta</p>
                  </div>
                  <div id ="zoom" class="banner-bg text-center">
                    <a href="Auriculares.php" class="stretched-link banner-link">
                      <img src="img/JBLceleste.png" width="70%" class="img-fluid">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--FindeBannerdeInicio--->

        <!--------Fin de Banner de Inicio------------------------------------------------------------------------------------->


        <!-- Container de marketing---------------------------------------------------------------------------------------------------->
        <?php
              if (!isset($_SESSION['Usuario'])) 
              {
            ?> 
        
          

   <!--------Sin Inicio de Sesión-------------------------------------------------------------------------------------------------------------------->  

        <div class="album py-5 bg-light">  

          <div class="container">

            <div class="row">
                <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                <span class="badge badge-success ml-1">Televisores</span>
                  <a href="TelevisoresLG.php" class="nav-link text-dark">
                
                    <?php 
                      include("conexion.php");
                      $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 3101";
                      $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                      while( $row = mysqli_fetch_assoc($resultado) ) {
                    ?>
                    <?php
                    include ('plantillas/card.php');
                      }
                    ?>
                </a>  
                </div>
              </div>
            </div>
            
            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-warning ml-1">Celulares</span>
                  <a href="CelularesHuawei.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1001";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-info ml-1">Auriculares</span>
                  <a href="AuricularesJBL.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 5001";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-danger ml-1">Notebooks</span>
                  <a href="NotebooksASUS.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 2101";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-warning ml-1">Celulares</span>
                  <a href="CelularesSamsung.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1301";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-success ml-1">Televisores</span>
                  <a href="TelevisoresSamsung.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 3201";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-primary ml-1">Impresoras</span>
                  <a href="ImpresorasHP.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 4201";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-info ml-1">Auriculares</span>
                  <a href="AuricularesSONY.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 5201";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-primary ml-1">Impresoras</span>
                  <a href="ImpresorasBrother.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 4101";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-warning ml-1">Celulares</span>
                  <a href="CelularesXiaomi.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1101";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                
                </div>
              </div>
            </div>

            <div class="col-3 mb-5">
              <div class="card mb-5">
                <div class="card-head">
                  <span class="badge badge-danger ml-1">Notebooks</span>
                  <a href="NotebooksDell.php" class="nav-link text-dark">

                  <?php 
                    include("conexion.php");
                    $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 2201";
                    $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                    while( $row = mysqli_fetch_assoc($resultado) ) {
                  ?>
                  <?php
                  include ('plantillas/card.php');
                    }
                  ?>
                  </a>
                
                </div>
              </div>
            </div>
              
            
            </div>
          </div>
        </div>

        <?php
        }else{
        ?>

   <!--------Con Inicio de Sesión-------------------------------------------------------------------------------------------------------------------->  
   <div class="album py-5 bg-light">  

    <div class="container">

      <div class="row">

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
            <span class="badge badge-success ml-1">Televisores</span>
              <a href="TelevisoresLG.php" class="nav-link text-dark">
            
                <?php 
                  include("conexion.php");
                  $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 3101";
                  $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                  while( $row = mysqli_fetch_assoc($resultado) ) {
                ?>
                <?php
                include ('plantillas/cardlogin.php');
                  }
                ?>
            </a>  
            </div>
          </div>
        </div>
        
        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-warning ml-1">Celulares</span>
              <a href="CelularesHuawei.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1001";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-info ml-1">Auriculares</span>
              <a href="AuricularesJBL.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 5001";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-danger ml-1">Notebooks</span>
              <a href="NotebooksASUS.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 2101";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-warning ml-1">Celulares</span>
              <a href="CelularesSamsung.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1301";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-success ml-1">Televisores</span>
              <a href="TelevisoresSamsung.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 3201";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-primary ml-1">Impresoras</span>
              <a href="ImpresorasHP.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 4201";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-info ml-1">Auriculares</span>
              <a href="AuricularesSONY.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 5201";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-primary ml-1">Impresoras</span>
              <a href="ImpresorasBrother.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 4101";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-warning ml-1">Celulares</span>
              <a href="CelularesXiaomi.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1101";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }
              ?>
              </a>
            
            </div>
          </div>
        </div>

        <div class="col-3 mb-5">
          <div class="card mb-5">
            <div class="card-head">
              <span class="badge badge-danger ml-1">Notebooks</span>
              <a href="NotebooksDell.php" class="nav-link text-dark">

              <?php 
                include("conexion.php");
                $consulta = "SELECT Cod_Producto, Imagen, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 2201";
                $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                while( $row = mysqli_fetch_assoc($resultado) ) {
              ?>
              <?php
              include ('plantillas/cardlogin.php');
                }}
              ?>
              </a>
            
            </div>
          </div>
        </div>
        
      
      </div>
    </div>
    </div>
   
  <!--Mapa de Ubicación---------------------------------------------------------------------------------------------------------------------------------->
      
     
        <div class="album py-5 bg-light" id="Ubicacion">
          <div class="album py-2 bg-dark" id="altofondo"> 
            <i><h1 class="mb-2 py-3 text-white text-center">Ubicación</h1></i>
          </div>
          <div class="container py-3 mb-5 justify-content-center">
          <div class="row py-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11706.463134240259!2d-60.67299203685958!3d-32.92780774732685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32542aee683e6bba!2sCompumundo!5e0!3m2!1ses!2sar!4v1542557234790" width="1100" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div> 
          </div> 
        </div>
        
        <div class="album py-5 bg-light" id="Sucursales">
          <div class="album py-2 bg-dark" id="altofondo"> 
            <i><h1 class="mb-2 py-3 text-white text-center">Sucursales</h1></i>
          </div>
          <div class="container py-3 mb-5">
            <nav class="navbar navbar-expand-lg bg-white">
              <img src="img/Otros/Menu/variassucursales.png" width="50" height="48">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="nav collapse navbar-collapse justify-content-md-center" role="tablist" >
                <a class="nav-item nav-link text-dark" id="negro" data-toggle="tab" href="#Pagina1" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Otros/Menu/variassucursales.png" width="30" height="30">&nbsp;<b>Rosario</b></a>
                <a class="nav-item nav-link text-dark" id="negro" data-toggle="tab" href="#Pagina2" role="tab" aria-controls="HuaweiMate10" aria-selected="false"><img src="img/Otros/Menu/variassucursales.png" width="30" height="30">&nbsp;<b>Santa Fe</b></a>
                <a class="nav-item nav-link text-dark" id="negro" data-toggle="tab" href="#Pagina3" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Otros/Menu/variassucursales.png" width="30" height="30">&nbsp;<b>Buenos Aires</b></a>
                <a class="nav-item nav-link text-dark" id="negro" data-toggle="tab" href="#Pagina4" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="img/Otros/Menu/variassucursales.png" width="30" height="30">&nbsp;<b>Prov. Cordoba</b></a>
              </div>
              <img src="img/Otros/Menu/variassucursales.png" width="50" height="48">
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="Pagina1" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row py-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d109767.84205749727!2d-60.70160187928721!3d-32.921871021983236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scompumundo%20sucursales%20rosario!5e0!3m2!1ses!2sar!4v1582406630130!5m2!1ses!2sar" width="1100" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Pagina2" role="tabpanel" aria-labelledby="HuaweiMate10">
                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row py-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27182.485835750045!2d-60.708862881518506!3d-31.61164563910336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5075f1e209d13%3A0x957c53acc28da19c!2sCompumundo!5e0!3m2!1ses!2sar!4v1582406799414!5m2!1ses!2sar" width="1100" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Pagina3" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row py-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d210101.4551215872!2d-58.606291507771004!3d-34.63360376642546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scompumundo%20sucursales%20buenos%20aires!5e0!3m2!1ses!2sar!4v1582401040149!5m2!1ses!2sar" width="1100" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="Pagina4" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row py-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d95763.43244359989!2d-64.25616949750734!3d-31.38985281116515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scompumundo%20sucursales%20cordoba!5e0!3m2!1ses!2sar!4v1582401210944!5m2!1ses!2sar" width="1100" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
   
  </main>

        <!--Footer---------------------------------------------------------------------------------------------------------------------------------->
    
        
        <footer>
      <?php
        include ("plantillas/footer.php");
        
      ?> 
    </footer>

    

    <!--Fin del Footer--------------------------------------------------------------------------------------------------------------------->


    <!-- Codigos JavaScript.
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>


  </body>

</html> 