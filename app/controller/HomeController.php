<?php

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'OhMyNative',
        ];
        $this->view('pages/welcome', $data);
    }
}
