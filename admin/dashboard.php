<?php
  //1 Check if user is admin
  include '../includes/key-check.php';

  //2 Connect to Matrix64 database
  include '../includes/db-connection.php';

  //3 Retrieve all information from users table
  $query = mysqli_query($db, "SELECT first_name, last_name, username FROM users"); 
  
  //4 Check if query was successful
  include '../includes/query-success.php';

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


<!--Meta Data=======================================================-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin | Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="../images/favicon.ico" rel="shortcut icon">
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <script src="../js/index.js" type="text/javascript"></script>
  </head>

  <!--Header==================================-->
  <body class="admin_none">
    <div class="admin_header">
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox"/>
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <a class="pages" href="../index.php">
              <li>Home</li>
            </a>
            <a class="pages" href="./dashboard.php">
              <li>Dashboard</li>
            </a>
            <a class="pages" href="../private/profile.php?<?php echo $_SESSION['username'] ?>">
              <li>Profile</li>
            </a>
          </ul>
        </div>
      </nav>
      <div>
        <a class="logout" href="../login/logout.php">Logout</a>
      </div>
    </div>

    <!--Users=================-->
    <div class="panels">
      <div id="users">
        <h2 class="title">Players</h2>
        <table class="manage">
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>

          <?php
            while ($row = mysqli_fetch_assoc($query)) { 
              echo "<tr>";
              foreach ($row as $field => $value) { 
                  echo "<td class='data'>" . $value . "</td>";  
              }
              echo "</tr>";
            }
            echo "</table>";
          ?>
      </div>

      <!--Games=================-->
      <div id="games">
        <h2 class="title">Games</h2>
        <table class="manage">
          <tr>
            <th></th>
            <th>Cross Country Collin</th>
            <th>Duel of the Fates</th>
          </tr>
          
          <tr>
            <th>Times Played</th>
            <td><?php echo $ccc_matches?></td>
            <td><?php echo $dof_matches?></td>
          </tr>

          <tr>
            <th>Number of Players</th>
            <td><?php echo $dof_players?></td>
            <td><?php echo $ccc_players?></td>
          </tr>
      </div>
  </body>