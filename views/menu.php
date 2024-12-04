</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="?controller=home"><img src="assets/images/logi.png" alt="Logotipo" class="logo" style="max-width: 200px;"></a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggles" style="color: rgba(255, 255, 255, 0.5) !important;" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar cerrar-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <a class="btn btn-outline-danger" href="index.php">Cerrar Sesion</a>
            </div>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">
                            <section class="home-section">
                                <div>Bienvenido <br></div>
                            </section>
                        </div>
                        <a class="nav-link" href="?controller=home">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Principal

                        </a>
                        <div class="sb-sidenav-menu-heading">Gestion</div>
                        <!-- Usuario-->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIdentificacion" aria-expanded="false" aria-controls="collapseIdentificacion">
                            <div class="sb-nav-link-icon"><i class="fa fa-id-card"></i></div>
                            Usuario
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseIdentificacion" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?controller=tipoidentificacion">Gestionar</a>
                            </nav>
                        </div>
                        <!-- Producto-->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducto" aria-expanded="false" aria-controls="collapseProducto">
                            <div class="sb-nav-link-icon"><i class="fa fa-cookie-bite"></i></div>
                            Productos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseProducto" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?controller=producto">Gestionar</a>
                            </nav>
                        </div>
                        <!-- Categoria-->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategoria" aria-expanded="false" aria-controls="collapseCategoria">
                            <div class="sb-nav-link-icon"><i class="fa fa-ice-cream"></i></div>
                            Categoria
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseCategoria" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?controller=categoria">Gestionar</a>
                            </nav>
                        </div>
                        <!-- Proveedor-->
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedor" aria-expanded="false" aria-controls="collapseProveedor">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Proveedor
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseProveedor" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?controller=proveedor">Gestionar</a>
                            </nav>
                        </div>
                        <!-- Identificacion-->
                        <div class="sb-sidenav-menu-heading">Inventarios</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Reportes
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Tables
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">