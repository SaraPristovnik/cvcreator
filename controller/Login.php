<?php

use Controllers\Users;

if (isset($_SESSION['userId']))
    die(header('Location: /?path=ProfileEdit'));

$error = [];

if (!empty($_POST)) {

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    $user = Users::findUser($userEmail, $userPassword); // ce ni uporabnika v bazi, NULL (not set)

    if (isset($user)) {
        $_SESSION['userId'] = $user->id;
        die(header('Location: /?path=ProfileEdit'));
    }

    $error['message'] = null === Users::findByEmail($userEmail)
        ? 'User not found. Do you want to create <a href="/?path=Register">a new account</a>?'
        : 'Wrong password.';
}
