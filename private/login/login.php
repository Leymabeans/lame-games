<?php
  //1 Start the session
  session_start();
  header('Refresh: 1; URL=../pages/profile.php?' . $_SESSION['username']);

  //2 Set variables
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

  //4 Query information from lamegames database
  $query = "SELECT * FROM users WHERE Username='$username'&& Password='$password'";
  $result = mysqli_query($db, $query);

  //5 If credentials match, set username key
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $_SESSION['username'] = $username;

    //6 Close connection to MySQL database
    mysqli_close($db);
  }

  //7 If credentials do not match, bring user back to login
  else {
    die("Error: Incorrect Credentials");
    
    //8 Close connection to MySQL database
    mysqli_close($db);
    }

  
  
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logging In...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="../css/login-system.css" rel="stylesheet" type="text/css">
  </head>


  <body class="none">
    <h2 class="registration">Logging In...</h2>
  </body>
