<?php
  //1 Start session
  session_start();
  
  //2 Set new variables and unset old variables 
  unset($first_name, $last_name, $username, $password);
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  //3 Connect to Lame Games database
  include '../includes/db-connection.php';

  //4 Retrieve information from users table
  $query = mysqli_query($db, "SELECT * FROM users WHERE username='$username'");  

  //5 Check if query was successful
  include '../includes/query-success.php';

  //6 Check if username is already taken
  $num = mysqli_num_rows($query);
  if ($num == 1) {
    die("Error: Username already taken");
  }
    
  //7 Insert information into users table
  $registration = mysqli_query($db, "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')");

  //8 Close connection to MySQL database
  mysqli_close($db);

  //9 Set username key
  $_SESSION['username'] = $username;

  //10 Redirect to profile page
  header('Refresh: 1.5; URL=../private/profile.php?' . $_SESSION['username']);
?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registering...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="../images/favicon.ico" rel="shortcut icon">
    <link href="../css/login-system.css" rel="stylesheet" type="text/css">
  </head>

  <body class="none">
    <h2 class="success">Creating Profile...</h2><br>
  </body>
