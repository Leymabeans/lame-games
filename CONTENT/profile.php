<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: ../LoginSystem/login.php");
  }
?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../MISC/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="./index.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <script>
      var myVar;

      function myFunction() {
        myVar = setTimeout(showPage, 1500);
      }   
      function showPage() {
        document.getElementById("loader").style.display = "none";
      }
    </script>
  </head>



<!--Loader===========================================================-->
  <body onload="myFunction()">
    <div id="loader"></div>



<!--Nav Bar==========================================================-->
    <nav role="navigation">
      <div id="menuToggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <a class="pages" href="./index.htm">
            <li>Home</li>
          </a>
          <a class="pages" href="./leaderboard.php">
            <li>Leaderboard</li>
          </a>
          <a class="pages" href="./profile.php">
            <li>Profile</li>
          </a>
        </ul>
      </div>
    </nav>

    <h2>Registration Successful!</h2>
    <a href="../LoginSystem/logout.php">Logout</a>

    
<!--Footer========================================================-->
<footer>
      <br><br><br>
      <a href="https://github.com/nathanleysgit" target="_blank">
        <i class="fab fa-github fa-3x"></i>
      </a>

      <a href="https://www.youtube.com" target="_blank">
        <i class=" free fas fa-tv fa-3x" style="color: #ffffff"></i>
      </a>

      <br>
      <span> 2018 Lame Games.</span>
    </footer>  
  </body>
</html>