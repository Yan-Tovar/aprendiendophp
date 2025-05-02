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
    $registros=mysqli_query($conexion,"select * from cursos where codigo='$_REQUEST[codigo]'") or
    die("problemas con el select:".mysqli_error($conexion));
    if($reg=mysqli_fetch_array($registros))
    {
    ?>
    <form action="t2p25php.php" method="post">
        ingrese nuevo nombre del curso
        <input type="text" name="nombreNuevo" value="<?php echo $reg['codigo']?>" >
        <br>
        <input type="hidden" name="nombreViejo" value="<?php echo $reg['codigo']?>" >
        <input type="submit" value="modificar">
    </form>
    <?php
    }
    else{
        echo "No existe curso con dicho codigo";
    }
    ?>
</body>
</html>