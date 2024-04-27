<?php
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("location:../view/login.php");
    exit(); // Ensure that the script stops execution after redirecting
}

$conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed : " . mysqli_connect_error());

// Select the necessary fields from both tables using a JOIN operation
$sql = "SELECT i.id, i.name, i.email,i.phone, i.expericence, i.expertise, i.monthlyfee, i.description
        FROM instructor i
        JOIN hiredinstructor h ON i.id = h.instructorid
        WHERE h.clientemail = '$email'";

$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Instructor Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-[#FEB600] p-4 text-white">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold">Your Instructor</div>
            </div>
        </div>
    </nav>
    <div class="w-full lg:full px-4 mt-1 mx-auto ">
  <div class="relative flex flex-col min-w-0 break-words bg-gray-100 w-full  shadow-xl rounded-lg  ">
  <div class="flex justify-left gap-2 p-12">
        <?php
        // Loop through the fetched data and display it
        while ($row = $result->fetch_assoc()) {
            echo '<div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">';
            echo '<h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Hello, I am your hired instructor</h5>';
            echo '<br>';
            echo '<p class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">My name is ' . $row['name'] . '</p>';
            echo '<p class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Email:' . $row['email'] . '</p>';
            echo '<p class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Number:' . $row['phone'] . '</p>';
            echo '<p class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">I am expertise of ' . $row['expertise'] . '</p>';
            echo '<p class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">I have a experience  ' . $row['expericence'] . '</p>';
            echo '<span class="mb-2 text-md  mt-6 font-bold tracking-tight text-blue-600 ">Thank you </span>';

            echo '</div>';
        }
        ?>
    </div>
  </div>
</div>
 
</body>

</html>
