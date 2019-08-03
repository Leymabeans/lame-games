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
    $query = mysqli_query($db, "SELECT first_name, last_name, username, image, bio FROM users WHERE username ='" . $_SESSION['username'] . "'");  
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
    <link href="../css/profile.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <script src="../js/index.js" type="text/javascript"></script>
  </head>



<!--Nav Bar==========================================================-->
  <body>  
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
        <a class="logout" href="../../login/logout.php">Logout</a>
      </div>
    </div>
 


<!--Profile=======================================================-->
    <div class="background">
      <div class="contentlayer">

        <!--Profile===========-->
        <section class="profile">
          <img class="profilePic" src="<?php echo $result['image'] ?>">
          <h1 id="user"><?php echo $result['username'] ?><h1>
          <h3 id="name"><?php echo $result['first_name'] . " " . $result['last_name']?></h3>
          <a href="../scripts/profile-edit.php">
            <button class="add"> Add Profile Image</button>
          </a>
        </section>   

        <!--Global Rankings===========-->
        <section class="rank">        
          <h2 class="global">Global Rankings</h2>
          <table class="personalScore">
            <caption>Cross Country Collin</caption>
            <tr>
              <th>Rank<th>
              <th>Score<th>
            </tr>
            <tr>
              <th>121<th>
              <th>28,990<th>
            </tr>
          </table>

          <table class="personalScore">
            <caption>Escape</caption>
            <tr>
              <th>Rank<th>
              <th>Score<th>
            </tr>
            <tr>
              <th>2<th>
              <th>45<th>
            </tr>
          </table>
        </section>
      </div>
    </div>
  </body>
</html>