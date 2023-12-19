<?php
$enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
$cont = 0;
foreach ($_POST as $clave => $valor){
    if($cont >= 2){
        echo "Voy a actualizar el valor del campo: ".$clave." con el valor: ".$valor."<br>";
        $peticion = "
            UPDATE 
            ".$_POST['tabla']."
            SET ".$clave." = '".$valor."'
            WHERE
            identificador = ".$_POST['id']."
            ";
        mysqli_query($enlace,$peticion);
    }
    $cont++;
}
    
    
    echo '<meta http-equiv="refresh"
        content="1; url=index.php?tabla='.$_POST['tabla'].'">';
?>
