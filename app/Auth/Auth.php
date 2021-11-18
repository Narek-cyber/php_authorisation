<?php
namespace App\Auth;

use App\Model\User;

class Auth
{
    public static function attempt($data)
    {
        $user = User::query()->where([
            'email' => $data['email']
        ])->first();

        return !empty($user) && password_verify($data['password'], $user->password);
    }

    public static function login($user)
    {
        session_start();

        $_SESSION['user'] = $user;
    }

    public static function logout()
    {
        session_start();

        unset($_SESSION['user']);

        header('location: login.php');
        exit;
    }

    public static function homepage() {
        session_start();

        if (!isset($_SESSION['user'])) {
            header('location: login.php');
            exit;
        }
    }
}