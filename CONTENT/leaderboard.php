<!--Processing for the leaderboard submissions===================-->
<?php
  //1 Connect to MySQL database
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "z_lamegames";
  $db = mysqli_connect($host, $username, $password, $database) or die('Error connecting to MySQL server');

  //2 Check connection
  if($db === false){
    die("Error: Could not connect to the database" . mysqli_connect_error());
  }

  //3 Take the inputed information  
  if ($SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $score = $_POST["score"];
    $game = $_POST["game"];
}

  //4 Take all information from the lamegames database
  $query = "SELECT * FROM users";
  mysqli_query($db, $query) or die("Error querying database");

  //5 Insert information to phpmyadmin
  $sql = "INSERT INTO users VALUES ('$username', '$_POST[pass]', '$score')";
  if (!mysqli_query($db, $sql)) {
    echo 'Error: Could not execute $sql ' . mysqli_error($db);
  }

  //6 Close connection to MySQL database
  mysqli_close($db);
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html>
  <head>
    <title>Leader Board</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,700" rel="stylesheet">
    <link href="../STYLE/leaderboardStyle.css" rel="stylesheet" type="text/css">
  </head>



<!--Header========================================================== -->    
<body>
  <div class="header"> 
    <img class="logo" src="../MISC/Lame Games Logo.png" >
  </div>
  


<!--NavBar============================================================-->  
  <nav>
    <a href="./home.html">Home</a>
    <a href="./download.html">Download</a>
    <a href="./leaderboard.php">Leader Board</a>   
  </nav> 
  


<!--Game Leaderboard 1========================================================= -->  
    <a href="#bottom">
      <button class="first">Submit Your Score</button>
    </a>
    <h2 class="special2">Game Title</h2>
    <table class="special">
      <thead>
        <tr>
          <th>Place</th>
          <th>Name</th>
          <th>Score</th>
        </tr>
      </thead>
      
      <tbody>
        <tr>
          <td>#1</td>
          <td><?PHP echo $username ?></td>
          <td><?PHP echo $score?></td>
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
      </tbody>
    </table>



<!--Game Leaderboard 2========================================================= --> 
    <h2>Game Title</h2>
    <table class="special">
      <thead>
        <tr>
          <th>Place</th>
          <th>Name</th>
          <th>Score</th>
        </tr>
      </thead>
      
      <tbody>
        <tr>
          <td>#1</td>
          <td><?PHP echo $username ?></td>
          <td><?PHP echo $score?></td>
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
      </tbody>
    </table>



<!--Submission Form===============================================-->
    <h2 class="special2" id="bottom">Submit Your Score</h2>
    <form class="special" action="<?PHP echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <h4>Not Logged in? Login now</h4>
      <button> Login</button>
      <br><br>
      <input type="text" name="username" autocomplete="off" placeholder="Username">
      <br>

      <input class="formcomponent" type="text" name="pass" autocomplete="off" placeholder="Password">
      <br>

      <select class="formcomponent" name="game">
        <option>Game1</option>
        <option>Game2</option>
      </select>
      <br>

      <input class="formcomponent" type="text" name="score" autocomplete="off" placeholder="Score">
      <br>

      <button class="formcomponent important">Submit</button>
    </form>   
  </body>
</html>