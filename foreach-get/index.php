<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach</title>
  </head>
  <body>

    <h2>Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.</h2>

    <?php
      var_dump($_GET);
      echo("<br/>-----------<br/>");
    ?>

    <h3>
      <?php
        foreach ($_GET as $key => $value) {

          // var_dump($key);
          // echo "<br/>";
          // var_dump($value);
          // echo "<br/>----------<br/>";
          echo $key . " = " . $value . "<br/>";

        }
      ?>
    </h3>

  </body>
</html>
