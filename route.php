<?php

if (!isset($_GET['path']))
    die(header('Location: /?path=Login'));

switch ($_GET['path']) {
    case 'Logout':
    case 'Login':
    case 'Register':
    case 'Profile':
        $component = $_GET['path'];
        break;
    default:
        $component = null;
}