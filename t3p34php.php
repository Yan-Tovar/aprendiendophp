<?php
if (isset($_REQUEST['nombre'])){
    setcookie("nombre","$_REQUEST[nombre]",time()+60*60*24*365,"/");
}
?>
<html>
<head>
<title>Ejercicio34</title>

</head>
<body>
Se creó la cookie.
<br>
<a href="t3p34.php">Ir a la otra página</a>

</body>
</html>