<?php
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $cod_producto = $_POST["Cod_Producto"]; 

  
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
 aside {
   background-color: #fd7e14;
   } 

input{
  background-color: #fd7e14;
}


 .centrado{
	margin:150px 150px;
	display:block;
    }


</style>

</head>

<!-- Inicio del Navbar.
========================================================= -->
<body>
<header>
<!-------------------------------------------------------------------------------------------------------------------------------------->

<nav class="navbar navbar-expand navbar-dark bg-dark "> 
    <h1 class="navbar-brand" href=""><img src="img/logo_compumundo.jpg" width="30" height="30"  class="rounded"> Compumundo</h1>
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
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="shopping-cart"></span>Producto</a>
          <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="#">Huawei</a>


              <ul class ="" >
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
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

         <!------------Login--------------> 
          
             <form  action="php/Validar.php"  method="post"  enctype="multipart/form-data" class="form-signin text-center">
               <img class="mb-4" src="img/logo_compumundo.jpg"  width="72" height="72" longdesc="img/logo_compumundo.jpg">
               <h1 class="h3 mb-3 font-weight-normal">Compumundo</h1>
               <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" name="User"  required autofocus>
               <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="Clave" required>
               <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
               <p class="mt-5 mb-3 text-muted"></p>
             </form>
          

        </div>
      </div>
    </div>
  </div>




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




<main role="main">


  
        	<img src="img/carousel_samsungs9.jpg">



<!---El que va para la publicidad del telefono ------------------------------------------------------------------------------------------------->


<div class="album py-5 bg-light">  


  <div class="container">


  <div class="card">
    <div class="card-header">
      Huawei P20 Pro
      <h3 class="card-title text-center">Samsung Galaxy S9 Plus</h3>
    </div>  
    <div class="card-body bg-primary">

      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="card-img-right flex-auto d-none d-lg-block" src="img/SG-S9plus.jpg"  width="400px" height="400px" alt="Card image cap">
            <div class="card-body d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                <a class="d-inline-block mb-2 text-primary" href="#">Samsung Galaxy S9 Plus</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#">Continue reading</a>
                <p>12gb</p>
                <p class="card-text">Camara Frontal</p>
                <p>Redireccion</p>
                <p>sistema</p>
                <p class="card-text">                  
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <hr>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------->



</div>
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="img/SG-S9plus.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>








    <form action="joder.php" "validaciondeingreso.php"  method="post" enctype="multipart/form-data">

      <div class="row">
        <div class="col-md-8 border border border-primary bg-secondary">
        

            <figure class="figure img-responsive center-block">
            <img src="img/samsung/SG-S9plus.jpg" width="400px" height="400px" class="centrado" alt="A generic square placeholder image with rounded corners in a figure.">

            </figure>

          </div>

          <aside class="col-md-4 border-primary border-right border-top border-bottom">

          <?php 
            include("conexion.php");
            $consulta = "SELECT Cod_Producto, Producto, Descripcion, Cantidad, Precio FROM productos WHERE Cod_Producto = 1002";
            $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
            while( $productos = mysqli_fetch_assoc($resultado) ) {
            ?>
                    
          
              
              <h1 class="font-italic text-center"><?php echo $productos ['Producto'] ?></h1>
               
              <div class="p-3">
              <ol class="list-unstyled mb-0">
              <h2 class="text-center text-white" > Caracteristicas</h2>
              <hr>
              <h4>Codigo de Producto</h4>
              <input type="text" readonly="readonly" class="form-control" value="<?php echo $productos ['Cod_Producto'] ?>" name="Cod_Producto" />
              <hr>
              <h4>Descripcion</h4>
              <p><?php echo $productos ['Descripcion']; ?></p>
              <hr>
              <h4>Cantidad</h4>
              <div class="col-md-4">
              <input type="number" class="form-control bg-light text-center" value="<?php echo $productos ['Cantidad']; ?>" name="Cantidad"/> 
              </div>
              <hr>
              <h4>Precio</h4>
              <h1 class="card-title pricing-card-title"><?php echo '$'.$productos ['Precio']; ?></h1>
              <p></p>
              <hr>
                           
             </ol>
             </div>
            
            <?php
            }
            ?>

              
              <p class= "text-center"><a href="#" class="btn btn-dark" role="button">Volver</a>
              
              <input  type="submit" class="btn btn-primary"  value="Agregar al carrito" /> 
              </p>
              

            </aside><!-- /.blog-sidebar -->

          
        </div>

      </div>
    </form>
    
 </div>


    <div class="rounded float-right">  
        

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
             <img class="card-img-top" src="img/samsungs9full.jpg"   alt="Card image cap"></span>
             <hr>
              <div class="card-body">
                <h3 class="card-title text-center">Samsung Galaxy S9 Plus</h3>
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
                    <p><a href="#" class="btn btn-primary" role="button">Ver precio</a>
                    <a href="#" class="btn btn-outline-success" role="button">Agregar al carrito</a></p>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
    </div>


    
</div>
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="img/SG-S9plus.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>

      <div class="container">
            <div class="row mb-2">
              <div class="col-md-12">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                
                  <img class="card-img-right flex-auto d-none d-lg-block" src="img/SG-S9plus.jpg"  width="400px" height="400px" alt="Card image cap">
                
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">World</strong>
                      <h3 class="mb-0">
                      <a class="text-dark" href="#">Featured post</a>
                      </h3>
                      <div class="mb-1 text-muted">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#">Continue reading</a>
                  </div>
                                  </div>
              </div>
          </div>
      </div>

</main>

<!--Footer---------------------------------------------------------------------------------------------------------------------------------->



  <!--Fin del Footer--------------------------------------------------------------------------------------------------------------------->


</body>
</html>