<?php 
// Cargar dependencias
include ('../INVENTARIOS_NGBJ/views/menu.php');
include ('../INVENTARIOS_NGBJ/views/Usuarios/Register.php');
include ('../INVENTARIOS_NGBJ/views/Usuarios/Edit.php');
include ('../INVENTARIOS_NGBJ/views/Usuarios/Delete.php');

if (!class_exists('UsuarioController')) {
    require_once '../INVENTARIOS_NGBJ/controllers/UsuarioController.php';
}


$usuarioController = new UsuarioController();
$usuarios = $usuarioController->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <div>
            <input type="text" class="form-control" placeholder="Buscar..." style="display: inline-block; width: 300px;">
            <button class="btn btn-primary ml-2">Buscar</button>
        </div>
        <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">Agregar Usuario</button>
    </div>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>NOMBRE</th>
                <th>NUMERO DOCUMENTO</th>
                <th>ROL</th>
                <th>EMAIL</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)) : ?>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario['Nombre']); ?></td>
                        <td><?= htmlspecialchars($usuario['Numero_documento']); ?></td>
                        <td><?= htmlspecialchars($usuario['Email']); ?></td>
                        <td><?= htmlspecialchars($usuario['Cargo_id']); ?></td>
                        <td>
                            <button 
                                class="btn btn-warning btn-sm edit-user-btn" 
                                data-toggle="modal" 
                                data-target="#editUserModal"
                                data-id="<?= $usuario['Id']; ?>"
                                data-nombre="<?= htmlspecialchars($usuario['Nombre']); ?>"
                                data-numero-documento="<?= htmlspecialchars($usuario['Numero_documento']); ?>"
                                data-email="<?= htmlspecialchars($usuario['Email']); ?>"
                                data-tipo-identificacion-id="<?= htmlspecialchars($usuario['Tipo_identificacion_id']); ?>"
                                data-cargo-id="<?= htmlspecialchars($usuario['Cargo_id']); ?>"
                            >
                                Editar
                            </button>
                            <button 
                                class="btn btn-danger btn-sm delete-user-btn" 
                                data-toggle="modal" 
                                data-target="#deleteUserModal"
                                data-id="<?= $usuario['Id']; ?>">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5" class="text-center">No hay usuarios registrados.</td>
                </tr>
            <?php endif; ?>
            </tbody>
    </table>
</div>
</body>
</html>
