
<?php
   $id = $_GET['id'];
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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
      
         
          <a href=""> Confirm Your Instructor</a>
        </div>
      </div>
    </div>
  </nav>

<?php
    require_once '../controller/instructorController.php';
    $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());

    $sql="SELECT id ,name,expericence,expertise,monthlyfee,description FROM instructor where id=$id";
    $result=$conn->query($sql);

    ?>  
<form action="../controller/hiredInstructorController.php" method="POST">
        <script>alert("We will give your instructor contact info in your profile after payment")</script>
    <?php
        while ($row = $result->fetch_assoc()) {
        ?>
        <div class="flex justify-center">
        <div class="max-w-sm p-12 shadow-xl mt-32  bg-[#FEB600] border border-gray-200 rounded-lg  ">
           <h2 class="text-xl font-bold text-white mb-2"><?php echo $row['name']; ?></h2>
                <p class="text-white text-lg "><?php echo 'Experience:' .$row['expericence']; ?> </p>
                <p class="text-white text-lg "><?php echo 'Expertise: ' . $row['expertise']; ?></p>
                <p class="text-white text-lg "><?php echo 'Monthlyfee: ' . $row['monthlyfee']; ?></p>
                <p class="text-white text-lg "><?php echo 'About: ' . $row['description']; ?></p>
            <input type="text" name="instructorId" value="<?php echo $row['id'] ?>" hidden >
           <input type="text" name="clientEmail" value="<?php echo $email ?>" hidden>
        <?php
        }
        ?>
        <div class="flex justify-between ml-6">
        <button class="text-green-600 mt-8" name="submit">confirm</button>
       <button class="text-red-600 mt-8" name="submit"><a class="no-underline" href="hireinstructor.php">cancel</a></button>
       <div>
</div>

    </div>
    
      
    </form>
</body>
</html>