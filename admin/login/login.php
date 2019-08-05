<?php
  //1 Start the session
  session_start();
  header('Refresh: 1.5; URL=../pages/admin.php?' . $_SESSION['adm_username']);

  //2 Set variables and unset old ones
  unset($username, $password);
  $adm_username = $_POST['adm_username'];
  $adm_password = $_POST['adm_password'];
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
  $query = "SELECT * FROM users WHERE username='admin' && password='$adm_password'";
  $result = mysqli_query($db, $query);

  //5 If credentials match, set username key
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $_SESSION['adm_username'] = $adm_username;

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
    <link href="../../private/images/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="../../private/css/login-system.css" rel="stylesheet" type="text/css">
  </head>


  <body class="none">
    <h2 class="registration">Logging In...</h2>
  </body>
