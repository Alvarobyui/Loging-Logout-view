<?php
session_start();
$photo = 2;
/* error_reporting(0); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal info</title>
  <link rel="stylesheet" href="./estilos/personal_info.css">
</head>

<body>
  <div class="container">
    <main>
      <div class="heading">
        <div class="logo">
          <img src="./img/logo.png " alt="logo">
        </div>
        <div class="photo">
          <img src="./img/user.png" alt="user">
        </div>
      </div>
      <div class="personal-info">
        <div class="titles">
          <h1>Personal info</h1>
          <p>Basic info, like your name and photo</p>
        </div>
        <div class="box-content">
          <section class="content-heading">
            <div class="heading--title">
              <h2>Profile</h2>
              <p>Some info may be visible to other people</p>
            </div>
            <a id="edit-button" href="change_info.php">Edit</a>
          </section>
          <section class="content">
            <p>PHOTO</p>
            <div class="content--img"><?php var_dump($photo); ?></div>
          </section>
          <section class="content">
            <p>NAME</p>
            <p class="content--text">Xanthe Neal</p>
          </section>
          <section class="content">
            <p>BIO</p>
            <p class="content--text">I am a software developer and a big fan of devchallenges</p>
          </section>
          <section class="content">
            <p>PHONE</p>
            <p class="content--text">908249274292</p>
          </section>
          <section class="content">
            <p>EMAIL</p>
            <p class="content--text">xanthe.neal@gmail.com</p>
          </section>
          <section class="content">
            <p>PASSWORD</p>
            <p class="content--text">*********</p>
          </section>
        </div>
        <a href="logout.php" id="new-logout" class="menu--btn">
            <span class="btn-logout">
              <img src="./img/logout.png" alt="o">
            </span>
            <p>Logout</p>
        </a>
        <footer>
          <span>created by Alvaro Diaz</span>
          <span>devChallenges.io</span>
        </footer>
      </div>
    </main>
    <aside class="menu-desplegable">
      <div class="profile">
        <div class="img"><img src="./img/user.png" alt="photo"></div>
        <p>Alvaro Diaz</p>
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
          </svg>
        </span>
      </div>
      <div class="menu">
        <a href="personal_info.php" class="menu--btn">
          <span class="btn-myprofile">
            <img src="./img/user.png" alt="o">
          </span>
          <p>My profile</p>
        </a>
        <a href="#" class="menu--btn">
          <span class="btn-group">
            <img src="./img/group.png" alt="o">
          </span>
          <p>Group Chat</p>
        </a>
        <a href="logout.php" id="logout" class="menu--btn">
          <span class="btn-logout">
            <img src="./img/logout.png" alt="o">
          </span>
          <p id="logout--red">Logout</p>
        </a>
      </div>  
    </aside>
  </div>
</body>

</html>