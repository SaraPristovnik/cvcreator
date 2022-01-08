<?php

use Models\Database;

require_once __DIR__ . '/vendor/autoload.php'; // composer packages
require_once __DIR__ . '/environment.php'; // .env
require_once __DIR__ . '/session.php'; // session
require_once __DIR__ . '/route.php'; // ?path

$currentFile = basename(__FILE__);

if (is_null($component))
    header("Location: /404.html?e=Component not set&f={$currentFile}&l=" . __LINE__);

/* Initialize database */

new Database();

/* Load controllers */

try {
    require_once __DIR__ . "/controller/Header.php";
    require_once __DIR__ . "/controller/{$component}.php";
    require_once __DIR__ . "/controller/Footer.php";
} catch (\Throwable $e) {
    die(header("Location: /404.html?e=Opening file failed&f={$e->getFile()} ({$currentFile})&l={$e->getLine()}"));
}

/* Load Views */

include_once __DIR__ . "/view/Header.php";
include_once __DIR__ . "/view/{$component}.php";
include_once __DIR__ . "/view/Footer.php";
