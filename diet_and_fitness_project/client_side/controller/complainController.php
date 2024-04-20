
<?php
require_once ('../model/complainModel.php');

if(isset($_POST['submit'])){
    // include ("../model/adminmodel/r") 
   
   
     $email =$_POST['email'];
     $subject=$_POST['subject'];
     $description =$_POST['description'];

   
     
   
     if($email==" " || $subject==" " || $description== " "  )
     {
        header("location:../view/complain.php");
     }else{

        $status=complain($email,$subject,$description);
        if($status)
        {
            
           header("Location: ../view/clientProfile.php");
           
           echo '<script> alert(Information submited succesfully) </script';
           
       }
 else{
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
}


     }
   
 
 
     
   }
   




?>