<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
    <link href="Estilo_2.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action= "ingreso.php" method="post">
        <?php

        include("conexion.php");

        ?>  
    <h1> Formulario de Sistema</h1>
        <input type="text" onclick="" placeholder="&#128272;Usuario" "name=usuario"/>
        <input type="password" placeholder="&#128272;Contraseña" "name=clave"/>
        <input type="submit" value="Ingresar"/>     
</body>
</html>