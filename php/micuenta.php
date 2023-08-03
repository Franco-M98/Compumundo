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
<link rel="icon" href="img/logo_compumundo.jpg">

<title>Compumundo</title>

<!-- CSS -->

<link href="cs/UyC.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
<!-- Custom styles for this template -->
<link href="album.css" rel="stylesheet">

<!-- Codigos Css.
========================================================= -->
<link href="css/hover.css" rel="stylesheet" type="text/css">
<!--  <link href="css/LocalEstilo.css" rel="stylesheet" type="text/css" /> -->

<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">


<!-- Codigos Bootstrap.
========================================================= -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<!-- Bootstrap core CSS -->
<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
         


<!-- Codigos JavaScript.
========================================================= -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<!-- Inicio del Navbar.
========================================================= -->
<body>
<header>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-inverse"> 
    <a class="navbar-brand" href=""><img src="img/logo_compumundo.jpg" width="30" height="30" longdesc="img/logo_compumundo.jpg"> Compumundo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="badge btn-primary">42</span>Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Producto</a>
          <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
         
      

    <h2> Bienvenido: <?php echo $_SESSION['Usuario'] ?> </h2>
      
      
      
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarsExample03">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Crear Cuenta</a>
        </li>
        
       <!-- Button trigger modal -->
       
         <li class="nav-item">
          <a class="nav-link btn btn-outline-primary my-2 my-sm-0" data-toggle="modal"  data-target="#exampleModal" href="#"><span class="oi" data-glyph="person"></span>Inicio de Sesión</a>
        </li>
        
      <!-- Modal -->
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
        

         <!------------Login-------------->
          
             <form  action="php/proceso_guardar.php"  method="post"  enctype="multipart/form-data" class="form-signin text-center">
             
             <img src="/../<?php echo $destino;?>" width="50" height="70"/>
              <img id="myImage" src="/utente.jpg" width="50" height="70">
        
          


          <script>
            function changeImage() {
          var image = document.getElementById('myImage');
          if (image.src.match("bulbon")) {
             image.src = "img/utente.png";
          } else {
            image.src = "pic_bulbon.png";
          }
          }
          </script>

             
             <h6> DATOS PERSONALES </h6>
            
              <hr>


            <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre" name="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Apellidos</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Apellidos" name="">
    </div>
  </div>

                <h6> DATOS DE USUARIO  </h6>
                <hr>

                    <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
                 <div class="col-sm-10">
                   <input type="email" class="form-control" id="inputEmail3" placeholder="Usuario" neme="User">
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Cotraseña</label>
                 <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" name="Clave">
                </div>
            </div>

        <form>
          <div class="form-group">
            <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
           </div>
        </form>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>

        </div>
      </div>
    </div>
  </div>


        








      <!--   <form action="" method="post"	name="form" enctype="multipart/for-data" >
          <h1> Login </h1>
          
          <button class="bottom" type="buttom" value="Login"  />
          <span class="Logo"></span>
                <a href="https://www.facebook.com/login.php">Iniciar sesion con Facebook</a>
         </button>
                
               <input type="text" placeholder="Username" name="User"/>
                <input type="password" placeholder="Password" name="Clave"/>
                <input type="submit" value="Login"/> 
        </form>
        <div id="sabe">        
                <p align="center"> Si no tienes una cuenta   <a href="RegistrodeUsuario.html" class="registrate">Registrate</a> <p>
        </div> -->


        <!------------Fin del Login-------------->
      
      
            <!------------------------------------------------------------------>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ayuda</a>
          <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href= <?php echo 'php/micuenta.php' ?> >Mi cuenta</a>
            <a class="dropdown-item" href= <?php echo 'php/salir.php' ?> >Cerrar sesión</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="badge btn-primary">42</span><img src="img/carrito.png" width="20" height="20" longdesc="img/carrito.png" ></a>
        </li>
      </ul>
    </div>
</nav>
</header>


</body>
</html>