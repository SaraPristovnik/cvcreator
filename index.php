<?php

use Models\Database;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/environment.php';
require_once __DIR__ . '/session.php';
require_once __DIR__ . '/route.php';

if (is_null($component))
    header('Location: /404.html?error=ComponentNotSet');

/* Initialize database */

new Database();

/* Load controllers */

try {
    require_once __DIR__ . "/controller/Header.php";
    require_once __DIR__ . "/controller/{$component}.php";
    require_once __DIR__ . "/controller/Footer.php";
} catch (\Throwable $e) {
    die(header("Location: /404.html?error=OpeningFileFailedOnLine{$e->getLine()}"));
}

/* Load Views */

include_once __DIR__ . "/view/Header.php";
include_once __DIR__ . "/view/{$component}.php";
include_once __DIR__ . "/view/Footer.php";
