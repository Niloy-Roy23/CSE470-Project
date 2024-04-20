

<?php


//instructor registor
function chartdata($email,$mealday,$saturday,$sunday,$monday,$tuesday,$wednesday,$thursday,$friday)
    {  
        $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
        // $conn = new mysqli("localhost", "root", "", "fitness");
        $sql1 = "INSERT INTO dietchart (email,mealday, saturday, sunday,monday,tuesday, wednesday,thursday,friday)
          VALUES ('{$email}', '{$mealday}', '{$saturday}', '{$sunday}', '{$monday}', '{$tuesday}', '{$wednesday}','{$thursday}','{$friday}')";

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



  

//show client diet chart data 
function getAllChartData() {
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());
    
    $sql = "SELECT * FROM dietchart";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}




// chartDataModel.php

function getChartDataBySession($email) {
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM dietchart WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}


function getChartDataById($id)
{
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed : " . mysqli_connect_error());

    $sql = "SELECT * FROM dietchart WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    return $result->fetch_assoc();
}

function updateChartData($id, $email, $mealday, $saturday, $sunday, $monday, $tuesday, $wednesday, $thursday, $friday)
{
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed : " . mysqli_connect_error());

    $sql = "UPDATE dietchart SET
            email = '$email',
            mealday = '$mealday',
            saturday = '$saturday',
            sunday = '$sunday',
            monday = '$monday',
            tuesday = '$tuesday',
            wednesday = '$wednesday',
            thursday = '$thursday',
            friday = '$friday'
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function deleteChartData($id)
{
    $conn = mysqli_connect("localhost", "root", "", "fitness") or die("Connection failed : " . mysqli_connect_error());

    $sql = "DELETE FROM dietchart WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}








?>









