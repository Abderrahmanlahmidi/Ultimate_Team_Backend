<?php

require './helpers/helpers.php';
$background_url = loadImages("background");
$stadium = loadImages("stadium");
$placeholder = loadImages("placeholder-card");
require loadPartials("head");
require("./config/db.php");
require("./config/add_new.php");



if(isset($_POST["dashboard_btn"])) {
  require loadPartials($_POST['dashboard_btn']);
} else {
  require loadPartials('home');
}



?>


 



            
           
   

       





