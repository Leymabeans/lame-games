<?php
  //1 Check if user is logged in
  include "../includes/key-check.php";

  //2 Connect to Lame Games database
  include "../includes/db-connection.php";
  
  //3 Retrieve information from users table
  $query = mysqli_query($db, "SELECT first_name, last_name, username, ccc_score, ccc_rank, dof_score, dof_rank FROM users WHERE username ='" . $_SESSION['username'] . "'");  
  
  //4 Check if query was successful
  include "../includes/query-success.php";

  //5 Create an array of the db for displaying user profile
  $result = mysqli_fetch_array($query);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
  }

  //6 Retrieve number of matches from dof table
  $dof = mysqli_query($db, "SELECT * FROM dof_stats WHERE username ='" . $_SESSION['username'] . "'");
  $dof_matches = mysqli_num_rows($dof);

  //7 Retrieve number of matches from ccc table
  $ccc = mysqli_query($db, "SELECT * FROM ccc_stats WHERE username ='" . $_SESSION['username'] . "'");
  $ccc_matches = mysqli_num_rows($ccc);

  //6 Close connection to Lame Games database
  mysqli_close($db);
    
?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin | Profile</title>
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
            <a class="pages" href="./profile.php?<?php echo $result['username']  ?>">
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
      <h2 id="user"><?php echo $result['username'] ?><h2> <br><br><br><br><br>
      <button class="games" id="display1" onclick="display1()">Cross Country Collin</button>
      <button class="games" id="display2" onclick="display2()">Duel of the Fates</button>
    </section> 

    <section id="rank">        
      <h1 id="global">Cross Country Collin</h1>
      <div id="ccc">
        <table class="results">
          <tr>
            <th>Score</th>
            <th>Matches Played</th>
            <th>Rank</th>
          </tr>
          <tr>
            <td><?php echo $result['ccc_score']?></td>
            <td><?php echo $ccc_matches?></td>
            <td><?php echo $result['ccc_rank']?></td>
          </tr>
        </table>
      </div>

      <div id="dof">
        <table class="results" >
          <tr>
            <th>Score</th>
            <th>Matches Played</th>
            <th>Rank</th>
          </tr>
          <tr>
            <td><?php echo $result['dof_score']?></td>
            <td><?php echo $dof_matches?></td>
            <td><?php echo $result['dof_rank']?></td>
          </tr>
        </table>
      </div>
    </section>
  </body>
</html>