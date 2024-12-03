<?php
require 'models/Producto.php';
require 'models/Categoria.php';
require 'models/Proveedor.php';

class ProductoController
{
    private $model;
    private $categoria;
    private $proveedor;

    public function __construct()
    {
        $this->model = new Producto;
        $this->categoria = new Categoria;
        $this->proveedor = new Proveedor;
    }

    public function index()
    {
        require 'views/menu.php';
        $productos = $this->model->getAll(); // Cambia a $productos en vez de $producto
        $categorias = $this->categoria->getAll();
        $proveedores = $this->proveedor->getAll();
        require 'views/Producto/Consultar.php';
        require 'views/footer.php';
    }

    public function add()
    {
        require 'views/menu.php';
        $categorias = $this->categoria->getAll();
        $proveedores = $this->proveedor->getAll();
        require 'views/Producto/Registrar.php';
        require 'views/footer.php';
    }



    public function save()
    {
        $dataProducto = [
            'Nombre' => $_POST['Nombre_Producto'],
            'Stock' => $_POST['Stock'],
            'Valor' => $_POST['Valor'],
            'Estado' => $_POST['Estado'],
            'Categoria_id' => $_POST['Categoria_id'],
            'Proveedor_id' => $_POST['Proveedor_id'],
            'created_at' => $_POST['created_at'],
            'updated_at' => $_POST['updated_at'],
        ];

        $arrayCategoria = $_POST['Categoria_id'];
        $arrayProveedor = $_POST['Proveedor_id'];

        $respNewProducto = $this->model->newProducto($dataProducto);

        $lastId = $this->model->getLastId();
        header('Location: ?controller=producto');
    }

    public function edit()
    {
        if (isset($_REQUEST['Id'])) {
            $Id = $_REQUEST['Id'];
            $data = $this->model->getProductoById($Id);
            require 'views/menu.php';
            $categorias = $this->categoria->getAll();
            $proveedores = $this->proveedor->getAll();
            require 'views/Producto/Actualizar.php';
            require 'views/footer.php';
        } else {
            echo "Error no existe producto a editar";
        }
    }

    public function update()
    {
        if (isset($_POST)) {
            $data = [
                'Id' => $_POST['Id'],
                'Nombre' => $_POST['Nombre_Producto'],
                'Stock' => $_POST['Stock'],
                'Valor' => $_POST['Valor'],
                'Estado' => $_POST['Estado'],
                'Categoria_id' => $_POST['Categoria_id'],
                'Proveedor_id' => $_POST['Proveedor_id'],
                'created_at' => $_POST['Fecha_Creacion'], // Verifica si este campo se envía desde el formulario
                'updated_at' => $_POST['Fecha_Actualizacion'], // Verifica si este campo se envía desde el formulario
            ];
            $this->model->editProducto($data);
            header('Location: ?controller=producto');
        } else {
            echo "Error Actualizando el Producto";
        }
    }
}
