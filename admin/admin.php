<?php
  //1 Check if user is admin
  include '../includes/key-check.php';

  //2 Connect to Matrix64 database
  include '../includes/db-connection.php';

  //3 Retrieve all information from employees table
  $query = mysqli_query($db, "SELECT first_name, last_name, username FROM users"); 
  
  //4 Check if query was successful
  include '../includes/query-success.php';

  //5 Close connection to database
  mysqli_close($db);
?>


<!--Meta Data=======================================================-->
<!DOCTYPE html>
<html>
  <head>
    <title>Admin | Users Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../images/pink.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="../../css/time.css" rel="stylesheet" type="text/css">
    <script src="../../js/index.js" type="text/javascript"></script>
  </head>

  <!--Header --==================================-->
  <body>
    <div class="header">
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

      <div class="title">
        <h1>Timeclock Dashboard</h1>
      </div>

      <a href="./time-form.php">
        <button class="more admin_more" id="new">New User</button>
      </a>  
    </div>

    <!--Users=================-->
      <?php
        echo "<br>";
        echo "<table>";
      ?>

      <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>

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
  </body>