<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/output.css">
    <title>dashboard</title>
</head>
<body class="bg-black p-[20px] w-full flex flex-col">
    <section class="w-full gap-5 grid grid-cols-10 h-[100vh]" >
        <div class="col-span-2  p-[10px] flex flex-col  gap-[10px] border rounded border-[#44403c]" >
            <div class="py-[10px] px-3 ">
                <h1 class="font-bold text-[24px] text-white">dashboard</h1>
            </div>
            <div class="w-full flex flex-col gap-3" >
                <button id="new_player" class="w-full py-2 bg-orange text-white rounded font-semibold" >add player</button>
                <button class="w-full py-2 bg-orange text-white rounded font-semibold" >statistics</button>
            </div>
        </div>

        <div class="col-span-8 border rounded border-[#44403c] p-[10px] overflow-y-auto overflow-x-auto" >
             
              <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400  ">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                      <tr>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Name
                          </th>
                          <th scope="col" class="py-3 text-white border border-[#44403c] p-[10px] ">
                              Position
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Nationality
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Flag
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Club
                          </th>
                          <th scope="col" class="py-3 text-white border border-[#44403c] p-[10px] ">
                              Logo
                          </th>
                          
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Rating
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Pace
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Shooting
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Passing
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Dribbling
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Defending
                          </th>
                          <th scope="col" class="py-3 text-white  border border-[#44403c] p-[10px]">
                              Physical
                          </th>

                      </tr>
                  </thead>
                  <tbody>
                     <!-- columns -->
                     
                     <?php
                       $query_gk = "SELECT * FROM ultimate_teams.players p, ultimate_teams.club c, ultimate_teams.nationality n, ultimate_teams.statistic_gardes g
                       WHERE p.id = c.id and p.id = n.id and p.id = g.id";
                       $query_pl = "SELECT * FROM ultimate_teams.players p, ultimate_teams.club c, ultimate_teams.nationality n, ultimate_teams.players_statistics s
                       WHERE p.id = c.id and p.id = n.id and p.id = s.id";

                       $result = mysqli_query($con, $query_gk);

                     ?>

                     <?php while($row = mysqli_fetch_array($result)){ ?>

                      

                     <?php }?>

                     
                


                        <tr class=" dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                          <th scope="row" class="flex items-center w-[160px] px-3 py-4 text-gray-900 whitespace-nowrap border-b border-l border-[#44403c]">
                              <img class="w-10 h-10 rounded-full" src="./src/assets/img/25_120.webp" alt="player">
                              <div class="ps-3 ">
                                  <div class=" font-semibold text-white">name</div>
                              </div>  
                          </th>
                          <td class="px-6 py-4 text-white border border-[#44403c]">
                              postition
                          </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 nationality
                              </div>
                            </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 flag
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 club
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 logo
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 rating
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 pace
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 shooting
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 passing
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 dribbling
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 defending
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white items-center">
                                 physical
                              </div>
                           </td>
                          <td class="px-6 py-4 border border-[#44403c]">
                              <div class="flex text-white gap-3  items-center">
                                 <button class="bg-orange p-2 rounded" >edit</button>
                                 <button class="bg-orange p-2 rounded" >delete</button>
                              </div>
                           </td>
                      </tr>
                      <!-- end columns -->

                     </tbody>
                  </table>
              <!-- form overlay -->
              <div id="overlay" class="cursor-pointer hidden fixed gap-5 inset-0 bg-black bg-opacity-50  items-center justify-center z-50">
    
              </div>
              <div id="add_overlay" class="hidden cursor-pointer fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">
                <div class="bg-black p-8 rounded-lg max-w-lg w-full mx-4 flex flex-col gap-5 border border-[#44403c]">
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
                       <div class="flex flex-col gap-1">
                           <input name="logo" type="text" placeholder="Enter photo" class="rounded border border-[#4c4c4c] text-white bg-black p-2 focus:ring-orange focus:border-orange">
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
              <!-- form overlay end -->

              <!-- form graphic form -->
              <!-- <div id="overlay" class="cursor-pointer fixed gap-5 inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    
              </div>
              <div id="add_overlay" class="flex cursor-pointer fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">
                <h1 class="text-white" >form</h1>
              </div> -->
              <!-- form graphic form end -->
        </div>  
    </section>
    <script src="../public/js/app.js" ></script>
</body>
</html>