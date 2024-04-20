<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Medical Condition</title>
</head>
<body>

<!-- Navbar -->
<nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-left">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold"></div>
        <div class="flex space-x-4 items-end">
          <a href="#" class="hover:text-gray-300">Home</a>
          <a href="#" class="hover:text-gray-300">Dashboard</a>
          <a href="#" class="hover:text-gray-300">Settings</a>
          <a href="#" class="hover:text-gray-300">Logout</a>
        </div>
      </div>
    </div>
  </nav>

    <section class = "bg-gray-50 p-2 mt-12 mid-h-screen flex itmes-center justify-center" >
    

        <!--login container-->
        <div class= "bg_cyan-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">


            

             <!--form-->
             <div class="sm:w-2/3 px-16" >
                <h2 class="font-bold text-2xl text-[#FEB600]">Medical Condition</h2>
                <p class="text-sm mt-4 text-[#FEB600]"> Make your life more healthy with us</p>
              

                <form action="../controller/dataController.php" class="flex flex-col gap-3">
                     
                     <select id="gender" name="gender" class="bg-gray-50 border mt-12 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                      focus:border-blue-500 block w-5/6 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                     dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                       <option selected>Gender</option>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                       <option value="others">Others</option>
                     </select>


                    <input class="p-2 mt-5 round-x1 border rounded-xl" type="number" name="age" placeholder="Age" required>
                    <input class="p-2 mt-5 round-x1 border rounded-xl" type="number" name="height" placeholder="Height in meter" required>
                    <input class="p-2 mt-5 round-x1 border rounded-xl" type="number" name="weight" placeholder="Weight in kg" required>
                    
                    


               


                <!--<buttion class="bg-white border py-2 w-full rounded-xl mt-5 flex
                 justify-center items-center text-sm"> </buttion>-->


        </div>

             
    <div class="w-2/3 px-16 ">
        
            



                <div class="mt-8 grid grid-cols-1/2 items-left text-black">
                    
                    <p class="text-left">DO you have any of the following medical?</p>

                </div>

                <div name= "checkbox">

                <div class="flex items-center mt-1">
                    <input id="default-checkbox" type="checkbox" value="Blood pressure" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blood pressure</label>
                </div>
                <div class="flex items-center">
                    <input checked id="checked-checkbox" type="checkbox" value="Diabetes" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Diabetes</label>
                </div>
                <div class="flex items-center">
                    <input checked id="checked-checkbox" type="checkbox" value="Heart diseases" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Heart diseases</label>
                </div>
                <div class="flex items-center">
                    <input checked id="checked-checkbox" type="checkbox" value="any food allergies" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">any food allergies </label>
                </div>
                <div class="flex items-center">
                    <input checked id="checked-checkbox" type="checkbox" value="None" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">None</label>
                </div>
                </div>

                


                
                    <div class="mt-8 grid grid-cols-1/2 items-left text-black" name="history">
                        
                        <p class="text-left">Any surgery history? or write N/A</p>
    
                    </div>

                <input class="border-2 transition duration-500 placeholder-gra-400 focus:placeholder-transparent
                 border-gray-400 w-40 py-7 text-center text-black-400 bg-transparent rounded-md focus:outline-none" type="text" name="history" placeholder="surgery history">


                 <button name="submit" class="bg-[#FEB600] w-2/4 -center mt-2 text-white py-2 border rounded-xl hover:scale-105">Next</button>
       


            
            <div class="mt-4">
             
              
            </div>
           
            


        </form>
        

        </div>

    </div>

              <!--image-->
              <div class="w-1/3 md:block hidden">
                <img class= "rounded-2xl" src="data.jpg" alt="">
        
        
            </div>
</div>


</section>



</body>
</html>
