<?php
require_once 'providers/Database.php';
require_once 'models/Login.php';

class LoginController
{
    private $model;

    public function __construct()
    {
        $db = new Database();
        $this->model = new Login($db);
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->model->validateUser($username, $password)) {
                $_SESSION['user'] = $username;
                header('Location: ?controller=home&action=index');
            } else {
                $error = 'Credenciales incorrectas';
                require 'views/login.php';
            }
        } else {
            require 'views/login.php';
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
        }
        header('Location: ?controller=login');
    }
}
?>
