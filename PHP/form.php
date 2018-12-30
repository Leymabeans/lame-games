<!--Processing for the leaderboard submissions===================-->
<?php
      $name = "";
      $score = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $score = test_input($_POST["score"]);
        echo $name;
        echo $score;
      }

      function test_input($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
