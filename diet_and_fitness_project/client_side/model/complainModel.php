<?php 


    function complain($email,$subject,$description)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        // $conn = new mysqli("localhost", "root", "", "fitness");
        $sql1 =  "INSERT INTO complainbox (email,subject,description)
                  VALUES ('{$email}','{$subject}','{$description}'   )";
       
    
        $result = mysqli_query($conn,$sql1);
        // $user= mysqli_fetch_assoc($result);
        // echo $user;
        echo $result;

      



        if($result)
        {
            return true;
        }
        else
        {
             return false;
            // echo "Error: " . mysqli_error($conn);
        }
    
    }


//show complain in admin table
    function getComplaints()
{
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT email, subject, description FROM complainbox";
    $result = mysqli_query($conn, $sql);

    $complaints = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $complaints[] = $row;
    }

    $conn->close();

    return $complaints;
}













// function displayComplaints()
// {
//     $complaints = getComplaints();

//     echo '<table class="min-w-full border border-gray-300">
//             <thead>
//                 <tr class="bg-[#FEB600]">
//                     <th class="py-3 px-4 border-b">Email</th>
//                     <th class="py-3 px-4 border-b">Subject</th>
//                     <th class="py-3 px-4 border-b">Description</th>
//                     <th class="py-3 px-4 border-b">Action</th>
//                 </tr>
//             </thead>
//             <tbody>';

//     foreach ($complaints as $complaint) {
//         echo '<tr>
//                 <td class="border p-2">' . htmlspecialchars($complaint['email']) . '</td>
//                 <td class="border p-2">' . htmlspecialchars($complaint['subject']) . '</td>
//                 <td class="border p-2">' . htmlspecialchars($complaint['description']) . '</td>
//                 <td>
//                     <button class="bg-blue-500 text-white py-1 px-2 rounded-full mr-2 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">View</button>
//                     <a href="replybox.php">
//                         <button class="bg-red-500 text-white py-1 px-2 rounded-full hover:bg-red-600 focus:outline-none focus:shadow-outline-red">Reply</button>
//                     </a>
//                 </td>
//             </tr>';
//     }

//     echo '</tbody></table>';
// }









?>
