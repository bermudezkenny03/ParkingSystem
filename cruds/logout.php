<?php
include("../cruds/auth.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("Location: ../forms/loginFroms.php");
exit;
?>
