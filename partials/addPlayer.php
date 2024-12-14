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
             <input  name="photo" type="file" placeholder="Enter photo URL" class="rounded border border-[#4c4c4c] text-white bg-black p-2 focus:ring-orange focus:border-orange">
         </div>
         <div class="flex flex-col gap-1">
             <input name="logo" type="file" placeholder="Enter logo URL" class="rounded border border-[#4c4c4c] text-white bg-black p-2 focus:ring-orange focus:border-orange">
         </div>
      </div>
     <div class="flex justify-between gap-2">
         <input type="submit"  class="cursor-pointer py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-orange text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700" value="Add Player">
         <button id="cancer_add_button" type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-orange text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700">
             Cancel
         </button>
     </div>
</form>