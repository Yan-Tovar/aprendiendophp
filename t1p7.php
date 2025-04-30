<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    <?php
    $numero=rand(1,3);
    echo $numero;
    if($numero==1){
        echo "Uno";
    }
    else if($numero==2){
        echo "Dos";
    }
    else{
        echo "Tres";
    }
    ?>
</body>
</html>