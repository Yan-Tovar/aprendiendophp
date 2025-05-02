<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio25</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","base1") or 
    die("Problemas con la conexión");
    $registros=mysqli_query($conexion,"update cursos set nombrecurso='$_REQUEST[nombreNuevo]'
    where codigo='$_REQUEST[nombreViejo]'") or
    die("problemas con el select:".mysqli_error($conexion));
    echo "El nombre fue modificado con éxito";
    ?>
</body>
</html>