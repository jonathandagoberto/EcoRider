function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var errorDiv = document.getElementById("error-msg");

    // Limpiar los mensajes de error previos
    errorDiv.innerHTML = "";

    // Validar los campos
    if (username === "") {
        errorDiv.innerHTML += "<p class='error'>El campo de usuario no puede estar vacío.</p>";
    }

    if (password === "") {
        errorDiv.innerHTML += "<p class='error'>El campo de contraseña no puede estar vacío.</p>";
    }

    // Devolver falso si hay errores, para cancelar el envío del formulario
    return errorDiv.innerHTML === "";
}
