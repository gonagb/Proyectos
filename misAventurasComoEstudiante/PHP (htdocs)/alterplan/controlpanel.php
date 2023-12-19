<?php
session_start();
    if(!isset($_SESSION['correcto']) || ($_SESSION['correcto']) == false){
        die("Te has intentado colar en el Panel de Control sin permiso");
    }
    echo "<a href='logout.php'>Cerrar sesión</a><br>"
?>