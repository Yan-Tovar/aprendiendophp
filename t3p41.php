<html>
<head>
<title>Ejercicio41</title>
</head>
<body>
   <h1>Formulario para puntuar un sitio web</h1>
  <form action="t3p41php.php" method="get">
    <label for="direccion">Dirección del sitio:</label>
    <input type="text" name="direccion" id="direccion" required><br><br>

    <label for="puntos">Puntaje (de 0 a 5):</label>
    <select name="puntos" id="puntos">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select><br><br>

    <input type="submit" value="Enviar">
  </form>
</body>
</html>