<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include("../app/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email_usuario'];
    $password = $_POST['clave_usuario'];

    // Consulta a la base de datos
    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email' LIMIT 1";
    $resultado = mysqli_query($conexion, $sql);

    
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);

        // Verifica la contraseña
        if (password_verify($password, $usuario['clave_usuario'])) {
            // Iniciar sesión
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
            $_SESSION['email_usuario'] = $usuario['email_usuario'];
            
            // Redirige al index con mensaje de éxito
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Inicio de sesión exitoso!',
                        text: 'Has iniciado sesión correctamente.',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        window.location.href = '../indexUser.php';
                    });
                });
            </script>";
            exit();
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Contraseña incorrecta',
                        text: 'Por favor, intenta de nuevo.',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        window.location.href = '../forms/loginFroms.php';
                    });
                });
            </script>";
        }
    } else {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Usuario no encontrado',
                    text: 'El usuario no existe. Por favor, regístrate.',
                    confirmButtonText: 'Registrarse'
                }).then((result) => {
                    window.location.href = '../forms/registerForms.php';
                });
            });
        </script>";
    }
} else {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Método no permitido',
                text: 'Método de solicitud no permitido.',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                window.location.href = '../forms/loginFroms.php';
            });
        });
    </script>";
}
?>
