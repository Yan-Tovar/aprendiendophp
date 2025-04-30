<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio15</title>
</head>
<body>
    <?php
    // Codigo condicional que valida la informacion adecuando su lectura
    if (isset($_REQUEST['check1']))
    {
    $check1="Jamon y Queso";
    }
    else{
    $check1="Vacio Jamon y Queso";
    }
    if (isset($_REQUEST['check2']))
    {
    $check2="Napolitana";
    }
    else{
    $check2="Vacio Napolitana";
    }
    if (isset($_REQUEST['check3']))
    {
    $check3="Muzzarella";
    }
    else{
        $check3="Vacio Muzzarella";
    }
    // Codigo que crea el documento "pedidos.txt"
    $ar=fopen("pedidos.txt","a") or
    die("Problemas en la creacion");
    fputs($ar,$_REQUEST['nombre']);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['direccion']);
    fputs($ar,"\n");
    fputs($ar,$check1);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['cantidadcheck1']);
    fputs($ar,"\n");
    fputs($ar,$check2);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['cantidadcheck2']);
    fputs($ar,"\n");
    fputs($ar,$check3);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['cantidadcheck3']);
    fputs($ar,"\n");
    fputs($ar,"--------------------------------------------------------");
    fputs($ar,"\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
    echo "<br>";
    // Codigo que abre en el navegador el documento "pedidos.txt" !!!!!!!!!!!!!!!PUNTO 16!!!!!!!!!!!
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