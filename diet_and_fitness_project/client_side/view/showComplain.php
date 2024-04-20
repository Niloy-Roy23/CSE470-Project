<?php
// function getComplaints()
// {
//     $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());

//     $sql = "SELECT email, subject, description FROM complainbox";
//     $result = mysqli_query($conn, $sql);

//     $complaints = array();

//     while ($row = mysqli_fetch_assoc($result)) {
//         $complaints[] = $row;
//     }

//     $conn->close();

//     return $complaints;
// }
require_once ('../model/complainModel.php');
function displayComplaints()
{
    $complaints = getComplaints();

    echo '<table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-[#FEB600]">
                    <th class="py-3 px-4 border-b">Client Email</th>
                    <th class="py-3 px-4 border-b">Subject</th>
                    <th class="py-3 px-4 border-b">Description</th>
                    <th class="py-3 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>';

    foreach ($complaints as $complaint) {
        echo '<tr>
                <td class="border p-2 ">' . $complaint['email']. '</td>
                <td class="border p-2">' .$complaint['subject']. '</td>
                <td class="border p-2">' .$complaint['description']. '</td>
                <td>
                   
                    <a href="replyBox.php?email=' . urlencode($complaint['email']) . '">
                    <button class="bg-red-500 ml-16 text-white py-1 px-2 rounded-full hover:bg-red-600 focus:outline-none focus:shadow-outline-red">Reply</button>
                </a>
                </td>
            </tr>';
    }

    echo '</tbody></table>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-[#FEB600] p-4 text-white">
        <!-- Navigation code here -->
    </nav>

    <div class="mb-4">
        <div class="container mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-3xl font-bold mb-6">Complaint Data </h3>

            <?php displayComplaints(); ?>

        </div>
    </div>

</body>

</html>
