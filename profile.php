<?php
  //1 Connect to Lame Games database
  include "./includes/db-connection.php";
  
  //2 Variable configuration
  $player = $_POST['player'];

  //3 Retrieve information from users table
  $query = mysqli_query($db, "SELECT first_name, last_name, username, ccc_score, ccc_rank, dof_score, dof_rank FROM users WHERE username ='$player'");  
  
  //4 Check if query was successful
  include "./includes/query-success.php";

  //5 Create an array of the db for displaying user profile
  $result = mysqli_fetch_array($query);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
  }

  //6 Retrieve number of matches from dof table
  $dof = mysqli_query($db, "SELECT * FROM dof_stats WHERE username ='$player'");
  $dof_matches = mysqli_num_rows($dof);

  //7 Retrieve number of matches from ccc table
  $ccc = mysqli_query($db, "SELECT * FROM ccc_stats WHERE username ='$player'");
  $ccc_matches = mysqli_num_rows($ccc);

  //8 Close connection to Lame Games database
  mysqli_close($db);
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta Data--------------------------------->
    <title>Lame Games | Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap--------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    <!--Scroll Plugin------------------------------>
    <script src="./vendor/scroll-entrance/src/scroll-entrance.js"></script>
    <style>[data-entrance] { visibility: hidden; }</style>

    <!--External files----------------------------->
    <link href="./images/favicon.ico" rel="shortcut icon">
    <link href="./stylesheets/index.css" rel="stylesheet" type="text/css">
    <script src="./js/index.js" rel="script" type="text/javascript"></script>
  </head>



  <!--Header-------------------------------->
  <body> 
    <header class="container-fluid">
      <div class="half-parrallax">
        <div class="page-title">
          <h1>Profile</h1>
        </div>
      </div>
    </header>



    <!--Profile-------------------------------->
    <div class="container">
      <div class="row">
        <section class="col-md-4">
          <img class="img-fluid rounded mt-5" src="./images/user_pic.jpg" width="120" height="120">
          <h1 class="font-weight-bold"><?php echo $result['username'] ?><h1>
          <h5><?php echo $result['first_name']; echo $result['last_name'];?><h5>
        </section>

        <section class="col-md-8">    
          <div class="mb-5">
            <h3 class="display-6">Cross Country Collin</h3>
            <table class="table table-bordered table-hover rounded col-md-12">
              <thead class="thead-dark">
                <tr>
                  <th>Score</th>
                  <th>Matches Played</th>
                  <th>Rank</th>
                </tr>
              </thead>
              <tr>
                <td><?php echo $result['ccc_score']?></td>
                <td><?php echo $ccc_matches?></td>
                <td><?php echo $result['ccc_rank']?></td>
              </tr>
            </table>
          </div>

          <div class="mt-5 mb-5">
            <h3 class="display-6">Duel of the Fates</h3>
            <table class="table table-bordered table-hover rounded col-md-12">
              <thead class="thead-dark">
                <tr>
                  <th>Score</th>
                  <th>Matches Played</th>
                  <th>Rank</th>
                </tr>
              </thead>
              <tr>
                <td><?php echo $result['dof_score']?></td>
                <td><?php echo $dof_matches?></td>
                <td><?php echo $result['dof_rank']?></td>
              </tr>
            </table>
          </div>
        </section> 
      </div>
    </div> 
  </body>
</html>