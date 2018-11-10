<?php

use Sketch\Database\DB;

DB::config([
    'driver' => 'mysql',
    'host'   => 'localhost',
    'dbname' => 'recolhe',
    'user'   => 'root',
    'pass'   => 'batatapalha123'
]);

DB::conn();
