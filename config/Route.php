<?php

use Router\Route;

Route::default(function() {
    echo "<h1>404</h1>";
});

Route::get('/', function() {
    header('Location: /dashboard');
});

Route::get('/dashboard', [new App\Dashboard\DashboardController, 'index']);
