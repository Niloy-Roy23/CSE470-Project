<?php 

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "fitness"; // Replace with your database name

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




    function data($gender,$age,$height,$weight ,$checkbox,$history)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        // $conn = new mysqli("localhost", "root", "", "fitness");
        $sql1 =  "INSERT INTO data(gender,age,height,weight,checkbox,history)
                  VALUES ('{$gender}','{$age}','{$height},{$weight}','{$checkbox}','{$history}')";
        //   echo "<pre>";
        //   print_r($sql1);
        //   exit;
    
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

