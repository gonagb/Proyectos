<?php
// Este archivo actualiza SOLO UN DATO

        $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");

        $peticion = "
        UPDATE ".$_GET['tabla']."
        SET ".$_GET['columna']." = '".$_GET['valor']."'
        WHERE
        identificador = ".$_GET['identificador']."
        
        ";
        
        mysqli_query($enlace,$peticion );


?>
