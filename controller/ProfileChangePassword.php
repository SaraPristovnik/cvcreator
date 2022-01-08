<?php

use Models\User;

if (!isset($_SESSION['userId']))
    die(header('Location: /?path=Login'));

$user = User::where('id', $_SESSION['userId'])->first();

$error = null;
$success = null;

if (!empty($_POST)) {

    $isOldPasswordCorrect = isset($_POST['password']) && ($user->password === $_POST['password']);

    if (!$isOldPasswordCorrect) {
        $error = 'Old password incorrect';
        goto end;
    }

    $isNewPasswordMatching = isset($_POST['newPassword']) && isset($_POST['repeatPassword']) && ($_POST['newPassword'] === $_POST['repeatPassword']);

    if (!$isNewPasswordMatching) {
        $error = 'Passwords not matching';
        goto end;
    }

    $isPasswordValid = strlen($_POST['newPassword']) >= 8;

    if (!$isPasswordValid) {
        $error = 'Password is too short';
        goto end;
    }

    $user->password = $_POST['newPassword'];

    $user->save();

    $success = 'Password successfully changed';
}

end:
