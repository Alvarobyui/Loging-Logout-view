<?php
if (isset($_POST['register-btn'])) {

  //hago la conexion con la base de datos
  $conn = mysqli_connect("localhost", "root", "", "login");
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }

  $username = $_POST["email"];
  $password = $_POST["password"];

  if (empty($username) || empty($password)) {
    header("Location: ./index.php?error=emptyfields&mail=".$username."&password=".$password);
    exit();
  }

  else if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    header("Location: ./index.php?error=invalidmail=".$username);
    exit();
  } 
  else {
    $sql = "SELECT email FROM newusers WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ./index.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);

      if($resultCheck > 0) {
        header("Location: ./index.php?error=usertaken&mail=".$username);
        exit();
      }
      else {
        $sql = "INSERT INTO newusers(email, pwd) VALUES (?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ./index.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          
          mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ./login.php?login?success");
          exit();
        }
      }  
    }
  }
 mysqli_stmt_close($stmt);
 mysqli_close($conn);  
 
}
else {
  header("Location: ./login.php");
  exit();  
}













/* session_start();
// eliminando error_reporting(0) para poder depurar errores

$newUser = $_SESSION["username"] ?? '';
$newPassword = $_SESSION["password"] ?? '';

// Validar entradas antes de usarlas
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$psswrd = filter_input(INPUT_POST, 'password');

if (empty($email) || empty($psswrd)) {
    exit('Invalid email. Format: email@domain.com');
}

// Guardar las credenciales en la sesión
$_SESSION["username"] = $email;
$_SESSION["password"] = $psswrd;

var_dump($newUser);

try {
    $mysql = new mysqli("localhost", "root", "", "login");
    echo "conectado";

    // Preparar la consulta para evitar la inyección de SQL
    $stmt = $mysql->prepare("INSERT INTO login_users(email, password) VALUES (?, ?)");
    // Enlazar los parámetros a la consulta
    $stmt->bind_param("ss", $email, $psswrd);
    // Ejecutar la consulta
    $stmt->execute();
    
    // Redirigir a login.php
    header("Location: login.php");
    exit();

} catch (mysqli_sql_exception $e) {
    echo "Error : " . $e->getMessage();
    exit();
} */

