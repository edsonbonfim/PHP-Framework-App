<?php

use Router\Route;

Route::get('/', [new App\Index\IndexController, 'index']);
