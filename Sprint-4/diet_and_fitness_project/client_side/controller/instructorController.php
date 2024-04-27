<?php



require_once ('../model/instructorModel.php');


if(isset($_POST['submit'])){
    
    $name =$_POST['name'];
    $email=$_POST['email'];
    $phone =$_POST['phone'];
    $expericence=$_POST['experience'];
    $expertise=$_POST['expertise'];
    $monthlyfee=$_POST['monthlyfee'];
    $description=$_POST['description'];
     
   
     if($name==" " || $phone==" " || $email== " "  )
     {
        header("location:../view/hireinstuctor.php");
     }else{

        $status=registration($name,$email,$phone,$expericence,$expertise,$monthlyfee,$description);
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


   //show data in card for hiring (harun part)

   function getUsers() {
    return getAllUsers();
}

   




if (isset($_GET['delete_id'])) {
    $instructorId = $_GET['delete_id'];

   
    deleteInstructor($instructorId);

 
    header("Location: ../view/showInstructor.php");
    exit();
}



?>