<?php
  //1 Start the session
  session_start();

  //2 Login processing============================
  if (isset($_POST['login'])) {
    unset($username, $password);
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //3 Connect to Lame Games database
    include './includes/db-connection.php';

    //4 Retreive all information from users table
    $query = mysqli_query($db, "SELECT * FROM users WHERE Username='$username'&& Password='$password'");

    //5 Check if query was successful
    include './includes/query-success.php';

    //6 Check if user exists
    $num = mysqli_num_rows($query);
    if ($num == 1) {

      //7 If admin, redirect to admin page
      if ($username == 'admin') {
        $_SESSION['permission'] = 1;
        $_SESSION['username'] = $username;
        header('Refresh: 1.5; URL=./admin.php');
      }

      //8 If regular user, redirect to profile page
      else {
        $_SESSION['username'] = $username; 
        header('Refresh: 1.5; URL=./profile.php?' . $_SESSION['username']);
      }  
    }

    //9 If credentials do not match, bring user back to login
    else {
      die("Error: Incorrect Credentials");
    } 

    //10 Close connection to MySQL database
    mysqli_close($db);
  }


  
  //2 Singup processing============================ 
  if (isset($_POST['signup'])) {
    unset($first_name, $last_name, $username, $password);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //3 Connect to Lame Games database
    include './includes/db-connection.php';

    //4 Retrieve information from users table
    $query = mysqli_query($db, "SELECT * FROM users WHERE username='$username'");  

    //5 Check if query was successful
    include './includes/query-success.php';

    //6 Check if username is already taken
    $num = mysqli_num_rows($query);
    if ($num == 1) {
      die("Error: Username already taken");
    }
      
    //7 Insert information into users table
    $registration = mysqli_query($db, "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')");

    //8 Close connection to MySQL database
    mysqli_close($db);

    //9 Set username key
    $_SESSION['username'] = $username;

    //10 Redirect to profile page
    header('Refresh: 1.5; URL=./profile.php?' . $_SESSION['username']);
  }  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Meta Data--------------------------------->
    <title>Lame Games | Home</title>
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
          <a class="page" href="">
            <li>Home</li>
          </a>
          <a class="page">
            <script src="./js/index.js" rel="script" type="text/javascript"></script>
            <li><button onclick="los()">Profile</button></li>
          </a>
        </ul>
      </div>
    </nav>
    


    <!--Header-------------------------------->
    <header class="container-fluid">
      <div class="full-parrallax">
        <div class="intro">
        <h1 class="display-6">Lame Games</h1>
        <p>Wasting time since '18</p>
        </div>
      </div>
    </header>



    <!--Login Modal-------------------------->
    <div id="los" class="modal">
      <div class="modal-content">
        <header class="modal-header">
          <span class="close">&times;</span>
        </header>
        <main class="modal-body">
          <div class="row">
            <form class="col-md-6" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/fprm-data" autocomplete="false">
              <h3 class="display-6">Signup</h3>
              <input type="text" class="form-control mb-2" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" required pattern="[A-Za-z]{3,}"" title="Only contain letters. 3 characters or more">
              <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" required pattern="[A-Za-z]{2,}"" title="Only contain letters. 2 characters or more">
              <input type="text" class="form-control mb-2" name="username"placeholder="Username" onfocus="this.placeholder = ''" required pattern="[A-Za-z0-9]{3,}"" title="Only contain letters and numbers. 4 characters or more">
              <input type="password" class="form-control mb-2" name="password" placeholder="Password" onfocus="this.placeholder = ''" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
              <button type="submit" class="btn btn-primary btn-lg button" name="signup">Signup</button>
            </form>

            <form class="col-md-6" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/fprm-data" autocomplete="false">
              <h3 class="display-6">Login</h3>
              <input type="text" class="form-control mb-2" name="username" placeholder="Username" onfocus="this.placeholder = ''" required pattern="[A-Za-z0-9]{3,}"" title="Only contain letters and numbers. 4 characters or more">
              <input type="password" class="form-control mb-2" placeholder="Password" onfocus="this.placeholder = ''" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters">
              <button type="submit" class="btn btn-primary btn-lg button" name="login">Login</button>
            </form>
          </div>
        </main>
      </div>
    </div>

    

    <!--Information-------------------------->
    <div class="container">
      <div class="row info">
        <section class="col-md-5">
          <img class="img-fluid rounded" src="./images/development.jpg">
        </section>
        <section class="col-md-7">
          <hgroup class="heading mb-2">
            <h4 class="page-header text-muted">Develop</h4>
            <h1 class="display-6 font-weight-bolder">Cutting Edge Games</h1>    
          </hgroup>
          <article>Here at Lame Games we use leading edge code to bring creative ideas to life. We take our development serious, as each game goes through rigorous development, testing, and deployment.</article>
        </section>
      </div>
      
      <div class="row info">
        <section class="col-md-7">
          <hgroup class="heading mb-2">
            <h4 class="page-header text-muted">Competition</h4>
            <h1 class="display-6 font-weight-bolder">Messing Around</h1>    
          </hgroup>
          <article>Not all of our games are well developed. The creators at Lame Games hold friendly coding competitions where they develop the best game they can in an alloted period of time. These videos can be seen on our YouTube channel</article>
        </section>
        <section class="col-md-5">
          <img class="img-fluid rounded" src="./images/competition.png">
        </section>
      </div>
    </div>
  </body>
</html>