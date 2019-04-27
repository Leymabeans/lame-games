<!--Processing for showing user profiles==========================-->
<?php
  //1 Start session and check for key
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: ../LoginSystem/lor.php");
  }

  //2 Set variables
  $host = "localhost";
  $account = "root";
  $pass = "root";
  $database = "z_lamegames";


  //3 Connect to PhpMyAdmin
  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }
  
  //4 Retrieve all information from database for user
  else {
    $query = mysqli_query($db, "SELECT FirstName, LastName, Username, Image, Bio FROM useraccount WHERE Username ='" . $_SESSION['username'] . "'");  
    $result = mysqli_fetch_array($query);
    }
    // Close connection to MySQL database
    mysqli_close($db);
    
?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Miscellaneous/LGLogo.ico" rel="shortcut icon">
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
    <div class="header headerSpace">
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox"/>
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <a class="pages" href="./index.php">
              <li>Home</li>
            </a>
            <a class="pages" href="./leaderboard.php">
              <li>Leaderboard</li>
            </a>
            <a class="pages" href="./profile.php?<?php echo $_SESSION['username'] ?>">
              <li>Profile</li>
            </a>
          </ul>
        </div>
      </nav>
      <div>
        <a class="logout" href="../LoginSystem/logout.php">Logout</a>
      </div>
    </div>
 


<!--Profile=======================================================-->
    <div class="profile">
      <div class="layerup">
        <div class="contentlayer">
        <a href="../edit/profileEdit.php"><button class="editBio"> Edit Profile</button></a>
          <img class="profilePic" src="<?php echo $result['Image'] ?>">
          <h2><?php echo $result['FirstName'] . " " . $result['LastName']?></h2>
          <h3><?php echo "(" . $result['Username'] . ")"?><h3>
          <p class="biosection"> <?php echo $result['Bio'] ?> </p>
        </div>
      </div>
    </div>


<!--Global Rankings===============================================-->
    <div class="layerup">
      <div class="contentlayer">
        <h2 class="global">Global Rankings</h2>

        <div class="personalScore">
          <h3>Cross Country Collin</h3>
          <p>Rank: </p>
          <p>Score: </p>
        </div>

        <div class="personalScore">
          <h3>Escape Game</h3>
          <p>Rank: </p>
          <p>Score: </p>
        </div>
      </div>
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