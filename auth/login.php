<?php
require '../vendor/autoload.php';

use App\Auth\Auth;
use App\Request\Request;
use App\Model\User;

$request = new Request();

if (!empty($request->all())) {
    $data = [
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ];

    $user = User::query()->where([
        'email' => $data['email']
    ])->first();

    if (Auth::attempt($data)) {
        Auth::login($user);
        header('location: homepage.php');
        exit;
    } else {
        echo "Incorrect email or password";
    }
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
<!-- Login Form -->

<form action="login.php" method="post">
  <label for="email">Email</label>
  <input type="email" name="email" placeholder="Enter your email" id="email" />
  <label for="pass">Password</label>
  <input type="password" name="password" placeholder="Enter your password" id="pass" />
  <button type="submit" class="login">Login</button>
  <p>
    Don't have an account? - <a href="./register.php">Register</a> !
  </p>
</form>
</body>
</html>

