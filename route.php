<?php

if (!isset($_GET['path']))
    die(header('Location: /?path=Login'));

$allowedRoutes = [
    'Login',
    'Logout',
    'MyCVs',
    'Profile',
    'ProfileChangePassword',
    'ProfileEdit',
    'Register',
];

$component = in_array($_GET['path'], $allowedRoutes)
    ? $_GET['path']
    : null;
