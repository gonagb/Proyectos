<?php
include "conexionbd.php";
$peticion = "
DELETE FROM ".$_GET['tabla']." WHERE Identificador = ".$_GET['id']."
";
mysqli_query($conn,$peticion);
echo '<meta http-equiv="Refresh" content="3; url=index.php">';

?>