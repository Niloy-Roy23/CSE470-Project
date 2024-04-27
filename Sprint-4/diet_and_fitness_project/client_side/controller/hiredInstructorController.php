
<?php
require_once ('../model/hiredInstructorModel.php');

if(isset($_POST['submit'])){
    // include ("../model/adminmodel/r") 
   
   
     $instructorId =$_POST['instructorId'];
     $clientEmail=$_POST['clientEmail'];
    

   
     
   
     if($instructorId==" " || $clientEmail==" "  )
     {
        header("location:../view/hiredinstructor.php");
     }else{

        $status=hiredinstructor($instructorId,  $clientEmail);
        if($status)
        {
            
        
           
           echo '<script>alert("Order place successfully.we will contact with you in your chatbox");</script>';
           header("Location: ../view/clientProfile.php");
           
       }
 else{
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
}


     }
   
 
 
     
   }
   

   if (isset($_GET['delete_id'])) {
      $instructorId = $_GET['delete_id'];
  
     
      deleteInstructor($instructorId);
  
   
      header("Location: ../view/hiredInstructorInfo.php");
      exit();
  }



?>