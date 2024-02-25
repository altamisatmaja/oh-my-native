<?php

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'OhMyNative | Welcome',
        ];
        $this->view('pages/welcome', $data);
    }
}
