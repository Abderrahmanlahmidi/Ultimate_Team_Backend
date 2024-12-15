<?php

include './helpers/helpers.php';
$background_url = loadImages("background");
$stadium = loadImages("stadium");
$placeholder = loadImages("placeholder-card");

require_once("./config/db.php");

$query = "SELECT * FROM teams.manchester";
$result = mysqli_query($con, $query);

include loadPartials("head");

if(isset($_POST['submit'])){

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



}



?>

<body>
   <main id="main_background"  class="main_background w-full flex flex-col px-6 md:px-[120px] py-[50px]">
          <?= include loadPartials("titles")  ?>   
          <div class="w-full grid max-lg:grid-cols-1 grid-cols-6 gap-5 justify-center">
           <div class="max-lg:col-span-1 col-span-4 relative text-white flex flex-col justify-center items-center">
             <div class="z-40 px-6 md:px-[30px] row-[20px] grid absolute w-full h-full p-[20px] md:p-[40px]">
              <?= include loadPartials("stadium")  ?>   
            </div>
            <img src="<?php echo $stadium  ?>" class="w-full h-auto mt-4">
         </div>
          <?= include loadPartials("choices") ?>   
          <div id="overlay" class="cursor-pointer fixed gap-5 inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
          
          </div>
          <div id="add_overlay" class="hidden cursor-pointer fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">
              <div class="bg-black p-8 rounded-lg max-w-lg w-full mx-4 flex flex-col gap-5">
               <?= include loadPartials("addPlayer")  ?>
              </div>
          </div>   
      </main>
  </body>
  <script src="./public/js/app.js"></script>
</html>

 



            
           
   

       





