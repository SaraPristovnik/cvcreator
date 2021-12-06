<?php

namespace Controllers;

use Models\User;

class Users
{
    public static function findUser(string $email, string $password)
    {
        $user = User::where('email', $email)
            ->where('password', $password)
            ->first();

        return $user;
    }

    public static function findByEmail(string $email)
    {
        $user = User::where('email', $email)
            ->first();

        return $user;
    }
}
