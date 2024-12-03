<?php
class producto
{
    private $Id;
    private $Nombre;
    private $Stock;
    private $Valor;
    private $Estado;
    private $Categoria_id;
    private $Proveedor_id;
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
                p.Id,
                p.Nombre AS Nombre_Producto,
                p.Stock,
                p.Valor,
                p.Estado,
                c.Nombre AS Nombre_Categoria,
                pr.Nombre AS Nombre_Proveedor,
                p.created_at AS Fecha_Creacion,
                p.updated_at AS Fecha_Actualizacion
            FROM Producto p
            JOIN Categoria c ON p.Categoria_id = c.Id
            JOIN Proveedor pr ON p.Proveedor_id = pr.Id;';

            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function newProducto($data)
    {
        try {
            $this->pdo->insert('producto', $data);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function getLastId()
    {
        try {
            $strSql = "SELECT MAX(Id) as Id FROM proveedor";
            $strSql = "SELECT MAX(Id) as Id FROM categoria";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editProducto($data)
    {
        try {
            // Eliminar caracteres especiales del nombre del producto
            $nombreProducto = utf8_decode($data['Nombre']);

            // Convertir estado a valor numérico
            $estadoValue = ($data['Estado'] == 'Activo') ? 1 : 0;

            $strSql = "CALL ActualizarProducto(:Id, :Nombre, :Stock, :Valor, :Estado, :Categoria_id, :Proveedor_id, :created_at, :updated_at)";

            $array = [
                'Id' => $data['Id'],
                'Nombre' => $nombreProducto,
                'Stock' => $data['Stock'],
                'Valor' => $data['Valor'],
                'Estado' => $estadoValue, // Utilizar el valor numérico del estado
                'Categoria_id' => $data['Categoria_id'],
                'Proveedor_id' => $data['Proveedor_id'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at']
            ];

            $this->pdo->update($strSql, $array);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getProductoById($Id)
    {
        try {
            $strSql = 'SELECT * FROM producto WHERE Id = :Id';
            $array = ['Id' => $Id];
            $query = $this->pdo->select($strSql, $array);

            // Convertir el valor del estado a 1 o 0
            $query[0]['Estado'] = ($query[0]['Estado'] == 'Activo') ? 1 : 0;

            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function editCategoria($data)
    {
        try {
            $strWhere = 'Categoria_id=' . $data['Categoria_id'];
            $this->pdo->update('categoria', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
