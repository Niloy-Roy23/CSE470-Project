<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body>

<!-- nav bar  -->
<nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Register Page</div>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-300">Home</a>
          <a href="#" class="hover:text-gray-300">Settings</a>
          <a href="#" class="hover:text-gray-300">Contact us</a>
        </div>
      </div>
    </div>
  </nav>


    <section class = "bg-gray-50 p-2 mt-12 mid-h-screen flex itmes-center justify-center" >
    

        <!--login container-->
        <div class= "bg_cyan-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">


            

             <!--form-->
             <div class="sm:w-1/2 px-16" >
                <h2 class="font-bold text-2xl text-[#FEB600]">Register</h2>
                <p class="text-sm mt-4 text-[#FEB600]"> Make your life more healthy with us</p>

                <form action="../controller/registrationController.php" method="POST" class="flex flex-col gap-4">
                    <input class="p-2 mt-8 round-x1 border rounded-xl" type="text" name="fullname" placeholder="Full Name" required>
                    <input class="p-2 mt-1 round-x1 border rounded-xl" type="email" name="email" placeholder="Email" required>
                    <input class="p-2 mt-1 round-x1 border rounded-xl" type="password" name="password" placeholder="Password" required>
                    <!-- <input class="p-2 mt-1 round-x1 border rounded-xl" type="password" name="con_password" placeholder="Confirm Password"> -->

                    
                    <div class="mt-5">
                        <input type="checkbox" class="border-gray-400" name="" id="" required>
                        <span>
                            I accept the <a href="#" class="text-[#C3C65C] font-semibold"> Terms of Use</a> & <a href="#" class="text-[#C3C65C] font-semibold">Privacy Policy</a>
                        </span>
                    </div>

                    <button type="submit" name="submit" class="bg-[#FEB600] text-white py-2 border rounded-xl hover:scale-105"> Register</button>


                </form>


                <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-400">  

                </div>

                <!--<buttion class="bg-white border py-2 w-full rounded-xl mt-5 flex
                 justify-center items-center text-sm"> </buttion>-->

                <div class="mt-3 text-xs flex justif-between items-center">
                    <p>already have an account</p>
                    <button class="'py-2 px-5 bg-yellow-400 border rounded-xl"><a href="login.php" >Login</a></button>
                </div> 




        </div>

              <!--image-->
    <div class="w-1/2 md:block hidden">
        <img class= "rounded-2xl" src="../image/register.jpg" alt="">
    </div>


</div>


</section>






</body>
</html>
