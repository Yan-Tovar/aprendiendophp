<?php
session_start();
?>
<html>
<head>
<title>Ejercicio36</title>
</head>
<body>
<?php
echo "Nombre de usuario recuperado de la variable de sesión:".
$_SESSION['mail'];
echo "<br><br>";
echo "La clave recuperada de la variable de sesión:".$_SESSION['nombre'];
?>
</body>
</html>