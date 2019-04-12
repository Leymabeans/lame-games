<!--Processing for login system=======================================-->
<?php

  //1 Start the session
  session_start();


  //2 Connect to PhpMyAdmin database
  $host = "localhost";
  $account = "root";
  $pass = "root";
  $database = "z_lamegames";
  $db = mysqli_connect($host, $account, $pass, $database);


  //3 Check connection to PhpMyAdmin
  if ($db === false ) {
    die("Error: Could not connect to the database" . mysqli_connect_error());
  }

  //4 Set user input to variables
  $username = $_POST['username'];
  $password = $_POST['password'];
    
 
  //5 Query information from lamegames database
  $query = "SELECT * FROM useraccount WHERE Username='$username'";
  $result = mysqli_query($db, $query);
  

  //6 Check if username is already taken
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    echo "Username Already Taken";
  }

  //7 Insert information into PhpMyAdmin
  else {
    $registration = "INSERT INTO useraccount (Username, Password) VALUES ('$username', '$password')";
    mysqli_query($db, $registration);
    header("Location: ../CONTENT/profile.php");
  }

  //7 Close connection to MySQL database
  mysqli_close($db);
?>


<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login or Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../MISC/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="./login.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
  </head>



<!--Loader===========================================================-->
  <body onload="myFunction()">
    <div id="loader"></div>



<!--Login Form=======================================================-->     
    <div class="signin">
      <h1>Sign Up</h1>
      <form method="post" action="login.php">
        <input class="input" type="text" name="username" autocomplete="new-password" placeholder="Username"><br>
        <input class="input" type="password" name="password" autocomplete="new-password" placeholder="Password"><br>
        <input type="submit" value="Sign Up">
      </form>
    </div>

    <h2 class="or"> Or </h2>

    <div class="signin">
      <h1>Login</h1>
      <form method="post" action="../CONTENT/profile.php">
        <input class="input" type="text" name="username" autocomplete="new-password" placeholder="Username"><br>
        <input class="input" type="password" name="password" autocomplete="new-password" placeholder="Password"><br>
        <input type="submit" value="Login">
      </form>
    </div>
  
    

    
  
  </body>
</html>
