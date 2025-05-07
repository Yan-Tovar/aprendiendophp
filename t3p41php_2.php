<?php
// Recuperamos el puntaje desde la URL
$puntos = isset($_GET['puntos']) ? (int)$_GET['puntos'] : 0;

// Crear una imagen en blanco (ancho 200px, alto 200px)
$ancho = 300;
$alto = 100;
$imagen = imagecreatetruecolor($ancho, $alto);

// Definir los colores
$fondo = imagecolorallocate($imagen, 255, 255, 255); // blanco
$color_circulo = imagecolorallocate($imagen, 0, 0, 255); // azul

// Llenar la imagen con el color de fondo
imagefill($imagen, 0, 0, $fondo);

// Dibujar círculos según el puntaje
$radio = 20;
$espaciado = 40; // Espacio entre los círculos

for ($i = 0; $i < $puntos; $i++) {
    $centro_x = 30 + $i * $espaciado; // Ajusta la posición horizontal
    $centro_y = $alto / 2;            // Centrado vertical

    // Dibujar un círculo lleno
    imagefilledellipse($imagen, $centro_x, $centro_y, $radio * 2, $radio * 2, $color_circulo);
}

// Enviar los encabezados para que el navegador entienda que es una imagen PNG
header('Content-Type: image/png');

// Generar la imagen en formato PNG
imagepng($imagen);

// Liberar la memoria de la imagen
imagedestroy($imagen);
?>
