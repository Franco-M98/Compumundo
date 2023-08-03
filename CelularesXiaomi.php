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

    <title>Celulares | Xiaomi &bull; Compumundo</title>

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

    <!-- Inicio del Navbar.
      ========================================================= -->

      <?php
      include("plantillas/header.php");
      ?>
  
      <!----Modelo-------------------------------------------------------------------------------------------------------->
     
    
    <nav class="navbar navbar-expand-lg bg-light">
      <a href="#" aria-label="Product">
            <img src="img/Celulares/Xiaomi/XiaomiLogoGris.jpg" width="50" height="48">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

      <div class="nav collapse navbar-collapse justify-content-md-center" id="nav-tab" role="tablist">
        <a class="nav-item nav-link text-dark active" id="amarillo" data-toggle="tab" href="#RedmiNote8" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Celulares/Xiaomi/RedmiNote8/RedmiNote8Gris.jpg" width="30" height="30"> Redmi Note 8</a>
        <a class="nav-item nav-link text-dark" id="amarillo" data-toggle="tab" href="#RedmiNote8Pro" role="tab" aria-controls="HuaweiMate10" aria-selected="false"><img src="img/Celulares/Xiaomi/RedmiNote8Pro/RedmiNote8ProGris.png" width="30" height="30"> Redmi Note 8 Pro</a>
        <a class="nav-item nav-link text-dark" id="amarillo" data-toggle="tab" href="#Mi9Lite" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Celulares/Xiaomi/Mi9Lite/Mi9LiteGris.png" width="30" height="30">Mi 9 Lite</a>
        <a class="nav-item nav-link text-dark" id="amarillo" data-toggle="tab" href="#Mi9TPro" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="img/Celulares/Xiaomi/Mi9TPro/Mi9TProGris.png" width="30" height="30">Mi 9T Pro</a>
        <a class="nav-item nav-link text-dark" id="amarillo" data-toggle="tab" href="#MiNote10" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="img/Celulares/Xiaomi/MiNote10/MiNote10Gris.png" width="30" height="30">Mi Note 10</a>
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
            <div class="tab-pane fade show active" id="RedmiNote8" role="tabpanel" aria-labelledby="nav-home-tab">
              

                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row">
                      <div class="bg-light breadcrumb-bar">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Redmi Note 8</li>
                          </ol>
                        </nav>
                      </div>
                      <!----------------------------------------------------------------------------------------------------------->
                      <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 1101";
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

          <div class="tab-pane fade" id="RedmiNote8Pro" role="tabpanel" aria-labelledby="HuaweiMate10">
      
                <div class="row justify-content-center mb-4">
                  <div class="col-xl-10 col-lg-11">
                    <div class="row">
                      <div class="bg-light breadcrumb-bar">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                            <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Redmi Note 8 Pro</li>
                          </ol>
                        </nav>
                      </div>
                      <!----------------------------------------------------------------------------------------------------------->
                      <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 1102";
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


          <div class="tab-pane fade" id="Mi9Lite" role="tabpanel" aria-labelledby="nav-contact-tab">
      
              <div class="row justify-content-center mb-4">
                <div class="col-xl-10 col-lg-11">
                  <div class="row">
                    <div class="bg-light breadcrumb-bar">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                          <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Mi 9 Lite</li>
                        </ol>
                      </nav>
                    </div>
                    <!----------------------------------------------------------------------------------------------------------->
                    <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 1103";
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
        <div class="tab-pane fade" id="Mi9TPro" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="row justify-content-center mb-4">
              <div class="col-xl-10 col-lg-11">
                <div class="row">
                  <div class="bg-light breadcrumb-bar">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Mi 9T Pro</li>
                      </ol>
                    </nav>
                  </div>
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 1104";
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

        <div class="tab-pane fade" id="MiNote10" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="row justify-content-center mb-4">
              <div class="col-xl-10 col-lg-11">
                <div class="row">
                  <div class="bg-light breadcrumb-bar">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mi Note 10</li>
                      </ol>
                    </nav>
                  </div>
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 1105";
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
        <div class="tab-pane fade show active" id="RedmiNote8" role="tabpanel" aria-labelledby="nav-home-tab">
          
          <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

            <div class="row justify-content-center mb-4">
              <div class="col-xl-10 col-lg-11">
                <div class="row">
                  <div class="bg-light breadcrumb-bar">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <p><li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Redmi Note 8</li>
                        </p>
                      </ol>
                    </nav>
                  </div>
                  
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
                  
                    $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 1101";
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

      <div class="tab-pane fade" id="RedmiNote8Pro" role="tabpanel" aria-labelledby="HuaweiMate10">
  
        <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

            <div class="row justify-content-center mb-4">
              <div class="col-xl-10 col-lg-11">
                <div class="row">
                  <div class="bg-light breadcrumb-bar">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Redmi Note 8 Pro</li>
                      </ol>
                    </nav>
                  </div>
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
                  
                    $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 1102";
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


      <div class="tab-pane fade" id="Mi9Lite" role="tabpanel" aria-labelledby="nav-contact-tab">
  
        <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

          <div class="row justify-content-center mb-4">
            <div class="col-xl-10 col-lg-11">
              <div class="row">
                <div class="bg-light breadcrumb-bar">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                      <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Mi 9 Lite</li>
                    </ol>
                  </nav>
                </div>
                <!----------------------------------------------------------------------------------------------------------->
                <?php
                
                  $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 1103";
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
  <div class="tab-pane fade" id="Mi9TPro" role="tabpanel" aria-labelledby="nav-contact-tab">
    <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

      <div class="row justify-content-center mb-4">
        <div class="col-xl-10 col-lg-11">
          <div class="row">
            <div class="bg-light breadcrumb-bar">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                  <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Mi 9T Pro</li>
                </ol>
              </nav>
            </div>
            <!----------------------------------------------------------------------------------------------------------->
            <?php
            
              $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 1104";
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

  <div class="tab-pane fade" id="MiNote10" role="tabpanel" aria-labelledby="nav-contact-tab">

    <form  action="php/validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin">

      <div class="row justify-content-center mb-4">
        <div class="col-xl-10 col-lg-11">
          <div class="row">
            <div class="bg-light breadcrumb-bar">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-dark" href="Index.php">Inicio</a></li>
                  <li class="breadcrumb-item"><a class="text-warning" href="Celulares.php">Celulares</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Mi Note 10</li>
                </ol>
              </nav>
            </div>
            <!----------------------------------------------------------------------------------------------------------->
            <?php
            
              $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 1105";
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

  <!-----Footer--------------------------------------------------------------------------------------------------------------------->
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