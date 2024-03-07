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
            'nama_barang' => 'string | required | between: 0, 10',
            'jumlah' => 'int | required',
            'harga_satuan' => 'float | required',
            'kadaluarsa' => 'string',
        ];

        $message = [
            'nama_barang' => [
                'required' => 'Nama saham harus diisi',
                'alphanumeric' => 'Nama saham harus huruf dan angka',
                'between' => 'Nama saham harus ticker nya, diantara 0 hingga 5',
            ],
            'jumlah' => [
                'required' => 'Jumlah harus diisi',
            ],
            'harga_satuan' => [
                'required' => 'Harga lot harus diisi',
            ],
        ];

        [$inputs, $errors] = $this->filter($_POST, $fields, $message);

        if (($inputs['kadaluarsa']) == '') {
            $inputs['kadaluarsa'] = NULL;
        }

        if ($errors) {
            Message::setFlash('error', 'Data gagal ditambahkan', $errors[0], $inputs);
            $this->redirect('crud/insert');
        }

        $proc = $this->formModels->insert($inputs);
        if ($proc) {
            Message::setFlash('success', 'Berhasil!', 'Data berhasil ditambahkan', $inputs);
            $this->redirect('crud');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Barang',
            'barang' => $this->formModels->getById($id)
        ];

        $this->view('pages/crud_pages/edit', $data);
    }

    public function edit_saham()
    {
        $fields = [
            'nama_barang' => 'string | required | between: 0, 10',
            'jumlah' => 'int | required',
            'harga_satuan' => 'float | required',
            'kadaluarsa' => 'string',
            'mode' => 'string',
            'id' => 'int',
        ];

        $message = [
            'nama_barang' => [
                'required' => 'Nama saham harus diisi',
                'alphanumeric' => 'Nama saham harus huruf dan angka',
                'between' => 'Nama saham harus ticker nya, diantara 0 hingga 5',
            ],
            'jumlah' => [
                'required' => 'Jumlah harus diisi',
            ],
            'harga_satuan' => [
                'required' => 'Harga lot harus diisi',
            ],
        ];

        [$inputs, $errors] = $this->filter($_POST, $fields, $message);

        if (($inputs['kadaluarsa']) == '') {
            $inputs['kadaluarsa'] = NULL;
        }

        if ($errors) {
            Message::setFlash('error', 'Data gagal ditambahkan', $errors[0], $inputs);
            $this->redirect('crud/edit/'.$inputs['id']);
        }

        if($inputs['mode'] == 'update'){
            $proc = $this->formModels->update($inputs);
            if($proc) {
                Message::setFlash('success', 'Berhasil!', 'Barang berhasil diubah');
                $this->redirect('crud');
            }
        } else {
            $proc = $this->formModels->delete($inputs['id']);
            if($proc) {
                Message::setFlash('success', 'Berhasil!', 'Barang berhasil dihapus');
                $this->redirect('crud');
            }
        }
    }
}
