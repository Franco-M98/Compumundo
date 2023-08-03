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
    
    <title>Login &bull; Compumundo </title>

    <!-- CSS -->
   
    <link href="css/.css" rel="stylesheet"  type="text/css" >
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
      
          <div class="modal-dialog"  role="document">
            <div class="modal-content bg-ligt" >
              <div  class="modal-body">  
              <!--<a href="Index.php" class="btn text-dark" role="button"><img src="img/Login/volver4.png" width="14" height="14"  class=""> Volver</a>-->
              
                    
                <!------------Login--------------> 
                       
                <form action="php/Validar.php"  method="post"  enctype="multipart/form-data" class="form-signin text-center">
                  <div class="py-4">
                    <img src="img/logooficial.png" width="" height="50"  class="rounded">
                    <a href="Index.php">
                    <img src="img/compumundologo.jpg" width="" height="50"  class=""><h1 class="mb-3 py-3"></h1>
                    </a>
                    <div class="mx-sm-5">
                    <h6 class="text-center text-info">LOGIN</h6>
                      <hr class="py-1"> 
                      <div class="form-group row">
                        <label class="ml-auto col-form-label"><img src="img/Login/user.png" width="25" height="25"></label>
                        <div class="col-sm-11">
                          <input class="form-control" type="email" id="inputEmail" placeholder="Usuario" name="User"  required autofocus />
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label class="ml-auto col-form-label"><img src="img/Login/clave.png" width="25" height="25"></label>
                          <div class="col-sm-11">
                            <div class="input-group">
                              <input  ID="txtPassword" type="Password" Class="form-control" placeholder="Contraseña" name="Clave" required autofocus>
                                <div class="input-group-append">
                                  <button id="show_password" class="btn btn-secondary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="py-4 form-group row">
                            <div class="col-md-6">
                              <a href="RegistrodeUsuario.php" class="btn text-info" role="button col-md-4">Crear Cuenta</a>
                           </div>
                           <div class="col-md-4 ml-auto">
                            <button class="btn btn-dark" type="submit">Ingresar</button>
                          </div>
                        </div>
                      </div>
                    </div>   
                  </div>   
                </form>

                <!------------Fin del Login-------------->
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