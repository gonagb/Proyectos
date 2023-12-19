<?php
header("Content-type: image/png");
move_uploaded_file($_FILES["imagen"]["name"],"fotoperfil.png");

$im = imagecreatefrompng("fotoperfil.png");
imagefilter($im, IMG_FILTER_GRAYSCALE);
$blanco = imagecolorallocate($im, 255, 255, 255);
$blancotransp = imagecolorallocatealpha($im, 255, 255, 255, 50);
$fuente = 'arial.ttf';
for($x = 0;$x<512;$x+=70){
    for($y = 0;$y<512;$y+=7){
        imagettftext($im,20,0,10,20,$blancotransp,$fuente, "Hola soy Goncho");
    }
}
imagepng($im);

?>