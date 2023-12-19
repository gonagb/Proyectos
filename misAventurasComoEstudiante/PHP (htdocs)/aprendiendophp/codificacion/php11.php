<?php

function Cencode($sujeto){
    $construye = "";
    for($i = 0;$i<strlen($sujeto);$i++){
        $construye .= chr(ord($sujeto[$i])+1);
    } // return base64_encode (base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($construye)))))));
    return $construye;
}
    
function Cdecode($sujeto){
    $construye = "";
    $descomprimido = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($construye)))))));
    for($i = 0;$i<strlen($descomprimido);$i++){
        $construye .= chr(ord($descomprimido[$i])-1);
    }
    return $construye;
}

$nombre = "Goncho";
echo "El nombre es: ".$nombre."<br>";
$codificado = Cencode($nombre);
echo "El Codificado es: ".$codificado."<br>";


?>