<?php
    include "conexion.inc.php";
    session_start();
    $login=$_SESSION['login'];
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
     <link rel="stylesheet" href="estilos.css"> 
      
</head>

<body id="myselect">
<a>BIENVENIDO</a>
<?php echo $login ?>

<form >
    <div class="avatar">
        <script language="JavaScript">
            function actualizar()
            {
                var imag=new Array()
                imag[1]="images/imagen1.png"
                imag[2]="images/imagen2.png"
                imag[3]="images/imagen3.png"

                var resultado=Math.floor(Math.random()*imag.length)
                if (resultado==0)
                    resultado=1
                    document.write('<img  class="avatar" src="'+imag[resultado]+'">')
            }
        actualizar()
        </script>
     </div>
<br>
<label for="">Seleccione el color</label>
<select id="color" onchange="colorChanger()">
   <option value="" selected disabled hidden>selecciona el color</option>
    <option class="pinkText" value="pink">rosado</option>
    <option class="redText" value="red">rojo</option>
    <option class="greenText" value="green">Verde</option>b
    <option class="yellowText" value="yellow">amarillo</option>
</select>
</form>


<script>
    function colorChanger(){
    var selectValue=document.getElementById("color").value;
    document.body.style.backgroundColor=selectValue;
    random_publicidad_sidebar_1()
}
</script>
</body>
</html>