<?php
  //1 Check if user is admin
  include './includes/key-check.php';

  //2 Connect to Matrix64 database
  include './includes/db-connection.php';

  //3 Retrieve all information from users table
  $query = mysqli_query($db, "SELECT first_name, last_name, username FROM users"); 
  
  //4 Check if query was successful
  include './includes/query-success.php';

  //5 Retrieve number of matches from games tables
  $match1 = mysqli_query($db, "SELECT * FROM dof_stats");
  $dof_matches = mysqli_num_rows($match1);
  $match2 = mysqli_query($db, "SELECT * FROM ccc_stats");
  $ccc_matches = mysqli_num_rows($match2);

  //6 Retrieve number of players from games tables
  $player1 = mysqli_query($db, "SELECT DISTINCT(username) FROM dof_stats");
  $dof_players = mysqli_num_rows($player1);
  $player2 = mysqli_query($db, "SELECT DISTINCT(username) FROM ccc_stats");
  $ccc_players = mysqli_num_rows($player2);

  //7 Close connection to database
  mysqli_close($db);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta Data--------------------------------->
    <title>Lame Games | Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap--------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Scroll Plugin------------------------------>
    <script src="./js/vendor/scroll-entrance.js"></script>
    <style>[data-entrance] { visibility: hidden; }</style>

    <!--External files----------------------------->
    <link href="./images/favicon.ico" rel="shortcut icon">
    <link href="./stylesheets/index.css" rel="stylesheet" type="text/css">
  </head>


  
  <!--Navigation---------------------------------->
  <body>
    <nav role="navigation">
      <div id="menuToggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <a class="page" href="./index.php">
            <li>Home</li>
          </a>
          <a class="page" href="./logout.php">
            <li>Logout</li>
          </a>
        </ul>
      </div>
    </nav>



    <!--Header-------------------------------->
    <header class="container-fluid">
      <div class="half-parrallax">
        <div class="page-title">
          <h1>Dashboard</h1>
        </div>
      </div>
    </header>



    <!--Information Panels----------------------------->
    <div class="container">
      <div class="row mb-5">
        <h3 class="display-6">Game Statistics</h3>
        <table class="table table-bordered table-hover rounded col-md-12">
          <thead class="thead-dark">
            <tr>
              <th></th>
              <th>Cross Country Collin</th>
              <th>Duel of the Fates</th>
            </tr>
          </thead>
          <tr>
            <th>Times Played</th>
            <td><?php echo $ccc_matches?></td>
            <td><?php echo $dof_matches?></td>
          </tr>
          <tr>
            <th>Number of Players</th>
            <td><?php echo $ccc_players?></td>
            <td><?php echo $dof_players?></td>
          </tr>
        </table>
      </div>

      <div class="row mt-5">
        <h3 class="display-6">Players</h3>
        <table class="table table-bordered table-hover rounded col-md-12">
          <thead class="thead-dark">  
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <?php
            while ($row = mysqli_fetch_assoc($query)) { 
              echo "<tr>";
              foreach ($row as $field => $value) { 
                  echo "<td>" . $value . "</td>";  
              }
              echo "</tr>";
            }
            echo "</table>";
          ?>
      </div>
    </div>
  </body>
</html>