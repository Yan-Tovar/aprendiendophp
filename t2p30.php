<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio30</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or 
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, 
        "SELECT codigocurso, COUNT(alumnos.codigo) AS cantidad, nombrecurso 
        FROM alumnos 
        INNER JOIN cursos ON cursos.codigo = alumnos.codigocurso 
        GROUP BY codigocurso") 
        or die("Problemas con el select: " . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre del curso: " . $reg['nombrecurso'] . "<br>";
        echo "Cantidad de alumnos: " . $reg['cantidad'] . "<br>";

        $alumnos = mysqli_query($conexion, 
            "SELECT nombre FROM alumnos WHERE codigocurso = " . $reg['codigocurso']) 
            or die("Problemas con el select de alumnos: " . mysqli_error($conexion));

        while ($alumno = mysqli_fetch_array($alumnos)) {
            echo "Nombre del alumno: " . $alumno['nombre'] . "<br>";
        }

        echo "<hr>";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>