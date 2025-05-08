<html>
<head>
<title>Ejercicio45</title>
</head>
<body>
<?php
$tablaAsccii ="";
for ($i=32;$i<=126;$i++){
    $tablaAsccii.=sprintf("Código: %3d, carácter: %c\n",$i,$i);
}
echo nl2br($tablaAsccii);
?>
</body>
</html>