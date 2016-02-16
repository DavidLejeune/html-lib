<?php

//require_once('/lib/Element.php');
require_once('/lib/H1.php');
require_once('/lib/H2.php');
require_once('/lib/P.php');



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
    echo new P("This is a paragraph");

     ?>

    <button type="button" name="button">Login</button>
  </body>
</html>
