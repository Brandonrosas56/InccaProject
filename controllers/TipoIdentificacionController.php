<?php
require 'models/TipoIdentificacion.php';

class TipoIdentificacionController
{
    private $model;

    public function __construct()
    {
        $this->model = new TipoIdentificacion;
    }

    public function index()
    {
        require 'views/menu.php';
        $tipo_Identificacion = $this->model->getAll();
        require 'views/Tipo_Identificacion/Consultar.php';
        require 'views/footer.php';
    }
}
