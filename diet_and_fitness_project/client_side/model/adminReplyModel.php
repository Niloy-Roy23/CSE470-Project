<?php 


    function reply($email,$subject,$reply)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        // $conn = new mysqli("localhost", "root", "", "fitness");
        $sql1 =  "INSERT INTO showreply (email,subject,reply,created_date)
                  VALUES ('{$email}','{$subject}','{$reply}', CURDATE())";
       
    
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























?>
