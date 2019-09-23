<?php
  $host = "localhost";
  $account = "rkedzjmy_admin";
  $pass = "H8Yr!SQI?a*6";
  $database = "rkedzjmy_lamegames";

  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }
?>