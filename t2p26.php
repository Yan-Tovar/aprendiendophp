<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio26</title>
</head>
<body>
    <form action="t2p26php.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese mail:
    <input type="text" name="mail"><br>
    Seleccione el curso:
    <?php
    $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
    $registros=mysqli_query($conexion,"select codigo,nombrecurso from
    cursos") or
    die("Problemas en el select:".mysqli_error($conexion));
    while ($reg=mysqli_fetch_array($registros))
    {
    echo "<input type='radio' name='codigocurso' value=\"$reg[codigo]\">$reg[nombrecurso]</input>";
    }
    ?>
    <br>
    <input type="submit" value="Registrar">
    </form>
</body>
</html>