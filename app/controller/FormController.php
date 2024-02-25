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

    public function insert() {
        $data = [
            'title' => 'Saham',
        ];

        $this->view('pages/crud_pages/insert', $data);
    }
}
