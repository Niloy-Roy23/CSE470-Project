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
    <title>Diet charts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<?php if ($email == 'admin123@gmail.com' || $email == 'instuctor1@gmail.com'    ): ?>
  <nav class="bg-[#FEB600] p-4 text-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="text-xl font-semibold">Admin Panel </div>
        <div class="flex space-x-4">
          
        
        
          
         
          <a href="logout.php"> logout</a>
        </div>
      </div>
    </div>
  </nav>
  <?php endif; ?>
    <div class="container mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6">Diet charts</h1>

        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-yellow-500">
                    <th class="py-3 px-4 border-b">Email</th>
                    <th class="py-3 px-4 border-b">Meal of the day</th>
                    <th class="py-3 px-4 border-b">Saturday</th>
                    <th class="py-3 px-4 border-b">Sunday</th>
                    <th class="py-3 px-4 border-b">Monday</th>
                    <th class="py-3 px-4 border-b">Tuesday</th>
                    <th class="py-3 px-4 border-b">Wednesday</th>
                    <th class="py-3 px-4 border-b">Thursday</th>
                    <th class="py-3 px-4 border-b">Friday</th>
                    <th class="py-3 px-4 border-b">Update</th>
                    <th class="py-3 px-4 border-b">Delete</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
           require_once('../model/chartDataModel.php');

           //get chartData from database and admin edit delete data  by tracking email
           $result = getAllChartData();
           
           // Loop through the fetched data and display it in the table
           while ($row = $result->fetch_assoc()) {
               echo "<tr>";
               echo "<td class='py-3 px-4 border-b'>" . $row['email'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['mealday'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['saturday'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['sunday'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['monday'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['tuesday'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['wednesday'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['thursday'] . "</td>";
               echo "<td class='py-3 px-4 border-b'>" . $row['friday'] . "</td>";
           
               // Add Update and Delete buttons
               echo "<td class='py-3 px-4 border-b'><a href='chartsDataEdit.php?id=" . $row['id'] . "' class='text-blue-500'>Update</a></td>";
               echo "<td class='py-3 px-4 border-b'><a href='dietChartDelete.php?id=" . $row['id'] . "' class='text-red-500'>Delete</a></td>";
           
               echo "</tr>";
           }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
