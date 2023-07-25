<?php
session_start();
/* error_reporting(0);
 */
//Bringing the connection from:
require("connect_register.php");

$email = $_POST["email"];
$psswrd = $_POST["password"];
echo var_dump($newUser);
echo var_dump($email);
//connecting to the database and verifying access
try {
  $login = "SELECT * FROM login_users WHERE email= '$email' and password = '$psswrd'";
  $result = mysqli_query($mysql, $login);
  $rows = mysqli_num_rows($result);
  
  if ($rows === 1) {
    header("Location: personal_info.php");
  }
} catch (mysqli_sql_exception $e) {
  echo "Error : " . $e-> getMessage();
  echo "Usuario o Contraseña incorrecta";
  echo "<a href:'login.php'>Volver a intentar</a>";
  
}