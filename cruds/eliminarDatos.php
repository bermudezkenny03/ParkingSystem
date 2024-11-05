<?php

include("../app/config.php");
include("../cruds/auth.php");

$id = $_REQUEST['id'];
$sql = "DELETE FROM usuarios WHERE id_usuario ='$id'";

$query = mysqli_query($conexion,$sql);

if($query === true){
    header("Location: ../indexUser.php");
}
?>