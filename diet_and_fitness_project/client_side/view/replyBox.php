
<?php
if (isset($_GET['email'])) {
  $clientEmail = urldecode($_GET['email']);
 
}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply Box</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
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
<div class="bg-gray-300  mt-24 p-12 shadow-xl">
  
    <form method="POST" action="../controller/replyController.php" class="max-w-md mx-auto border-spacing-2">

      <!-- Complain Box Section -->
      <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">Client Reply</h3>
        <!-- <input type="email" placeholder="Email" id="complaint-subject" name="email" class="w-full border p-2 rounded-md "> -->
        <input type="text" placeholder="Email" name="email" value="<?php echo $clientEmail  ?>" class="w-full border p-2 rounded-md mt-2 hidden ">
        <input type="text" placeholder="Subject" name="subject" class="w-full border p-2 rounded-md mt-2">
        <textarea placeholder="Reply" id="complaint-description" name="reply" class="w-full border p-2 h-600 rounded-md mt-2"></textarea>
      </div>
      <div class="mb-4">
        
        <button name="submit" class="bg-[#FEB600] pl-3 pr-3 pb-2 pt-2">send</button>
      </div>
</body>
</html>