<html>
<head>
<title>Ejercicio43</title>
</head>
<body>
    <form action="t3p43php.php" method="post">
    Ingrese una fecha (dd/mm/aaaa):
    <select name="dia" id="">
        <?php
        for($f=1;$f<=31;$f++){
            echo "<option value=$f>$f</option>";
        }
        ?>
    </select>
    <select name="mes" id="">
        <?php
        for($f=1;$f<=12;$f++){
            echo "<option value=$f>Mes $f</option>";
        }
        ?>
    </select>
    <select name="anio" id="">
        <?php
        for($f=2000;$f<=2025;$f++){
            echo "<option value=$f>$f</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="validar">
    </form>
</body>
</html>