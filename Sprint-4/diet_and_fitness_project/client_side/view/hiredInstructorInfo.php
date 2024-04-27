<?php

function getHiredInstructors()
{
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM hiredinstructor";
    $result = mysqli_query($conn, $sql);

    $hiredInstructors = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $hiredInstructors[] = $row;
    }

    return $hiredInstructors;
}

// Example usage:
$hiredInstructors = getHiredInstructors();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hired Instructors</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="font-sans bg-gray-100 ">

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

<div class="relative overflow-x-auto">
    <h1 class="mt-6 text-lg ml-32 font-bold text-black">Client hired Instructor Info</h1>
    <table class="w-3/4 text-sm text-left rtl:text-right mt-12 ml-32 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-[#FEB600]">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Instructor ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Client Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                <!-- <th scope="col" class="px-6 py-3">
                    Category
                </th> -->
                <!-- <th scope="col" class="px-6 py-3">
                    Price
                </th> -->
            </tr>
        </thead>
        <tbody>
        <?php foreach ($hiredInstructors as $instructor) : ?>
            <tr class="bg-white border-b ">
               
                <td class="px-6 py-4">
                <?php echo $instructor['instructorid']; ?>
                </td>
                <td class="px-6 py-4">
                   <?php echo $instructor['clientemail']; ?>
                </td>
                <td class="px-6 py-4">
    <a href="../controller/hiredInstructorController.php?delete_id=<?php echo $instructor['id']; ?>" class="text-red-600 font-semibold">Cancel</a>
</td>

               
            </tr>
            <?php endforeach; ?>
      
       
        </tbody>
    </table>
</div>

</body>

</html>
