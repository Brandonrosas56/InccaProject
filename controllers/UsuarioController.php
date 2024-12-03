<?php
require_once dirname(__DIR__) . '../models/Usuarios.php';

class UsuarioController
{
    private $model;

    public function __construct()
    {
        $this->model = new Usuario(); // Instanciamos el modelo Usuario
    }

    public function index()
    {
        return $this->model->getAll(); 
    }

    public function create($data)
    {
        // Llama al modelo para insertar los datos
        $this->model->insert($data);
    }

    public function delete($id) {
        // Asegúrate de que el ID es válido
        if (empty($id)) {
            die("ID de usuario no válido.");
        }

        // Crear una instancia del modelo y llamar al método delete
        $usuarioModel = new Usuario();
        $usuarioModel->delete($id);
    }
    
}
?>
