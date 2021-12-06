<?php

use Models\Database;

require_once __DIR__ . '/vendor/autoload.php';

/* Load environment variables */

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/* Load database */

$db = new Database();
