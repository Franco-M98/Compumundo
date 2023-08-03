<?php
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
    <link rel="icon" href="img/logooficial.png">

    <title>Registro de usuario &bull; Compumundo</title>
    <!-- CSS -->
   
    <link href="css/hover.css" rel="stylesheet" type="text/css">
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >
    <link href="css/bodyyy.css" rel="stylesheet"  type="text/css" >
    

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link href="album.css" rel="stylesheet">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <!-- Codigos Bootstrap.
    ========================================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  </head>
  
  <!-- Inicio del Navbar.
  ========================================================= -->

  <body class="bg-dak">

    <header>

    </header>

    <!--------Fin del Navbar-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    
    <main role="main">
      <div class="container">
    
        <div class="modal-dialog modal-lg"  role="document">
          <div class="modal-content bg-ligt">
                    
            <div  class="modal-body">  
              <div class="container-fluid">
                        
                <!------------Login--------------> 
                       
                <form  action="php/registro_de_usuario.php"  method="post"  enctype="multipart/form-data" class="form-signin">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="py-3">
                        
                          <div class="text-center">
                            <img src="img/logooficial.png" width="" height="50"  class="rounded">
                            <img src="img/compumundologo.jpg" width="" height="50" ><h6 class="mb-2 py-3"></h6>
                          </div>
                          <h6 class="text-center text-info"> REGISTRO DE USUARIO</h6>
                          <hr class="mb-4">
                          
                          <div class="form-group row">
                            <div class="col-8 col-sm-6 is-valid">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre" name="nombre" required autofocus />
                            </div>
                            <div class="col-4 col-sm-6">
                              <input type="text" class="form-control" id="inputPassword3" placeholder="Apellidos" name="apellidos" required autofocus />
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <input type="email" class="form-control" id="inputEmail" placeholder="Usuario@correo.com" name="User" required autofocus />
                              </div>
                          </div>
                        
                            <div class="form-group row">
                              <div class="col-8 col-sm-6 is-valid">
                                <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="Clave" required />
                              </div>
                              <div class="col-4 col-sm-6">
                                <input type="password" class="form-control" id="contrasena1" placeholder="Confirmación" name="Clave1" required />
                              </div>
                              <div style="margin-top:15px;">
                                <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>&nbsp;&nbsp;Mostrar Contraseña
                              </div>
                            </div>
                            <input type="hidden" value="img/1usuario.png" class="form-control" id="inputPassword3" placeholder="Imagenes" name="imagen" />

                          <div class="py-5 row">
                            <div class="col-md-6">
                              <a href="Login.php" role="buttom" class="btn text-info">Prefiero iniciar sesión</a>
                            </div>
                            <div class="col-md-4 ml-auto">
                              <button type="submit" class="btn btn-dark">Registrar</button>
                            </div>
                          </div>
                          
                      </div>
                    </div>
                    <div class="col-md-6 ml-auto py-5">
                      <div class="row">
                        <img  src="img/telefono0.png" width="396" height="340">
                      </div>
                    </div>
                  </div> 
                </form>
                <!------------Fin del Login-------------->
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Codigos JavaScript.
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
      $(document).ready(function () {
        $('#mostrar_contrasena').click(function () {
          if ($('#mostrar_contrasena').is(':checked')) {
            $('#contrasena').attr('type', 'text');
          } else {
            $('#contrasena').attr('type', 'password');
          }
          if ($('#mostrar_contrasena').is(':checked')) {
            $('#contrasena1').attr('type', 'text');
          } else {
            $('#contrasena1').attr('type', 'password');
          }
        });
      });
    </script>
  

  </body>

</html>         