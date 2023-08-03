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
  $_SESSION['Imagenes'];
  
  

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
  
  <!-- Inicio del Navbar.
  ========================================================= -->

  <body>

    <header>

      <?php
        include ("plantillas/header.php");
      ?>
    </header>

      <nav id="sidebar" class="sidebar">
			  <div class="row">
          <div class="col-2 border-right border-dark py-4">
            <h5><a class="nav-link text-dark"><img src="img/modificacion.png" width="21" height="21">&nbsp;&nbsp;<u>Mis datos</a></u></h5>
            <h6><a class="nav-link text-dark"><img src="img/circulo.png" width="8" height="8">&nbsp;Datos del Usuario</a></h6>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active text-center" id="v-pills-profile-tab" data-toggle="pill" href="#Nombre" role="tab" aria-controls="v-pills-profile" aria-selected="false">Nombre</a>
              <a class="nav-link text-center" id="v-pills-messages-tab" data-toggle="pill" href="#Apellidos" role="tab" aria-controls="v-pills-messages" aria-selected="false">Apellido</a>
              <h6><a class="nav-link text-dark"><img src="img/circulo.png" width="8" height="8">&nbsp;Datos de la cuenta</a></h6>
              <a class="nav-link text-center" id="v-pills-messages-tab" data-toggle="pill" href="#Contraseña" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contraseña</a>
              <a class="nav-link text-center" id="v-pills-settings-tab" data-toggle="pill" href="#Imagen" role="tab" aria-controls="v-pills-settings" aria-selected="false">Imagen</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="Nombre" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="py-2">
                  <form action="php/updatenombre.php"  method="post"  enctype="multipart/form-data" class="form-signin">
                    <h3 class=" border-gray pb-2 mb-4 py-3">Datos del usuario</h3>
                    <div class="my-3 p-3 bg-white rounded shadow-lg">
                      <h5 class="border-bottom border-gray pb-2 mb-0">Modificar nombre</h5>
                      <div class="media text-muted py-4 pt-3">
                        <div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Nombre Actual</strong>
                            <?php
                                                                        
                            $user=$_SESSION['Usuario'];
                            $sql = "SELECT * FROM registrodeusuario WHERE Usuario = '$user' LIMIT 1";
                            $resultado= $conexion ->query($sql);
                            while ($row = $resultado ->fetch_assoc()) {
                                                                      
                            ?>
                              <span class="d-block text-dark col-md-4"><?php echo ($row['Nombre']); ?></span>
                              <input class="ml-auto" type="hidden" name="User" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['Usuario']; ?>">
                            <?php
                            }
                            ?>
                            <a class="ml-auto" href="#"></a>
                          </div>
                        </div>
                      </div>
                      <div class="media text-muted pt-3">
                        <div class="media-body pb-3 mb-5 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Nombre Nuevo</strong>
                            <div class="col-md-4">
                              <input class="form-control" type="text"  placeholder="Nombre nuevo" name="nombre"  required autofocus />
                            </div>  
                            <button class="btn btn-primary ml-auto" type="submit">Modificar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              
              <div class="tab-pane fade" id="Apellidos" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="py-2">
                  <form action="php/updateapellido.php"  method="post"  enctype="multipart/form-data" class="form-signin">
                    <h3 class=" border-gray pb-2 mb-4 py-3">Datos del usuario</h3>
                    <div class="my-3 p-3 bg-white rounded shadow-lg">
                      <h5 class="border-bottom border-gray pb-2 mb-0">Modificar apellidos</h5>
                      <div class="media text-muted py-4 pt-3">
                        <div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Apellidos Actuales</strong>
                            <?php
                                                                    
                            $user=$_SESSION['Usuario'];
                            $sql = "SELECT * FROM registrodeusuario WHERE Usuario = '$user' LIMIT 1";
                            $resultado= $conexion ->query($sql);
                            while ($row = $resultado ->fetch_assoc()) {
                                                                    
                            ?>
                              <span class="d-block text-dark col-md-4"><?php echo ($row['Apellidos']); ?></span>
                              <input class="ml-auto" type="hidden" name="User" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['Usuario']; ?>">
                                  
                            <?php
                            }
                            ?>
                            
                            <a class="ml-auto" href="#"></a>
                          </div>
                        </div>
                      </div>
                      <div class="media text-muted pt-3">
                        <div class="media-body pb-3 mb-5 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Apellidos Nuevos</strong>
                            <div class="col-md-4">
                              <input class="form-control" type="text"  placeholder="Apellidos nuevos" name="apellidos"  required autofocus />
                            </div>  
                            <button class="btn btn-primary ml-auto" type="submit">Modificar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="tab-pane fade" id="Contraseña" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="py-2">
                  <form action="php/updateclave.php"  method="post"  enctype="multipart/form-data" class="form-signin">
                    <h3 class=" border-gray pb-2 mb-4 py-3">Datos de la cuenta</h3>
                    <div class="my-3 p-3 bg-white rounded shadow-lg">
                      <h5 class="border-bottom border-gray pb-2 mb-0">Modificar contraseña</h5>
                      <div class="media text-muted py-4 pt-3">
                        <div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Contraseña Actual</strong>
                            <?php
                                                                        
                              $user=$_SESSION['Usuario'];
                              $sql = "SELECT * FROM registrodeusuario WHERE Usuario = '$user' LIMIT 1";
                              $resultado= $conexion ->query($sql);
                              while ($row = $resultado ->fetch_assoc()) {
                                                                        
                            ?>    
                          
                              <input type="password" readonly class="form-control-plaintext col-md-3" id="staticEmail" value="<?php echo ($row['Clave']); ?>">     
                              <input class="" type="hidden" name="User" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['Usuario']; ?>">
                    
                            <?php   
                            }
                            ?>

                            <a class="ml-auto" href="#"></a>
                          </div>
                        </div>
                      </div>
                      <div class="media text-muted pt-3">
                        <div class="media-body pb-3 mb-5 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Contraseña Nueva</strong>
                            <div class="col-md-4">
                              <div class="input-group">
                                <input  ID="txtPassword" type="Password" Class="form-control" placeholder="Contraseña nueva" name="Clave"  required autofocus>
                                <div class="input-group-append">
                                  <button id="show_password" class="btn btn-secondary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                </div>
                              </div>
                            </div>
                            <button class="btn btn-primary ml-auto" type="submit">Modificar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              
              <div class="tab-pane fade" id="Imagen" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="py-2">
                  <form action="php/guardarimagen.php"  method="post"  enctype="multipart/form-data" class="form-signin">
                    <h3 class=" border-gray pb-2 mb-4 py-3">Datos de la cuenta</h3>
                    <div class="my-3 p-3 bg-white rounded shadow-lg">
                      <h5 class="border-bottom border-gray pb-2 mb-0">Modificar foto de perfil</h5>
                      <div class="media text-muted py-4 pt-3">
                        <div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Foto de perfil actual</strong>
                            <?php

                              date_default_timezone_set('America/Argentina/Buenos_Aires');
                              $fecha=date("H:i d/m/Y");
                                                                      
                              $user=$_SESSION['Usuario'];
                              $sql = "SELECT * FROM registrodeusuario WHERE Usuario = '$user' LIMIT 1";
                              $resultado= $conexion ->query($sql);
                              while ($row = $resultado ->fetch_assoc()) {
                                                                      
                            ?>

                            <span class="d-block col-md-4"><img class="rounded-circle" src=<?php echo ($row['Imagenes']); ?> width="50" height="50"></strong></span>
                            <h6 class="text-dark">Última modificación:</h6><h6 class="text-primary"><?php echo ($row['Fecha']); ?></h6><label>
                            <input type="hidden" name="fecha" value="<?php echo $fecha ?>" placeholder="<?php echo $fecha ?>">
                                
                            <input class="ml-auto" type="hidden" name="User" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['Usuario']; ?>">
                                  
                            

                            <a class="ml-auto" href="#"></a>
                          </div>
                        </div>
                      </div>
                      <div class="media text-muted pt-3">
                        <div class="media-body pb-3 mb-5 lh-125 border-bottom border-gray">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-dark col-md-4">Foto de perfil nueva</strong>
                            <div class="col-md-4">
                              <input type="file" name="imagen"  class="form-control-file" id="exampleFormControlFile1" required autofocus>
                            </div>  
                            <button class="btn btn-primary ml-auto" type="submit">Modificar</button>
                          </div>
                        </div>
                      </div>
                      <?php
                      }
                      ?> 
                    </div>
                  </form>
                </div>
              </div>
              
             
            </div>
          </div>
        </div>
			</nav>
      


   
    <!--------Fin del Navbar-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function mostrarPassword(){
                var cambio = document.getElementById("txtPassword");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            } 
            
            $(document).ready(function () {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function () {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
    </script>

    
  </body>

</html> 

