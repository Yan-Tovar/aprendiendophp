<?php
session_start();
?>
<html>
<head>
<title>Ejercicio37</title>
</head>
<body>
<?php
if(isset($_SESSION['nombre'])){
    echo "Bienvenido Usuario: ".
    $_SESSION['nombre'];
    echo "<br><br>";
}else{
    echo "No puedes visitar esta pagina :(";
}

?>
</body>
</html>