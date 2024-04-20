<?php 




// $servername = "localhost"; // Replace with your server name
// $username = "root"; // Replace with your database username
// $password = ""; // Replace with your database password
// $dbname = "fitness"; // Replace with your database name

// // Create connection
// $conn = new mysqli("localhost", "root", "", "fitness");

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";

// // Perform operations on the database here

// // Close connection
// $conn->close();




    function registration($fullname,$email,$password)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        // $conn = new mysqli("localhost", "root", "", "fitness");
        $sql1 =  "INSERT INTO user (name,email,password)
                  VALUES ('{$fullname}','{$email}','{$password}')";
       
    
        $result = mysqli_query($conn,$sql1);
        // $user= mysqli_fetch_assoc($result);
        // echo $user;
        // echo $result;

      



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























?>

