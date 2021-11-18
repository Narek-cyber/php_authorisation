<?php
require '../vendor/autoload.php';

use App\Request\Request;
use App\Model\User;

$request = new Request();

if (!empty($request->all())) {
    $data = [
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => password_hash($request->input('password'),PASSWORD_DEFAULT)
    ];


    if (
      !empty($data['password'])
      && $request->input('password') === $request->input('password_confirmation')
    ) {
        $user = User::query()->insert([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        header('location: login.php');
        exit;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<!-- Registration Form -->

<form action="register.php" method="post">
  <label for="flame">Full name</label>
  <input type="text" name="username" placeholder="Enter your name" id="flame" />
  <label for="email">Email</label>
  <input type="email" name="email" placeholder="Enter your email" id="email" />
  <label for="pass">Password</label>
  <input type="password" name="password" placeholder="Enter a password" id="pass" />
  <label for="pass_conf">Confirm your password</label>
  <input type="password" name="password_confirmation" placeholder="Password confirmation" id="pass_conf" />
  <button type="submit" class="register">Enter</button>
  <p>
    Already have an account? - <a href="./login.php">Log in</a> !
  </p>
</form>
</body>
</html>
