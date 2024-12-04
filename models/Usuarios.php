<?php
require_once dirname(__DIR__) . '../providers/Database.php'; // Ajusta la ruta según tu estructura

class Usuario
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database(); // Instanciamos la clase Database
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // Método para obtener todos los usuarios
    public function getAll()
    {
        try {
            $strSql = 'SELECT 
                Id,
                Nombre,
                Numero_documento,
                Email,
                Tipo_identificacion_id,
                Cargo_id,
                Empresa_id,
                created_at AS Fecha_Creacion,
                updated_at AS Fecha_Actualizacion
            FROM Usuario';

            return $this->pdo->select($strSql); // Usamos el método select de Database
        } catch (PDOException $e) {
            die("Error al obtener los usuarios: " . $e->getMessage());
        }
    }

    public function insert($data)
    {
        try {
            $sql = 'INSERT INTO Usuario (Nombre, Numero_documento, Email, Tipo_identificacion_id, Cargo_id, Empresa_id, Password) 
                    VALUES (:nombre, :numero_documento, :email, :tipo_identificacion_id, :cargo_id, :empresa_id, :password)';

            $this->pdo->insert($sql, $data);
        } catch (PDOException $e) {
            die("Error al insertar el usuario: " . $e->getMessage());
        }
    }

    public function update($data)
    {
        $table = 'usuario'; // Nombre de la tabla
        $where = "Id = :id"; // Condición para actualizar por ID

        // Preparar los datos a actualizar
        $updateData = [
            'id' => $data['id'],
            'nombre' => $data['nombre'],
            'numero_documento' => $data['numero_documento'],
            'email' => $data['email'],
            'tipo_identificacion_id' => $data['tipo_identificacion_id'],
            'cargo_id' => $data['cargo_id'],
            'empresa_id' => $data['empresa_id'],
            'contraseña' => $data['contraseña']
        ];

        $this->pdo->update($table, $where, $updateData);
    }


    public function delete($id)
    {
        $table = 'usuario';
        $where = "Id = :id"; 

        $this->pdo->delete($table, $where, ['id' => $id]);
    }


    



}
?>
