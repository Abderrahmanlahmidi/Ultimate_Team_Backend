<body>
   <main id="main_background"  class="main_background w-full flex flex-col px-6 md:px-[120px] py-[50px]">
          <?= require loadPartials("titles")  ?>   
          <div class="w-full grid max-lg:grid-cols-1 grid-cols-6 gap-5 justify-center">
           <div class="max-lg:col-span-1 col-span-4 relative text-white flex flex-col justify-center items-center">
             <div class="z-40 px-6 md:px-[30px] row-[20px] grid absolute w-full h-full p-[20px] md:p-[40px]">
              <?= require loadPartials("stadium")  ?>   
            </div>
            <img src="<?php echo $stadium  ?>" class="w-full h-auto mt-4">
         </div>
          <?= require loadPartials("choices") ?>   
          <div id="overlay" class="cursor-pointer fixed gap-5 inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
          
          </div>
          <div id="add_overlay" class="hidden cursor-pointer fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">
              <div class="bg-black p-8 rounded-lg max-w-lg w-full mx-4 flex flex-col gap-5">
                <?= require loadPartials("players") ?>   
              </div>
          </div>   
      </main>
  </body>
  <script src="./public/js/app.js"></script>
</html>
