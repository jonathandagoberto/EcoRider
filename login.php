<?php
    // Validar la identidad del usuario contra Corabastic
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Realizar la validación y determinar si hay errores
    $errors = array();

    if (empty($username)) {
        $errors[] = "El campo de usuario no puede estar vacío.";
    }

    if (empty($password)) {
        $errors[] = "El campo de contraseña no puede estar vacío.";
    }

    // Mostrar los errores, si los hay
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    } else {
        // Procesar el inicio de sesión exitoso
        echo "Inicio de sesión exitoso. Bienvenido, $username!";
    }
?>

