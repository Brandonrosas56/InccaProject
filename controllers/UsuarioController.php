<?php
require_once dirname(__DIR__) . '../models/Usuarios.php';

class UsuarioController
{
    private $model;

    public function __construct()
    {
        $this->model = new Usuario(); 
    }

    public function index()
    {
        return $this->model->getAll(); 
    }

    public function create($data)
    {
        $this->model->insert($data);

    }
    

    public function delete($id) {
        // Pasamos el ID al modelo para que realice la eliminación
        $this->model->delete($id);
    }
    
}
?>
