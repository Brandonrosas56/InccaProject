<?php
require 'models/Proveedor.php';
require 'models/TipoIdentificacion.php';
require 'models/Categoria.php'; // Necesario si quieres mostrar el nombre de la categoría en la vista

class ProveedorController
{
    private $model;
    private $tipo_identificacion;
    private $categoria;

    public function __construct()
    {
        $this->model = new Proveedor;
        $this->tipo_identificacion = new TipoIdentificacion;
        $this->categoria = new Categoria; // Necesario si quieres mostrar el nombre de la categoría en la vista
    }

    public function index()
    {
        require 'views/menu.php';
        $proveedores = $this->model->getAll();
        $tipoidentificacion = $this->tipo_identificacion->getAll();
        $categorias = $this->categoria->getAll(); // Necesario si quieres mostrar el nombre de la categoría en la vista
        require 'views/Proveedor/Consultar.php';
        require 'views/footer.php';
    }
}
