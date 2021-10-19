<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/header', ['title' => 'un titre']);
        echo view('Home');
        echo view('templates/footer');
    }
}
