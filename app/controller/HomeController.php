<?php

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome',
        ];
        $this->view('pages/welcome', $data);
    }
}
