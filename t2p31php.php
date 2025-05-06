<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio31</title>
</head>
<body>
    <?php
    $codigo= $_REQUEST['codigo'];
    $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");

    $registros=mysqli_query($conexion,"Select codigo, nombre, mail, codigocurso from alumnos where codigocurso=$codigo") or 
    die("Problemas con el select:".mysqli_error($conexion));

    while($reg=mysqli_fetch_array($registros)){
        echo "Estudiante: "."<br>";
        echo "Codigo ".$reg['codigo']."<br>";
        echo "Nombre ".$reg['nombre']."<br>";
        echo "Mail ".$reg['mail']."<br>";
        echo "CodigoCurso ".$reg['codigocurso']."<br>";
        echo "<br>";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>