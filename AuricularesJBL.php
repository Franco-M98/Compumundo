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

    <title>Auriculares | JBL &bull; Compumundo</title>

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

      <!----Barra de celulares-------------------------------------------------------------------------------------------------------->
      
      
    <nav class="navbar navbar-expand-lg bg-light">
      <a href="#" aria-label="Product">
            <img src="img/Auriculares/JBL/JBLLogoGris.jpg" width="50" height="48">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
      <div class="nav collapse navbar-collapse justify-content-md-center" role="tablist" >
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellInspiron" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Auriculares/JBL/ReflectMiniBT/JBLReflectMiniBTGris.jpg" width="30" height="30">&nbsp;JBL Reflect Mini BT</a>
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellLatitude" role="tab" aria-controls="HuaweiMate10" aria-selected="false"><img src="img/Auriculares/JBL/T110/JBLT110Gris.jpg" width="30" height="30">&nbsp;JBL T110</a>
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellPrecision" role="tab" aria-controls="nav-home" aria-selected="false"><img src="img/Auriculares/JBL/SynchrosE30/JBLSynchrosE30Gris.jpg" width="30" height="30">&nbsp;JBL Synchros E30</a>
        <a class="nav-item nav-link text-dark" id="celeste" data-toggle="tab" href="#DellVostro" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="img/Auriculares/JBL/Tune500BT/JBLTune500BTGris.jpg" width="30" height="30">&nbsp;JBL Tune 500BT</a>
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
                            <li class="breadcrumb-item active" aria-current="page">JBL Reflect Mini BT</li>
                          </ol>
                        </nav>
                      </div>
                      <!----------------------------------------------------------------------------------------------------------->
                      <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5001";
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
                            <li class="breadcrumb-item active" aria-current="page">JBL T110</li>
                          </ol>
                        </nav>
                      </div>
                      <!----------------------------------------------------------------------------------------------------------->
                      <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5002";
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
                          <li class="breadcrumb-item active" aria-current="page">JBL Synchros E30</li>
                        </ol>
                      </nav>
                    </div>
                    <!----------------------------------------------------------------------------------------------------------->
                    <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5003";
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
                        <li class="breadcrumb-item active" aria-current="page">JBL Tune 500BT</li>
                      </ol>
                    </nav>
                  </div>
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
                      
                        $consulta = "SELECT Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos WHERE  Cod_Producto = 5004";
                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                        while( $row = mysqli_fetch_assoc($resultado) ){
                      ?>

                  <!--------------------------------------------------------------------------------------------------------------->   
                  <div class="card col-sm-12 shadow-lg">
                        <div class="row">
                            <div id="" class="col-sm-6 text-center py-2">
                              <img src="<?php echo $row ['Imagen']; ?>"  width="400" height="400">
                            </div>
                            <div class="col-4 col-sm-6">
                              <div class="card-body">
                                <h3><p class="d-inline-block py-2 mb-2 text-muted"><?php echo $row ['Producto']; ?></p><img class="" src="<?php echo $row ['Marca']; ?>" width="50" height="50"></h3>
                                <div class="form-row">
                                  <div class="col-10 mb-2">
                                    <p class="card-text text-muted"><?php echo ''.$row ['Descripcion']; ?><p>
                                  </div>
                                  <p class="col-form-label card-text py-2">Cantidad:</p>
                                  <div class="col-sm-5 mb-4">
                                    <input type="number" class="form-control bg-light text-center col-sm-8" name="Cantidad" onclick="limpiarFormulario()" name="Cantidad" required/>
                                  </div>
                                  <div class="col-10 py-1">
                                    <h4 class="card-text text-info"><font face="Decorative">Inicie sesión o registrese, para ver el precio del producto.</font></h4>
                                  </div>
                                </div>
                                <hr class="form-row col-10 mb-3">
                                <div class="form-row">
                                  <p><a href="Login.php" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Para agregar productos al carrito inicie sesión sino registrese." role="button">Agregar al carrito</a>
                                  <a href="Login.php" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Para comprar productos del carrito inicie sesión sino registrese." role="button">Comprar carrito</a></p>
                                </div>  
                                  
                              </div>    
                            </div>    
                                <?php
                                }
                                ?> 
                    </div>
                  </div>
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
                        <li class="breadcrumb-item active" aria-current="page">JBL Reflect Mini BT</li>
                        </p>
                      </ol>
                    </nav>
                  </div>
                  
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
        
                    $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5001";
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
                        <li class="breadcrumb-item active" aria-current="page">JBL T110</li>
                      </ol>
                    </nav>
                  </div>
                  <!----------------------------------------------------------------------------------------------------------->
                  <?php
          
                    $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5002";
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
                      <li class="breadcrumb-item active" aria-current="page">JBL Synchros E30</li>
                    </ol>
                  </nav>
                </div>
                <!----------------------------------------------------------------------------------------------------------->
                <?php
         
                  $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5003";
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
									<li class="breadcrumb-item active" aria-current="page">JBL Tune 500B</li>
                </ol>
              </nav>
            </div>
            <!----------------------------------------------------------------------------------------------------------->
            <?php
              
              $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Marca, Descripcion, Cantidad, Precio FROM productos, registrodeusuario WHERE Usuario = '$user' AND Cod_Producto = 5004";
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

    <!----Footer--------------------------------------------------------------------------------------------------------------------->

    <?php
      include ("plantillas/footer.php")
    ?>

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