<?php 

class Login
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function validateUser($username, $password)
    {
        $params = [
            ':username' => $username,
            ':password' => $password
        ];

        $result = $this->db->select("SELECT * FROM mysql.user WHERE User = :username AND Password = PASSWORD(:password)", $params);

        return count($result) > 0;
    }
}
?>
