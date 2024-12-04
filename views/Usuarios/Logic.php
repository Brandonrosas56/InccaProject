<?php
if (!class_exists('UsuarioController')) {
    require_once '../INVENTARIOS_NGBJ/controllers/UsuarioController.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificamos la acción enviada desde el formulario
    $action = $_POST['action'] ?? '';

    $usuarioController = new UsuarioController();

    switch ($action) {
        case 'add':
            $data = [
                'nombre' => $_POST['nombre'] ?? null,
                'numero_documento' => $_POST['numero_documento'] ?? null,
                'email' => $_POST['email'] ?? null,
                'tipo_identificacion_id' => isset($_POST['tipo_identificacion_id']) ? (int)$_POST['tipo_identificacion_id'] : null,
                'cargo_id' => isset($_POST['cargo_id']) ? (int)$_POST['cargo_id'] : null,
                'empresa_id' => 1, // Valor quemado
                'password' => !empty($_POST['password']) ? $_POST['password'] : null, // Permitir null si está vacío
            ];
            $usuarioController->create($data);

            echo "<script>
                alert('Usuario agregado correctamente');
                window.location.href = 'usuarios.php';
            </script>";
            break;

        case 'delete':
            if (isset($_POST['id'])) {
                $usuarioController->delete($_POST['id']);

                echo "<script>
                    alert('Usuario eliminado correctamente');
                    window.location.href = 'usuarios.php';
                </script>";
            }
            break;

        case 'update':
            if (isset($_POST['id'])) {
                // Obtener los datos del formulario para actualizar
                $data = [
                    'id' => $_POST['id'],
                    'nombre' => $_POST['nombre'] ?? null,
                    'numero_documento' => $_POST['numero_documento'] ?? null,
                    'email' => $_POST['email'] ?? null,
                    'tipo_identificacion_id' => isset($_POST['tipo_identificacion_id']) ? (int)$_POST['tipo_identificacion_id'] : null,
                    'cargo_id' => isset($_POST['cargo_id']) ? (int)$_POST['cargo_id'] : null,
                    'empresa_id' => 1, // Valor quemado
                    'contraseña' => $_POST['contraseña'] ?? null, // Dejar en null si no se cambia la contraseña
                ];

                // Llamar al controlador para actualizar el usuario
                $usuarioController->update($data);

                echo "<script>
                    alert('Usuario actualizado correctamente');
                    window.location.href = 'usuarios.php';
                </script>";
            }
            break;

        default:
            echo "<script>
                alert('Acción no válida');
                window.location.href = 'usuarios.php';
            </script>";
            break;
    }
    exit;
}
?>
