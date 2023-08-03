<?php
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $_SESSION['Cantidad'];
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo_compumundo.jpg">

    <title>Compumundo</title>

    <!-- CSS -->
   
    <link href="css/hover.css" rel="stylesheet" type="text/css">
    

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


      <div class="panel panel-default">

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> 
          <h1 class="navbar-brand" href=""><img src="img/logo_compumundo.jpg" width="30" height="30"  class="rounded"> Compumundo</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#inicio">Inicio</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#ubicacion">Ubicación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sucursales</a>
              </li>
              <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="shopping-cart"></span>Celulares</a>
                
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                
                  <ul class="navbar-nav mr-auto">

                    <li class="nav-item text-warning">  
                      <a class="dropdown-item-text text-center">Huawei</a>
                      <hr class="alert-warning">
                      <a class="dropdown-item" href="#">Huawei Mate 9</a> 
                      <a class="dropdown-item" href="#">Huawei Mate 10</a>
                      <a class="dropdown-item" href="#">Huawei Mate 10 Pro</a> 
                      <a class="dropdown-item" href="#">Huawei P20 </a>
                      <a class="dropdown-item" href="#">Huawei P20 Pro</a>   
                    </li>

                    <li class="nav-item text-danger">  
                      <a class="dropdown-item-text text-center">LG</a>
                      <hr class="alert-danger">
                      <a class="dropdown-item" href="#">LG</a>
                      <a class="dropdown-item" href="#">LG</a>
                    </li>
                    
                    <li class="nav-item text-success">
                    <a class="dropdown-item-text text-center">Motorola</a>
                    <hr class="alert-success">
                    <a class="dropdown-item" href="#">Motorola</a>
                    <a class="dropdown-item" href="#">Motorola</a>
                    </li>

                    <li class="nav-item text-primary">
                    <a class="dropdown-item-text text-center">Samsung</a>
                    <hr class="alert-primary">
                    <a class="dropdown-item" href="#">Motorola</a>
                    <a class="dropdown-item" href="#">Motorola</a>
                    </li>

                    <li class="nav-item text-info">
                    <a class="dropdown-item-text text-center">Sony</a>
                    <hr class="alert-info">
                    <a class="dropdown-item" href="#">Sony</a>
                    <a class="dropdown-item" href="#">Sony</a>
                    </li>

                    <li>
                    <img src="img/personastelefono.jpg" width="300" height="300">
                    </li>

                    
                  </ul>
                  
                </div>
              </li>
            </ul>
            <ul class="navbar-nav">
                
                <!-- Button trigger modal -->
               
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light nav-link btn btn-outline-success my-2 my-sm-0" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo "'$destino'" ?>" width="20" height="20"><?php echo $_SESSION['Usuario'] ?></a>
                  <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="#"><img class="md-2"  src="img/utente.jpg" width="30" height="30">Mi cuenta</a>
                    <a class="dropdown-item" href= <?php echo 'php/salir.php' ?> >Cerrar sesión</a>
                    
                  </div>
                </li>

                <!-- Button trigger modal -->
                              
                        
                    
                  <!-- Modal de Crear Cuenta ----------------------------------------------------------------------------------------------------->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" id="exampleModalLabel">Registro de Usuario</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                    

                              <!------------Login---------------------------------------------------------------------------------------------------->
                        
                              <form  action="guardarimagen.php"  method="post"  enctype="multipart/form-data" class="form-signin text-center">
                                <img src= <?php echo"'$destino'" ?> width="50" height="70"/>
                                <img  src="img/utente.jpg" width="50" height="70">
                                <hr>
                                <h6> DATOS DE USUARIO  </h6>
                                <hr>
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Usuario:</label>
                                  <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['Usuario'] ?>">
                                  </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <input type="submit" value="subir" class="btn btn-primary"/>
                                                    
                              </form>
                            </div>
                          </div>
                        </div> 
                      </div>

        
                      <!--------Fin del Modal---------------------------------------------------------->
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="badge btn-primary">42</span><img src="img/carrito.png" width="20" height="20" longdesc="img/carrito.png" ></a>
                </li>
                
            </ul>
          </div>
        </nav>
      </div>
      
    </header>
    
    <!--------Fin del Navbar-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    

    <main role="main">

        <form  action="validaciondeingreso.php"  method="post"  enctype="multipart/form-data" class="form-signin text-center">
       
      

            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
            <div class="album py-5 bg-light">  
      
                <div class="container py-5">
            
                    <div class="card">
                        <div class="card-header">
                         Huawei Mate 9
                        </div>  
                        <div class="card-body bg-warning">

                           <div class="row mb-2 ">
                                <div class="col-md-12">
                                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                        <img class="card-img-right flex-auto d-none d-lg-block" src="img/SG-S9plus.jpg"  width="400px" height="400px" alt="Card image cap">
                                        <div class="card-body d-flex flex-column align-items-start">

                                         <?php 
                                        include("conexion.php");
                                        $consulta = "SELECT Cod_Producto, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1020";
                                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                                        while( $row = mysqli_fetch_assoc($resultado) ) {
                                        ?>
                                            <h3 class="mb-0">
                                                <a class="d-inline-block mb-2 text-primary" href="#"><?php echo $row ['Producto']; ?></a>
                                                <input type="hidden" name="producto" value="<?php echo $row ['Producto']; ?>" /> 
                                            </h3>
                                           <div class="mb-1 text-muted">Nov 12</div>
                                            <p class="card-text mb-auto"><?php echo $row ['Cod_Producto']; ?></p>
                                            <input type="hidden" name="codproducto" value="<?php echo $row ['Cod_Producto']; ?>" /> 
                                            <p class="card-text"><?php echo $row ['Descripcion']; ?></p>
                                            <input type="hidden" name="descripcion" value="<?php echo $row ['Descripcion']; ?>" /> 
                                            <a href="#"><input type="number" class="form-control bg-light text-center" name="Cantidad" value="<?php echo $_SESSION['Cantidad']; ?>" name="Cantidad"/> </a>
                                            
                                            <p class="card-text"><?php echo '$'.$row ['Precio']; ?></p>
                                            <input type="hidden" name="precio" value="<?php echo $row ['Precio']; ?>" /> 
                                            <p class="card-text">                  
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <hr>

                                        <?php
                                        }
                                        ?>    

                                        <p class= "text-center"><a href="#" class="btn btn-dark" role="button">Volver</a>
              
                                        <input  type="submit" class="btn btn-primary"  value="Agregar al carrito" /> 

                                        </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
        
        </form>

    </main>

    <!--Footer---------------------------------------------------------------------------------------------------------------------------------->

    <div class="album py-5 bg-white">  
      <footer class="container py-5">
         
        <div class="row">
          <div class="col-12 col-md">
            <img src="img/logo_compumundo.jpg" width="70" height="70" >
            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Telefonos</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Sucursales</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Rosario</a></li>
              <li><a class="text-muted" href="#">Santa Fe</a></li>
              <li><a class="text-muted" href="#">Buenos Aires</a></li>
              <li><a class="text-muted" href="#">Prv. Córdoba</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
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


  </body>

</html>