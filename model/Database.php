<?php

namespace Models;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    function __construct()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => env('DBDRIVER'),
            'host'      => env('DBHOST'),
            'database'  => env('DBNAME'),
            'username'  => env('DBUSER'),
            'password'  => env('DBPASS'),
            'charset'   => 'utf8',
            'collation' => 'utf8mb4_general_ci',
            'prefix'    => '',
        ]);

        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
    }
}
