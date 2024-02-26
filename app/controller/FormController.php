<?php

class FormController extends Controller
{
    private $formModels;

    public function __construct()
    {
        $this->formModels = $this->model('FormModels');
    }

    public function index()
    {
        $data = [
            'title' => 'Saham',
            'sahamAll' => $this->formModels->getAlls()
        ];

        $this->view('pages/crud_pages/main', $data);
    }

    public function insert()
    {
        $data = [
            'title' => 'Saham',
        ];

        $this->view('pages/crud_pages/insert', $data);
    }

    public function insert_saham()
    {
        $fields = [
            'nama_barang' => 'string',
            'jumlah' => 'int',
            'harga_satuan' => 'float',
            'kadaluarsa' => 'string',
        ];

        $message = [];
        [$inputs] = $this->filter($_POST, $fields, $message);
        echo '<pre>';
        var_dump($inputs);
        echo '</pre>';
    }
}
