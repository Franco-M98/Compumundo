<?php
  //abrimos la sesión
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $user=$_SESSION['Usuario'];
  include("php/conexion.php");

  $_SESSION['Usuario'];
	$_SESSION['Imagenes'];
	$_SESSION['Nombre'];
  
  

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logooficial.png">    

    <title>Auriculares &bull; Compumundo</title>

    <!-- CSS -->
   
     
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >
    <link href="css/footer.css" rel="stylesheet"  type="text/css" >


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

  <body class="bg-light">

    <header>

    <?php
      include ("plantillas/header.php");
    ?>
      
  </header>
 
    <!--------Fin del Navbar-------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    

  <main role="main">
    <div class="container text-center py-1 mb-5">
      <div class="row">
        <div class="col-12 form-row">
          <div class="card-body">
            <h1 class="card-text text-center text-info py-3 mb-4 border-bottom border-info"><img class="text-center" src="img/otros/menu/auricularesceleste.png" width="45" height="45">&nbsp;&nbsp;Auriculares
            <label><h5 class="card-text text-center text-muted" >/Marcas</h5></h1><label>
          </div>
        </div>
      </div>
    <div class="row justify-content-md-center mb-5 py-5" id="auricularfondo">
          <div class="col-2 mb-5">
            <a href="AuricularesJBL.php">
              <img width="100" height="100" src="img/Auriculares/JBL/JBLLogo.jpg" data-toggle="tooltip" data-placement="bottom" title="JBL">       
            </a> 
          </div>
          <div class="col-2">
            <a href="AuricularesSony.php" > 
              <img width="100" height="100" src="img/Auriculares/Sony/SonyLogo.jpg" data-toggle="tooltip" data-placement="bottom" title="Sony">       
            </a> 
          </div>
        </div>
      
    </div>
  </main>
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

    <script>
      // Select all elements with data-toggle="tooltips" in the document
      $('[data-toggle="tooltip"]').tooltip();

      // Select a specified element
      $('#myTooltip').tooltip();
    </script>



  </body>

</html> 