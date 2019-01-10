<!--Processing for the leaderboard submissions===================-->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $playername = $_POST["playername"];
      $score = $_POST["score"];
      $game = $_POST["game"];
      if ($game == "Game2"){
        echo "This will print in game table two";
      }
      if ($game == "Game1"){
        echo "This will print in game table one";
      }
    else {
      echo "An error occured when processing this form";
    }
  }
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
    <img class="logo" src= "../Lame Games Logo.png" >
  </div>
  

<!--NavBar============================================================-->  
  <nav>
    <a href="./home.html">Home</a>
    <a href="./download.html">Download</a>
    <a href="./leaderboard.html">Leader Board</a>   
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
          <td><?PHP echo $playername ?></td>
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
          <td><?PHP echo $playername ?></td>
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
      <h4>Player Name</h4>
      <input type="text" name="playername" autocomplete="off" >
    
      <h4 class="formcomponent">Game</h4>
      <select name="game">
        <option>Game1</option>
        <option>Game2</option>
      </select>

      <h4 class="formcomponent">Score</h4>
      <input type="text" name="score" autocomplete = "off">
      <br>
      <button class="formcomponent important">Submit</button>
    </form>       
  </body>
</html>