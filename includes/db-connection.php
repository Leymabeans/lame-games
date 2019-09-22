<?php
  $host = "localhost";
  $account = "root";
  $pass = "";
  $database = "lamegames";

  $db = mysqli_connect($host, $account, $pass, $database);
  if ($db === false ) {
    die("Error: Could not connect to the database");
  }
?>