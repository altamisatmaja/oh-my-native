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
            'AllBarang' => $this->formModels->getAlls()
        ];

        $this->view('pages/form', $data);
    }

    public function edit($ed, $ia) {
        echo "edit $ed, adada $ia";
    }
}
