<?php

class Conn
{
    public string $db = 'mysql';
    public string $host = 'localhost';
    public string $user = 'root';
    public string $password = '';
    public string $dbname = 'cadastro';
    public object $conn;

    public function connectDB()
    {
        try{
            $this->conn = new PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
            echo "Conexão realizada com sucesso!<br>";
            return $this->conn;
        }catch(Exception $err){
            die('Erro: ' . $err);
        }
    }
}
