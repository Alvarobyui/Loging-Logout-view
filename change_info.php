 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit info</title>
   <link rel="stylesheet" href="./estilos/change_info.css">
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
          <a href="personal_info.php" id="back">< Back</a>
          <div class="box-content">
            <div class="change-info">
              <h2>Change Info</h2>
              <p>Some info may be visible to other people</p>
            </div>
            <form action="db_personal_info.php" >
              <div class="change-profile">
                <a href="#" class="profile--img"><img src="./img/user.png" alt="icon"></a>
                <p>CHANGE PHOTO</p>
              </div>
              <input class="content--input" type="file" id="file" value="CHANGE PHOTO">
              <section class="content">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name...">
              </section>
              <section class="content">
                <label for="bio">Bio</label>
                <input type="text" name="bio" id="bio" placeholder="Enter your bio...">
                <!--                 <textarea name="bio" rows="5"  id="bio" cols="40"></textarea> -->
              </section>
              <section class="content">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone...">
              </section>
              <section class="content">
                <label for="phone">Email</label>
                <input type="email" name="phone" id="phone" placeholder="Enter your phone..." required>
              </section>
              <section class="content">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="Enter your new password..." required>
              </section>
              <input type="submit" value="Save" id="save">
            </form>
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
        <div class="img"><img src="./img/user.png" alt="phpto"></div>
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
          <p>Logout</p>
        </a>
      </div>
    </aside>
   </div>
 </body>

 </html>