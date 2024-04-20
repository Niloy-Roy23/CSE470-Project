
<?php
require_once ('../model/adminReplyModel.php');

if(isset($_POST['submit'])){
    // include ("../model/adminmodel/r") 
   
   
     $email =$_POST['email'];
     $subject=$_POST['subject'];
     $reply =$_POST['reply'];

   
     
   
     if($email==" " || $subject==" " || $reply== " "  )
     {
        header("location:../view/replyBox.php");
     }else{

        $status=reply($email,$subject,$reply);
        if($status)
        {
            
           header("Location: ../view/replyBox.php");
           
           echo '<script> alert(Information submited succesfully) </script';
           
       }
 else{
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
}


     }
   
 
 
     
   }
   




?>