<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio18</title>
</head>
<body>
    <?php
    function validarContrasenia($clave,$confirmarclave){
        if ($clave==$confirmarclave){
            echo "Las contraseñas son iguales";
        }
        else{
            echo "Las contraseñas son distintas";
        }
    }
    $contrasenia=$_REQUEST['contrasenia'];
    $confirmacionContrasenia=$_REQUEST['confirmacionContrasenia'];
    validarContrasenia($contrasenia,$confirmacionContrasenia);
    ?>
</body>
</html>