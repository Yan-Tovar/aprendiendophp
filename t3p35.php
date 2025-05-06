<html>
<head>
<title>Ejercicio35</title>
</head>
<body>
<?php if (isset($_COOKIE['noticia'])){
    echo $_COOKIE['noticia'];
    echo "<form action='t3p35php_2.php' method='post'>
        <input type='submit' value='borrarCookie' name='borrar'>
    </form>";
}
else{
    echo "<div>Este es el componente de una noticia politica</div>"."<br>";
    echo "<div>Este es el componente de una noticia economica</div>"."<br>";
    echo "<div>Este es el componente de una noticia deportiva</div>"."<br>";
    echo "<hr>";
    echo "<form action='t3p35php.php' method='post'>
        Seleccione que tipo de titular desea que muestre la página:<br>
        <input type='radio' value='noticiaPolitica' name='radio'>Noticia Política<br>
        <input type='radio' value='noticiaEconomica' name='radio'>Noticia Económica<br>
        <input type='radio' value='noticiaDeportiva' name='radio'>Noticia Deportiva<br>
        <br>
        <input type='submit' value='Crear cookie'>
        </form>";}
?>
</body>
</html>