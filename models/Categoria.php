<?php
class Categoria
{
    private $Id;
    private $Nombre;
    private $created_at;
    private $updated_at;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll()
    {
        try {
            $strSql = 'SELECT 
                Id,
                Nombre,
                created_at AS Fecha_Creacion,
                updated_at AS Fecha_Actualizacion
            FROM Categoria;';

            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $strSql = 'SELECT 
                Id,
                Nombre,
                created_at AS Fecha_Creacion,
                updated_at AS Fecha_Actualizacion
            FROM Categoria
            WHERE Id = :Id;';

            $params = [
                ':Id' => $id
            ];

            $query = $this->pdo->select($strSql, $params);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // Aquí puedes añadir más métodos según tus necesidades.
}
