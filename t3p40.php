<?php
// Definir el tamaño de la imagen (por ejemplo, 200px de ancho y 50px de alto)
$ancho = 200;
$alto = 50;

// Crear una imagen en blanco (de 200x50 píxeles)
$imagen = imagecreatetruecolor($ancho, $alto);

// Definir los colores
$fondo = imagecolorallocate($imagen, 200, 200, 200); // Color gris para el fondo
$color_boton = imagecolorallocate($imagen, 0, 102, 204); // Color azul para el botón
$color_texto = imagecolorallocate($imagen, 255, 255, 255); // Color blanco para el texto

// Llenar la imagen con el color de fondo (gris)
imagefill($imagen, 0, 0, $fondo);

// Dibujar el botón: un rectángulo relleno de color azul
// Coordenadas del rectángulo: (x1, y1) = (10, 10), (x2, y2) = (190, 40)
imagefilledrectangle($imagen, 10, 10, 190, 40, $color_boton);

// Añadir el texto en el centro del rectángulo (botón)
// Usamos la función imagestring para dibujar el texto, con coordenadas centradas
// Calculamos el centro horizontalmente y verticalmente
$texto = "Hacer clic";
$fuente_x = (imagesx($imagen) - strlen($texto) * 7) / 2; // Ajustamos para centrar horizontalmente
$fuente_y = (imagesy($imagen) - 15) / 2; // Ajustamos para centrar verticalmente

imagestring($imagen, 5, $fuente_x, $fuente_y, $texto, $color_texto);

// Enviar los encabezados para que el navegador sepa que es una imagen PNG
header('Content-Type: image/png');

// Generar la imagen en formato PNG
imagepng($imagen);

// Liberar la memoria de la imagen
imagedestroy($imagen);
?>
