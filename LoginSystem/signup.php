<!--Processing for login system=======================================-->
<?php

  //1 Start the session
  session_start();


  //2 Connect to PhpMyAdmin database
  $host = "localhost";
  $account = "root";
  $pass = "root";
  $database = "z_lamegames";
  $db = mysqli_connect($host, $account, $pass, $database);


  //3 Check connection to PhpMyAdmin
  if ($db === false ) {
    die("Error: Could not connect to the database" . mysqli_connect_error());
  }

  //4 Set user input to variables
  $username = $_POST['username'];
  $password = $_POST['password'];
    
 
  //5 Query information from lamegames database
  $query = "SELECT * FROM useraccount WHERE Username='$username'";
  $result = mysqli_query($db, $query);
  

  //6 Check if username is already taken
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    echo "Username Already Taken";
  }

  //7 Insert information into PhpMyAdmin
  else {
    $registration = "INSERT INTO useraccount (Username, Password) VALUES ('$username', '$password')";
    mysqli_query($db, $registration);
    header("Location: ../CONTENT/profile.php");
  }

  //7 Close connection to MySQL database
  mysqli_close($db);
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../MISC/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="./loginSystem.css" rel="stylesheet" type="text/css">
  </head>

