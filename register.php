<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    // Validar y procesar los datos
    $errors = array();

    // Validar nombre
    if (empty($name)) {
        $errors[] = "El nombre es obligatorio.";
    }

    // Validar correo electrónico
    if (empty($email)) {
        $errors[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electrónico no es válido.";
    }

    // Validar contraseña
    if (empty($password)) {
        $errors[] = "La contraseña es obligatoria.";
    } elseif (strlen($password) < 6) {
        $errors[] = "La contraseña debe tener al menos 6 caracteres.";
    }

    // Validar teléfono
    if (empty($phone)) {
        $errors[] = "El teléfono es obligatorio.";
    }

    // Procesar el formulario si no hay errores
    if (empty($errors)) {

        // Ejemplo: Imprimir los datos ingresados
        echo "Registro exitoso!<br>";
        echo "Nombre: " . $name . "<br>";
        echo "Correo electrónico: " . $email . "<br>";
        echo "Contraseña: " . $password . "<br>";
        echo "Teléfono: " . $phone . "<br>";
    } else {
        // Mostrar errores
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
