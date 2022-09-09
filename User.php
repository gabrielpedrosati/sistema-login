<?php
#Class to List Users

class User extends Conn
{

    public object $conn;

    public function listUsers()
    {
        $this->conn = $this->connectDB();

        $query = "SELECT * FROM cadastro_nodes ORDER BY id DESC";
        $result = $this->conn->prepare($query);
        $result->execute();
        $return = $result->fetchAll();
        var_dump($return);

    }
}