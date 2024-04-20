<?php
$conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
  session_start();

 
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>



<!-- Navbar -->

  
    <section class = "bg-gray-50 p-2 mt-12 mid-h-screen flex itmes-center justify-center" >
    

        <!--login container-->
        <div class= "bg_cyan-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">

             <!--form-->
             <div class="sm:w-1/2 px-16" >
                <h2 class="font-bold text-2xl text-[#FEB600]">LogIn</h2>
                <p class="text-sm mt-4 text-[#FEB600]"> Start your journey to be healthy</p>

                <form action="../controller/loginController.php" method="post" class="flex flex-col gap-4">
                    <input class="p-2 mt-8 round-x1 border rounded-xl" type="text" name="email" placeholder="Email">
                    <input class="p-2 mt-1 round-x1 border rounded-xl" type="password" name="password" placeholder="Password">
                    <button type="submit" name="login" class="bg-[#FEB600] text-white py-2 border rounded-xl hover:scale-105">Log In</button>



                </form>


                <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-400">  

                </div>

                <!--<buttion class="bg-white border py-2 w-full rounded-xl mt-5 flex
                 justify-center items-center text-sm"> </buttion>-->
                 <p class="mt-5 text-xs border-gray-400 border-b py-4"> forgot password?</p>

                <div class="mt-3 text-xs flex justif-between items-center">
                    <p>create an account!</p>
                    <button class="'py-2 px-5 bg-[#FEB600] border rounded-xl"><a href="register.php" >Register</a></button>
                </div> 




        </div>

              <!--image-->
    <div class="w-1/2 md:block ">
    <img class="rounded-2xl" src="../image/login.jpg" alt="">

    


    </div>
</div>


</section>


 



</body>
</html>
