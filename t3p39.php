<html>
<head>
<title>Ejercicio39</title>
</head>
<body>
    <form action="t3p39php.php" method="post">
    Ingrese la clave:
    <input type="text" name="clave" size="3"><br>
    <input type="submit" value="Redireccionar">
    </form>
    <?php
    if (isset($_REQUEST['error']))
    echo "Ingresó clave incorrecta";
    ?>
</body>
</html>