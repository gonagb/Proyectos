<?php 
$comando = 'C:\xampp\htdocs\ProyectoFinal\openaipy.py "'.$_GET['pregunta'].'"';

$comando = 'C:\xampp\htdocs\ProyectoFinal\openaipy.py "que es el marketing?"';

echo $comando;
$command = escapeshellcmd($comando);

$output = shell_exec($command);

echo $output;



?>
