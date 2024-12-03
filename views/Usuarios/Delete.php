<?php
if (!class_exists('UsuarioController')) {
    require_once '../INVENTARIOS_NGBJ/controllers/UsuarioController.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_REQUEST['id'])) {
        $usuarioController = new UsuarioController();
        $usuarioController->delete($_REQUEST['id']);
    }

    // Redirigir a la página principal después de eliminar
    header("Location: gestion_usuarios.php"); // Asegúrate de usar la URL correcta
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="deleteUserForm" method="POST"> <!-- Accion al backend -->
                <div class="modal-body">
                    <p>¿Está seguro de que desea eliminar este usuario? Esta acción no se puede deshacer.</p>
                    <!-- ID del usuario que se va a eliminar -->
                    <input type="hidden" name="id" id="userIdToDelete">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>



    <script>
        document.getElementById('confirmDeleteButton').addEventListener('click', function () {
            alert('Usuario eliminado con éxito.');
            $('#deleteUserModal').modal('hide');
        });
    </script>
</body>
</html>