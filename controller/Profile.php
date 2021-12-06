<?php

use Controllers\Users;
use Models\User;

if (!isset($_SESSION['userId']))
    die(header('Location: /?path=Login'));

$user = User::where('id', $_SESSION['userId'])->first();

if (!empty($_POST)) {

    if (isset($_POST['email']))
        $user->email = $_POST['email'];

    if (isset($_POST['birthday']))
        $user->birthday = $_POST['birthday'];

    if (isset($_POST['gender']))
        $user->gender = $_POST['gender'];

    if (isset($_POST['nationality']))
        $user->nationality = $_POST['nationality'];

    if (isset($_POST['address_street']))
        $user->address_street = $_POST['address_street'];

    if (isset($_POST['address_additional']))
        $user->address_additional = $_POST['address_additional'];

    if (isset($_POST['address_postal_code']))
        $user->address_postal = $_POST['address_postal_code'];

    if (isset($_POST['address_city']))
        $user->address_city = $_POST['address_city'];

    $user->save();
}
