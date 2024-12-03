</html>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inventarios</title>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
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
	<div class="fondo">
		<div class="limiter" style="background-image:linear-gradient(
      rgba(39, 38, 36, 0.8),
      rgba(39, 38, 36, 0.8)
    ), url('assets/images/fondoLogin.jpg');">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-35 p-b-30">
					<form action="?controller=login&action=index" method="POST" class="login100-form validate-form">

						<img src="assets/images/Logi.png" alt="Logotipo" class="logo">

						<hr>

						<span class="login100-form-title p-b-49">
							Iniciar Sesión
						</span>
						<div class="wrap-input100 validate-input m-b-23" data-validate="Usuario es Requerido">
							<span class="label-input100">Usuario</span>
							<input class="input100" type="text" name="username" id="username" placeholder="Ingrese su Usuario" value="<?php echo isset($error['errorMessage']) ? $error['username'] : '' ?>">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Contraseña es Requerida">
							<span class="label-input100">Contraseña</span>
							<input class="input100" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>

						<div class="container-login100-form-btn m-t-31 boton_formu">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn">
									INGRESA
								</button>
							</div>
						</div>

						<br>


						<?php if (isset($error)) : ?>
							<p style="color: red;"><?php echo $error; ?></p>
						<?php endif; ?>
						<div class="flex-col-c p-t-10">
							<a href="#" class="txt2">
								Olvido Contraseña
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<div id="dropDownSelect1"></div>
	<!-- Footer -->
	<footer id="sticky-footer" class="py-4 bg-light text-dark">
		<div class="container text-center">
			<p>Inventarios NGBJ&COPY;<br>
				Control de Inventarios Y Reportes / Bogotá D.C. Colombia</p>
		</div>
	</footer>
	<!-- End of Footer -->

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