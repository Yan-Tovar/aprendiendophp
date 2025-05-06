<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio33</title>
</head>
<body>
    <?php
    // Foto
    copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
    echo "La foto de registró en el servidor"."<br>";
    $nom=$_FILES['foto']['name'];
    echo "<img src=\"$nom\">";
    // Documento
    copy($_FILES['documento']['tmp_name'],$_FILES['documento']['name']);
    echo "El documento de registró en el servidor"."<br>";
    $nom=$_FILES['documento']['name'];
    // Audio
    copy($_FILES['audio']['tmp_name'],$_FILES['audio']['name']);
    echo "El documento de registró en el servidor"."<br>";
    $nom=$_FILES['audio']['name'];
    ?>
</body>
</html>