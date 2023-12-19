<?php

    $variable = "Goncho";
    $codificado = base64_encode($variable);
    $descodificado = base64_decode($codificado);

    echo "La variable es: ".$variable;
    echo "<br>";
    echo "El codificado es: ".$codificado;
    echo "<br>";
    echo "El descodificado es: ".$descodificado;


?>