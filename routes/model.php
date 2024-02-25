<?php

class Model
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->setConnection();
    }

    protected function setConnection()
    {
        try {
            $host = DB_HOST;
            $user = DB_USER;
            $pass = DB_PASSWORD;
            $db = DB_NAME;
            $port = DB_PORT;

            $conn = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function qry($query, $parameters = array())
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($parameters);
        return $stmt;
    }
}
