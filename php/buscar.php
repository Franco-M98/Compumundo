<?php
    $mysqli= new mysqli("localhost","root","","afiliados");
    $salida="";
    $query="SELECT * From productos order by Cod_Producto";
    if (isset($_POST['consulta'])){
        $q = $mysqli->real_escape_String($_POST['consulta']);
        $query = "SELECT Cod_Producto, Producto, Descripcion, Cantidad, Precio From productos
        WHERE Producto LIKE '%" .$q. "%' OR Descripcion LIKE '%".$q."%' OR Cantidad LIKE '%".$q."%' OR Precio LIKE '%".$q."%'";
    }
    
    $resultado = $mysqli->query($query);

    if($resultado->num_rows>0){
            $salida.="<tabla class="tabla_datos">
                        <thead>
                            <tr>
                                <td>Cod_Producto</td>
                                <td>Producto</td>
                                <td>Descripcion</td>
                                <td>Cantidad</td>
                                <td>Precio</td>
                            </tr>
                        </thead>
                        <tbody>";

    while($file = $resultado->fetch_assoc()){
        $salida.="<tr>
                <td>".$fila['Cod_Producto']."</td>
                <td>".$fila['Producto']."</td>
                <td>".$fila['Descripcion']."</td>
                <td>".$fila['Cantidad']."</td>
                <td>".$fila['Precio']."</td>
            </tr>";

            }
        $salida.="</tbody></table>";


   }else {
       $salida.="No hat datos";

   }

   echo $salida;

   
   ?>

<?php
    include("../index.php");
?>