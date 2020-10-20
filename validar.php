<?php
include "conexion.inc.php";
session_start();
$usuario=$_POST['login'];
$contraseña=$_POST['clave'];

//creamos un incio de sesion

$_SESSION['login']=$usuario;

//crearmoa una varaible para llamar a la base de datos
$sql="select *from usuario where login='$usuario' and clave='$contraseña'";
//variable para guarde la funcionq va hacer la validacion
$resultado=mysqli_query($conn,$sql);

$filas=mysqli_num_rows($resultado);

if($filas){
   // $_SESSION['login']=$usuario;
    header("location:home.php");
}
else{
    ?>
    <?php
    include "index.php";
    ?>
    <div id="error">
    <a class="bad">Error en la autenticacion</a>
    </div>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conn);
?>
