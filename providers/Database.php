<?php

class Database
{
    private $host = 'localhost';
    private $db_name = 'inventarios';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function __construct()
    {
        $this->getConnection();
    }

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }

    public function insert($sql, $data)
    {
        try {
            $stmt = $this->conn->prepare($sql); // Usamos $this->conn->prepare
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
        } catch (PDOException $e) {
            die("Error en la consulta SQL: " . $e->getMessage());
        }
    }

    public function select($strSql, $params = [], $fetchMode = PDO::FETCH_ASSOC)
    {
        $query = $this->conn->prepare($strSql); // Usamos $this->conn->prepare

        foreach ($params as $key => &$value) {
            $query->bindParam($key, $value);
        }

        try {
            $query->execute();
            return $query->fetchAll($fetchMode);
        } catch (PDOException $e) {
            echo "Error, la consulta no se realizó: " . $e->getMessage();
        }
    }

    public function update($procedure, $data)
    {
        try {
            $params = '';
            foreach ($data as $key => $value) {
                $params .= ":$key,";
            }
            $params = rtrim($params, ',');

            $strSql = $this->conn->prepare("CALL $procedure($params)"); // Usamos $this->conn->prepare

            foreach ($data as $key => &$value) {
                $strSql->bindParam(":$key", $value);
            }

            $strSql->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $where, $params = [], $limit = 1) {
        // Preparamos la consulta con parámetros vinculados
        $sql = "DELETE FROM $table WHERE $where LIMIT $limit"; // Consulta DELETE con límite
        
        try {
            // Usamos el método execute de PDO para ejecutar la consulta preparada
            $stmt = $this->conn->prepare($sql);
            
            // Vinculamos los parámetros (en este caso, solo el ID)
            foreach ($params as $key => &$value) {
                $stmt->bindParam($key, $value);
            }
            
            // Ejecutamos la consulta
            $stmt->execute();
        } catch (PDOException $e) {
            die("Error al eliminar el registro: " . $e->getMessage());
        }
    }
}
