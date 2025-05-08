<html>
<head>
<title>Ejercicio44</title>
</head>
<body>
    <h2>Formulario de Alta de Alumno</h2>
    <form action="t3p44php.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese mail:
    <input type="text" name="mail"><br>
    Ingrese la fecha de nacimiento (dd/mm/aaaa):
    <select name="dia" id="">
        <?php
        for($f=1;$f<=31;$f++){
            echo "<option value=$f>$f</option>";
        }
        ?>
    </select>
    <select name="mes" id="">
        <?php
        for($f=1;$f<=12;$f++){
            echo "<option value=$f>Mes $f</option>";
        }
        ?>
    </select>
    <select name="anio" id="">
        <?php
        for($f=1900;$f<=2015;$f++){
            echo "<option value=$f>Año $f</option>";
        }
        ?>
    </select>
    <br>
    Seleccione el curso:
    <select name="codigocurso">
    <?php
    $conexion=mysqli_connect("localhost","root","","base1") or
    die("Problemas con la conexión");
    $registros=mysqli_query($conexion,"select codigo,nombrecurso from
    cursos") or
    die("Problemas en el select:".mysqli_error($conexion));
    while ($reg=mysqli_fetch_array($registros))
    {
    echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
    }
    ?>
    </select>
    <br>
    <input type="submit" value="Registrar">
    </form>
</body>
</html>