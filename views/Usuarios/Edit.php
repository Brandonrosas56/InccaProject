<?php
if (!class_exists('UsuarioController')) {
    require_once '../INVENTARIOS_NGBJ/controllers/UsuarioController.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $_POST['id'],
        'nombre' => $_POST['nombre'],
        'numero_documento' => $_POST['numero_documento'],
        'email' => $_POST['email'],
        'tipo_identificacion_id' => (int)$_POST['tipo_identificacion_id'],
        'cargo_id' => (int)$_POST['cargo_id']
    ];

    if (!empty($_POST['contraseña'])) {
        $data['contraseña'] = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    }

    $usuarioController = new UsuarioController();
    $usuarioController->update($data);

    echo '<script>window.location.href = "Usuarios.php";</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editUserForm">
                    <div class="modal-body">
                        <!-- Los mismos campos que el modal de agregar -->
                        <div class="form-group">
                            <label for="edit_nombre">Nombre</label>
                            <input type="text" class="form-control" id="edit_nombre" name="nombre" placeholder="Ingrese el nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_numero_documento">Número de Documento</label>
                            <input type="number" class="form-control" id="edit_numero_documento" name="numero_documento" placeholder="Ingrese el número de documento" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electronico" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_tipo_identificacion_id">Tipo de Identificación</label>
                            <input type="number" class="form-control" id="edit_tipo_identificacion_id" name="tipo_identificacion_id" placeholder="ID de tipo de identificación" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_cargo_id">Cargo</label>
                            <input type="number" class="form-control" id="edit_cargo_id" name="cargo_id" placeholder="ID del cargo" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_contraseña">Contraseña</label>
                            <input type="password" class="form-control" id="edit_contraseña" name="contraseña" placeholder="Ingrese la nueva contraseña" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-user-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    const nombre = this.getAttribute('data-nombre');
                    const numeroDocumento = this.getAttribute('data-numero-documento');
                    const email = this.getAttribute('data-email');
                    const tipoIdentificacionId = this.getAttribute('data-tipo-identificacion-id');
                    const cargoId = this.getAttribute('data-cargo-id');

                    document.getElementById('edit_nombre').value = nombre;
                    document.getElementById('edit_numero_documento').value = numeroDocumento;
                    document.getElementById('email').value = email;
                    document.getElementById('edit_tipo_identificacion_id').value = tipoIdentificacionId;
                    document.getElementById('edit_cargo_id').value = cargoId;

                    // Guardar el ID en un campo oculto
                    const form = document.getElementById('editUserForm');
                    form.setAttribute('data-id', id);
                });
            });
        });
    </script>


</body>
</html>
