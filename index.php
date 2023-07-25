<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="./estilos/index--login.css">
</head>

<body>
  <div class="container">
    <section class="container--main">
      <div class="heading">
        <img src="./img/logo.png " alt="logo">
      </div>
      <h1>Join thousands of learners from around the world</h1>
      <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
      <form class="form" action="connect_register.php" method="POST">
        <div class="form--item">
          <div class="form--img"><img src="./img/envelope.png" alt="logo"></div>
          <input type="email" name="email" id="email_register" placeholder="Email">
        </div>
        <div class="form--item">
          <div class="form--img"><img src="./img/lock.png" alt="logo"></div>
          <input type="password" name="password" id="password_register" placeholder="Password">
        </div>
        <input class="button" name="register-btn" type="submit" value="Start coding now">
      </form>
      <section class="social">
        <p>or continue with these social profile</p>
        <div class="social--logos">
          <a href="#" class="logo-item">
            <img src="./img/gmail.png" alt="logo">
          </a>
          <a href="#" class="logo-item">
            <img src="./img/facebook.png" alt="logo">
          </a>
          <a href="#" class="logo-item">
            <img src="./img/twitter.png" alt="logo">
          </a>
          <a href="#" class="logo-item">
            <img src="./img/github.png" alt="logo">
          </a>
        </div>
        <p>Already a member? <a href="login.php">Login</a></p>
      </section>
    </section>
    <footer>
      <span>created by <a href="https://alvarobyui.github.io/Portfolio-Jun-2023/" target="_blank">Alvaro Diaz</a></span>
      <span>devChallenges.io</span>
    </footer>
  </div>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</body>

</html>