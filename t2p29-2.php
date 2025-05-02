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

    $registros=mysqli_query($conexion,"select * from alumnos where codigo='$_REQUEST[codigo]'") or
    die ("Problemas en el select:".mysqli_error($conexion));
    if($regalu=mysqli_fetch_array($registros))
    {
    ?>
    <form action="t2p29php.php" method="post">
        nombre nuevo:
        <br>
        <input type="text" name="nombrenuevo" value="<?php echo $regalu['nombre']
        ?>">
        <br>
        mail nuevo:
        <br>
        <input type="text" name="mailnuevo" value="<?php echo $regalu['mail']
        ?>">
        <br>
        <input type="hidden" name="codigoviejo" value="<?php echo $regalu['codigo']
        ?>">
        Codigo Curso:
        <select name="codigocurso">
        <?php
        $registros=mysqli_query($conexion,"select * from cursos") or
        die("Problemas en el select:".mysqli_error($conexion));
        while($reg=mysqli_fetch_array($registros)){
            if($regalu['codigocurso']==$reg['codigo'])
            echo "<option value=\"$reg[codigo]\"
            selected>$reg[nombrecurso]</option>";
            else
            echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        }
        ?>
        </select>
        <br>
        <br>
        <input type="submit" value="modificar">
        </form>
        <?php
    }
    else
    echo "No existe un alumno con dicho codigo";
    ?>
</body>
</html>