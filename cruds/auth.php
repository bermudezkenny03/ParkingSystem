<?php
session_start();


// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_usuario'])) {
    // Redirigir a la página de inicio de sesión
    header("Location: http://localhost/loginAndRegister/forms/registerForms.php");
    exit;
}
?>