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

    public function update($table, $where, $data)
{
    // Construir la parte SET de la consulta
    $set = "";
    foreach ($data as $key => $value) {
        // No agregar el campo 'id' al SET, ya que es parte de la cláusula WHERE
        if ($key != 'id') {
            // Cambiar 'nombre' a 'Nombre', 'numero_documento' a 'Numero_documento', etc.
            $set .= ucfirst($key) . " = :$key, ";  // Convertir la primera letra a mayúscula para coincidir con la base de datos
        }
    }
    $set = rtrim($set, ', '); // Eliminar la última coma

    // Crear la consulta SQL
    $sql = "UPDATE $table SET $set WHERE $where";

    // Mostrar la consulta generada para depuración


    // Preparar la consulta
    try {
        $stmt = $this->conn->prepare($sql);  // Preparamos la consulta

        // Vincular los parámetros con sus valores
        foreach ($data as $key => $value) {
            // Vinculamos cada parámetro con su valor
            if ($key != 'id') {
                $stmt->bindValue(":$key", $value);
            }
        }

        // Asegurarnos de vincular el parámetro 'id' en caso de que sea parte del WHERE
        if (isset($data['id'])) {
            $stmt->bindValue(':id', $data['id'], PDO::PARAM_INT);  // Vinculamos 'id' para el WHERE
        }

        // Ejecutar la consulta
        $stmt->execute();

        echo "Registro actualizado correctamente.";
    } catch (PDOException $e) {
        die("Error en la consulta SQL: " . $e->getMessage());
    }
}

    

    
  


    


    public function delete($table, $where, $data)
    {
        try {
            $sql = "DELETE FROM $table WHERE $where LIMIT 1"; 

            $stmt = $this->conn->prepare($sql);

            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }

            $stmt->execute();
        } catch (PDOException $e) {
            die("Error al eliminar: " . $e->getMessage());
        }
    }

}
