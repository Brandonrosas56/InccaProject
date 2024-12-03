<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/assets/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <!--===============================================================================================-->
</head>

<body>

    <nav aria-label="breadcrumb" class="migaja">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Producto</a></li>
            <li class="breadcrumb-item"><a href="#">Consultar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Actualizar</li>
        </ol>
    </nav>

    <div class="containes-login100">
        <div class="wrap-login101 p-l-35 p-r-35 p-t-35 p-b-30">
            <form action="?controller=producto&method=update" method="POST" class="login100-form validate-form">
                <span class="login100-form-title"><i>
                        Actualizar Producto
                    </i>
                    <hr>
                </span>
                <div class="row">
                    <input type="hidden" name="Id" value="<?php echo $data[0]['Id']; ?>">

                    <div class="col-lg-6 p-t-10">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Nombre es Requerido">
                            <span class="label-input100">Nombre Producto</span>
                            <input class="input100" type="text" name="Nombre_Producto" placeholder="Ingrese Nombre" value="<?php echo $data[0]['Nombre']; ?>">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-10">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Stock es Requerido">
                            <span class="label-input100">Stock</span>
                            <input class="input100" type="text" name="Stock" placeholder="Ingrese Stock" value="<?php echo $data[0]['Stock']; ?>">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Valor es Requerido">
                            <span class="label-input100">Valor</span>
                            <input class="input100" type="text" name="Valor" placeholder="Ingrese Valor" value="<?php echo $data[0]['Valor']; ?>">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Estado es Requerido">
                            <span class="label-input100">Estado</span>
                            <select class="input100" name="Estado">
                                <option value="1" <?php echo $data[0]['Estado'] == 'Activo' ? 'selected' : ''; ?>>Activo</option>
                                <option value="0" <?php echo $data[0]['Estado'] == 'Inactivo' ? 'selected' : ''; ?>>Inactivo</option>
                            </select>
                            <!-- Campo oculto para almacenar el valor real del estado -->
                            <input type="hidden" name="EstadoReal" value="<?php echo $data[0]['Estado'] == 'Activo' ? 1 : 0; ?>">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Categoria es Requerido">
                            <span class="label-input100">Categoria</span>
                            <select id="Categoria_id" name="Categoria_id" class="input100">
                                <?php foreach ($categorias as $categoria) : ?>
                                    <?php if ($categoria['Id'] == $data[0]['Categoria_id']) : ?>
                                        <option selected value="<?php echo $categoria['Id']; ?>"><?php echo $categoria['Nombre']; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $categoria['Id']; ?>"><?php echo $categoria['Nombre']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Proveedor es Requerido">
                            <span class="label-input100">Proveedor</span>
                            <select id="Proveedor_id" name="Proveedor_id" class="input100">
                                <?php foreach ($proveedores as $proveedor) : ?>
                                    <?php if ($proveedor['Id'] == $data[0]['Proveedor_id']) : ?>
                                        <option selected value="<?php echo $proveedor['Id']; ?>"><?php echo $proveedor['Nombre_Proveedor']; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $proveedor['Id']; ?>"><?php echo $proveedor['Nombre_Proveedor']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Fecha es Requerido">
                            <span class="label-input100">Fecha Creación</span>
                            <input class="input100" type="datetime-local" name="Fecha_Creacion" value="<?php echo $data[0]['created_at']; ?>" readonly>
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                    </div>
                    <?php
                    // Antes de la sección del formulario donde se establece el valor del campo de fecha y hora

                    // Obtener la fecha y hora actual formateada
                    $fechaActual = date('Y-m-d\TH:i:s');
                    ?>
                    <!-- Este es el formulario HTML -->
                    <div class="col-lg-6">
                        <div class="wrap-input100 validate-input m-b-23" data-validate="Fecha es Requerido">
                            <span class="label-input100">Fecha Actualización</span>
                            <!-- Establecer el valor del campo de entrada de fecha y hora -->
                            <input class="input100" type="datetime-local" name="Fecha_Actualizacion" value="<?php echo $fechaActual; ?>">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>
                    </div>

                </div>

                <div class="container-login100-form-btn m-t-31 boton_formu">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            ACTUALIZAR
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
    <script>
        // Obtener el elemento de entrada de fecha de actualización por su ID
        var fechaActualizacionInput = document.getElementById('Fecha_Actualizacion');

        // Crear un objeto de fecha con la fecha y hora actual
        var fechaHoraActual = new Date();

        // Formatear la fecha y hora actual para que coincida con el formato esperado por el campo de entrada de fecha
        var fechaHoraFormateada = fechaHoraActual.getFullYear() + '-' +
            ('0' + (fechaHoraActual.getMonth() + 1)).slice(-2) + '-' +
            ('0' + fechaHoraActual.getDate()).slice(-2) + 'T' +
            ('0' + fechaHoraActual.getHours()).slice(-2) + ':' +
            ('0' + fechaHoraActual.getMinutes()).slice(-2);

        // Establecer el valor formateado en el campo de entrada de fecha de actualización
        fechaActualizacionInput.value = fechaHoraFormateada;

        date_default_timezone_set('America/Bogota'); // Establece la zona horaria a Bogotá, Colombia
    </script>


    <!--===============================================================================================-->
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