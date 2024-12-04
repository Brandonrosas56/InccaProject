<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addUserForm" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add"> <!-- Acción agregar -->
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
