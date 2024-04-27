<?php 


    function hiredinstructor($instuctorId,$clientEmail)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        
        $sql1 =  "INSERT INTO hiredinstructor (instructorid,clientemail)
                  VALUES ('{$instuctorId}','{$clientEmail}' )";
       
    
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
            //  echo "Error: " . mysqli_error($result);
        }
    
    }




    function deleteInstructor($instructorId)
    {
        $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());
    
        // Use prepared statements to prevent SQL injection
        $sql = "DELETE FROM hiredinstructor WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $instructorId);
        $stmt->execute();
        $stmt->close();
    
        $conn->close();
    }




















?>
