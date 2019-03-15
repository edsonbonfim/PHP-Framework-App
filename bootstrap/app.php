<?php

include '../vendor/autoload.php';

class_alias('EdsonOnildo\Router\Route', 'Route');
class_alias('EdsonOnildo\Router\Request', 'Request');
//class_alias('Sketch\Database\Model', 'Model');

function assign($key, $value)
{
    EdsonOnildo\Tpl\Tpl::assign($key, $value);
}

function render($view)
{
    EdsonOnildo\Tpl\Tpl::render("$view");
}


include '../config/Model.php';
include '../config/View.php';
include '../app/app.php';