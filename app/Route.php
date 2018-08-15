<?php

use Router\Route;
use App\Controller;

Route::get('/', [new Controller\HomeController, 'index']);
