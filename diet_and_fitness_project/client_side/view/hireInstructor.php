


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
    <title>User Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">

<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6">Hire Your Instructor</h1>
    <?php
    require_once '../controller/instructorController.php';
    $users = getUsers();
    $id=1;
    ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <?php
        while ($row = $users->fetch_assoc()) {
        ?>
            <!-- Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <!-- <img alt="image" src="" alt="User Image" class="rounded-full h-16 w-16 mx-auto mb-4"> -->
                <h2 class="text-xl font-bold mb-2"><?php echo $row['name']; ?></h2>
                <p class="text-gray-600"><?php echo $row['expericence']; ?> of experience</p>
                <p class="text-gray-600"><?php echo 'Expertise: ' . $row['expertise']; ?></p>
                <p class="text-gray-600"><?php echo 'Monthlyfee: ' . $row['monthlyfee']; ?></p>
               
                <br>
                <a onclick="hireInstructor('<?php echo $row['id']; ?>')" class="bg-yellow-500 cursor-pointer hover:text-white text-black font-bold py-1 px-4 rounded">
                   Hire Him
                </a>
            </div>
        <?php
        }
        ?>
    </div>
    
</div>



<script>


    function hireInstructor(instructorId) {
      // Redirect to a page with the instructor ID, for example:
      window.location.href = 'hiredhim.php?id=' + instructorId;
    }
</script>

</body>

</html>
