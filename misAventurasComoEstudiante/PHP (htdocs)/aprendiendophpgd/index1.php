<?php
header("Content-type: image/png");
// Crear una imagen de 55x30
$im = imagecreatetruecolor(512, 512);
$blanco = imagecolorallocate($im, 255, 255, 255);
$rojo = imagecolorallocate($im, 255,0,0);

// Dibujar un rectángulo blanco
imagefilledrectangle($im, 0, 0, 512, 512, $blanco);
for ($i = 0;$i<100;$i++) {
    $x = rand(0,512);
    $y = rand(0,512);
    imagefilledrectangle($im, $x, $y, $x+50, $y+50, imagecolorallocate($im, round(rand(0,255)),round(rand(0,255)),round(rand(0,255))));
                        }

// Guardar la imagen
imagepng($im);
// imagepng($im, './imagefilledrectangle.png');
imagedestroy($im);


?>