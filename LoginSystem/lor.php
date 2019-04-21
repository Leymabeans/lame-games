
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
        <form method="post" action="signup.php" enctype="multipart/fprm-data">
          <input class="input" type="text" name="firstname" autocomplete="new-password" placeholder="First Name" required><br>
          <input class="input" type="text" name="lastname" autocomplete="new-password" placeholder="Last Name" required><br><br>
          <input class="input" type="text" name="username" autocomplete="new-password" placeholder="Username" required><br>
          <input class="input" type="password" name="password" autocomplete="new-password" placeholder="Password" required pattern=".{5,}"" title="Password must be at least 5 characters"><br>
          <div class="profilepic">
            <input type="url" name="image">
            Add Profile Image
          </div>
          <input type="submit" value="Sign Up">
        </form>
      </div>

      <div class="login">
        <h1>Login</h1>
        <form method="post" action="login.php" autocomplete="new-password">
          <input class="input" type="text" name="username" autocomplete="new-password" placeholder="Username" required><br>
          <input class="input" type="password" name="password" autocomplete="new-password"placeholder="Password" required pattern=".{5,}"" title="Password must be at least 5 characters"><br>
          <input type="submit" value="Login">
        </form>
      </div>
    </div>
  </body>
</html>
