<?php

namespace App\Controller;

use Pizza\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view->title('Bonfim Framework');
        $this->view->render('index');
    }
}
