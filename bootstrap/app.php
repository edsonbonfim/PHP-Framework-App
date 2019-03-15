<?php

include '../vendor/autoload.php';

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