<?php
  //1 Start the session
  session_start();

  //2 Set new variables and unset old variables
  unset($username, $password);
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  //3 Connect to Lame Games database
  include '../includes/db-connection.php';

  //4 Retreive all information from users table
  $query = mysqli_query($db, "SELECT * FROM users WHERE Username='$username'&& Password='$password'");

  //5 Check if query was successful
  include '../includes/query-success.php';

  //6 Check if user exists
  $num = mysqli_num_rows($query);
  if ($num == 1) {

    //7 If admin, redirect to admin page
    if ($username == 'admin') {
      $_SESSION['permission'] = 1;
      $_SESSION['username'] = $username;
      header('Refresh: 1.5; URL=../admin/dashboard.php');
    }

    //8 If regular user, redirect to profile page
    else {
      $_SESSION['username'] = $username; 
      header('Refresh: 1.5; URL=../private/profile.php?' . $_SESSION['username']);
    }  
  }

  //9 If credentials do not match, bring user back to login
  else {
    die("Error: Incorrect Credentials");
  } 

  //10 Close connection to MySQL database
  mysqli_close($db);
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logging In...</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="../images/favicon.ico" rel="shortcut icon">
    <link href="../style/index.css" rel="stylesheet" type="text/css">
  </head>


  <body class="none">
    <h2 class="success">Logging In...</h2>
  </body>
