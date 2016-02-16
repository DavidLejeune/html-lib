<?php

require_once('/lib/h1.php');
require_once('/lib/h2.php');



 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo HTML-lib</title>
  </head>
  <body>
    <?php

    $title = new H1("HTML Lib demo");
    echo $title;
    $welcome = new H2("Welcome");
    echo $welcome;
     ?>

    <button type="button" name="button">Login</button>
  </body>
</html>
