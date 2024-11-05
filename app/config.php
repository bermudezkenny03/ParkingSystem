<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "dbsistemaparking";

$conexion = new mysqli($host, $user, $pass, $db);

echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

if ($conexion->connect_error) {
    echo '<script>
            Swal.fire({
                icon: "error",
                title: "Error de conexión",
                text: "No se pudo conectar a la base de datos. Verifique los detalles de la conexión.",
                confirmButtonText: "Aceptar"
            });
          </script>';
    exit();
}

$URL = 'http://localhost/loginAndRegister/'; 
?>
