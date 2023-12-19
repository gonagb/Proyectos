<?php

try{
$im = @imagecreatefrompng("fotoperfil.png");
$tamano = getimagesize("fotoperfil.png");
// var_dump($tamano);
echo "<br>";
echo "Que sepas que la imagen tiene unas proporciones de ".$tamano[3]."<br>";
echo "Que sepas que la imagen tiene una anchura de ".imagesx($im)."<br>";
echo "Que sepas que la imagen tiene una anchura de ".imagesy($im)."<br>";
}catch (Exception $mierror){
    echo "a habido un error: ", $mierror->getMessage(),"\n";
}

?>