<?php
  session_start();
  header('Refresh: 1; URL=../CONTENT/profile.php?' . $_SESSION['username']);

?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Success</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../MISC/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
    <link href="./loginSystem.css" rel="stylesheet" type="text/css">
  </head>

  <body class="none">
    <h2 class="registration">Registration Successful!</h2><br>
    <h4 class="registration">Creating Profile...</h4>
  </body>


