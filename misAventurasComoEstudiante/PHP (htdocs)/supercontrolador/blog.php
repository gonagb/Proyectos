<?php
// Conexión a la base de datos MySQL de gonagb
include("conexion.php");
// Consulta SQL para obtener los datos necesarios
$sql = "SELECT imagen, categoria, titulo, enlace FROM proyectos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Itera a través de los resultados y genera el HTML dinámico
    while ($row = $result->fetch_assoc()) {
        echo '<div class="projects_content">';
        echo '<img class="projects__img" src="' . $row["imagen"] . '" alt="' . $row["titulo"] . ' image">';
        echo '<div>';
        echo '<span class="projects__subtitle">' . $row["categoria"] . '</span>';
        echo '<h1 class="project__title">' . $row["titulo"] . '</h1>';
        echo '<a href="' . $row["enlace"] . '" class="projects__button">';
        echo 'Lorem ipsum <i class="ri-arrow-right-line"></i>';
        echo '</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No se encontraron proyectos en la base de datos.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
