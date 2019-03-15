<?php

use EdsonOnildo\Router\Route;

Route::get('/', function() {
    render('index');
});

Route::get('/login', 'AuthController@login');