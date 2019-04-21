<?php
  //1 Start session and check for key
  session_start();

?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Leaderboard</title>
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
        myVar = setTimeout(showPage, 500);
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
    <div class="header">
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
            <a class="pages" href="./profile.php?". <?php $_SESSION['username'] ?>>
              <li>Profile</li>
            </a>
          </ul>
        </div>
      </nav>
    </div>
    


  <!--Game Leaderboard 1========================================================= --> 
    <div class="leaderboard first"> 
      <h2 class="gametitle" >Cross Country Collin</h2><br>
      <table>
        <thead>
          <tr>
            <th class="place">Place</th>
            <th class="name">Name</th>
            <th class="score">Score</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td>#1</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#2</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#3</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#4</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#5</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>





  <!--Game Leaderboard 2========================================================= --> 
      
      <h2 class="gametitle">Escape</h2><br>
      <table>
        <thead>
          <tr>
            <th class="place">Place</th>
            <th class="name">Name</th>
            <th class="score">Score</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td>#1</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#2</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#3</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#4</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>#5</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table> 
    </div>



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