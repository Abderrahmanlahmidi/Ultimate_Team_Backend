<?php

  if(isset($_POST['name'])){
    
    $name = $_POST['name'];
    $position = $_POST['position'];
    $club = $_POST['club'];
    $rating = $_POST['rating'];
    $pace = $_POST['pace'];
    $shooting = $_POST['shooting'];
    $defending = $_POST['defending'];
    $passing = $_POST['passing'];
    $dribbling = $_POST['dribbling'];
    $physical = $_POST['physical'];
    $photo = $_POST['photo'];
    $logo = $_POST['logo'];

    $data_array = [
      "name" =>  $name,
      "position" =>  $position,
      "club" =>  $club,
      "rating" =>  $rating,
      "pace" =>  $pace,
      "shooting" =>  $shooting,
      "defending" =>  $defending,
      "passing" =>  $passing,
      "dribbling" =>  $dribbling,
      "physical" =>  $physical,
      "photo" =>  $photo,
      "logo" =>  $logo,
     ];

     echo $photo;

    $query = "INSERT INTO teams.players (name, position, club, rating, pace, shooting, defending, passing, dribbling, physical, photo, logo) 
    VALUES ('$name', '$position','$club','$rating','$pace','$shooting','$defending','$passing','$dribbling','$physical','$photo','$logo') ";
    
    $result = mysqli_query($con, $query);

  }


?>