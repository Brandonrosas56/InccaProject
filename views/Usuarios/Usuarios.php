<?php 
// Cargar dependencias
include ('../menu.php');

if (!class_exists('UsuarioController')) {
    require_once '../../controllers/UsuarioController.php';
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
        <!-- Botón de Agregar Usuario -->
        <button class="btn btn-success" onclick="window.location.href='./Register.php';">Agregar Usuario</button>
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
                            <!-- Botón de Editar Usuario -->
                            <button 
                                class="btn btn-warning btn-sm edit-user-btn" 
                                onclick="window.location.href='Edit.php?id=<?= $usuario['Id']; ?>'">
                                Editar
                            </button>
                            <!-- Botón de Eliminar Usuario -->
                            <button 
                                class="btn btn-danger btn-sm delete-user-btn" 
                                onclick="window.location.href='Delete.php?id=<?= $usuario['Id']; ?>'">
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
