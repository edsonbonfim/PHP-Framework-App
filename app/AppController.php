<?php

namespace App;

use Pizza\Controller as BaseController;
use Router\Server;

class AppController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->view->app([
            'title'  => 'Pizza Framework',
            'desc'   => 'Just a stunningly lightweight micro-framework.',
            'site'   => '/',
            'uri'    => Server::getUri()[0]
        ]);

        $this->view->nav([
            [
                'name' => 'Dashboard',
                'link' => 'dashboard',
                'icon' => 'dashboard'
            ]
        ]);
    }
}
