<?php


//instructor registor
function registration($name,$email,$phone,$expericence,$expertise,$monthlyfee,$description)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        // $conn = new mysqli("localhost", "root", "", "fitness");
        $sql1 = "INSERT INTO instructor (name, email, phone, expericence, expertise, monthlyfee, description)
          VALUES ('{$name}', '{$email}', '{$phone}', '{$expericence}', '{$expertise}', '{$monthlyfee}', '{$description}')";

        //   echo "<pre>";
        //   print_r($sql1);
        //   exit;
    
        $result = mysqli_query($conn,$sql1);
        //  $user= mysqli_fetch_assoc($result);
        // echo $user;
        // // echo $result;

      



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

//show data instructor card for hire 




function getAllUsers()
{

    $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());

    $sql="SELECT id,name,email,phone,expericence,expertise,monthlyfee,description FROM instructor";
    $result=$conn->query($sql);

    $conn->close();

    return $result;
    





}




function deleteInstructor($instructorId)
{
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());

    // Use prepared statements to prevent SQL injection
    $sql = "DELETE FROM instructor WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $instructorId);
    $stmt->execute();
    $stmt->close();

    $conn->close();
}


function clientHiredInstructor()
{

    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());

    $sql="SELECT instructorid,clientemail FROM hiredinstructor ";
    $result=$conn->query($sql);

    $conn->close();

    return $result;



}





?>