<?php

$background_url = "./images/background.png";
$stadium = "./images/stadium.png";
$placeholder = "./images/placeholder-card.png";

$name = $_POST["name"];
$position = $_POST["position"];
$club = $_POST["club"];
$rating = $_POST["rating"];
$pace = $_POST["pace"];
$shooting = $_POST["shooting"];
$defending = $_POST["defending"];
$passing = $_POST["passing"];
$dribbling = $_POST["dribbling"];
$physical = $_POST["physical"];
$photo = $_POST["photo"];
$logo = $_POST["logo"];

echo "the information {$name},{$position},{$club},{$rating},{$pace},{$shooting},{$defending},{$passing},{$dribbling},{$physical},{$photo},{$logo}";


?>



<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/input.css" rel="stylesheet">
  <link href="./css/output.css" rel="stylesheet">
  <title>Ultimate Team</title>
</head>
<style>
   #main_background{
      background-image: linear-gradient(rgb(0, 0, 0, 0.6), rgb(0, 0, 0, 0.6)), 
      url(<?php echo $background_url ?>);
      background-repeat: no-repeat;
    	background-size: cover;
   }
   .zone{
      background-image: url(<?php echo $placeholder ?>);
      background-repeat: no-repeat;
      background-size: cover;
      cursor: pointer;
   }
</style>
<body>
    <main id="main_background"  class="main_background w-full flex flex-col px-6 md:px-[120px] py-[50px]">
        <div class="py-[20px]">
           <h5 class="text-white font-[700] text-[20px]">EA FC 25 Tactics & Formations</h5>
           <p class="text-white text-[12px]">Build Custom Tactics & Formations</p>
        </div>

         <div class="w-full grid max-lg:grid-cols-1 grid-cols-6 gap-5 justify-center">
            <div class="max-lg:col-span-1 col-span-4 relative text-white flex flex-col justify-center items-center">
               <div class="z-40 px-6 md:px-[30px] row-[20px] grid absolute w-full h-full p-[20px] md:p-[40px]">
                  <div class="grid board-players z-40 gap-5 absolute w-full h-full">
                     <div class="flex flex-wrap w-full gap-5 md:gap-[90px] justify-center">
                        <div data-zone="ST" class="flex justify-center items-center zone max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                        <div data-zone="CF" class="flex justify-center items-center zone  max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                        <div data-zone="RW" class="flex justify-center items-center zone  max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                     </div>
                     <div class="flex flex-wrap w-full gap-5 md:gap-[90px] justify-center">
                        <div data-zone="LW" class="flex justify-center items-center zone  max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                        <div data-zone="AM" class="flex justify-center items-center zone  max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                        <div data-zone="CM" class="flex justify-center items-center zone  max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                     </div>
                     <div class="flex flex-wrap w-full gap-5 md:gap-[90px] justify-center">
                        <div data-zone="DM" class="flex zone justify-center max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                        <div data-zone="RM" class="flex zone justify-center max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                        <div data-zone="LM" class="flex zone justify-center max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                        <div data-zone="RB" class="flex zone justify-center max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                     </div>
                     <div class="flex w-full justify-center">
                        <div data-zone="LB" class="flex justify-center zone  max-md:w-[48px] max-md:h-[70px] w-[110px] h-[160px] "></div>
                     </div>
                  </div>
               </div>
               <img src="<?php echo $stadium  ?>" class="w-full h-auto mt-4">
            </div>

            
            <div class="col-span-1 lg:col-span-2 text-white p-[20px] flex flex-col w-full">
               <div class="bg-black p-6 rounded-lg gap-3 flex flex-col">

                <div class="flex flex-col gap-3">
                   <h4 class="text-[20px] font-[600]">Formation</h4>
                   <select name="" id="" class="rounded border border-[#4c4c4c] bg-black p-2 focus:ring-orange focus:border-orange">
                    <option selected>2-4-4</option>
                    <option>3-5-2</option>
                    <option>4-3-3</option>
                   </select>
                </div>

                <div class="flex flex-col gap-3">
                   <h4 class="text-[20px] font-[600]">Create Your Player</h4>
                   <button id="add_player" type="button" class="focus:outline-none text-white bg-orange font-medium rounded text-sm px-5 py-2.5 me-2 mb-2">
                     Add your player
                   </button>  
                </div>

                <div class="bg-black gap-4 flex flex-col w-full ">
                  <h4 class="text-[20px] font-[600]">Create Your Theme</h4>
                  <div id="players_cards" class="grid justify-center  grid-cols-3  gap-5">
                    <!-- Player cards will be dynamically inserted here -->
                  </div>
                </div>
               </div>
            </div>
        </div>
   

        <div id="overlay" class="cursor-pointer fixed gap-5 inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            
        </div>


        <div id="add_overlay" class="hidden cursor-pointer fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">
            <div class="bg-black p-8 rounded-lg max-w-lg w-full mx-4 flex flex-col gap-5">

                <form method="POST" action="index.php">
                  <div class="grid grid-cols-2 gap-5">
                        <div class="flex flex-col gap-1" >
                           <input name="name" type="text" placeholder="enter name" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input name="position" type="text" placeholder="enter position" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input name="club" type="text" placeholder="enter club" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input name="rating" type="number" placeholder="enter rating" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input name="pace" type="number" placeholder="enter pace" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input name="shooting" type="number" placeholder="enter shooting" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input name="defending" type="number" placeholder=" enter defending" class="w-full rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input name="passing" type="number" placeholder="enter passing" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                     </div>
                     
                     <div class="flex flex-col gap-5 my-5">
                        <div class="flex flex-col gap-1" >
                           <input  name="dribbling" type="number" placeholder="enter dribbling" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1" >
                           <input  name="physical" type="number" placeholder="enter physical" class="rounded border border-[#4c4c4c] text-white  bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1">
                            <input  name="photo" type="text" placeholder="Enter photo URL" class="rounded border border-[#4c4c4c] text-white bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                        <div class="flex flex-col gap-1">
                            <input name="logo" type="text" placeholder="Enter logo URL" class="rounded border border-[#4c4c4c] text-white bg-black p-2 focus:ring-orange focus:border-orange">
                        </div>
                    </div>

                    <div class="flex justify-between gap-2">
                        <input type="submit"  class="cursor-pointer py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-orange text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700" value="Add Player">
                        <button id="cancer_add_button" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-orange text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700">
                            Cancel
                        </button>
                    </div>

                </form>
            </div>
        </div>   
    </main>
</body>
<script src="./js/app.js"></script>
</html>





