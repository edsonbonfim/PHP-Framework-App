<?php

namespace App\Controller;

class HomeController extends \Pizza\Controller
{
    public function index()
    {
        $this->view->render('index');
    }
}
