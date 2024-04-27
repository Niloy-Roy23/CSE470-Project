<?php



require_once ('../model/chartDataModel.php');


if(isset($_POST['submit'])){
    
    $email =$_POST['email'];
    $mealday=$_POST['mealday'];
    $saturday =$_POST['saturday'];
    $sunday=$_POST['sunday'];
    $monday=$_POST['monday'];
    $tuesday=$_POST['tuesday'];
    $wednesday=$_POST['wednesday'];
    $thursday=$_POST['thursday'];
    $friday=$_POST['friday'];
     
   
     if($name==" " || $phone==" " || $email== " "  )
     {
        header("location:../view/hireinstuctor.php");
     }else{

        $status=chartdata($email,$mealday,$saturday,$sunday,$monday,$tuesday,$wednesday,$thursday,$friday);
        if($status)
        {
            
           header("Location: ../view/chartDataAssign.php");
           
           echo '<script> alert(Information submited succesfully) </script';
           
       }
 else{
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
}


     }
   
 
 
     
   }


   //show data in card for hiring (harun part)


 
require_once('../model/chartDataModel.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $mealday = $_POST['mealday'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
    $monday = $_POST['monday'];
    $tuesday = $_POST['tuesday'];
    $wednesday = $_POST['wednesday'];
    $thursday = $_POST['thursday'];
    $friday = $_POST['friday'];

    $status = updateChartData($id, $email, $mealday, $saturday, $sunday, $monday, $tuesday, $wednesday, $thursday, $friday);

    if ($status) {
        echo "Chart data updated successfully.";
    } else {
        echo "Error updating chart data.";
    }
}
?>



  
   

   

   





?>