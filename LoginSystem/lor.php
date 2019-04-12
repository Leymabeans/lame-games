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
    <link href="./loginSystem.css" rel="stylesheet" type="text/css">
  </head>



<!--Loader===========================================================-->
  <body onload="myFunction()">
    <div id="loader"></div>



<!--Login Form=======================================================-->     
    <div class="grid-container">  
      <div class="signup">
        <h1>Sign Up</h1>
        <form method="post" action="signup.php">
          <input class="input" type="text" name="username" autocomplete="new-password" placeholder="Username" required><br>
          <input class="input" type="password" name="password" autocomplete="new-password" placeholder="Password" required><br>
          <input type="submit" value="Sign Up">
        </form>
      </div>

      <div class="login">
        <h1>Login</h1>
        <form method="post" action="login.php">
          <input class="input" type="text" name="username" autocomplete="new-password" placeholder="Username" required><br>
          <input class="input" type="password" name="password" autocomplete="new-password" placeholder="Password" required><br>
          <input type="submit" value="Login">
        </form>
      </div>
    </div>
  
    

    
  
  </body>
</html>
