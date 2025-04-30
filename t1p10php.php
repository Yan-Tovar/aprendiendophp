<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>
    <?php
        if($_REQUEST['radio1']=='1'){
            echo $_REQUEST['nombre']." No tiene estudios";
        }
        else if($_REQUEST['radio1']=='2'){
            echo $_REQUEST['nombre']." Tiene estudios Primarios";
        }
        else{
            echo $_REQUEST['nombre']." Tiene estudios secundarios";
        }
    ?>
</body>
</html>