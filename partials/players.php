<div class="bg-black gap-4 flex flex-col w-full ">
       <h4 class="text-[20px] font-[600]">Create Your Theme</h4>
       <div id="players_cards" class="grid justify-center  grid-cols-3  gap-5">
           <?php
             $query = "SELECT * FROM ultimate_teams.players p, ultimate_teams.club c, ultimate_teams.nationality n, ultimate_teams.gardes_statistics g, ultimate_teams.players_statistics s WHERE p.id = c.id and p.id = n.id and p.id = g.id and p.id = s.id;";
             $result = mysqli_query($con, $query);
             while($row = mysqli_fetch_assoc($result))
            {
           ?>
            <div
              draggable="true"
              data-position="${player.position}"
              class="player relative w-[150px] h-[200px] bg-cover bg-center bg-no-repeat p-[1.2rem_0] z-2 transition ease-in duration-200"
              style="background-image: url('/public/images/placeholder-card.png')"
            >
              <div class="relative flex text-[#e9cc74] px-1">
                 <div class="absolute flex flex-col text-center uppercase leading-5 font-light pt-2">
                   <div class="text-sm"><?php echo $row['rating'];?></div>
                   <div class="text-xs"><?php echo $row['position'];?></div>
                   <div class="block w-4 h-6">
                    <!-- logo -->
                     <img src="<?php echo $row['logo'];?>" alt="Logo" class="w-full h-full object-contain" />
                   </div>
                 </div>
                 <div class="mx-auto w-[40px] h-[40px] overflow-hidden relative">
                   <img src="<?php echo $row['photo'];?>" alt="Player" class="w-full h-full object-contain relative -right-2" />
                 </div>
               </div>
               <div class="relative">
                 <div class="block text-[#e9cc74] w-full mx-auto py-1 text-center">
                   <div class="text-xs uppercase border-b border-[rgba(233,204,116,0.1)] pb-0.5 overflow-hidden">
                     <span class="block text-shadow"><?php echo $row['name'];?></span>
                   </div>
                   <div class="mt-1 flex justify-center space-x-2">
                     <div class="space-y-0.5 border-r border-[rgba(233,204,116,0.1)] pr-1">
                       <span class="flex text-[10px] uppercase"><span class="font-bold mr-0.5"><?php echo $row['pace'];?></span> PAC</span>
                       <span class="flex text-[10px] uppercase"><span class="font-bold mr-0.5"><?php echo $row['shooting'];?></span> SHO</span>
                       <span class="flex text-[10px] uppercase"><span class="font-bold mr-0.5"><?php echo $row['passing'];?></span> PAS</span>
                     </div>
                     <div class="space-y-0.5">
                       <span class="flex text-[10px] uppercase"><span class="font-bold mr-0.5"><?php echo $row['dribbling'];?></span> DRI</span>
                       <span class="flex text-[10px] uppercase"><span class="font-bold mr-0.5"><?php echo $row['defending'];?></span> DEF</span>
                       <span class="flex text-[10px] uppercase"><span class="font-bold mr-0.5"><?php echo $row['physical'];?></span> PHY</span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="absolute   left-1/2 transform -translate-x-1/2 flex space-x-2">
                 <button
                   class="delete-btn px-2 py-1 bg-orange text-white text-xs rounded hover:bg-red-600"
                 >
                   Delet
                 </button>
                 <button
                   class="delete-btn px-2 py-1 bg-orange text-white text-xs rounded hover:bg-red-600"
                 >
                   Edit
                 </button>
               </div>
             </div>
           <?php 
          }
           ?>
       </div>