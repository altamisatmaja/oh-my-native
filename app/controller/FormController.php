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
            'nama_barang' => 'string | required | alphanumeric | between: 0, 5',
            'jumlah' => 'int | required',
            'harga_satuan' => 'float | required',
            'kadaluarsa' => 'string',
        ];

        $message = [
            'nama_barang' => [
                'required' => "Nama saham harus diisi",
                'alphanumeric' => "Nama saham harus huruf dan angka",
                'between' => 'Nama saham harus ticker nya, diantara 0 hingga 5',
            ],
            'jumlah' => [
                'required' => "Jumlah harus diisi",
            ],
            'harga_satuan' => [
                'required' => "Harga lot harus diisi",
            ],
        ];
        [$inputs, $errors] = $this->filter($_POST, $fields, $message);
        echo '<pre>';
        var_dump($errors);
        echo '</pre>';
    }
}
