<?php

use Controllers\Users;

if (isset($_SESSION['userId']))
    die(header('Location: /?path=Profile'));

$error = [];

if (!empty($_POST)) {

    $userEmail = $_POST['email'] ?? '';
    $userPassword = $_POST['password'] ?? '';

    $user = Users::findUser($userEmail, $userPassword);

    if (isset($user)) {
        $_SESSION['userId'] = $user->id;
        die(header('Location: /?path=Profile'));
    }

    if (null === Users::findByEmail($userEmail))
        $error['message'] = 'User not found. Do you want to create <a href="/?path=Register">a new account</a>?';
    else
        $error['message'] = 'Wrong password.';
}
