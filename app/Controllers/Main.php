<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        echo view("templates/header.php");
        echo view("index.php", ["directory"=>ROOTPATH]);
        echo view("templates/footer.php");
    }

    public function about()
    {
        echo view("templates/header.php");
        echo view("about.php");
        echo view("templates/footer.php");
    }

}
