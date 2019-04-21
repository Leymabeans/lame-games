<?php
  session_start();
  header('Refresh: 1; URL=../Content/profile.php?' . $_SESSION['username']);

?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration Success</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Miscellaneous/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="./loginSystem.css" rel="stylesheet" type="text/css">
  </head>

  <body class="none">
    <h2 class="registration">Registration Successful!</h2><br>
    <p class="registration">Creating Profile...</p>
  </body>


