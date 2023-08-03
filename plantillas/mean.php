<?php
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
	$_SESSION['Imagenes'];
	$_SESSION['Nombre'];
  
  

?>

<!doctype html>
<html>

  
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
          <h1 class="card-text text-center text-warning py-3 mb-4 border-bottom border-warning"><img class="text-center" src="img/otros/menu/celularamarillo.png" width="45" height="45">&nbsp;&nbsp;Celulares  
          <label><h5 class="card-text text-center text-muted" >/Marcas</h5></h1><label>
        </div>
      </div>
      </div>
    <div class="row justify-content-md-center mb-5 py-5" id="celularfondo">
          <div class="col-2 mb-5">
            <a href="CelularesHuawei.php">
              <img width="100" height="100" src="https://http2.mlstatic.com/D_Q_NP_707919-MLA27179994160_042018-N.webp" data-toggle="tooltip" data-placement="bottom" title="Huawei">       
            </a> 
          </div>
          <div class="col-2">
            <a href="" > 
              <img width="100" height="100" src="https://http2.mlstatic.com/D_Q_NP_915136-MLA27609877726_062018-N.webp" data-toggle="tooltip" data-placement="bottom" title="Motorola">       
            </a> 
          </div>
          <div class="col-2">
            <a href="CelularesSamsung.php"> 
              <img width="100" height="100" src="https://http2.mlstatic.com/D_Q_NP_978072-MLA27130853286_042018-N.webp" data-toggle="tooltip" data-placement="bottom" title="Samsung">       
            </a> 
          </div>
          <div class="col-2">
            <a href=""> 
             <img width="100" height="100" src="https://http2.mlstatic.com/D_Q_NP_655247-MLA27129115788_042018-N.webp" data-toggle="tooltip" data-placement="bottom" title="Sony">       
            </a> 
          </div>
          <div class="col-2">
            <a href="CelularesXiaomi.php"> 
             <img width="100" height="100" src="img/Celulares/Xiaomi/XiaomiLogo.jpg" data-toggle="tooltip" data-placement="bottom" title="Xiaomi">       
            </a> 
          </div>
        </div>
      
    </div>
  </main>
    <!--Footer---------------------------------------------------------------------------------------------------------------------------------->

    <div class="album py-5" style="background-color:#212121">  
          <footer id="Sucursal" class="container py-2">
            
            <div class="row">
              <div class="col-12 col-md">
                <img src="img/logooficial.png" width="70" height="70" class="rounded">
                <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
              </div>
              <div class="col-6 col-md text-muted">
                <b><h5><font face="Decorative">MENU PRINCIPAL</font></h4></b>
                <ul class="list-unstyled text-small">
                  <li><img src="img/Otros/Footer/informationgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#QuienesSomos?">Quiénes somos?</a></li>
                  <li><img src="img/Otros/Footer/homegris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#Inicio">Inicio</a></li>
                  <li><img src="img/Otros/Footer/ubicaciongris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#Ubicacion">Ubicación</a></li>
                  <li><img src="img/Otros/Footer/variassucursalesgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Index.php#Sucursales">Sucursales</a></li>
                </ul>
              </div>
              <div class="col-6 col-md text-muted">
               <b><h5><font face="Decorative">CATEGORIAS</font></h4></b>
                <div class="list-unstyled text-small">
                  <li><img src="img/Otros/Footer/celulargris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Celulares.php">Celulares</a></li>
                  <li><img src="img/Otros/Footer/notebookgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Notebooks.php">Notebooks</a></li>
                  <li><img src="img/Otros/Footer/televisiongris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Televisores.php">Televisores</a></li>
                  <li><img src="img/Otros/Footer/impresoragris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Impresoras.php">Impresoras</a></li>
                  <li><img src="img/Otros/Footer/auricularesgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="Auriculares.php">Auriculares</a></li>
                </div>
              </div>
              <div class="col-6 col-md text-muted">
              <b><h5><font face="Decorative">CONTACTOS</font></h4></b>
                <ul class="list-unstyled text-small">
                  <li><img src="img/Otros/Footer/telefonogris.png" width="14" height="14">&nbsp;<a class="text-muted">0810-444-8330</a></li>
                  <li><img src="img/Otros/Footer/mailgris.png" width="14" height="14">&nbsp;<a class="text-muted">compumundo@gmail.com</a></li>
                  <li><img src="img/Otros/Footer/facebookgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="https://es-la.facebook.com/CompumundoArg/">Facebook</a></li>
                  <li><img src="img/Otros/Footer/instagramgris.png" width="14" height="14">&nbsp;<a class="text-muted" href="https://www.instagram.com/compumundoarg/?hl=es-la">Instagram</a></li>
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

    <script>
      // Select all elements with data-toggle="tooltips" in the document
      $('[data-toggle="tooltip"]').tooltip();

      // Select a specified element
      $('#myTooltip').tooltip();
    </script>



  </body>

</html> 