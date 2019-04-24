<!--Updating profile information=================================== -->
<?php
  //1 Start the session
  session_start();
  
  //2 Declare variables from user input
  $image = $_POST['image'];
  $bio = $_POST['bio'];
  $host = "localhost";
  $account = "root";
  $pass = "root";
  $database = "z_lamegames";


  //3 Connect to PhpMyAdmin
  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }

  //4 Insert information into database
  else { 
  $addProfile = "UPDATE useraccount SET Image='$image', Bio='$bio' WHERE Username ='" . $_SESSION['username'] . "'";  
    mysqli_query($db, $addProfile);
    if (!mysqli_query($db, $addProfile)) {
      echo mysqli_error($db);
    }
    else {
      header("Location: ../Content/profile.php");
    }
  }

?>
<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Updating Profile...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Miscellaneous/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="./index.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
  </head>


  <body>


  </body>
</html>