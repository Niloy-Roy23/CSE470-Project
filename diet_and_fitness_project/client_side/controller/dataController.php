<?php

require_once ('../model/dataModel.php');

if(isset($_POST['submit'])){
    
   
     $gender =$_POST['gender'];
     $age=$_POST['age'];
     $height =$_POST['height'];
     $weight =$_POST['weight'];
     $checkbox=$_POST['checkbox'];
     $history =$_POST['history'];

   
     
   
     if($gender==" " || $age==" " || $height== " " || $weight==" " || $checkbox==" " ||$history==" " )
     {
        header("location:../view/table.php");
     }else{
        $status = data($gender,$age,$height,$weight ,$checkbox,$history);
        if($status)
        {
            
           header("Location: ../view/table.php");
           
           echo '<script> alert(Information submited succesfully) </script';
           
       }
 else{
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
}


     }
   
 
       
     
   }
   



?>