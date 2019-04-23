<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Miscellaneous/LGLogo.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <link href="./index.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <script>
      var myVar;

      function myFunction() {
        myVar = setTimeout(showPage, 500);
      }   
      function showPage() {
        document.getElementById("loader").style.display = "none";
      }
    </script>
  </head>
  
  <body>
    <div>
      <form class="bioAdd" action="./change.php" method="post"> 
        Bio: <input type="text" name="bio"><br />
        <div class="addpic">
            <input type="url" name="image">
            Add Profile Image
          </div>
        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html> 
