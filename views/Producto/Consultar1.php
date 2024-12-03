<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    <nav aria-label="breadcrumb" class="migaja">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Producto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consultar</li>
        </ol>
    </nav>
    <div class="card bg-light" style="width: 95%; margin: 20px auto; padding: 10px; border-radius: 20px; border-color: orange;">

        <form class="">
            <h2 class="titulo_tabla"><b>Listado de Productos</b></h2>
            <a href="?controller=producto&method=add">
                <div class="container-login100-form-btn m-t-31 boton_agregar">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <div class="login100-form-btn">
                            <i class='fas fa-user-plus iconito_agregar'></i>
                            AGREGAR
                        </div>
                    </div>
                </div>
            </a>

            <hr>
            <br>
            <?php
            if (isset($error['errorMessage'])) {
            ?>
                <div class="alert alert-danger alert-dismissable alert-width" role="alert">
                    <button class="close" data-dismiss="alert">&times;</button>
                    <p class="text-dark"><?php echo $error['errorMessage'] ?></p>
                </div>
            <?php
            }
            ?>
            <div class="container">
                <table id="table_id" class="table table-striped table-bordered dt-responsive nowrap bg-light text-dark" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Stock</th>
                            <th>Valor</th>
                            <th>Estado</th>
                            <th>Categoria</th>
                            <th>Proveedor</th>
                            <th>Fecha Creacion</th>
                            <th>Fecha Actualizacion</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto) : ?>
                            <tr>
                                <td><?php echo $producto['Id']; ?></td>
                                <td><?php echo $producto['Nombre_Producto']; ?></td>
                                <td><?php echo $producto['Stock']; ?></td>
                                <td><?php echo $producto['Valor']; ?></td>
                                <td><?php echo $producto['Estado'] ? 'Activo' : 'Inactivo'; ?></td>
                                <td><?php echo $producto['Nombre_Categoria']; ?></td>
                                <td><?php echo $producto['Nombre_Proveedor']; ?></td>
                                <td><?php echo $producto['Fecha_Creacion']; ?></td>
                                <td><?php echo $producto['Fecha_Actualizacion']; ?></td>
                                <td>
                                    <a href="?controller=producto&method=edit&Id=<?php echo $producto['Id']; ?>" data-toggle="tooltip" title="Editar" class="btn btn-outline-primary"><i class='fas fa-edit'></i></a>
                                    <a href="?controller=producto&method=delete&Id=<?php echo $producto['Id']; ?>" data-toggle="tooltip" title="Eliminar" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                                    <script>
                                        $(document).ready(function() {
                                            $('[data-toggle="tooltip"]').tooltip();
                                        });
                                    </script>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </form>
    </div>

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <script>
        $('#table_id').DataTable({

            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "No se encontraron resultados en su busqueda",
                "searchPlaceholder": "Buscar registros",
                "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                "infoEmpty": "No existen registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    </script>


    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="assets/js/main.js"></script>
</body>

</html>