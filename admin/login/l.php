
<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../private/images/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="../../private/css/login-system.css" rel="stylesheet" type="text/css">
  </head>



<!--Loader===========================================================-->
  <body onload="myFunction()">
    <div id="loader"></div>

    <div class="grid-container">  
      <div class="adm_login">
        <h1>Login</h1>
        <form method="post" action="./login.php" autocomplete="new-password">
          <input class="input" type="text" name="adm_username" placeholder="Username" onfocus="this.placeholder = ''" required pattern="[A-Za-z0-9]{3,}"" title="Only contain letters and numbers. 4 characters or more"><br>
          <input class="input" type="password" placeholder="Password" onfocus="this.placeholder = ''" name="adm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"><br>
          <input type="submit" value="Login">
        </form>
      </div>
    </div>
  </body>
</html>
