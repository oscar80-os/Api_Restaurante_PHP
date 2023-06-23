<?php
// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Aquí deberías realizar la validación de las credenciales y verificar si son correctas
    // Puedes usar consultas a la base de datos, autenticación con usuarios y contraseñas almacenados, etc.

    // Ejemplo de verificación de las credenciales
    if ($username === "admin" && $password === "123456") {
        // Inicio de sesión exitoso
        // Puedes establecer una variable de sesión para identificar que el usuario ha iniciado sesión
        session_start();
        $_SESSION["loggedin"] = true;

        // Redirigir al usuario a administracion.html
        header("Location: administracion.html");
        exit;
    } else {
        // Las credenciales son incorrectas
        echo "Inicio de sesión fallido. Inténtalo nuevamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="administracion.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <img src="img/cocinera_logo.png" alt="logo">
    <h1>Iniciar sesión</h1>
    <form action="login.php" method="POST">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
