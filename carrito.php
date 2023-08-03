<?php
  session_start();
  error_reporting(0);
  $_SESSION['Usuario'];
  $user=$_SESSION['Usuario'];
  include("php/conexion.php");

  if (!isset($_SESSION['Usuario'])) 
  {
    header("location:Index.php"); 
  }
 


?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logooficial.png">
    <?php 
      $consulta= "SELECT Sum(Cantidad) as Cantidad FROM carrito WHERE Usuario = '$user'" ; 
      $resultado = mysqli_query($conexion,$consulta);
                     
      while($row=mysqli_fetch_array($resultado)){
                          
    ?> 

    <title>(<?php  echo $row ['Cantidad']; ?>) Carrito &bull;  Compumundo</title>

    <?php 
    }                          
    ?> 
    <!-- CSS -->

    <link href="css/hoversito.css" rel="stylesheet" type="text/css" />
    <link href="css/altaimagen.css" rel="stylesheet"  type="text/css" >
    <link href="css/carritoo.css" rel="stylesheet"  type="text/css" >


    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
        
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">


    <!-- Codigos Bootstrap.
    ========================================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
          

  </head>

  
  <body class="bg-light">
  
    <header>
        <!-- Inicio del Navbar.
        ========================================================= -->

        <?php
        include("plantillas/header.php");
        ?>
    </header>


    <!--Main---------------------------------------------------------------------------------------------------------------------------------->
   
    <main role="main">
    
      <div class="container py-5 mb-5">

            <!-------Buscador-----------------------------------------------------------------------------

            <form action="buscador.php" class="form-inline my-2 py-3 my-lg-0" method="post" enctype="multipart/form-data">
              <input class="form-control mr-sm-2"  name="buscar" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark  my-2 my-sm-0"  type="submit">Buscar</button>

            </form> 
            
                    
            -----Fin del Buscador------------------------------------------------------------------------------------->  
                
              <form action="php/eliminar.php" class="my-2 my-lg-0" method="post" enctype="multipart/form-data">


                  <?php 
                 
                        $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Descripcion, SUM(Cantidad) AS Cantidad, SUM(Precio*Cantidad) AS Precio FROM carrito WHERE Usuario = '$user' GROUP BY Cod_Producto";
                        $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                        $carrito=mysqli_fetch_assoc($resultado);
                        if ($carrito>0){
                      
                        
                        
                    ?>
                    <nav class="navbar-expand-lg">
                    <div class="navbar-collapse">
                      <?php 
                      

                        $sql = "SELECT  Sum(Cantidad) as Cantidad FROM carrito WHERE Usuario = '$user'";
                        $resultado= $conexion ->query($sql);
                        while ($row = $resultado ->fetch_assoc()) {
                      ?>
                      <a class="nav-link text-dark border-bottom border-dark"><h5>Carrito de Compras&nbsp;<span class="text-dark">(<?php  echo $row ['Cantidad']; ?>)</span></h5></a>
                      <?php 
                      }  
                      ?>
                    </div>
                    </nav>
                    

                    <table class="table bg-white border">
                   
                      <tbody>

                      <?php 
               
                          $consulta = "SELECT Usuario, Cod_Producto, Imagen, Producto, Descripcion, SUM(Cantidad) AS Cantidad, SUM(Precio*Cantidad) AS Precio FROM carrito WHERE Usuario = '$user' GROUP BY Cod_Producto";
                          $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                          while ($carrito=mysqli_fetch_assoc($resultado)){                     
                                    
                      ?>

                    
                     <tr >  
                        <td width="80">
                          <div class="text-center form-group form-check py-4">
                            <input type="checkbox" class="form-check-input" name="checkbox[]" value="<?php echo $carrito['Cod_Producto']?>"/>
                            <label class="form-check-label" for="exampleCheck1"></label>
                          </div>
                        </td>
                          
                        <!--<td><input type=image src="img/actualizar.png" width="25px" height="25px" name="actualizar"/>
                        <input type=image src="img/guardar.png" width="25px" height="25px" name="guardar"/>
                        <input type=image src="img/eliminar.png" width="25px" height="25px" name="eliminar"/></td>-->
                        <td class="py-4" width="85"><img src="<?php echo $carrito ['Imagen'];?>" width="50" height="50"/></td>
                        <td class="py-3" width="650"><b><?php echo $carrito ['Producto']; ?></b>
                        <p><?php echo $carrito ['Descripcion']; ?></p></td>  
                        <td class="text-center" width="90"><p class="py-4"><?php echo $carrito ['Cantidad']; ?></td>   
                        <td width="100"><p class="py-4"><font face=""><?php echo '$'.$carrito ['Precio']; ?></font></p></td>
                        
                                        
                      </tr>
                                                
                      <?php 
                    }
                    ?>

                      </tbody>

                   

                  </table>  

                  
           

                 <?php 
                    

                      $consulta ="SELECT * , SUM(Cantidad) as Sumcantidad, SUM(Cantidad*Precio) as Total FROM carrito WHERE Usuario = '$user'";
                      $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                      while( $carrito = mysqli_fetch_assoc($resultado) ) { 

                                          
                      
                    ?>
                    <table class="table bg-white border">
                      <tbody class="">
                        <tr>  
                          <td class="border-top border-dark" width="80"></td>
                          <td class="text-wlight border-top border-dark" width="85"><h4><b>Total</h4></b></td>
                          <td class="border-top border-dark" width="650"></td>  
                          <td class="text-center text-dark border-top border-dark" width="60"><p><?php echo $carrito ['Sumcantidad']; ?></p></td>   
                          <td class="border-top border-dark" width="100"><h5><p class="text-"><?php echo '$'.$carrito ['Total']; ?></p></h5></td>
                        </tr>
                     
                      </tbody>
                    </table> 
                    

                    <!----------------------------Total carrito--------------
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                        <h5><b><a class="page-link text-dark" tabindex="-1">Total</a></b></h5>
                        </li>
                        <li class="pager-item disabled">
                        <h5><a class="page-link text-success"><?php echo '$'.$carrito ['Total']; ?></a></h5>
                        </li>
                      </ul>
                    </nav>

                    ------------------------------------------------------------>
                              
                    <?php 
                    }
                    ?>

                  <div class="text center py-3 mb-5">
                        
                        <!-- Nuevo Codigo ---------------------------------------------------------------------------------------------->
                        
                            <button class="btn text-dark my-2 my-sm-0" style="background-color:#CEE3F6" type="submit" data-toggle="tooltip" data-placement="bottom" title="Seleccione el producto que quiera eliminar en los cuadrados">Eliminar Producto</button>
                            </form>
                            
                            <!-- Nuevo Codigo 
                            <a href="carrito.php" role="buttom" class="btn btn-info btn-success my-2 my-sm-0"><img src="img/actualizar.png" width="35px" height="30px" name="guardar"/> Actualizar Carrito</a>
                            -->
                            
                            <a href="formadepago.php" role="buttom" class="btn btn-primary my-2 my-sm-0">Comprar Carrito</a>
                            <!--
                            <button class="btn btn-warning my-2 my-sm-0"  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><img src="img/carritolleno.png" width="35px" height="30px" name="guardar"/> Comprar Carrito</button>
                            -->
                        
                  </div>


           
                  <?php 
                     
                    }else{  
                      
                  ?>

                  <?php 
              
                      $consulta ="SELECT Nombre FROM registrodeusuario WHERE Usuario = '$user'";
                      $resultado = mysqli_query($conexion, $consulta) or die("error base de datos:". mysqli_error($conexion));
                      while( $carrito = mysqli_fetch_assoc($resultado) ) { 
                    ?>
                  
                  <div class="py-5 mb-5">
                    <nav class="navbar-expand-lg">
                    <div class="navbar-collapse">
                      <a class="nav-link text-dark border-bottom border-dark"><h5>Carrito de Compras&nbsp;<span class="text-dark">(Vacio)</span></h5></a>
                    </div>
                    </nav>
                    

                  <table class="table bg-white border">
                    <tbody>
                    <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>  
                      <td class="text-center py-5"><h2><font face="Decorative"><?php echo $carrito ['Nombre']; ?> tu carrito está vació. Seleccione algún producto para agregar.</font></h2></td>   
                      <td class="text-center"></td>   
                      <td class="text-center"></td>
                    </tbody>   
                        
                  </table>        

                  </div>             


                    <?php 
                    }
                    }
                    
                    ?>
            
                  </tbody>

                </table>  
              

            </div>

          </div><!-- /.container -->
    </main>

    <!--Footer---------------------------------------------------------------------------------------------------------------------------------->

    <?php
      include ("plantillas/footer.php")
    ?>

    <!--Fin del Footer--------------------------------------------------------------------------------------------------------------------->
  

    <!-- Codigos JavaScript.
    ========================================================= -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
    $(function () {
    $('[data-toggle="popover"]').popover()
    })
    </script>

    <script>
      // Select all elements with data-toggle="tooltips" in the document
      $('[data-toggle="tooltip"]').tooltip();

      // Select a specified element
      $('#myTooltip').tooltip();
    </script>



    <!-- Fin del JavaScript.
    ========================================================= -->

  </body>

</html>