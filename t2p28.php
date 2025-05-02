<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio28</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas en la conexión");

    // Consulta
    $registros=mysqli_query($conexion, "select nombrecurso from cursos") or 
    die("Problemas en el select:".mysqli_error($conexion));
    // Mostrar por pantalla
    while($reg=mysqli_fetch_array($registros)){
    echo "Nombre de Curso:".$reg['nombrecurso']."<br>";  
    echo "<hr>";
    }
    // Consulta
    $registros=mysqli_query($conexion, "select count(*) as CantidadCursos from cursos") or 
    die("Problemas en el select:".mysqli_error($conexion));
    // Mostrar por patalla
    $reg=mysqli_fetch_array($registros);
    echo "Cantidad de cursos: ".$reg['CantidadCursos']; 
    ?>
</body>
</html>