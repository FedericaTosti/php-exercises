<?php

   header('Content-Type: application/json');

   require_once "db.php";




  //  mando ad ajax solo nome e cognome
  //  $res = [];
  //
  // foreach ($class as $student) {
  //    $res[] = $student["name"] . " " . $student["lastname"];
  //
  // };
  //
  // echo json_encode($res);



  // mando ad ajax tutto l array
  echo json_encode($class);



  // mando ad ajax nome, cognome e voti, ma in lista
  // $res = [];
  //
  // foreach ($class as $student) {
  //    $res[] = $student["name"] . " " . $student["lastname"];
  //
  //    foreach ($student["scores"] as  $score) {
  //      $res[] = $score;
  //    }
  // };
  //
  // echo json_encode($res);


  // mando ad ajax nome, cognome e voti, ma come oggetto
  // $res = [];
  //
  // foreach ($class as $student) {
  //    $res[] = [
  //      name => $student["name"] . " " . $student["lastname"],
  //      scores => $student["scores"]
  //    ];
  // };
  //
  // echo json_encode($res);
?>
