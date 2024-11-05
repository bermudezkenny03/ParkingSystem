<?php
include("../app/config.php");

$identificasion = $_POST['id_usuario'];
$nombre = $_POST['nombre_usuario'];
$email = $_POST['email_usuario'];
$celular = $_POST['celular_usuario'];
$direccion = $_POST['direccion_usuario'];
$password = $_POST['clave_usuario'];
$role = $_POST['RoleU'];


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (id_usuario, nombre_usuario, email_usuario, celular_usuario, direccion_usuario, clave_usuario, id_rol_usuario) VALUES
('$identificasion','$nombre','$email','$celular','$direccion','$hashedPassword','$role')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === true) {
    echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Datos insertados correctamente',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../forms/loginFroms.php';
                }
            });
        }
    </script>";
} else {
    $error_message = mysqli_error($conexion);
    echo "<script>
        window.onload = function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Datos no insertados, por favor intente nuevamente: $error_message'
            });
        }
    </script>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
