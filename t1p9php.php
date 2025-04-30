<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9 php</title>
</head>
<body>
    <?php
        echo "La persona: ";
        echo $_REQUEST['nombre'];
         if($_REQUEST['edad']<18){
            echo "Es menor de Edad";
         }
         else{
            echo "Es mayor de Edad";
         }
    ?>
</body>
</html>