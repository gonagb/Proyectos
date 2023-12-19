<?php 
    $edad = 36;

    if($edad <30){
        echo "Eres una persona joven<br>";
    }else{
        echo "Ya no eres una persona joven<br>";
    }

    $dia ="viernes";
    switch($dia){
        case "lunes":echo "Hoy es el peor dia de la semana";break;
        case "martes":echo "Hoy es el segundo peor dia de la semana";break;
        case "miercoles":echo "Hoy es el dia intermedio de la semana";break;
        case "jueves":echo "Mañana ya será Viernes";break;
        case "viernes":echo "Por fin es Viernes";break;
        case "sabado":echo "Hoy es el mejor dia de la semana";break;
        case "domingo":echo "Hoy toca descansar que mañana vuelve a ser Lunes";break;
        default:echo "Lo que has escrito no es un día de la semana";break;

    }
?>