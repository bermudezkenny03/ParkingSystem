<?php
require("../cruds/obtenerUsuario.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="w-100">
            <h1 class="custom-header text-center">
                <i class="fas fa-user-circle"></i>
            </h1>
            <?php if ($resultado): ?>
                <div class="card mx-auto">
                    <div class="card-header">
                        <i class="fas fa-info-circle me-2"></i> Información
                    </div>
                    <div class="card-body">
                        <p class="mb-2"><strong><i class="fas fa-id-badge me-2 text-primary"></i>Identificación: </strong> <?php echo htmlspecialchars($resultado['id_usuario']); ?></p>
                        <p class="mb-2"><strong><i class="fas fa-user-tag me-2 text-success"></i>Rol:</strong> <?php echo htmlspecialchars($resultado['nombre_rol']); ?></p>
                        <p class="mb-2"><strong><i class="fas fa-user me-2 text-info"></i>Nombre:</strong> <?php echo htmlspecialchars($resultado['nombre_usuario']); ?></p>
                        <p class="mb-2"><strong><i class="fas fa-envelope me-2 text-warning"></i>Correo electrónico: </strong> <?php echo htmlspecialchars($resultado['email_usuario']); ?></p>
                        <p class="mb-2"><strong><i class="fas fa-phone me-2 text-danger"></i>Teléfono:</strong> <?php echo htmlspecialchars($resultado['celular_usuario']); ?></p>
                        <p class="mb-2"><strong><i class="fas fa-map-marker-alt me-2 text-secondary"></i>Dirección:</strong> <?php echo htmlspecialchars($resultado['direccion_usuario']); ?></p>
                        <a href="../indexUser.php" class="btn btn-elegant mt-3 d-flex align-items-center justify-content-center">
                            <i class="fas fa-arrow-left me-2"></i>
                            <i class="fas fa-list me-2"></i> Volver al listado
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-danger text-center">Usuario no encontrado o no se proporcionó un ID válido.</div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
