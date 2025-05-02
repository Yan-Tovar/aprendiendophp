<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio27</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
    $registros=mysqli_query($conexion,"select alumnos.codigo as codigoalumno, nombre, mail,nombrecurso, codigocurso from alumnos inner join 
    cursos on cursos.codigo=alumnos.codigocurso where alumnos.codigo=$_REQUEST[codigo]")
    or
    die("Problemas en el select".mysqli_error($conexion));
    if($reg=mysqli_fetch_array($registros)){
        echo "Codigo:".$reg['codigoalumno']."<br>";
        echo "Nombre:".$reg['nombre']."<br>";
        echo "Mail:".$reg['mail']."<br>";
        echo "Curso:".$reg['nombrecurso']."<br>";
        echo "<hr>";
    }else{
        echo "El alumno no éxiste";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>