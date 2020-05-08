<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Max-min-media</title>
  </head>
  <body>
    <!-- SNACK: stampare 10 numeri casuali uno in capo all'altro -->
    <!-- SNACK: in aggiunta all'es precedente stampare min, max, e media dei 10 valori stampati -->

    <h2>

      <?php

        $min = 100;
        $max = 1;
        $avg = 0;

        for ($i=0; $i < 10 ; $i++) {
          // echo rand(1,100) . "<br>";
          $val = rand(1,100);

          if ($val < $min) {
            $min = $val;
          }

          if ($val > $max) {
            $max = $val;
          }

          $avg += $val;

          echo $val . "<br>";

        }
        $avg /= 10;

        echo "<br>-----------<br><br>";
        echo "min: " . $min . "<br>";
        echo "max: " . $max . "<br>";
        echo "avg: " . $avg . "<br>";

      ?>
    </h2>


  </body>
</html>
