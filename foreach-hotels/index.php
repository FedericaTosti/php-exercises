<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach hotels</title>
  </head>
  <body>

    <h2>Stampare a schermo nome, descrizione e voto per ogni hotel</h2>

    <?php

      $hotels = [

        [
          'name' => 'Hotel Belvedere',
          'description' => 'Hotel Belvedere Descrizione',
          'parking' => true,
          'vote' => 4,
          'distance_to_center' => 10.4
        ],
        [
          'name' => 'Hotel Futuro',
          'description' => 'Hotel Futuro Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 2
        ],
        [
          'name' => 'Hotel Rivamare',
          'description' => 'Hotel Rivamare Descrizione',
          'parking' => false,
          'vote' => 1,
          'distance_to_center' => 1
        ],
        [
          'name' => 'Hotel Bellavista',
          'description' => 'Hotel Bellavista Descrizione',
          'parking' => false,
          'vote' => 5,
          'distance_to_center' => 5.5
        ],
        [
          'name' => 'Hotel Milano',
          'description' => 'Hotel Milano Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 50
        ],
      ];

    ?>


    <h3>
      <?php

      foreach ($hotels as $hotel) {

        echo "Nome" . " = " . $hotel["name"] . "<br>"
          .  "Descrizione" . " = " . $hotel["description"] . "<br>"
          .  "Voto" . " = " . $hotel["vote"] . "<br>"
          .  "<br>";
      }
      ?>
    </h3>

  </body>
</html>
