<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        echo view("index.php", ["header"=>"templates/header.php", "footer"=>"templates/footer.php"]);
    }
    
    public function about()
    {
        echo view("about.php", ["header"=>"templates/header.php", "footer"=>"templates/footer.php"]);
    }

}
