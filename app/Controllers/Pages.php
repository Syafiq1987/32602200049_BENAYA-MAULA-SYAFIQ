<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
       return view('pages/hello');
    }

    Public function about()

    {
        echo view('layout/header');
        echo view('pages/about');
        echo view('layout/footer');
    }

}
