<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container mt-5">
        <?php
        include_once("../app/config.php");

        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM usuarios WHERE id_usuario ='$id'";
        $resultado = $conexion->query($sql);

        if ($resultado === false) {
            echo "Error en la consulta SQL: " . $conexion->error;
            exit;
        }
        $row = $resultado->fetch_assoc();
        ?>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="custom-header text-center">
                    <i class="fas fa-edit"></i> Editar Usuario
                </h1>
                <div class="card custom-card">
                    <form action="../cruds/editarDatos.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id_usuario']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Rol de Usuario</label>
                            <select class="form-select" name="RoleU" required>
                                <option selected disabled>---Seleccione un rol---</option>
                                <?php
                                include("../app/config.php");
                                $sql1 = "SELECT * FROM roles";
                                $resultado1 = $conexion->query($sql1);

                                while ($row1 = $resultado1->fetch_assoc()) {
                                    $selected = ($row1['id_rol'] == $row['id_rol_usuario']) ? 'selected' : '';
                                    echo "<option value='" . $row1['id_rol'] . "' $selected>" . $row1['nombre_rol'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre_usuario" value="<?php echo $row['nombre_usuario']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email_usuario" value="<?php echo $row['email_usuario']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Celular</label>
                            <input type="tel" class="form-control" name="celular_usuario" value="<?php echo $row['celular_usuario']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Direcciòn</label>
                            <input type="text" class="form-control" name="direccion_usuario" value="<?php echo $row['direccion_usuario']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="clave_usuario" placeholder="Deja en blanco si no deseas cambiar la contraseña">
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="../indexUser.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Regresar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>