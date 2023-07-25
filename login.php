<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="./estilos/index--login.css">
</head>
<body>
<div class="container">
    <section class="container--main login-view">
      <div class="heading">
        <img src="./img/logo.png" alt="logo">
      </div>
      <h1 id="login-title">Login</h1>
      <form class="form" action="db_login.php" method="POST">
        <div class="form--item">
          <div class="form--img"><img src="./img/envelope.png" alt="logo"></div>
          <input type="email" name="email" id="email_login" placeholder="Email">
        </div>
        <div class="form--item">
          <div class="form--img"><img src="./img/lock.png" alt="logo"></div>
          <input type="password" name="password" id="password_login" placeholder="Password">
        </div>
        <input class="button" type="submit" value="Login">
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
        <p>Already a member? <a href="index.php">Register</a></p>
      </section>
    </section>
    <footer>
      <span>created by <a href="https://alvarobyui.github.io/Portfolio-Jun-2023/" target="_blank">Alvaro Diaz</a></span>
      <span>devChallenges.io</span>
    </footer>
  </div>
</body>
</html>