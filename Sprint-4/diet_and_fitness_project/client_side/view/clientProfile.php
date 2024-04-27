

<?php
  
  $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());

  session_start();
if(isset($_SESSION['email'])  )
{
 
  $email=$_SESSION['email'];
 
 

}
else{

  header("location:../view/login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Profile</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body >
   



<section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('../image/cover.png');
          ">
    
    </div>
    </section>
 
<div class="w-full lg:full px-4 mx-auto ">
  <div class="relative flex flex-col min-w-0 break-words bg-gray-100 w-full  shadow-xl rounded-lg  ">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div class="relative ">
            <img alt="log" src="../image/logo.png" class="shadow-lg rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
          </div>
        </div>
        <div class="w-full px-4 text-center mt-20">
          <div class="flex justify-center py-4 lg:pt-4 pt-8">
          <div class="mr-4 p-3 text-center">
           
           <a href="data.php" class="bg-[#FEB600] active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
              Add Data
             </a>
         </div>
            <div class="mr-4 p-3 text-center">
           
              <a href="dietchartsShowToClient.php" class="bg-[#FEB600] active:bg-pink-600 uppercase cursor-pointer text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                check Diet chart
                </a>
            </div>
          
            <div class="mr-4 p-3 text-center">
           
              <a href="complain.php"><button  class="bg-[#FEB600] active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
               Chatbox
                </button></a>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              
             <a href="clientHiredInstuctor.php"> <button class="bg-[#FEB600] active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                 Your Instructor
                </button></a>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              
            <a href="hireInstructor.php"  <button class="bg-[#FEB600] active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                  Hire Instructor
                </button></a>
            </div>
            <div class="lg:mr-4 p-3 text-center">
            
             <a href="logout.php"> <button class="bg-[#FEB600] active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                 Logout
                </button></a>
            </div>
          </div>
        </div>
  
      </div>
      <div class="text-center mt-12">
        <h3 class="text-xl font-semibold leading-normal  text-blueGray-700 mb-2">
        Welcome To Diet and Fitness  
        </h3>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
          
          <?php echo $email ?>
        </div>
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
         Contact Us 
        </div>
        <div class="mb-2 text-blueGray-600">
         
          dietandfitness@info.com
        </div>
      </div>
      
        </div>
      </div>
    </div>
  </div>
</div>










</body>
</html>