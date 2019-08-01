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
  $pass = "";
  $database = "z_lamegames";


  //3 Connect to PhpMyAdmin
  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }

  //4 Retrieve information from users table
  else { 
    $query = "SELECT * FROM users WHERE Username='$username'";
    $result = mysqli_query($db, $query);  

    //5 Check if username is already taken
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      die("Error: Username already taken");
      header('Refresh: 0.7; URL= ./lor.php');
    }
    
    //6 Otherwise insert information into PhpMyAdmin
    else {
    $registration = "INSERT INTO users (FirstName, LastName, Username, Password, Image, Bio) VALUES ('$firstname', '$lastname', '$username', '$password', '', '')";
    mysqli_query($db, $registration);
    $_SESSION['username'] = $username;
    header('Location: ./signup-success.php');
    }
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
    <link href="../images/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="../css/login-system.css" rel="stylesheet" type="text/css">
  </head>

