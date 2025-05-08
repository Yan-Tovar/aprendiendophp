<html>
<head>
<title>Ejercicio44</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","base1") or
die("Problemas con la conexión");
$fechanacimiento=$_REQUEST['anio']."-".$_REQUEST['mes']."-".
$_REQUEST['dia'];
mysqli_query($conexion,"insert into
alumnos(nombre,mail,codigocurso,fechanac) values
('$_REQUEST[nombre]','$_REQUEST[mail]',
$_REQUEST[codigocurso],'$fechanacimiento')") or
die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo "El alumno fue dado de alta.";
?>
<br>
</body>
</html>