<html>
<head>
<title>Ejercicio38</title>
</head>
<body>
    <?php
    require_once("t3p38php.php");
    
    $conexion=mysqli_connect('localhost','root','','base1')or
    die ('Problemas con la conexion');

    $registros=mysqli_query($conexion,'select codigo, nombre, mail, codigocurso from alumnos') or 
    die('Problemas con el select:'.mysqli_error($conexion));
    
    while($reg=mysqli_fetch_array($registros)){
        retornarConexion("$reg[codigo]--$reg[nombre]--$reg[mail]--$reg[codigocurso]");
    
    }
    
    mysqli_close($conexion);
    ?>
</body>
</html>