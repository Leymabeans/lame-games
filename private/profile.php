<!--Processing for showing user profiles==========================-->
<?php
  //1 Start session and check for key
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: ../login/lor.php");
  }

  //2 Set variables
  $host = "localhost";
  $account = "root";
  $pass = "";
  $database = "z_lamegames";


  //3 Connect to PhpMyAdmin
  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }
  
  //4 Retrieve all information from database for user
  else {
    $query = mysqli_query($db, "SELECT first_name, last_name, username FROM users WHERE username ='" . $_SESSION['username'] . "'");  
    $result = mysqli_fetch_array($query);
    if (!$result) {
      printf("Error: %s\n", mysqli_error($db));
      exit();
  }
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
    <link href="../images/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <script src="../js/index.js" type="text/javascript"></script>
  </head>



<!--Nav Bar==========================================================-->
  <body class="none">  
    <div class="header">
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox"/>
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <a class="pages" href="../../index.php">
              <li>Home</li>
            </a>
            <a class="pages" href="./profile.php?<?php echo $_SESSION['username'] ?>">
              <li>Profile</li>
            </a>
          </ul>
        </div>
      </nav>
      <div>
        <a class="logout" href="../login/logout.php">Logout</a>
      </div>
    </div>
 


<!--Profile=======================================================-->
    <section id="profile">
      <img class="profile-pic" src="../images/user_pic.jpg">
      <h2 id="user"><?php echo $result['username'] ?><h2><br><br><br><br><br>
      <button class="games" id="display1" onclick="display1()">Game1</button>
      <button class="games" id="display2" onclick="display2()">Game2</button>
      <button class="games" id="display3" onclick="display3()">Game3</button>
    </section> 

    <section id="rank">        
      <h1 id="global">Cross Country Collin</h1>

      <div id="ccc">
        <table class="results">
          <tr>
            <th>Score<th>
            <th>Matches Played<th>
          </tr>
          <tr>
            <td>60<td>
            <td>3<td>
          </tr>
        </table>
      </div>

      <div id="dof">
        <table class="results" >
          <tr>
            <th>Score<th>
            <th>Matches Played<th>
          </tr>
          <tr>
            <td>345<td>
            <td>6,314<td>
          </tr>
        </table>
      </div>

      <div id="game3">
        <table class="results">
          <tr>
            <th>Score<th>
            <th>Matches Played<th>
          </tr>
          <tr>
            <td>N/A<td>
            <td>N/A<td>
          </tr>
        </table>
      </div>
    </section>
  </body>
</html>