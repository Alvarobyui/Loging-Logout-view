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
            <button>Edit</button>
          </section>
          <section class="content">
            <p>PHOTO</p>
            <div class="content--img"><img src="img.png" alt="profilephoto"></div>
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
        <footer>
          <span>created by Alvaro Diaz</span>
          <span>devChallenges.io</span>
        </footer>
      </div>
    </main>
    <aside class="menu-desplegable">
      <div class="profile">
        <div class="img"><img src="profile-photo.png" alt="phpto"></div>
        <p>Alvaro Diaz</p>
        <span><</span>
      </div>
      <div class="menu">
        <button class="menu--btn">
          <span class="">
            <img src="logo.png" alt="o">
          </span>
          <p>My profile</p>
        </button>
        <button class="menu--btn">
          <span class="">
            <img src="logo.png" alt="o">
          </span>
          <p>Group Chat</p>
        </button>
        <button class="menu--btn">
          <span class="">
            <img src="logo.png" alt="o">
          </span>
          <p>Logout</p>
        </button>
      </div>
    </aside>
  </div>
</body>

</html>