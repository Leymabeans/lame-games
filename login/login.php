<?php
  //1 Start the session
  session_start();

  //2 Set variables and unset old ones
  unset($username, $password);
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

  //5 If credentials are in database
  $num = mysqli_num_rows($result);
  if ($num == 1) {

    //6 Check if user is admin and set variables
    if ($username == 'admin') {
      $_SESSION['permission'] = 1;
      $_SESSION['username'] = $username;

      //7 Close connection to MySQL database
      mysqli_close($db);

      //8 Redirect to profile page
      header('Refresh: 1.5; URL=../admin/profile.php?' . $_SESSION['username']);
    }

    //9 Otherwise set variables for regular user
    else {
      $_SESSION['username'] = $username;

      //10 Close connection to MySQL database
      mysqli_close($db);

      //11 Redirect to profile page
      header('Refresh: 1.5; URL=../private/profile.php?' . $_SESSION['username']);
    }  
  }

  //12 If credentials do not match, bring user back to login
  else {
    die("Error: Incorrect Credentials");
  } 

  //13 Close connection to MySQL database
  mysqli_close($db);
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logging In...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/favicon.ico" rel="shortcut icon">
    <link href="../css/login-system.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  </head>


  <body class="none">
    <h2 class="registration">Logging In...</h2>
  </body>
