<?php
  include("conexion.php");
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
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

        <nav class="navbar navbar-expand navbar-dark bg-dark "> 
        <h1 class="navbar-brand" href=""><img src="img/logo_compumundo.jpg" width="30" height="30"  class="rounded"> Compumundo</h1>
          <div class="collapse navbar-collapse alta">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
              </li>
              <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="shopping-cart"></span>Producto</a>
                <div class="dropdown-menu dropright" aria-labelledby="dropdown03">
                  <a class="dropdown-item  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Huawei</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown03">  
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">    
                        <a class="dropdown-item" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" >Producto</a> 
                        <a class="dropdown-item" href="#">Huawei</a>
                        <a class="dropdown-item" href="#">Huawei</a>  
                      </li>
                    </ul>
                  </div>
                  <a class="dropdown-item" href="#">LG</a>
                  <a class="dropdown-item" href="#">Motorola</a>
                  <a class="dropdown-item" href="#">Samsung</a>
                </div>
              </li>
            </ul>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarsExample03">
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
          </div>
        </nav>
      </div>
      
    </header>
    
    <!--------Fin del Navbar-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <main role="main">

      <img src="img/carousel_samsungs9.jpg">

      <!-----Publicidad------------------------------------------------------------------------------------------------------------->
      
      <div class="container">

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/carousel_samsungs9.jpg" alt="Generic placeholder image">
          </div>
        </div>
      
        <hr class="featurette-divider">
      
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/Huawei/mate-20-x.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/Samsung/SG-S9plus.jpg" alt="Generic placeholder image">
          </div>
        </div>
      
        <hr class="featurette-divider">
      
        <!-- /END THE FEATURETTES -->
        
      </div><!-- /.container -->
    
      <!-- Container de marketing,  falta cerrarlo con un </div> al final de todo..-->

      <div class="album py-5 bg-light">  

        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/samsungs9full.jpg" alt="Card image cap"></span>
                <hr>
                <div class="card-body">
                  <h3 class="card-title text-center"></h3>
                  <p>12gb</p>
                  <p class="card-text">Camara Frontal</p>
                  <p>Redireccion</p>
                  <p>sistema</p>
                  <p class="card-text">                  
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <hr>
                      <p><a href="#" class="btn btn-primary" role="button">Ver Producto</a></p>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/Huawei/celular_hwP20pro.jpg" alt="Card image cap">
                <hr>
                <div class="card-body">
                  <h3 class="card-title text-center">Huawei P20 Pro</h3>
                  <p>12gb</p>
                  <p class="card-text">Camara Frontal</p>
                  <p>Redireccion</p>
                  <p>sistema</p>
                  <p class="card-text">                  
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <hr>
                      <p><a href="#" class="btn btn-primary modalb" role="button">Ver Producto</a></p>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/Huawei/HPSmartPlus.jpg" alt="Card image cap">
                <hr>
                <div class="card-body">
                  <h3 class="card-title text-center">Huawei P Smart Plus</h3>
                  <p>12gb</p>
                  <p class="card-text">Camara Frontal</p>
                  <p>Redireccion</p>
                  <p>sistema</p>
                  <p class="card-text">                  
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <hr>
                      <p><a href="#" class="btn btn-primary" role="button">Ver Producto</a></p>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/samsungs9full.jpg" alt="Card image cap">
                <hr>
                <div class="card-body">
                  <h3 class="card-title">Samsung Galaxy S9 Plus</h3>
                  <p>12gb</p>
                  <p class="card-text">Camara Frontal</p>
                  <p>Redireccion</p>
                  <p>sistema</p>
                  <p class="card-text">                  
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <hr>
                      <p><a href="#" class="btn btn-primary" role="button">Ver Producto</a></p>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/samsungs9full.jpg" alt="Card image cap">
                <hr>
                <div class="card-body">
                  <h3 class="card-title">Samsung Galaxy S9 Plus</h3>
                  <p>12gb</p>
                  <p class="card-text">Camara Frontal</p>
                  <p>Redireccion</p>
                  <p>sistema</p>
                  <p class="card-text">                  
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <hr>
                      <p><a href="#" class="btn btn-primary" role="button">Ver Producto</a></p>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="img/samsungs9full.jpg" alt="Card image cap">
                <hr>
                <div class="card-body">
                  <h3 class="card-title">Samsung Galaxy S9 Plus</h3>
                  <p>12gb</p>
                  <p class="card-text">Camara Frontal</p>
                  <p>Redireccion</p>
                  <p>sistema</p>
                  <p class="card-text">                  
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <hr>
                      <p><a href="#" class="btn btn-primary" role="button">Ver Producto</a></p>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!---Separador ------------------------------------------------------------------------------------------------->
      
      <div class="album py-5 bg-white">  
      
        <!-- Container de marketing-------------------------------------------------------------------------------------->
        
        <div class="container marketing">

          <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                      <a class="text-dark" href="#">Featured post</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#">Continue reading</a>
                  </div>
                  <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                </div>
              </div>

              <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">
                      <a class="text-dark" href="#">Post title</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" data-src="" alt="Card image cap">
                  </div>
                </div>
                  
                <div class="col-md-6">
                  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">World</strong>
                      <h3 class="mb-0">
                        <a class="text-dark" href="#">Featured post</a>
                      </h3>
                      <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#">Continue reading</a>
                      </div>
                      <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                      <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">
                          <a class="text-dark" href="#">Featured post</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                          <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
                      </div>
                    </div>
                  
                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </main>

  <!--Footer---------------------------------------------------------------------------------------------------------------------------------->

    <div class="album py-5 bg-light">  
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



  </body>

</html>