<?php

require_once '../../controllers/UsuarioController.php';
require_once '../menu.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nombre' => $_POST['nombre'] ?? null,
        'numero_documento' => $_POST['numero_documento'] ?? null,
        'email' => $_POST['email'] ?? null,
        'tipo_identificacion_id' => isset($_POST['tipo_identificacion_id']) ? (int)$_POST['tipo_identificacion_id'] : null,
        'cargo_id' => isset($_POST['cargo_id']) ? (int)$_POST['cargo_id'] : null,
        'empresa_id' => 1, // Valor quemado
        'password' => !empty($_POST['password']) ? $_POST['password'] : null, // Permitir null si está vacío
    ];

    $usuarioController = new UsuarioController();
    $usuarioController->create($data);

    // Redirigir a Usuarios.php usando JavaScript, para evitar problemas con headers
    echo "<script>
            alert('Usuario agregado correctamente');
            window.location.href = './Usuarios.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>Agregar Usuario</h3>
        <form id="addUserForm" method="POST" action="Register.php">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
            </div>
            <div class="form-group">
                <label for="numero_documento">Número de Documento</label>
                <input type="number" class="form-control" id="numero_documento" name="numero_documento" placeholder="Ingrese el número de documento" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="tipo_identificacion_id">Tipo de Identificación</label>
                <input type="number" class="form-control" id="tipo_identificacion_id" name="tipo_identificacion_id" placeholder="ID de tipo de identificación" required>
            </div>
            <div class="form-group">
                <label for="cargo_id">Cargo</label>
                <input type="number" class="form-control" id="cargo_id" name="cargo_id" placeholder="ID del cargo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="Usuarios.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
