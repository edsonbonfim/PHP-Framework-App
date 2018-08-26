<?php

namespace App\Index;

class IndexController extends \Pizza\Controller
{
    public function index()
    {
        $this->view->app([
            'title'   => 'Pizza Framework',
            'desc'    => 'Just a stunningly lightweight micro-framework',
            'docs'    => 'https://edsononildojr.github.io/Pizza-Framework',
            'git'     => 'https://github.com/EdsonOnildoJR/Pizza-Framework',
            'author'  => 'Edson Onildo',
            'license' => 'https://github.com/EdsonOnildoJR/Pizza-Framework/blob/master/LICENSE.md'
        ]);
        $this->view->render('Index/index');
    }
}
