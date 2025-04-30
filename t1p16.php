<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
<body>
    <H1>El punto 16 depende del punto 15 para mostrar su resultado</H1>
    <br>
    <?php
    $ar=fopen("pedidos.txt","r") or
    die("No se pudo abrir el archivo");
    while (!feof($ar))
    {
    $linea=fgets($ar);
    $lineasalto=nl2br($linea);
    echo $lineasalto;
    }
    fclose($ar);
    ?>
</body>
</html>