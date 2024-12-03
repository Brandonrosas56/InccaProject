<?php
class Proveedor
{
    private $Id;
    private $Nombre;
    private $Telefono;
    private $Numero_documento;
    private $Tipo_identificacion_id;
    private $Categoria_id;
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
                pr.Id,
                pr.Nombre AS Nombre_Proveedor,
                pr.Telefono,
                pr.Numero_documento,
                t.Nombre AS Nombre_Identificacion,
                c.Nombre AS Nombre_Categoria,
                pr.created_at AS Fecha_Creacion,
                pr.updated_at AS Fecha_Actualizacion
            FROM Proveedor pr
            JOIN Categoria c ON pr.Categoria_id = c.Id
            JOIN Tipo_Identificacion t ON pr.Tipo_Identificacion_id = t.Id;';

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
                p.Id,
                p.Nombre,
                p.Telefono,
                p.Numero_documento,
                p.Tipo_identificacion_id,
                p.Categoria_id,
                c.Nombre AS Nombre_Categoria,
                p.created_at AS Fecha_Creacion,
                p.updated_at AS Fecha_Actualizacion
            FROM Proveedor p
            JOIN Categoria c ON p.Categoria_id = c.Id
            WHERE p.Id = :Id;';

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
