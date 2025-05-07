<html>
<head>
<title>Ejercicio42</title>
</head>
<body>
<?php
    $fecha=date("d/m/Y");
    $hora=date("H:i:s");
    // Codigo que crea el documento "pedidos.txt"
    $ar=fopen("quejas.txt","a") or
    die("Problemas en la creacion");
    fputs($ar,"Nombre ".$_REQUEST['nombre']);
    fputs($ar,"\n");
    fputs($ar,"Queja ".$_REQUEST['descripcion']);
    fputs($ar,"\n");
    fputs($ar,"Fecha ".$fecha);
    fputs($ar,"\n");
    fputs($ar,"Hora ".$hora);
    fputs($ar,"\n");
    fputs($ar,"--------------------------------------------------------");
    fputs($ar,"\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
    echo "<br>";
    ?>
    <a href="t3p42php_2.php">Visualizar las quejas</a>
</body>
</html>