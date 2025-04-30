<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>
    <?php
    echo "<h1>Ciclo FOR</h1>";
    for($x=1;$x<=20;$x++){
        echo "2 X ";
        echo $x."=";
        echo $x*2;
        echo "<br>";
    }
    echo "<h1>Ciclo While</h1>";
    $contador=1;
    while ($contador<=20){
        echo "2 X ";
        echo $contador."=";
        echo $contador*2;
        echo "<br>";
        $contador++;
    }
    echo "<h1>Ciclo Do-While</h1>";
    $cont=1;
    do{
        echo "2 X ";
        echo $cont."=";
        echo $cont*2;
        echo "<br>";
        $cont++;
    }while ($cont<=20)
    ?>
</body>
</html>