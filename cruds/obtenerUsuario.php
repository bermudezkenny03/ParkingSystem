<?php
include("../cruds/auth.php");
require("../app/config.php");

$resultado = null;

if (isset($_GET['id'])) {
    $id_usuario = $_GET['id'];

    // Consulta para obtener la información del usuario
    $sql = $conexion->prepare("SELECT usuarios.id_usuario, usuarios.nombre_usuario, usuarios.email_usuario, 
                                usuarios.celular_usuario, usuarios.direccion_usuario, 
                                usuarios.clave_usuario, roles.nombre_rol
                                FROM usuarios 
                                INNER JOIN roles ON usuarios.id_rol_usuario = roles.id_rol
                                WHERE usuarios.id_usuario = ?");
    $sql->bind_param("s", $id_usuario); 
    $sql->execute();
    $resultado = $sql->get_result()->fetch_assoc();
}
?>
