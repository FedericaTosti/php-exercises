<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach class</title>
  </head>
  <body>

    <?php

      // SNACK: stampare per ogni studente nome cognome e avg score


      // require_once 'db.php';
      //
      // // var_dump ($class);
      //
      // foreach ($class as $student) {
      //
      //   StampaStudenti ($student);
      // }
      //
      // function StampaStudenti ($student){
      //   echo "Nome" . " = " . $student["name"] . "<br>"
      //     .  "Cognome" . " = " . $student["lastname"] . "<br>"
      //     .  "Voto" . " = " . StampaMedia($student["scores"]) . "<br>"
      //     .  "<br>";
      // }
      //
      // function StampaMedia ($studentVote){
      //
      //   $avg = 0;
      //   foreach ($studentVote as $score) {
      //
      //     $avg += $score;
      //   }
      //
      //   $avg /= count($studentVote);
      //   return $avg;
      // }

    ?>



    <?php

      // stampare solo per lo studente che corrisponde al nome nell'url, nome cognome e avg score

      require_once 'db.php';

      // var_dump ($class);
      $nomeGet = $_GET["name"];


      foreach ($class as $student) {

        $nome = $student["name"];

        if ($nome === $nomeGet) {
          StampaStudenti ($student);
        }

      }

      function StampaStudenti ($student){
        echo "Nome" . " = " . $student["name"] . "<br>"
          .  "Cognome" . " = " . $student["lastname"] . "<br>"
          .  "Voto" . " = " . StampaMedia($student["scores"]) . "<br>"
          .  "<br>";
      }

      function StampaMedia ($studentVote){

        $avg = 0;
        foreach ($studentVote as $score) {

          $avg += $score;
        }

        $avg /= count($studentVote);
        return $avg;
      }

    ?>

  </body>
</html>
