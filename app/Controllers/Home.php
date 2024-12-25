<?php


namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'content' => 'admin/v_dashboard'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
