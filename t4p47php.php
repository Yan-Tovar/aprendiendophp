<?php 
$descripcion=$_REQUEST['descripcion'];
$precio=$_REQUEST['precio'];
$codigorubro=$_REQUEST['codigorubro'];
$conexion = new mysqli("localhost", "root","", "base1");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$sql = "INSERT INTO articulos (descripcion,precio,codigorubro) VALUES ('$descripcion','$precio','$codigorubro')";
$resultado = $conexion->query($sql);
$conexion->close();
header("location:t4p47.php?guardado=1");
?>