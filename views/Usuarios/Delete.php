<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Modal de Confirmación de Eliminación -->
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
            <form id="deleteUserForm" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="action" value="delete"> <!-- Acción eliminar -->
                    <input type="hidden" name="id" id="userIdToDelete"> <!-- ID del usuario -->
                    <p>¿Está seguro de que desea eliminar este usuario? Esta acción no se puede deshacer.</p>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Manejo de los botones de eliminar
            document.querySelectorAll('.delete-user-btn').forEach(button => {
                button.addEventListener('click', function() {
                    // Obtener el ID del usuario desde el atributo 'data-id' del botón
                    const userId = this.getAttribute('data-id');
                    
                    console.log('User ID para eliminar:', userId); // Debugging: Verifica el ID

                    // Asignar el ID al campo oculto del formulario
                    document.getElementById('userIdToDelete').value = userId;

                    // Abre el modal de eliminación
                    $('#deleteUserModal').modal('show');
                });
            });
        });
    </script>

</body>
</html>