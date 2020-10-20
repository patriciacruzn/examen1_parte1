<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos.css">
    
    <title>pregunta 1</title>
</head>
<?php
    include "conexion.inc.php";
?>
<body>
<h1>Universidad Mayor de San Andrés</h1>
    <div id="menu">
    
    <img class="avatar" src="images/imagen.jpg"/>
    
    <form action="validar.php" method="POST">
    
    <div>Iniciar Sesion</div>
    <label for="">Usuario</label>
    <input type="text" name="login" placeholder="ingrese usuario">
    <br>
    <label for="">Contraseña</label>
    <input type="password" name="clave" placeholder="ingrese contraseña">
    <br>
    <input type="submit" value="Ingresar" name="enviar" >
    </form>
    </div>
</body>
</html>