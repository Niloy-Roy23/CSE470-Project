<?php



require_once ('../model/registerModel.php');


if(isset($_POST['submit'])){
    // include ("../model/adminmodel/r") 
   
   
     $fullname =$_POST['fullname'];
     $email=$_POST['email'];
     $password =$_POST['password'];

   
     
   
     if($fullname==" " || $password==" " || $email== " "  )
     {
        header("location:../view/register.php");
     }else{

        $status=registration($fullname,$email,$password);
        if($status)
        {
            
           header("Location: ../view/login.php");
           
           echo '<script> alert(Information submited succesfully) </script';
           
       }
 else{
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
}


     }
   
 
 
     
   }
   




?>