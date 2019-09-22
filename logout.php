<!--Logout=====================================-->
<?php
  //1 Wipe session variables
  session_start();
  session_unset();
  session_destroy();

  //2 Bring user back to login page
  header('Location: ./index.php');
?>