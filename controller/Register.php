<?php

use Controllers\Users;
use Models\User;

$error = [];

if (!empty($_POST)) {

    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if (null !== Users::findByEmail($userEmail))
        $error['message'] = 'User already exists. Do you want to <a href="/?path=Login">login</a>?';

    elseif ($userPassword !== $_POST['confirm_password'])
        $error['message'] = 'Passwords do not match.';

    else {
        $user = User::create([
            'email' => $userEmail,
            'password' => $userPassword,
        ]);
        $_SESSION['userId'] = $user->id;
        die(header('Location: /?path=ProfileEdit'));
    }
}
