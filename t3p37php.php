<?php
session_start();
?>
<html>
<head>
<title>Ejercicio36</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or 
die ("Problemas con la conexion");
$registros=mysqli_query($conexion,"select mail, nombre from alumnos where mail='$_REQUEST[mail]'") or
die("Problemas con el select:".mysqli_error($conexion));
if($reg=mysqli_fetch_array($registros)){
    $_SESSION['mail']=$reg['mail'];
    $_SESSION['nombre']=$reg['nombre'];
    echo "<a href='t3p37php_2.php'>Ir a la pagina</a>";
}
mysqli_close($conexion);
?>
</body>
</html>
