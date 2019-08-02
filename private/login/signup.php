<!--Processing for login system=======================================-->
<?php
  //1 Start session and redirect
  session_start();
  header('Refresh: 1; URL=../pages/profile.php?' . $_SESSION['username']);

  //2 Set variables 
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $host = "localhost";
  $account = "root";
  $pass = "";
  $database = "z_lamegames";


  //3 Connect to PhpMyAdmin
  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }

  //4 Retrieve information from users table
  $query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $query);  

  //5 Check if username is already taken
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    die("Error: Username already taken");
  }
    
  //6 Otherwise insert information into PhpMyAdmin
  else {
    $registration = "INSERT INTO users (first_name, last_name, username, password, image, bio) VALUES ('$first_name', '$last_name', '$username', '$password', '', '')";
    mysqli_query($db, $registration);
    $_SESSION['username'] = $username;

    //7 Close connection to MySQL database
    mysqli_close($db);
  }
?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registering...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="../css/login-system.css" rel="stylesheet" type="text/css">
  </head>

  <body class="none">
    <h2 class="registration">Creating Profile...</h2><br>
  </body>
