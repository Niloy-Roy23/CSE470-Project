

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
    <title>Document</title>
    <link rel="stylesheet" href="path/to/your/tailwind.css">
<link rel="stylesheet" href="path/to/font-awesome/css/all.css">
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<header class="bg-[#FEB600] shadow">
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold text-gray-800">Author Reply</h1>
    </div>
</header>
<?php
    require_once '../controller/showReplyController.php';
    $replies = getAllReply(); // Corrected the function call
    ?>
<main class="container mx-auto px-4 py-8">
<div class="flex flex-wrap border border-gray-300 p-4 pb-6 -mx-2">
    <div class="w-full lg:w-2/3 px-4">
        <?php
        while ($row = $replies->fetch_assoc()) {
            echo '<h2 class="text-xl font-bold border-b border-gray-300 mb-2 pb-2">complain subject:' . htmlspecialchars($row['subject']) . '</h2>';
            echo '<span class="text-sm font-bold mb-4">' . htmlspecialchars($row['created_date']) . '</span>';
            echo '<p class="text-gray-700 text-lg ">' . nl2br(htmlspecialchars($row['reply'])) . '</p>';
        }
        ?>
    </div>
</div>
</main>


</body>
</html>