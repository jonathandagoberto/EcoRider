<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos del formulario aquí
    // ...

    // Redirigir a otra página después de procesar los datos
    header('Location: otra_pagina.php');
    exit;
}

// Obtener el idioma actual del usuario (simulado en este ejemplo)
$idiomaActual = 'español';

// Función para mostrar el idioma actual seleccionado
function mostrarIdiomaActual($idioma)
{
    echo '<p>Idioma actual: ' . $idioma . '</p>';
}

// Función para mostrar el formulario de configuración de idioma
function mostrarFormularioIdioma()
{
    echo '
    <form method="POST">
        <h3>Configuración de Idioma</h3>
        <label>
            <input type="radio" name="idioma" value="español"> Español
        </label>
        <br>
        <label>
            <input type="radio" name="idioma" value="inglés"> Inglés
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
    ';
}
?>

