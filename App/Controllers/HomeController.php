<?php

namespace App\Asmvc\Controllers;

use App\Asmvc\Core\Requests;

class HomeController
{
    public function index()
    {
        return include_view('home');
    }
}
