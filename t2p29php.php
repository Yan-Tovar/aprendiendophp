<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio29</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","base1") or 
    die ("Problemas con la conexión");

    $registros=mysqli_query($conexion,"update alumnos set nombre='$_REQUEST[nombrenuevo]',
    mail='$_REQUEST[mailnuevo]', codigocurso='$_REQUEST[codigocurso]' where codigo='$_REQUEST[codigoviejo]'") or
    die ("Problemas en el select:".mysqli_error($conexion));
    echo "El curso fue modificado con exito";
    ?>
</body>
</html>