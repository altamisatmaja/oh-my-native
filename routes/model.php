<?php

class Model
{
    private $conn;

    private $tableName;
    private $column=[];

    public function __construct()
    {
        $this->conn = $this->setConnection();
    }

    public function setTableName($tableName){
        $this->tableName = $tableName;
    }

    public function setColumn($column){
        $this->column = $column;
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

    public function qry($query, $parameter = array())
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($parameter);
        return $stmt;
    }

    public function get($params = array()){
        $column = implode(',', $this->column);
        $query = "SELECT $column FROM {$this->tableName}";
        $paramValue = [];
        if(!empty($params)){
            $query .= " WHERE 1 = 1";
            foreach($params as $key => $value){
                $query .= " AND {$key} = ? ";
                array_push($paramValue, $value);
            }
        }
        return $this->qry($query, $paramValue);
    }
}
