<!--Processing for login system=======================================-->
<?php
  //1 Start the session
  session_start();
  

  //2 Set variables
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $host = "localhost";
  $account = "root";
  $pass = "root";
  $database = "z_lamegames";
  

  //3 Connect to PhpMyAdmin
  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }

  //4 Query information from lamegames database
  else {
    $query = "SELECT * FROM useraccount WHERE Username='$username'&& Password='$password'";
    $result = mysqli_query($db, $query);

    //5 If credentials match, show their profile
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      $_SESSION['username'] = $username;
      header('Location: ./loginSuccess.php');
    }

    //6 If credentials do not match, bring user back to login
    else {
      die("Error: Incorrect Credentials");
      header("Location: lor.php");
    }
  }

  
  //7 Close connection to MySQL database
  mysqli_close($db);
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../MISC/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="./loginSystem.css" rel="stylesheet" type="text/css">
  </head>

