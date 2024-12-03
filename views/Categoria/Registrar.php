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
                <div class="wrap-login100 p-l-35 p-r-55 p-t-35 p-b-30">
                    <form action="?controller=producto&method=save" method="POST" class="login100-form validate-form">
                        <span class="login100-form-title"><i>
                                Registrar <br> Producto
                            </i>
                            <hr>
                        </span>
                        <div>
                            <div class="wrap-input100 validate-input m-b-23" data-validate="Ficha es Requerido">
                                <span class="label-input100">Placa</span>
                                <input class="input100" type="text" name="Placa" placeholder="Ingrese Ficha">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input m-b-23" data-validate="Programa es Requerido">
                                <span class="label-input100">Marca</span>
                                <input class="input100" type="text" name="Marca" placeholder="Ingrese Programa">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input m-b-23" data-validate="Programa es Requerido">
                                <span class="label-input100">Color</span>
                                <input class="input100" type="text" name="Color" placeholder="Ingrese Programa">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>



                            <div class="wrap-input100 validate-input m-b-23" data-validate="Tipo de Programa es Requerido">
                                <span class="label-input100">Tipo </span>
                                <select class="input100" name="Tipo" id="Tipo" style="width: 100%;">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                    <option selected>Elija un tipo de Programa</option>
                                    <option value="Bicicleta">Bicicleta</option>
                                    <option value="Moto">Moto</option>
                                    <option value="Automovil">Automovil</option>
                                </select>
                            </div>
                            
                            <div class="wrap-input100 validate-input m-b-23" data-validate="Propietario es Requerido">
                                <span class="label-input100">Propietario</span>
                                <select id="Propietario" name="IdPropietario" class="input100">
                                    <option selected>Seleccione...</option>
                                    <?php
                                    foreach ($propietarios as $propietario) {
                                    ?>
                                        <option value="<?php echo $propietario->Id ?>"><?php echo $propietario->Nombre . " " . $propietario->Apellido ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
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

                        <br>

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