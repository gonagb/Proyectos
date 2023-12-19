<?php
// Conecta a la base de datos
$conn = new mysqli("localhost", "alterplan2023", "alterplan2023", "alterplan");

// Verifica si la conexión falló
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

// Ejecuta una consulta para seleccionar todos los eventos
$result = $conn->query("SELECT * FROM eventos");

// Crea un array para almacenar los eventos
$events = array();

// Recorre cada evento y lo agrega al array
while($row = $result->fetch_assoc()) {
    $event = array(
        'title' => $row['titulo'],
        'start' => $row['fecha'],
        'end' => $row['final'],
        'color' => $row['color'],

    );
    array_push($events, $event);
}

// Devuelve los eventos en formato JSON
//$cadena = var_dump($events);
//echo "<script>console.log($cadena);</script>";
for($i = 0;$i<count($events);$i++){
    $cadena = "{";
    foreach($events[$i] as $clave=>$valor){
        $cadena .= "".$clave.":'".$valor."',";
    }
    $cadena = substr($cadena,0,-1);
    $cadena .= "},";
    echo $cadena;
}
// Cierra la conexión
$conn->close();
?>
