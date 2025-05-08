<html>
<head>
<title>Ejercicio45</title>
</head>
<body>
    <?php
    $importe=$_REQUEST['importe'];
    printf("La persona ".$_REQUEST['nombre']." con mail ".$_REQUEST['mail']." hizo un importe de $%'07d pesos",$importe);
    ?>
</body>
</html>