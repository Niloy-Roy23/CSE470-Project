<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Admin Panel</div>
        <div class="flex space-x-4">
          <a href="adminDashbroad.php" class="hover:text-gray-300">Home</a>
          
          <a href="logout.php"> logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content with Sidebar -->
  <div class="container mx-auto mt-8 p-4 flex">

    <!-- Sidebar -->
    <!-- <div class="w-1/5 bg-[#FEB600] p-4 rounded-lg shadow-md">
   
      <a href="#" class="block text-white hover:text-gray-300 mb-2">Sidebar Item 1</a>
      <a href="#" class="block text-white hover:text-gray-300 mb-2">Sidebar Item 2</a>
      <a href="#" class="block text-white hover:text-gray-300 mb-2">Sidebar Item 3</a>
    </div> -->

    <!-- Main Content -->
    <div class="w-4/5 p-4">

      <!-- Page Heading -->
      <h2 class="text-2xl font-semibold   ml-32">Add Client Diet charts</h2>

      <!-- Form for Instructor Information -->
      <div class="bg-gray-300  ml-32 p-12 shadow-xl">
      <form  method="POST" action="../controller/chartDataController.php" class="max-w-md mx-auto border-spacing-2">

        <div class="mb-4">
         
          <input type="text" placeholder="Eamil"name="email" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
         
        <input type="text" placeholder="Meal of the day" id="name" name="mealday" class="w-full border p-2 rounded-md">

        </div>
        <div class="mb-4">
      
          <input type="text" placeholder="saturday" name="saturday" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
        
          <input type="text" placeholder="sunday" name="sunday" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
        
        <input type="text" placeholder="monday" name="monday" class="w-full border p-2 rounded-md">
      </div>
      <div class="mb-4">
        
        <input type="text" placeholder="tuesday"  name="tuesday" class="w-full border p-2 rounded-md">
      </div>
      <div class="mb-4">
        
        <input type="text" placeholder="wednesday"  name="wednesday" class="w-full border p-2 rounded-md">
      </div>
      <div class="mb-4">
        
      <input type="text" placeholder="thursday" name="thursday" class="w-full border p-2 rounded-md">

      </div>
      
      <div class="mb-4">
        
        <input type="text" placeholder="friday"  name="friday" class="w-full border p-2 rounded-md">
      </div>
        
        <button name="submit" class="bg-[#FEB600] pl-3 pr-3 pb-2 pt-2">Send charts</button>
      </div>


      


</form>
</html>