<?php

class FormModels extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAlls(){
        $query = "SELECT * FROM barang";
        return $this->qry($query)->fetchAll();
    }
}
