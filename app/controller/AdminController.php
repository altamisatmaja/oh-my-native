<?php

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'OhMyNative | Dashboard',
        ];
        $this->view('pages/admin/index', $data);
    }
}
