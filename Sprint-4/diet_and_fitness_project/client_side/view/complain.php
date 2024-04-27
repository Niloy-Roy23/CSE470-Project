

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
    <title>complain box</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

<nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Diet and Fitness</div>
        <div class="flex space-x-4">
          <a href="adminDashbroad.php" class="hover:text-gray-300">Home</a>
          
          <a href="logout.php"> logout</a>
         
      </div>
    </div>
  </nav>
  <div class="bg-gray-200  1 p-12 shadow-xl">
    <form method="POST" action="../controller/complainController.php" class="max-w-md mx-auto border-spacing-2">

      <!-- Complaint Box Section -->
      <div class="mb-4">
        <h3 class="text-lg font-semibold mb-2">Send message to admin</h3>
        <input type="email" placeholder="Email" value="<?php echo $email  ?>"  name="email" class="w-full border p-2 rounded-md hidden ">
        <input type="text" placeholder="Subject"  name="subject" class="w-full border p-2 rounded-md mt-2">
        <textarea placeholder="Description"  name="description" class="w-full border p-2 rounded-md mt-2"></textarea>
      </div>
      <div class="mb-4">
        
        <button name="submit" class="bg-[#FEB600] pl-3 pr-3 pb-2 pt-2">submit</button>
      </div>

      <!-- Instructor Information Section -->
    
    </form>
    <?php
    require_once '../controller/showReplyController.php';
    $replies = getAllReply($email);  
    ?>
<main class="container mx-auto px-4 py-8">

<h4 class="text-lg font-semibold mb-2"  >Admin Reply</h4>
<div class="flex flex-wrap border bg-white border-yellow-300 p-4 pb-6 -mx-2">
    <?php
    while ($row = $replies->fetch_assoc()) {
        echo '<div class="w-1/2 lg:w-2/3 px-4">';
        echo '<h2 class="text-xl font-bold border-b border-gray-300 mb-2 pb-2">message subject:' . htmlspecialchars($row['subject']) . '</h2>';
        echo '<span class="text-sm font-bold mb-4">' . ($row['created_date']) . '</span>';
        echo '<p class="text-gray-700 text-lg ">' . ($row['reply']) . '</p>';
        echo '</div>';
        // echo '<button class="text-red-500 font-semibold pl-3 pr-3 pb-2 pt-2"    >Delete</button>';

    }
    ?>
</div>

</div>
</main>
  </div>
</div>







</body>
</html>