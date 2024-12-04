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

    public function update($data)
    {
        $this->model->update($data);
    }


    public function delete($id) {
        $this->model->delete($id);
    }
    
}
?>
