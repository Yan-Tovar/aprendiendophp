<html>
<head>
<title>Ejercicio41</title>
</head>
<body>
<?php
    // Recuperar la dirección y el puntaje de la URL
    $direccion = $_GET['direccion'];
    $puntos = $_GET['puntos'];

    echo "<p>La dirección: <strong>$direccion</strong> tiene un puntaje de: <strong>$puntos</strong></p>";

    // Redirigir a la página para generar el gráfico
    echo "<img src='t3p41php_2.php?puntos=$puntos' alt='Gráfico de Puntaje'>";
  ?>
</body>
</html>