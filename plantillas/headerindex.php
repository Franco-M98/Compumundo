 <!-- Navbar Header  -->
 <nav class="navbar border-bottom navbar-expand-lg navbar-sticky navbar-airy navbar-light bg-white bg-fixed-white navbar-hover-light navbar-fixed-light fixed-top">
        <div class="container-fluid">  
          <div class="text-center">
            <img src="img/logooficial.png" width="30" height="30"  class="rounded">
            <a href="Index.php">
             <img src="img/compumundologo.jpg" height="40">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
   
          <div class="collapse navbar-collapse" id="navbarCollapse">
					  <ul class="navbar-nav mx-auto text-center">
              <li class="nav-item active" id=""><img src="img/Otros/Menu/information.png" width="20" height="20"><a href="#QuienesSomos?" class="nav-link py-0">Quiénes somos?</a></li>
              <li class="nav-item active" id=""><img src="img/Otros/Menu/home.png" width="20" height="20"><a href="#Inicio" class="nav-link py-0">Inicio</a></li>
              <li class="nav-item active" id=""><img src="img/Otros/Menu/ubicacion.png" width="20" height="20"><a href="#Ubicacion" class="nav-link py-0">Ubicación</a></li>
              <li class="nav-item active" id=""><img src="img/Otros/Menu/variassucursales.png" width="20" height="20"><a href="#Sucursales" class="nav-link py-0">Sucursales</a></li>


              <li class="nav-item dropdown position-static" id=""><img src="img/Otros/Menu/categorias.png" width="20" height="20"><a href="#" data-toggle="dropdown" class="nav-link active py-0">Categorías<i class="fa fa-angle-down"></i></a>
                <div class="dropdown-menu megamenu py-lg-0 col-lg-11 bg-light" id="fondoblanco">
                  <div class="row">
                    <div class="col-lg-9">
                      <div class="row p-3 pr-lg-0 pl-lg-5 pt-lg-5">
                        <div class="col-lg-2">
                          <!-- Megamenu list-->
                          <div class="text-center py-2">
                            <a href="Celulares.php" class="nav-link">
                              <font color=black><img class="text-center mb-3" src="img/otros/menu/celular.png" width="50" height="50">
                              <ul class="megamenu-list list-unstyled border-warning border-bottom">
                                <h5>Celulares<h5></font>
                              </ul>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <!-- Megamenu list-->
                          <div class="text-center py-2">
                            <a href="Notebooks.php" class="nav-link">
                              <font color=black><img class="text-center mb-3" src="img/otros/menu/notebook.png" width="50" height="50">
                              <ul class="megamenu-list list-unstyled border-danger border-bottom">
                                <h5>Notebooks<h5></font>
                              </ul>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <!-- Megamenu list-->
                          <div class="text-center py-2">
                            <a href="Televisores.php" class="nav-link">
                              <font color=black><img class="text-center mb-3" src="img/otros/menu/television.png" width="50" height="50">
                              <ul class="megamenu-list list-unstyled border-success border-bottom">
                                <h5>TV<h5></font>
                              </ul>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <!-- Megamenu list-->
                          <div class="text-center py-2">
                            <a href="Impresoras.php" class="nav-link">
                              <font color=black><img class="text-center mb-3" src="img/otros/menu/impresora.png" width="50" height="50">
                              <ul class="megamenu-list list-unstyled border-primary border-bottom">
                                <h5>Impresoras<h5></font>
                              </ul>
                            </a>
                          </div>

                        </div>
                        <div class="col-lg-2">
                          <!-- Megamenu list-->
                          <div class="text-center py-2">
                            <a href="Auriculares.php" class="nav-link">
                              <font color=black><img class="text-center mb-3" src="img/otros/menu/auriculares.png" width="50" height="50">
                              <ul class="megamenu-list list-unstyled border-info border-bottom">
                                <h5>Auriculares<h5></font>
                              </ul>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="col-lg-2 d-none d-lg-block rounded"><img src="img/otros/menu/altafoto.jpeg" width="370" height="300" class="bg-image"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li> 
            </ul>
            <ul class="navbar-nav">
              <!--Sin Inicio de Sesion--------------------------------------------------------------------------------------------------->
          
              <?php
                 if (!isset($_SESSION['Usuario'])) 
                 
                 {
                   
                ?>    
                
                <li class="nav-item">
                  <a class="btn btn-outline-primary " role="button" data-target="#" href="Login.php"><img src="img/Userblanco.png" width="23" height="23">&nbsp;Iniciar sesion</a>
                 </li> 
                  
                 &nbsp; 
                <li class="nav-item">
                
                <a class="nav-link border-left" href="carrito.php"><img src="img/carritodecompra.png" width="21" height="21" longdesc="img/carrito.png" ><span class="badge badge-pill bg-success text-white align-text-bottom"></span></a>
                  
                </li>
                  
            </ul>

          </div>
        </div>
      </nav>

      <?php 
        }else{
      ?>
      
               <!--Con Inicio de Sesion-------------------------------------------------------------------------------------------------->
                
                <div class="collapse navbar-collapse nav justify-content-end" id="navbarsExample03">
                <ul class="navbar-nav">
                
                <!-- Button trigger modal -->
               
                <li class="nav-item dropdown">
                <a href="" class="nav-link text-dark my-2 my-sm-0 border-right" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php
										include ("conexion.php");
												
										$user=$_SESSION['Usuario'];

										$sql = "SELECT * FROM registrodeusuario WHERE Usuario = '$user' LIMIT 1";
										$resultado= $conexion ->query($sql);
										while ($row = $resultado ->fetch_assoc()) {
														
									?>	
													
															
									<img class="rounded-circle" src=" <?php echo ($row['Imagenes']); ?> " width="22" height="22">
									<?php echo $row['Nombre']; ?>    
													
                     
              	</a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdown03">

                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item border-right"> 
                        <div class="text-center col-12 py-2">
                          <img class="rounded-circle" src="<?php echo ($row['Imagenes']); ?> " width="70" height="70">
                          <div class="col-12">
                          <p class="text-center">
                          <h6 class="text-center"><?php echo $row['Nombre'] ?> <?php echo $row['Apellidos'] ?></h6>
                          <div class="col-12">
                          <h6 class="text-center text-muted"><?php echo $row['Usuario'] ?></h6>
                          </div>
                          </p>
                          </div>
                        </div>
                      </li>

                      <li class="nav-item">  
                        <a class="dropdown-item" href="carrito.php"><img class="col-auto ml-md-auto" src="img/compras.png"  width="16" height="16">Compras </a>
                        <a class="dropdown-item" href="#"><img class="col-auto ml-md-auto" src="img/ventas.png"  width="16" height="16">Ventas</a>
                        <a class="dropdown-item" href="MisDatos.php"><img class="col-auto ml-md-auto" src="img/modificacion.png"  width="16" height="16">Mis Datos</a>
                        <a class="dropdown-item" href="#"><img class="col-auto ml-md-auto" src="img/ayuda.png"  width="16" height="16">Ayuda</a>
                        <a class="dropdown-item" href= <?php echo 'php/salir.php' ?>><img class="col-auto ml-md-auto"   src="img/salir.png"  width="16" height="16">Cerrar sesión</a>
                      </li>
                    
                    </ul>
                  </div>
                </li>
              
                    
                  <!-- Modal de Crear Cuenta ----------------------------------------------------------------------------------------------------->
                     
                            
                  <?php
                    }
                    ?>
                <!--------Fin del Modal---------------------------------------------------------->
                 &nbsp; 
                 <li class="nav-item my-2 my-sm-0">
                      <?php 
                          include("conexion.php");
                          $user=$_SESSION['Usuario'];

                          $sql = "SELECT  Sum(Cantidad) as Cantidad FROM carrito WHERE Usuario = '$user'";
                          $resultado= $conexion ->query($sql);
                          while ($row = $resultado ->fetch_assoc()) {
                      ?>
                          <div>
                          <a class="nav-link text-white contenedor" href="carrito.php"><img src="img/carritodecompra.png" width="21" height="21" longdesc="img/carrito.png" ><b class="position-absolute top-0 start-100 translate-middle badge -pill bg-danger centrado"><?php  echo $row ['Cantidad']; ?></b></a>
                          </div>
                         

  


                      <?php 
                      } }
                      
                      ?>
                  </li>
                  
            </ul>

          </div>
        </div>
      </nav>