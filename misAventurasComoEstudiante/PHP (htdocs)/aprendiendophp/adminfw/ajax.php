<?php

    // Este archivo actualiza UN SOLO DATO

include "conexionbd.php";
$peticion = "
UPDATE ".$_GET['tabla']."
SET ".$_GET['columna']." = '".$_GET['valor']."'
WHERE 
Identificador = ".$_GET['identificador']."
";
mysqli_query($conn,$peticion);


?>