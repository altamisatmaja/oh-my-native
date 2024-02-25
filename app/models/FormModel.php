<?php

class FormModel extends Model
{
    public function __construct()
    {
        var_dump($this->getAll());
        parent::__construct();
    }

    public function getAll()
    {
        echo "Connected successfully";
        $query = 'SELECT * FROM barang';
        return $this->qry($query)->fetchAll();
    }
}