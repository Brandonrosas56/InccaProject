<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
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
    <main>
        <div class="container-fluid">
            <nav aria-label="breadcrumb" class="migaja">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Producto</a></li>
                    <li class="breadcrumb-item"><a href="#">Consultar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registrar</li>
                </ol>
            </nav>
            <div class="containes-login100">
                <div class="wrap-login101 p-l-35 p-r-35 p-t-35 p-b-30">
                    <form action="?controller=producto&method=save" method="POST" class="login100-form validate-form">
                        <span class="login100-form-title"><i>
                                Registrar Producto
                            </i>
                            <hr>
                        </span>
                        <div class="row">
                            <div class="col-lg-6 p-t-10">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Nombre es Requerido">
                                    <span class="label-input100">Nombre Producto</span>
                                    <input class="input100" type="text" name="Nombre_Producto" placeholder="Ingrese Nombre">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-10">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Stock es Requerido">
                                    <span class="label-input100">Stock</span>
                                    <input class="input100" type="text" name="Stock" placeholder="Ingrese Stock">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Valor es Requerido">
                                    <span class="label-input100">Valor</span>
                                    <input class="input100" type="text" name="Valor" placeholder="Ingrese Valor">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Estado es Requerido">
                                    <span class="label-input100">Estado</span>
                                    <input class="input100" type="text" name="Estado" placeholder="Ingrese Estado">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Categoria es Requerido">
                                    <span class="label-input100">Categoria</span>
                                    <select id="Categoria_id" name="Categoria_id" class="input100">
                                        <option selected>Seleccione...</option>
                                        <?php foreach ($categorias as $categoria) : ?>
                                            <option value="<?php echo $categoria['Id']; ?>"><?php echo $categoria['Nombre']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Proveedor es Requerido">
                                    <span class="label-input100">Proveedor</span>
                                    <select id="Proveedor_id" name="Proveedor_id" class="input100">
                                        <option selected>Seleccione...</option>
                                        <?php foreach ($proveedores as $proveedor) : ?>
                                            <option value="<?php echo $proveedor['Id']; ?>"><?php echo $proveedor['Nombre_Proveedor']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Fecha es Requerido">
                                    <span class="label-input100">Fecha Creación</span>
                                    <input class="input100" type="datetime-local" name="Fecha_Creacion" placeholder="Ingrese Fecha">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input m-b-23" data-validate="Fecha es Requerido">
                                    <span class="label-input100">Fecha Actualización</span>
                                    <input class="input100" type="datetime-local" name="Fecha_Actualizacion" placeholder="Ingrese Fecha">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>
                            </div>
                        </div>

                        <div class="container-login100-form-btn m-t-31 boton_formu">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    REGISTRAR
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>



    <div id="dropDownSelect1"></div>

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