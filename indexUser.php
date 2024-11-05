<?php
include("./cruds/auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .custom-header {
            background: linear-gradient(90deg, #4a4a4a, #2c2c2c);
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="custom-header text-center">
            <i class="fas fa-users"></i> LISTADO DE USUARIOS
        </h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="./cruds/logout.php" class="btn btn-danger btn-custom">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="userTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Password</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require("./app/config.php");

                    $sql = $conexion->query("SELECT usuarios.id_usuario, usuarios.nombre_usuario AS nombre_usuarios, 
                                usuarios.email_usuario, usuarios.celular_usuario, usuarios.direccion_usuario, 
                                usuarios.clave_usuario, roles.nombre_rol AS nombre_roles
                         FROM usuarios
                         INNER JOIN roles ON usuarios.id_rol_usuario = roles.id_rol");

                    while ($resultado = $sql->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $resultado['id_usuario']; ?></td>
                            <td><?php echo $resultado['nombre_roles']; ?></td>
                            <td><?php echo $resultado['nombre_usuarios']; ?></td>
                            <td><?php echo $resultado['email_usuario']; ?></td>
                            <td><?php echo $resultado['celular_usuario']; ?></td>
                            <td><?php echo $resultado['direccion_usuario']; ?></td>
                            <td>••••••••</td>
                            <td>
                                <a href="./forms/showFroms.php?id=<?php echo $resultado['id_usuario']; ?>" class="btn btn-primary btn-sm btn-action btn-custom"><i class="fas fa-eye"></i></a>
                                <a href="./forms/editarFroms.php?id=<?php echo $resultado['id_usuario'] ?>" class="btn btn-warning btn-sm text-white btn-action btn-custom"><i class="fas fa-edit"></i></a>
                                <a href="./cruds/eliminarDatos.php?id=<?php echo $resultado['id_usuario'] ?>" class="btn btn-danger btn-sm btn-delete btn-custom"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "paging": true,
                "pageLength": 10, // Número de filas por página
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
                }
            });

            const deleteLinks = document.querySelectorAll('.btn-delete');

            deleteLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const href = this.getAttribute('href');

                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "No podrás revertir esto",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = href;
                        }
                    });
                });
            });

            <?php if (isset($_GET['update']) && $_GET['update'] == 'success'): ?>
                Swal.fire({
                    title: 'Actualizado',
                    text: 'Los datos del usuario se han actualizado correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            <?php endif; ?>
        });
    </script>
</body>

</html>