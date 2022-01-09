<?php

if (!isset($_GET['path']))
    die(header('Location: /?path=Login'));

$allowedRoutes = [
    'Login',
    'Logout',
    'MyCV',
    'MyCVs',
    'ProfileChangePassword',
    'ProfileEdit',
    'Register',
];

$component = in_array($_GET['path'], $allowedRoutes)
    ? $_GET['path']
    : null;
