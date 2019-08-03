<!--Updating profile information=================================== -->
<?php
  //1 Start the session
  session_start();
  header('Refresh: 1; URL=../pages/profile.php?'. $_SESSION['username']);
  
  //2 Declare variables from user input
  $image = $_POST['image'];
  $host = "localhost";
  $account = "root";
  $pass = "";
  $database = "z_lamegames";


  //3 Connect to PhpMyAdmin
  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }

  //4 Insert information into database
  else { 
  $addProfile = "UPDATE useraccount SET Image='$image' WHERE Username ='" . $_SESSION['username'] . "'";  
    mysqli_query($db, $addProfile);
    if (!mysqli_query($db, $addProfile)) {
      echo mysqli_error($db);
    }
    else {
      header("Location: ./edit.php");
    }
  }

?>
<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Editing Profile...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Miscellaneous/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="./edit.css" rel="stylesheet" type="text/css">
  </head>

  <body class="none">
    <h2 class="successtext">Editing Profile...</h2>
  </body>