<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rand GET</title>
  </head>
  <body>

    <!-- http://localhost/?min=10&max=134&count=10 -->
    <!-- stampare dei numeri random prendendo dei valori in ingresso-->

    <?php

      $min = $_GET["min"];
      $max = $_GET["max"];
      $count = $_GET["count"];

      echo "min: " . $min . "<br/>"
        .  "max: " . $max . "<br/>"
        .  "count: " . $count . "<br/>";


      for ($i=0; $i < $count; $i++) {
        echo rand($min, $max) . "<br/>";
      }

    ?>

  </body>
</html>
