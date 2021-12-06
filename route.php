<?php

if (!isset($_GET['path']))
    die(header('Location: /?path=Login'));

$_SESSION['currentPath'] = $_GET['path'];

switch ($_GET['path']) {
    case 'Login':
        $component = $_GET['path'];
        break;
    default:
        $component = null;
}