<?php 
session_start();
// Abro la conexión con la base de datos (Activar MySQL en Xampp)
    $conn = mysqli_connect ("localhost", "alterplan2023", "alterplan2023", "alterplan");

// Le pido algo a la base de datos
    $peticion = "  
    INSERT INTO eventos
    VALUES (NULL,'".$_POST['eventTitle']."', '".$_POST['startDate']."', '".$_POST['endDate']."', '".$_POST['color']."') ";
    
$resultado = mysqli_query($conn,$peticion);
echo '<meta http-equiv="Refresh" content="0; url=alterplan.php">';

mysqli_close($conn);
?>