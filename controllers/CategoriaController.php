<?php
require 'models/Categoria.php';

class CategoriaController
{
    private $model;

    public function __construct()
    {
        $this->model = new Categoria;
    }

    public function index()
    {
        require 'views/menu.php';
        $categorias = $this->model->getAll();
        require 'views/Categoria/Consultar.php';
        require 'views/footer.php';
    }
}
