<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Password Boolean</title>

    <!-- <style>
      .green {
        color: green;
      }

      .red {
        color: red;
      }
    </style> -->

  </head>

  <body>

    <h2>Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.</h2>

    <h3>
      <?php

        $password = $_GET["pass"];
        // $passValida = $password === "Boolean";

        // o metti nell'if $passValida
        if ($password === "Boolean") {

          // echo "OK";

          echo "<div style= 'color: green'>OK</div>";
          // echo "<div class='green'>OK</div>";

        } else {

          // echo "KO";

          echo "<div style= 'color: red'>OK</div>";
          // echo "<div class='red'>OK</div>";

        }


      ?>
    </h3>

  </body>
</html>
