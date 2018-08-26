<?php

namespace App\Dashboard;

use App\AppController;

class DashboardController extends AppController
{
    public function index()
    {
        
    }

    public function __destruct()
    {
        $this->view->render('Dashboard/index');
    }
}
