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

  //8 Close connection to Lame Games database
  mysqli_close($db);
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta Data--------------------------------->
    <title>Lame Games | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap--------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!--Scroll Plugin------------------------------>
    <script src="./vendor/scroll-entrance/src/scroll-entrance.js"></script>
    <style>[data-entrance] { visibility: hidden; }</style>

    <!--External files----------------------------->
    <link href="./images/favicon.ico" rel="shortcut icon">
    <link href="./stylesheets/index.css" rel="stylesheet" type="text/css">
    <script src="./js/index.js" rel="script" type="text/javascript"></script>
  </head>



  <!--Header==================================-->
  <body class="none">  
    <div class="header">
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
            <a class="pages" href="./profile.php?<?php echo $result['username']  ?>">
              <li>Profile</li>
            </a>
          </ul>
        </div>
      </nav>
      <div>
        <a class="logout" href="./login/logout.php">Logout</a>
      </div>
    </div>
 


    <!--Profile==================================-->
    <section id="profile">
      <img class="profile-pic" src="../images/user_pic.jpg">
      <h2 id="user"><?php echo $result['username'] ?><h2> <br><br><br><br><br>
      <button class="games" id="display1" onclick="display1()">Cross Country Collin</button>
      <button class="games" id="display2" onclick="display2()">Duel of the Fates</button>
    </section> 

    <!--Cross Country Collin====================-->
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

      <!--Duel of the Fates====================-->
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