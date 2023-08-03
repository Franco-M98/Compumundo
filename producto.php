<?php
  session_start();
  error_reporting(0);
  $_SESSION['Usuario']

  
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 



</head>

<!-- Inicio del Navbar.
========================================================= -->
<body>
<header>

<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top"> 
    <a class="navbar-brand" href=""><img src="img/logo_compumundo.jpg" width="30" height="30" longdesc="img/logo_compumundo.jpg"> Compumundo</a>
     <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="">
          <a class="nav-link" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="badge btn-primary">42</span>Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle container" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="shopping-cart"></span>Producto</a>
          <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="#">Huawei</a>


              <ul class ="navbar-nav mr-auto" >
                <li class="nav-item dropdown">    
                <a class=" " href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" >Producto</a> 
                <div class="dropdown-menu" aria-labelledby="dropdown03">                           
                      <a class="dropdown-item" href="#">Huawei</a>
                      <a class="dropdown-item" href="#">Huawei</a>                 
                </li>
               </ul>

            <a class="dropdown-item" href="#">LG</a>
            <a class="dropdown-item" href="#">Motorola</a>
            <a class="dropdown-item" href="#">Samsung</a>
          </div>
        </li>
      </ul>


        <h5>Bienvenido Usuario: <?php echo $_SESSION['Usuario'] ?> </h5>   
          
      
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarsExample03">
      <ul class="navbar-nav">

       
                    
          

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




<main role="main">
  
     	<img src="img/carousel_samsungs9.jpg">

<?php
include("tablaproducto.php")
?>


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
       
  </footer>

</div>

  <!--Fin del Footer--------------------------------------------------------------------------------------------------------------------->


</body>
</html>