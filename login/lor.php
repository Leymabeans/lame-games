
<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signup or Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="../css/login-system.css" rel="stylesheet" type="text/css">
  </head>



<!--Loader===========================================================-->
  <body onload="myFunction()">
    <div id="loader"></div>



<!--Login Form=======================================================-->     
    <div class="grid-container">  
      <div class="signup">
        <h1>Sign Up</h1>
        <form method="post" action="./signup.php" enctype="multipart/fprm-data" autocomplete="false">
          <input class="input" type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" required pattern="[A-Za-z]{3,}"" title="Only contain letters. 3 characters or more"><br>
          <input class="input" type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" required pattern="[A-Za-z]{2,}"" title="Only contain letters. 2 characters or more"><br><br><br>
          <input class="input" type="text" name="username"placeholder="Username" onfocus="this.placeholder = ''" required pattern="[A-Za-z0-9]{3,}"" title="Only contain letters and numbers. 4 characters or more"><br>><br>
          <input class="input" type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"><br>
          <input type="submit" value="Sign Up">
        </form>
      </div>

      <div class="login">
        <h1>Login</h1>
        <form method="post" action="./login.php" autocomplete="new-password">
          <input class="input" type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''" required pattern="[A-Za-z0-9]{3,}"" title="Only contain letters and numbers. 4 characters or more"><br>
          <input class="input" type="password" placeholder="Password" onfocus="this.placeholder = ''" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"><br>
          <input type="submit" value="Login">
        </form>
      </div>
    </div>
  </body>
</html>
