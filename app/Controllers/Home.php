<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message', ["name"=>"Jurasic Park"]);
    }

    public function e()
    {
        echo view('testing.php');
        echo view('welcome_message');

    }
}
