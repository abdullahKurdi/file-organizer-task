<?php

namespace App\Controllers;
use Tamatem\View\View;

class HomeController
{

    public function index()
    {
        return View::make('view');
    }
}