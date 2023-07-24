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
          <button>"<" Back</button>
          <div class="box">
            <h2>Change Info</h2>
            <p>Some info may be visible to other people</p>
            <form action="db_personal_info.php">
              <div class="change-profile">
                <button class="content--link"><img src="img.png" alt="icon"></button>
                <p>CHANGE PHOTO</p>
                <input class="content--input" type="file" id="file" placeholder="CHANGE PHOTO">
              </div>
              <label for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Enter your name...">
              <label for="bio">Bio</label>
              <input type="text" name="bio" id="bio" placeholder="Enter your bio...">
              <label for="phone">Phone</label>
              <input type="text" name="phone" id="phone" placeholder="Enter your phone...">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Enter your email...">
              <label for="password">Password</label>
              <input type="text" name="password" id="password" placeholder="Enter your new password...">

              <input type="submit" value="Save">
            </form>
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
         <span>
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
             <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
           </svg>
         </span>
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