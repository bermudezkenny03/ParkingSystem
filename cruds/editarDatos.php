<?php 

include_once("../app/config.php");

$id = $_POST['id'];
$nombre = $_POST['nombre_usuario'];
$email = $_POST['email_usuario'];
$celular = $_POST['celular_usuario'];
$direccion = $_POST['direccion_usuario'];
$password = $_POST['clave_usuario'];
$role = $_POST['RoleU'];

$sql = "UPDATE usuarios SET 
nombre_usuario = '" . $nombre . "',
email_usuario = '" . $email . "',
celular_usuario = '". $celular ."',
direccion_usuario = '". $direccion ."',
clave_usuario = '" . $password . "',
id_rol_usuario = '" . $role . "' WHERE id_usuario = '" . $id . "'";

if ($conexion->query($sql)) {
    header("Location: ../indexUser.php?update=success");
}else{
    echo "Error al actualizar el usuario: " .$conexion->error;
}


?>