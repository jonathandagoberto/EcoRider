<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $total = $_POST['total'];
    $prestados = $_POST['prestados'];

    $sql = "INSERT INTO recursos (nombre, total, prestados) VALUES ('$nombre', '$total', '$prestados')";

    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han almacenado correctamente en la base de datos.";
    } else {
        echo "Error al insertar los datos: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
