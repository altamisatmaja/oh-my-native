<?php

class FormController extends Controller
{
    private $formModel;

    public function __construct()
    {
        var_dump($this->formModel);
        $this->formModel = $this->model('FormModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Saham',
            'getAllForm' => $this->formModel->getAll()
        ];

        echo "Koneksi database berhasil!";

        return $this->view('pages/form', $data);
    }
}
