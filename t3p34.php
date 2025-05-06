<html>
<head>
<title>Ejercicio34</title>
</head>
<body>
<form action="t3p34php.php" method="post">
Ingrese su nombre:<br>
<input type="text" name="nombre" value="<?php if (isset($_COOKIE['nombre'])){
    echo $_COOKIE['nombre'];}
    ?>
    ">
    <br><br>
<input type="submit" value="Crear cookie">
</form>
</body>
</html>