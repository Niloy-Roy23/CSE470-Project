<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Admin Panel</title>
</head>

<body class="font-sans bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Admin Panel</div>
        <div class="flex space-x-4">
        
          
          <a href="logout.php"> logout</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mx-auto mt-8 p-4 flex">

 
    <div class="w-4/5 p-4">

     
      <h2 class="text-2xl font-semibold   ml-32">Add Instructor</h2>


      <div class="bg-gray-300  ml-32 p-12 shadow-xl">


        //add instructor form
      <form  method="POST" action="../controller/instructorController.php" class="max-w-md mx-auto border-spacing-2">

        <div class="mb-4">
         
          <input type="text" placeholder="Name" id="name" name="name" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
         
          <input type="text" placeholder="Email" id="name" name="email" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
      
          <input type="text" placeholder="phone number" id="name" name="phone" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
        
          <input type="text" placeholder="Expericence" id="name" name="experience" class="w-full border p-2 rounded-md">
        </div>
        <div class="mb-4">
        
        <input type="text" placeholder="Expertise" id="name" name="expertise" class="w-full border p-2 rounded-md">
      </div>
      <div class="mb-4">
        
        <input type="text" placeholder="Monthly Fee" id="name" name="monthlyfee" class="w-full border p-2 rounded-md">
      </div>
      <div class="mb-4">
      <div class="mb-4">
        
        <textarea type="text" placeholder="description"  name="description" class="w-full border p-2 rounded-md"></textarea>
      </div>
      <div class="mb-4">
        
        <button name="submit" class="bg-[#FEB600] pl-3 pr-3 pb-2 pt-2">Add instructor</button>
      </div>


      


</form>
