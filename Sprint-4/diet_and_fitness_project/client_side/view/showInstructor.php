<?php
$conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT id, name, email, expericence, expertise,monthlyfee,description FROM instructor";
$result = $conn->query($sql);

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
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
    <div class="container mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6">Instuctor Data </h1>

        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-[#FEB600]">
                    <th class="py-3 px-4 border-b">Name</th>
                    <th class="py-3 px-4 border-b">Email</th>
                    <th class="py-3 px-4 border-b">Experience</th>
                    <th class="py-3 px-4 border-b">Expertise</th>
                    <th class="py-3 px-4 border-b">MonthlyFee</th>
                    <th class="py-3 px-4 border-b">Description</th>
                    <th class="py-3 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through the fetched data and display it in the table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='py-3 px-4 border-b text-lg'>" . $row['name'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['email'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['expericence'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['expertise'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['monthlyfee'] . "</td>";
                    echo "<td class='py-3 px-4 border-b'>" . $row['description'] . "</td>";
                
                    // Add action buttons
                    echo "<td class='py-3 px-4 border-b'>";
                    // echo "<button class='bg-blue-500 text-white py-1 px-2 rounded-full mr-2 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue'>Update</button>";
                    echo "<a href='../controller/instructorController.php?delete_id=" . $row['id'] . "'>";
                    echo "<button class='bg-red-500 text-white py-1 px-2 rounded-full hover:bg-red-600 focus:outline-none focus:shadow-outline-red'>Delete</button>";
                    echo "</a>";
                    echo "</td>";
                
                    echo "</tr>";
                    
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
