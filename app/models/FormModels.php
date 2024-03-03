<?php

class FormModels extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAlls()
    {
        $query = 'SELECT * FROM barang';
        return $this->qry($query)->fetchAll();
    }

    public function insert($data)
    {
        $query = 'INSERT INTO barang (nama_barang, jumlah, harga_satuan, expire_date) VALUES (?, ?, ?, ?)';
        return $this->qry($query, [
            $data['nama_barang'],
            $data['jumlah'],
            $data['harga_satuan'],
            $data['kadaluarsa'],
        ]);
    }

    public function getById($id)
    {
        $query = 'SELECT * FROM barang WHERE barang_id = ?';
        return $this->qry($query, [$id])->fetch();
    }
}
