<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php
        $numero=rand(1,100);
        echo $numero;
        if ($numero<50){
            echo "El número es menor";
        }
        else if($numero==50){
            echo "El número es igual";
        }
        else{
            echo "El número es mayor";
        }
    ?>
</body>
</html>