<!--  
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




?>  -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Admin  Panel</title>
</head>

<body class="font-sans bg-gray-100">


  
<?php if ($email == 'admin123@gmail.com' || $email == 'instuctor1@gmail.com'    ): ?>
  <nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Admin Panel </div>
        <div class="flex space-x-4">
          
        
          
            <a href="addInstructor.php" class="hover:text-gray-300">Add instructor</a>
          
         
          <a href="logout.php"> logout</a>
        </div>
      </div>
    </div>
  </nav>
  <?php endif; ?>



  
  <div class="container mx-auto mt-8 ml-20 p-4">

  <?php if ($email == 'admin123@gmail.com' || $email == 'instuctor1@gmail.com'    ): ?>
    <h2 class="text-2xl font-semibold mb-4">Dashboard </h2>
    <span class="text-lg font-semibold mb-4">welcome to <?php echo $email ?></span>
    <!-- Cards -->
    <div class="grid grid-cols-1 mt-4 md:grid-cols-2 lg:grid-cols-4 gap-4">

      <a href="chartshowAdmin.php"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Client Diet charts</h3>
        <p class="text-gray-600">Show all Diet charts </p>
      </div></a>

      <?php endif; ?>


      

      <?php if ($email == 'admin123@gmail.com'): ?>
      <a href="hiredInstructorInfo.php"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-semibold mb-2">Hired Instructor</h3>
        <p class="text-gray-600">Show all Hired instructor. </p>
      </div></a>
      <?php endif; ?>
     
      <?php if ($email == 'admin123@gmail.com'): ?>
      <a href="showInstructor.php"><div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2"> Instructor Details</h3>
        <p class="text-gray-600">show all Instructor Details</p>
      </div><a>
      <?php endif; ?>
    


      <?php if ($email == 'admin123@gmail.com' || $email == 'instuctor1@gmail.com'    ): ?>
     <a href="showComplain.php"> <div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Complains</h3>
        <p class="text-gray-600">Any issue to solve.</p>
      </div></a>
      
      <?php endif; ?>
      <?php if ($email == 'admin123@gmail.com'): ?>
      <a href="addInstructor.php"> <div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Add instructor</h3>
        <p class="text-gray-600">Add Instructor</p>
      </div></a>
      <?php endif; ?>


      <?php if ($email == 'admin123@gmail.com'): ?>
      <a href="chartDataAssign.php"> <div class="bg-[#FEB600] p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Add Diet charts</h3>
        <p class="text-gray-600">Diet charts</p>
      </div></a>
      <?php endif; ?>
     
    </div>
  </div>

  <!-- Footer -->
</div>
  <!-- <footer class="bg-[#FEB600] text-white text-center p-4 mt-64">
    <div className="max-w-screen-lg mx-auto">
        <div className="flex justify-between mt-3">
    <p>&copy; 2023 Admin Panel. All rights reserved.</p>
  </footer> -->
</div>

</body>

</html>


