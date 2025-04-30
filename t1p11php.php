<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>
    <?php
    $contador=0;
    if (isset($_REQUEST['check1']))
    {
    $contador++;
    }
    if (isset($_REQUEST['check2']))
    {
    $contador++;
    }
    if (isset($_REQUEST['check3']))
    {
    $contador++;
    }
    if (isset($_REQUEST['check4']))
    {
    $contador++;
    }
    echo $_REQUEST['nombre'];
    echo "<br>";
    echo "Cantidad de deportes ".$contador;
    ?>
</body>
</html>