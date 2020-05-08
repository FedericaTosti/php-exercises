<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach hotels</title>
  </head>
  <body>

    <h2>Stampare a schermo nome, descrizione e voto per ogni hotel</h2>

    <!-- SNACK: riprendendo l'esercizio degli $hotels; spostare la variabile $hotels in un file esterno da includere; mettere la stampa singolo hotel in una funzione da richiamare nel foreach -->

    <?php

      require_once 'db.php';

    ?>


    <h3>
      <?php

        foreach ($hotels as $hotel) {

          StampaHotel ($hotel);
        }

        function StampaHotel ($hotel){
          echo "Nome" . " = " . $hotel["name"] . "<br>"
            .  "Descrizione" . " = " . $hotel["description"] . "<br>"
            .  "Voto" . " = " . $hotel["vote"] . "<br>"
            .  "<br>";
        }

      ?>
    </h3>

  </body>
</html>
