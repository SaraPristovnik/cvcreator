<?php

namespace Controllers;

use Models\User;

class Users
{
    public static function createUser($email, $password)
    {
        $user = User::create([
            'email' => $email,
            'password' => $password
        ]);

        return $user;
    }
}
