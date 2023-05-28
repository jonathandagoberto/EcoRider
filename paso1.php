<?php
include 'config.php';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombreEmpresa = $_POST['nombre'];
    $nombreEncargado = $_POST['encargado'];
    $telefono = $_POST['telefono'];
    // Aquí puedes obtener y procesar los demás campos del formulario

    // Realizar la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión se ha establecido correctamente
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Preparar y ejecutar la consulta SQL para insertar los datos en la tabla correspondiente
    $sql = "INSERT INTO empresas (nombre, encargado, telefono) VALUES ('$nombreEmpresa', '$nombreEncargado', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        // Cerrar la conexión a la base de datos
        $conn->close();

        // Redirigir al usuario a la página de origen
        header("Location: paso2.html");
        exit();
    } else {
        echo "Error al insertar los datos: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>

