<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Encabezado y enlaces a CSS y JS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Categoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    <!-- Navegación y contenido principal -->

    <main>
        <div class="container-fluid">

            <nav aria-label="breadcrumb" class="migaja">
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Categoria</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Consultar</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header ">
                    <h1 class="titulo_tabla"><b>Listado de Categorías</b></h1>
                    <a href="?controller=categoria&method=add">
                        <div class="container-login100-form-btn m-t-31 boton_agregar">
                            <!-- Botón para agregar una nueva categoría -->
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <div class="login100-form-btn">
                                    <i class='fas fa-user-plus iconito_agregar'></i>
                                    AGREGAR
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Creación</th>
                                    <th>Actualización</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <tr>
                                        <td><?php echo $categoria['Id']; ?></td>
                                        <td><?php echo $categoria['Nombre']; ?></td>
                                        <td><?php echo $categoria['Fecha_Creacion']; ?></td>
                                        <td><?php echo $categoria['Fecha_Actualizacion']; ?></td>
                                        <td>
                                            <a href="?controller=categoria&method=edit&Id=<?php echo $categoria['Id']; ?>" data-toggle="tooltip" title="Editar" class="btn btn-outline-warning"><i class='fas fa-edit'></i></a>
                                            <a href="?controller=categoria&method=delete&Id=<?php echo $categoria['Id']; ?>" data-toggle="tooltip" title="Eliminar" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>