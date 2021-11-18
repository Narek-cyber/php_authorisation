<?php
require '../vendor/autoload.php';

use App\Auth\Auth;

Auth::homepage();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .logout {
      border: none;
      background: none;
      color: red;
    }

    .user_name {
      color: white;
    }

    .user_name:hover {
      text-decoration: none;
      color: white;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="navbar-brand" href="#">Home</a>
      </li>
    </ul>
  </div>
  <div class="mx-auto order-0">
    <a class="user_name mx-auto" href="#">
      Username
    </a>
  </div>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <form action="logout.php" method="post">
          <button type="submit" class="logout">
            Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid text-center mt-5">
  <h3>Brand / Logo</h3>
  <p>Lorem ipsum dolor sit amet, consecrated animistic elite. Amet, nisei!</p>
</div>
</body>
</html>