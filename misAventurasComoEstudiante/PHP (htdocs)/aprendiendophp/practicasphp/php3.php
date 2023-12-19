<?php

$o1 = 4;
$o2 = 3;
$o3 = 3;


// Operadores matemáticos
echo "La suma de los dos operadores es ".($o1+$o2)."<br>";
echo "La resta de los dos operadores es ".($o1-$o2)."<br>";
echo "La multip de los dos operadores es ".($o1*$o2)."<br>";
echo "La division de los dos operadores es ".($o1/$o2)."<br>";
echo "La resto entero de la division de los dos operadores es ".($o1%$o2)."<br>";

// Oprarddores de igualdad
echo "Es cierto que los dos operandos son iguales?" .($o2 == $o3)."<br>";
echo "Es cierto que los dos operandos son exactamente iguales?" .($o2 === $o3)."<br>";
echo "Es cierto que los dos operandos no son iguales?" .($o1 != $o2)."<br>";

// Operadores Booleanos
$dia = "miercoles";
$mes = "agosto";

echo "Es cierto que las dos son correctas?".($dia == "miercoles" && $mes == "agosto")."<br>"; // 1 = true
echo "Es cierto que las dos son correctas?".($dia == "miercoles" && $mes == "octubre")."<br>"; // " " = false
echo "Es cierto que alguna de las dos son ciertas?".($dia == "miercoles" || $mes == "octubre")."<br>";// 1 = true
echo "Es cierto que alguna de las dos son ciertas?".($dia == "martes" || $mes == "octubre")."<br>"; // " " = false


?>